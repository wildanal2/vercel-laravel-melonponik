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
            <h1 class="text-9xl font-bold text-[#62af2f] mb-4">404</h1>
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Halaman Tidak Ditemukan</h2>
            <p class="text-gray-600 mb-8">Maaf, halaman yang Anda cari tidak dapat ditemukan atau telah dipindahkan.</p>
            <a href="{{ route('landing') }}" class="mx-3 inline-block bg-[#62af2f] text-white px-8 py-3 rounded-lg hover:bg-[#52991f] transition font-semibold">
                <i class="fas fa-home mr-2"></i>Kembali ke Beranda
            </a>
            <a href="{{ route('contact') }}" class="mx-3 inline-block bg-[#62af2f] text-white px-8 py-3 rounded-lg hover:bg-[#52991f] transition font-semibold">
                <i class="fas fa-phone mr-2"></i>Kontak
            </a>
        </div>
    </section>

    @include('partials.footer')
</body>
</html>
