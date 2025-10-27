<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function index()
    {
        try {
            // 🔹 1. Ambil data dari cache, atau fetch dari API jika cache kosong
            $data = Cache::remember('dashboard_api_data', 15, function () {
                $response = Http::get('https://script.google.com/macros/s/AKfycbwmbKjhQdbJj6uSnm3VuukOctUJoDJ8fk4cQe_USOtlxjnpESq4PnOrUZOE2-XUT_P6-w/exec');

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
        return view('pages.dashboard', [
            'dashboardData' => $dashboardData,
            'temperatureChartData' => $temperatureChartData,
            'tdsChartData' => $tdsChartData,
            'plantingData' => $plantingData
        ]);
    }

    public function indexold()
    {
        // Data for dashboard cards
        $dashboardData = [
            'kelembapan_greenhouse' => 78,
            'suhu_greenhouse' => 31,
            'ph_pupuk' => 6.0,
            'tds_pupuk' => 1520,
            'panel_surya' => 4.22,
            'persentase_baterai' => 77
        ];

        // Data for temperature sensor chart
        $temperatureChartData = [
            'labels' => ["Okt 16", "Okt 17", "Okt 18", "Okt 19", "Okt 20", "Okt 21", "Okt 22", "Okt 23", "Okt 24", "Okt 25", "Okt 26", "Okt 27", "Okt 28"],
            'data' => [34, 36, 37, 32, 30, 35, 36, 33, 36, 37, 32, 31, 33],
        ];

        // Data for TDS sensor chart
        $tdsChartData = [
            'labels' => ["OKT 23", "OKT 24", "OKT 25", "OKT 26", "OKT 27", "OKT 28"],
            'data' => [720, 720, 720, 720, 720, 720],
        ];

        // Data for melon planting period table
        $plantingData = [
            ['jenis_melon' => 'Melon Sweetnet', 'greenhouse' => 'Greenhouse 1', 'usia_hst' => '61 HST', 'start_date' => '2025/08/27', 'end_date' => '2025/10/27', 'berat_panen' => '222 Kg'],
            ['jenis_melon' => 'Melon Hamigua', 'greenhouse' => 'Greenhouse 1', 'usia_hst' => '66 HST', 'start_date' => '2025/08/22', 'end_date' => '2025/10/27', 'berat_panen' => '213 Kg'],
            ['jenis_melon' => 'Melon Sweetnet', 'greenhouse' => 'Greenhouse 2', 'usia_hst' => '56 HST', 'start_date' => '2025/09/01', 'end_date' => '2025/10/27', 'berat_panen' => '191 Kg'],
            ['jenis_melon' => 'Melon Sweetnet', 'greenhouse' => 'Greenhouse 2', 'usia_hst' => '64 HST', 'start_date' => '2025/08/17', 'end_date' => '2025/10/27', 'berat_panen' => '231 Kg'],
            ['jenis_melon' => 'Melon Sweetnet', 'greenhouse' => 'Greenhouse 3', 'usia_hst' => '31 HST', 'start_date' => '2025/09/26', 'end_date' => '2025/11/25', 'berat_panen' => '180 Kg (estimasi)'],
            ['jenis_melon' => 'Melon Hamigua', 'greenhouse' => 'Greenhouse 3', 'usia_hst' => '42 HST', 'start_date' => '2025/09/15', 'end_date' => '2025/11/16', 'berat_panen' => '205 Kg (estimasi)'],
            ['jenis_melon' => 'Melon Sweetnet', 'greenhouse' => 'Greenhouse 4', 'usia_hst' => '28 HST', 'start_date' => '2025/09/29', 'end_date' => '2025/11/26', 'berat_panen' => '195 Kg (estimasi)'],
            ['jenis_melon' => 'Melon Sweetnet', 'greenhouse' => 'Greenhouse 4', 'usia_hst' => '68 HST', 'start_date' => '2025/08/20', 'end_date' => '2025/10/27', 'berat_panen' => '226 Kg'],
            ['jenis_melon' => 'Melon Sweetnet', 'greenhouse' => 'Greenhouse 5', 'usia_hst' => '33 HST', 'start_date' => '2025/09/24', 'end_date' => '2025/11/15', 'berat_panen' => '185 Kg (estimasi)'],
            ['jenis_melon' => 'Melon Sweetnet', 'greenhouse' => 'Greenhouse 5', 'usia_hst' => '65 HST', 'start_date' => '2025/08/23', 'end_date' => '2025/10/27', 'berat_panen' => '216 Kg'],
            ['jenis_melon' => 'Melon Sweetnet', 'greenhouse' => 'Greenhouse 6', 'usia_hst' => '56 HST', 'start_date' => '2025/09/01', 'end_date' => '2025/10/27', 'berat_panen' => '199 Kg'],
            ['jenis_melon' => 'Melon Hamigua', 'greenhouse' => 'Greenhouse 6', 'usia_hst' => '62 HST', 'start_date' => '2025/08/26', 'end_date' => '2025/10/27', 'berat_panen' => '209 Kg'],
            ['jenis_melon' => 'Melon Hamigua', 'greenhouse' => 'Greenhouse 7', 'usia_hst' => '37 HST', 'start_date' => '2025/09/20', 'end_date' => '2025/11/16', 'berat_panen' => '202 Kg (estimasi)'],
            ['jenis_melon' => 'Melon Hamigua', 'greenhouse' => 'Greenhouse 7', 'usia_hst' => '64 HST', 'start_date' => '2025/08/24', 'end_date' => '2025/10/27', 'berat_panen' => '213 Kg'],
            ['jenis_melon' => 'Melon Hamigua', 'greenhouse' => 'Greenhouse 8', 'usia_hst' => '67 HST', 'start_date' => '2025/08/21', 'end_date' => '2025/10/27', 'berat_panen' => '223 Kg'],
            ['jenis_melon' => 'Melon Hamigua', 'greenhouse' => 'Greenhouse 8', 'usia_hst' => '34 HST', 'start_date' => '2025/09/23', 'end_date' => '2025/11/16', 'berat_panen' => '188 Kg (estimasi)'],
            ['jenis_melon' => 'Melon Hamigua', 'greenhouse' => 'Greenhouse 9', 'usia_hst' => '60 HST', 'start_date' => '2025/08/28', 'end_date' => '2025/10/27', 'berat_panen' => '201 Kg'],
            ['jenis_melon' => 'Melon Sweetnet', 'greenhouse' => 'Greenhouse 9', 'usia_hst' => '69 HST', 'start_date' => '2025/08/19', 'end_date' => '2025/10/27', 'berat_panen' => '229 Kg'],
            ['jenis_melon' => 'Melon Sweetnet', 'greenhouse' => 'Greenhouse 10', 'usia_hst' => '32 HST', 'start_date' => '2025/09/25', 'end_date' => '2025/11/15', 'berat_panen' => '182 Kg (estimasi)'],
            ['jenis_melon' => 'Melon Sweetnet', 'greenhouse' => 'Greenhouse 10', 'usia_hst' => '70 HST', 'start_date' => '2025/08/18', 'end_date' => '2025/10/27', 'berat_panen' => '233 Kg']
        ];

        return view('pages.dashboard', [
            'dashboardData' => $dashboardData,
            'temperatureChartData' => $temperatureChartData,
            'tdsChartData' => $tdsChartData,
            'plantingData' => $plantingData
        ]);
    }
}
