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
            <h1 class="text-9xl font-bold text-red-500 mb-4">500</h1>
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Terjadi Kesalahan Server</h2>
            <p class="text-gray-600 mb-8">Maaf, terjadi kesalahan pada server kami. Tim kami sedang memperbaikinya.</p>
            <a href="{{ route('landing') }}" class="inline-block bg-[#62af2f] text-white px-8 py-3 rounded-lg hover:bg-[#52991f] transition font-semibold">
                <i class="fas fa-home mr-2"></i>Kembali ke Beranda
            </a>
        </div>
    </section>

    @include('partials.footer')
</body>
</html>
