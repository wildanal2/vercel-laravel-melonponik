<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        try {
            // 🔹 1. Ambil data dari cache, atau fetch dari API jika cache kosong
            $data = Cache::remember('dashboard_api_data', 60, function () {
                $route = "?endpoint=dashboard";
                $response = Http::get('https://script.google.com/macros/s/AKfycbxvggUwuJH6cAxIOx0aerNSIjuZRT2C2_Gk2_IdLaA279NTOw5S19UbPwJBnkGz7Xa6zw/exec'.$route);

                if ($response->failed()) {
                    throw new \Exception('Gagal mengambil data dari API');
                }

                return $response->json();
            });

            // 🔹 2. Ambil masing-masing bagian data
            $dashboardData = $data['sensorData'] ?? [];
            $temperatureChartData = $data['temperatureChartData'] ?? [];
            $tdsChartData = $data['tdsChartData'] ?? [];
            $plantingData = $data['plantingData'] ?? [];

            // 🔹 3. Format tanggal agar mudah dibaca (Indonesia)
            $plantingData = collect($plantingData)->map(function ($item) {
                $item['start_date'] = Carbon::parse($item['start_date'])
                    ->locale('id')
                    ->translatedFormat('d F Y');
                $item['end_date'] = Carbon::parse($item['end_date'])
                    ->locale('id')
                    ->translatedFormat('d F Y');
                return $item;
            })->toArray();
        } catch (\Throwable $e) {
            // 🔹 3. Fallback ke data dummy jika API gagal
            $dashboardData = [
                'kelembapan_greenhouse' => 0,
                'suhu_greenhouse' => 0,
                'ph_pupuk' => 0,
                'tds_pupuk' => 0,
                'panel_surya' => 0,
                'persentase_baterai' => 0
            ];

            $temperatureChartData = ['labels' => [], 'data' => []];
            $tdsChartData = ['labels' => [], 'data' => []];
            $plantingData = [];

            Log::error('Dashboard API error: ' . $e->getMessage());
        }
        // 🔹 4. Kirim ke view
        return view('iot.dashboard', [
            'dashboardData' => $dashboardData,
            'temperatureChartData' => $temperatureChartData,
            'tdsChartData' => $tdsChartData,
            'plantingData' => $plantingData
        ]);
    }

}
