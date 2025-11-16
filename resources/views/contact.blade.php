<!DOCTYPE html>
<html lang="id">
@include('partials.head')
<body class="bg-gray-50">
    @include('partials.header')

    <section class="py-16 px-8">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl font-bold text-gray-800 mb-8 text-center">Hubungi Kami</h1>
            
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Informasi Kontak</h2>
                    
                    <div class="space-y-4">
                        <div class="flex items-start gap-4">
                            <i class="fas fa-map-marker-alt text-[#62af2f] text-xl mt-1"></i>
                            <div>
                                <h3 class="font-semibold text-gray-800">Alamat</h3>
                                <p class="text-gray-600">Jombang, Jawa Timur, Indonesia</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <i class="fab fa-whatsapp text-[#62af2f] text-xl mt-1"></i>
                            <div>
                                <h3 class="font-semibold text-gray-800">WhatsApp</h3>
                                <a href="https://wa.me/6281233337445" class="text-[#62af2f] hover:underline">+62 812-3333-7445</a>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <i class="fas fa-envelope text-[#62af2f] text-xl mt-1"></i>
                            <div>
                                <h3 class="font-semibold text-gray-800">Email</h3>
                                <a href="mailto:info@melonponik.com" class="text-[#62af2f] hover:underline">info@melonponik.com</a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <a href="https://wa.me/6281233337445?text=Halo,%20saya%20ingin%20bertanya%20tentang%20produk%20Melonponik" 
                           class="block w-full bg-[#62af2f] text-white text-center py-3 rounded-lg hover:bg-[#52991f] transition font-semibold">
                            <i class="fab fa-whatsapp mr-2"></i>Chat via WhatsApp
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Jam Operasional</h2>
                    
                    <div class="space-y-3">
                        <div class="flex justify-between py-2 border-b">
                            <span class="text-gray-700">Senin - Jumat</span>
                            <span class="font-semibold text-gray-800">08:00 - 17:00</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <span class="text-gray-700">Sabtu</span>
                            <span class="font-semibold text-gray-800">08:00 - 14:00</span>
                        </div>
                        <div class="flex justify-between py-2">
                            <span class="text-gray-700">Minggu</span>
                            <span class="font-semibold text-gray-800">Tutup</span>
                        </div>
                    </div>

                    <div class="mt-8 p-4 bg-green-50 rounded-lg">
                        <p class="text-sm text-gray-700">
                            <i class="fas fa-info-circle text-[#62af2f] mr-2"></i>
                            Untuk pemesanan dalam jumlah besar, silakan hubungi kami terlebih dahulu untuk ketersediaan stok.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')
</body>
</html>
