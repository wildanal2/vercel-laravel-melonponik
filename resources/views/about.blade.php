<!DOCTYPE html>
<html lang="id">
@include('partials.head')
<body class="bg-gray-50">
    @include('partials.header')

    <section class="py-16 px-8">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl font-bold text-gray-800 mb-8 text-center">Tentang Melonponik</h1>
            
            <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
                <img src="{{ asset('assets/melon/melonponik-logo.png') }}" alt="Melonponik" class="w-48 mx-auto mb-6">
                
                <p class="text-gray-700 mb-4 leading-relaxed">
                    Melonponik adalah perusahaan pertanian modern yang berfokus pada budidaya melon berkualitas premium menggunakan teknologi hidroponik. Kami berkomitmen untuk menghasilkan buah melon segar, manis, dan bergizi tinggi untuk memenuhi kebutuhan pasar Indonesia.
                </p>
                
                <p class="text-gray-700 mb-4 leading-relaxed">
                    Dengan sistem IoT (Internet of Things) yang terintegrasi, kami memantau dan mengontrol kondisi pertumbuhan melon secara real-time untuk memastikan kualitas terbaik di setiap panen.
                </p>

                <div class="grid md:grid-cols-3 gap-6 mt-8">
                    <div class="text-center p-6 bg-green-50 rounded-xl">
                        <h3 class="text-2xl font-bold text-[#62af2f] mb-2">Kualitas Premium</h3>
                        <p class="text-gray-600">Melon dengan tingkat kemanisan 15-17% brix</p>
                    </div>
                    <div class="text-center p-6 bg-green-50 rounded-xl">
                        <h3 class="text-2xl font-bold text-[#62af2f] mb-2">Teknologi Modern</h3>
                        <p class="text-gray-600">Sistem hidroponik dengan monitoring IoT</p>
                    </div>
                    <div class="text-center p-6 bg-green-50 rounded-xl">
                        <h3 class="text-2xl font-bold text-[#62af2f] mb-2">Ramah Lingkungan</h3>
                        <p class="text-gray-600">Hemat air dan tanpa pestisida berbahaya</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')
</body>
</html>
