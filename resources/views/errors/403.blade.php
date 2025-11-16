<!DOCTYPE html>
<html lang="id">
@include('partials.head')
<body class="bg-gray-50">
    @include('partials.header')

    <section class="py-16 px-8 min-h-[70vh] flex items-center">
        <div class="max-w-2xl mx-auto text-center">
            <div class="mb-8">
                <img src="{{ asset('assets/melon/melonponik-logo.png') }}" alt="Melonponik" class="w-32 mx-auto opacity-50">
            </div>
            <h1 class="text-9xl font-bold text-orange-500 mb-4">403</h1>
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Akses Ditolak</h2>
            <p class="text-gray-600 mb-8">Maaf, Anda tidak memiliki izin untuk mengakses halaman ini.</p>
            <a href="{{ route('landing') }}" class="inline-block bg-[#62af2f] text-white px-8 py-3 rounded-lg hover:bg-[#52991f] transition font-semibold">
                <i class="fas fa-home mr-2"></i>Kembali ke Beranda
            </a>
        </div>
    </section>

    @include('partials.footer')
</body>
</html>
