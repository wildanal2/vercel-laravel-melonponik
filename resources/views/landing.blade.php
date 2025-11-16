<!DOCTYPE html>
<html lang="id">
<head>
    @include('partials.head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
</head>
<body class="font-sans">
    <!-- Hero Section -->
    <section class="pb-16 px-8 relative overflow-hidden">
        <svg class="absolute -top-20 -right-82 md:-right-32 w-[800px] h-[80vh] -z-10" viewBox="0 0 600 500">
            <path fill="#00bd2e" fill-opacity="0.8" d="M100,0 C150,150 250,100 300,200 S400,400 500,450 T600,500 L600,0 Z"></path>
        </svg>
        @include('partials.header')
        <div class="max-w-6xl mx-auto text-center relative z-10">
            <div class="flex justify-center mb-8">
                <img src="{{ asset('assets/melon/melon-headline.png') }}" alt="Melon Premium Melonponik dengan tingkat kemanisan 15% Brix" class="max-w-full h-auto">
            </div>
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                Melon Premium yang Tersedia Setiap Hari dengan<br>
                <span class="text-2xl md:text-3xl font-normal text-gray-800">
                    tingkat Kemanisan 15% Brix Up
                </span>
            </h1>
            <p class="text-xl text-gray-800 opacity-80 mb-8">
                Melon segar pilihan terbaik dengan citarasa manis yang menyehatkan</p>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="bg-[#338926] py-16 px-8 text-white">
        <div class="max-w-6xl mx-auto">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-3xl font-bold mx-auto">Tentang Kami</h2>
            </div>
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div class="flex justify-center">
                    <img src="{{ asset('assets/melon/testimoni3.png') }}" alt="Tim Melonponik" class="rounded-lg w-64 h-64 object-contain" loading="lazy">
                </div>
                <div>
                    <p class="text-lg leading-relaxed text-center mb-6">
                        Melonponik merupakan perusahaan, produsen dan distributor melon premium yang berada di indonesia.
                        Kami menyediakan melon premium yang berkualitas tinggi, dan tingkat kemanisan buah miliki standart
                        minimal 14 brix dan bentuk buah yang kami grading ketat sesuai penampilan varietas yang sempurna.
                        Hasil melon kami dari pertanian yang ditanam dalam Greenhouse dengan menggunakan sistem hidroponik
                        sehingga hasil buah minim residu dan bisa tersedia setiap musim.
                    </p>
                    <div class="flex gap-4 items-center justify-center">
                        <a href="tel:+6281233337445" class="bg-[#8ec641] text-white px-6 py-3 rounded-full flex items-center gap-2 hover:bg-[#7ab535] transition">
                            <i class="fas fa-phone"></i>
                            <span>+62 812 3333 7445</span>
                        </a>
                        <a href="https://wa.me/6281233337445" class="bg-[#8ec641] text-white px-6 py-3 rounded-full flex items-center gap-2 hover:bg-[#7ab535] transition">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Section -->
    <section class="bg-white py-16 px-8">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-2">
                    Fresh <br>
                    Melon Premium
                </h2>
                <p class="text-xl text-gray-600">dengan rasa manis yang menyehatkan</p>
            </div>
            <div class="swiper productSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <article class="bg-white rounded-2xl border shadow-xl p-6 mx-auto max-w-md">
                            <div class="flex justify-between items-center mb-4">
                                <span class="bg-[#8ec641] text-white px-4 py-1 rounded-full text-sm font-semibold">
                                    GOOD DEAL
                                </span>
                            </div>
                            <div class="mb-4">
                                <img src="{{ asset('assets/melon/bay-hamigua.png') }}" alt="Melon Hamigua Premium" class="w-full rounded-lg h-64 object-contain">
                            </div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">Melon Hamigua</h3>
                            <p class="text-gray-600 mb-4 text-sm">
                                Tekstur crunchy juicy, warna orange, tingkat kemanisan 15-17% brix, berat 1-2 kg per buah
                            </p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-[#62af2f]">Rp. 25.000<span class="text-lg">/Kg</span></span>
                                <a href="https://wa.me/6281233337445?text=Halo,%20saya%20tertarik%20dengan%20Melon%20Hamigua" class="bg-[#62af2f] text-white w-12 h-12 rounded-full flex items-center justify-center hover:bg-[#52991f] transition" aria-label="Pesan via WhatsApp">
                                    <i class="fas fa-shopping-cart" aria-hidden="true"></i>
                                </a>
                            </div>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <article class="bg-white rounded-2xl shadow-xl p-6 mx-auto max-w-md">
                            <div class="flex justify-between items-center mb-4">
                                <span class="bg-[#8ec641] text-white px-4 py-1 rounded-full text-sm font-semibold">PROMO</span>
                            </div>
                            <div class="mb-4">
                                <img src="{{ asset('assets/melon/bay-honeyglobe.png') }}" alt="Melon Honeyglobe Premium" class="w-full rounded-lg h-64 object-contain">
                            </div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">Melon Honeyglobe</h3>
                            <p class="text-gray-600 mb-4 text-sm">
                                Tekstur crunchy juicy, warna orange, tingkat kemanisan 15-17% brix, berat 1-2 kg per buah
                            </p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-[#62af2f]">Rp. 25.000<span class="text-lg">/Kg</span></span>
                                <a href="https://wa.me/6281233337445?text=Halo,%20saya%20tertarik%20dengan%20Melon%20Honeyglobe" class="bg-[#62af2f] text-white w-12 h-12 rounded-full flex items-center justify-center hover:bg-[#52991f] transition" aria-label="Pesan via WhatsApp">
                                    <i class="fas fa-shopping-cart" aria-hidden="true"></i>
                                </a>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="swiper-pagination mt-8"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="bg-gray-50 py-16 px-8">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Kata Pelanggan Kami</h2>
            <div class="swiper testimonialSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="grid md:grid-cols-2 gap-8 items-center">
                            <div>
                                <blockquote class="bg-[#00bd2e] p-8 rounded-2xl shadow-lg text-white">
                                    <p class="text-lg mb-4 text-center">
                                        "Melon dari melonponik buah yang mewah dan lezat.
                                        Rasanya manis dan segar, membuat saya ingin menikmatinya bersama
                                        kerabat dan keluarga."
                                    </p>
                                    <footer class="flex flex-col justify-center">
                                        <p class="text-center">Kepala Dinas Pertanian Jombang</p>
                                        <cite class="font-bold not-italic mx-auto text-center">Bapak Roni</cite>
                                    </footer>
                                </blockquote>
                            </div>
                            <div class="flex justify-center">
                                <div class="relative">
                                    <img src="{{ asset('assets/melon/testimoni1.png') }}" alt="Testimoni pelanggan Melonponik" class="rounded-full w-64 h-64 object-cover" loading="lazy">
                                    <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-48 h-1 bg-[#62af2f]" aria-hidden="true"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="grid md:grid-cols-2 gap-8 items-center">
                            <div>
                                <blockquote class="bg-[#00bd2e] p-8 rounded-2xl shadow-lg text-white">
                                    <p class="text-lg mb-4 text-center">
                                        "Melon dari melonponik buah yang mewah dan lezat.
                                        Rasanya manis dan segar, membuat saya ingin menikmatinya bersama
                                        kerabat dan keluarga."
                                    </p>
                                    <footer class="flex flex-col justify-center">
                                        <p class="text-center">Kepala Dinas Pertanian Jombang</p>
                                        <cite class="font-bold not-italic mx-auto text-center">Bapak Roni</cite>
                                    </footer>
                                </blockquote>
                            </div>
                            <div class="flex justify-center">
                                <div class="relative">
                                    <img src="{{ asset('assets/melon/testimoni1.png') }}" alt="Testimoni pelanggan Melonponik" class="rounded-full w-64 h-64 object-cover" loading="lazy">
                                    <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-48 h-1 bg-[#62af2f]" aria-hidden="true"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination mt-8"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.productSwiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 1,
                },
                1024: {
                    slidesPerView: 3,
                }
            }
        });

        const testimonialSwiper = new Swiper('.testimonialSwiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.testimonialSwiper .swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.testimonialSwiper .swiper-button-next',
                prevEl: '.testimonialSwiper .swiper-button-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 1,
                },
                1024: {
                    slidesPerView: 1,
                }
            }
        });
    </script>
</body>
</html>
