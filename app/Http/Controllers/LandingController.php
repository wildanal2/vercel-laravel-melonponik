<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class LandingController extends Controller
{
    public function index()
    {
        try {
            $data = Cache::remember('landing_api_data', 900, function () {
                $route =  "?endpoint=landing";
                $apilanding = "https://script.google.com/macros/s/AKfycbxvggUwuJH6cAxIOx0aerNSIjuZRT2C2_Gk2_IdLaA279NTOw5S19UbPwJBnkGz7Xa6zw/exec".$route;
                $response = Http::get($apilanding);

                if ($response->failed()) {
                    throw new \Exception('Gagal mengambil data dari API');
                }

                return $response->json();
            });
        } catch (\Throwable $e) {
            Log::error('Landing API error: ' . $e->getMessage());

            $data = [
                "about" => "Melonponik merupakan perusahaan, produsen dan distributor melon premium yang berada di indonesia. Kami menyediakan melon premium yang berkualitas tinggi, dan tingkat kemanisan buah miliki standart minimal 14 brix dan bentuk buah yang kami grading ketat sesuai penampilan varietas yang sempurna. Hasil melon kami dari pertanian yang ditanam dalam Greenhouse dengan menggunakan sistem hidroponik sehingga hasil buah minim residu dan bisa tersedia setiap musim.",
                "katalog" => [
                    [
                        "product_type" => "GOOD DEAL",
                        "nama" => "Melon Hamigua",
                        "deskripsi" => "Tekstur crunchy juicy, warna orange, tingkat kemanisan 15-17% brix, berat 1-2 kg per buah",
                        "harga" => "27.000",
                        "wa-url" => "https://wa.me/6285826071884?text=Halo,%20saya%20tertarik%20dengan%20Melon%20Hamigua",
                        "img-url" => "https://melonponik.vercel.app/assets/melon/bay-hamigua.png"
                    ],
                    [
                        "product_type" => "",
                        "nama" => "Melon Honeyglobe",
                        "deskripsi" => "Tekstur crunchy juicy, warna orange, tingkat kemanisan 15-17% brix, berat 1-2 kg per buah",
                        "harga" => "25.000",
                        "wa-url" => "https://wa.me/6285826071884?text=Halo,%20saya%20tertarik%20dengan%20Melon%20Honeyglobe",
                        "img-url" => "https://melonponik.vercel.app/assets/melon/bay-honeyglobe.png"
                    ],
                    [
                        "product_type" => "",
                        "nama" => "Melon Inthanon",
                        "deskripsi" => "Tekstur crunchy juicy, warna orange, tingkat kemanisan 15-17% brix, berat 1-2 kg per buah",
                        "harga" => "26.000",
                        "wa-url" => "https://wa.me/6285826071884?text=Halo,%20saya%20tertarik%20dengan%20Melon%20Inthanon",
                        "img-url" => "https://melonponik.vercel.app/assets/melon/bay-inthanon.png"
                    ],
                    [
                        "product_type" => "",
                        "nama" => "Melon Kirani",
                        "deskripsi" => "Tekstur crunchy juicy, warna orange, tingkat kemanisan 15-17% brix, berat 1-2 kg per buah",
                        "harga" => "25.500",
                        "wa-url" => "https://wa.me/6285826071884?text=Halo,%20saya%20tertarik%20dengan%20Melon%20Kirani",
                        "img-url" => "https://melonponik.vercel.app/assets/melon/bay-kirani.png"
                    ],
                    [
                        "product_type" => "",
                        "nama" => "Melon Sweetnet",
                        "deskripsi" => "Tekstur crunchy juicy, warna orange, tingkat kemanisan 15-17% brix, berat 1-2 kg per buah",
                        "harga" => "25.700",
                        "wa-url" => "https://wa.me/6285826071884?text=Halo,%20saya%20tertarik%20dengan%20Melon%20Sweetnet",
                        "img-url" => "https://melonponik.vercel.app/assets/melon/bay-sweetnet.png"
                    ]
                ],
                "testimoni" => [
                    [
                        "nama" => "Bapak Roni",
                        "title" => "Kepala Dinas Pertanian Jombang",
                        "deskripsi" => "\"Melon dari melonponik buah yang mewah dan lezat. Rasanya manis dan segar, membuat saya ingin menikmatinya bersama kerabat dan keluarga.\"",
                        "img-url" => "https://melonponik.vercel.app/assets/melon/testimoni1.png"
                    ],
                    [
                        "nama" => "Bu Rani",
                        "title" => "Pelanggan Setia",
                        "deskripsi" => "\"Melon dari buah pilihan, Segar dan Renyah\"",
                        "img-url" => "https://melonponik.vercel.app/assets/melon/testimoni2.png"
                    ]
                ]
            ];
        }

        return view('landing', $data);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
