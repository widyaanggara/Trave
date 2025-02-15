<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/css/kategori.css')
    <title>Trave | kategori</title>
    <meta charset="utf-8">

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>
    <x-navbar />


    <section class="w-[90%] max-w-[1200px] mx-auto flex flex-col justify-center items-center">
        <div class="mt-20 w-full">
            <img src="{{ asset('images/banner-pantai.png') }}" alt="" class="object-cover w-full h-80 lg:h-full rounded-lg">
        </div>
        <div class="w-full mt-8">
            <div class="grid grid-cols-1 md:grid-cols-[75%,1fr] lg:grid-cols-[57%,1fr] gap-4">
                <div class="">
                    <div class="font-bold text-4xl">Eksplorasi Pantai</div>
                    <div class="mt-4">Pantai-pantai di Bali adalah surga tropis yang menawarkan keindahan alami, aktivitas seru, dan momen relaksasi yang tiada duanya. Dalam kategori ini, Anda akan menemukan berbagai pantai menakjubkan yang tersebar di seluruh Bali, mulai dari pasir putih lembut hingga karang terjal yang dramatis. Setiap pantai memiliki daya tarik uniknya, baik untuk berselancar, snorkeling, menikmati matahari terbenam, atau sekadar bersantai di tepi laut. Kunjungan ke pantai-pantai ini tidak hanya memberikan pengalaman menyegarkan, tetapi juga membawa Anda lebih dekat dengan keindahan alam dan kehidupan pesisir yang penuh pesona. Temukan harmoni, keindahan, dan petualangan di kategori Pantai, tempat laut menjadi bagian dari cerita Anda.</div>
                </div>
                <div class=""></div>
            </div>
        </div>
    </section>

    <section class="w-[90%] max-w-[1200px] mx-auto mt-14 mb-10">
        <div class="font-bold text-2xl mb-4">Plan your trip</div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            @foreach($destinasiPantai as $destination)
            <a href="{{ route('destinasi.showDetailPantai', $destination->id_destinasi) }}" class="">
                <div class="relative cursor-pointer group overflow-hidden">
                    <div class="overflow-hidden rounded-lg">

                        <div class="relative w-full overflow-hidden rounded group" style="padding-top: 66%;">
                            <!-- Display the background image dynamically -->
                            <img src="{{ $destination->thumbnail ? Storage::url($destination->thumbnail) : 'https://via.placeholder.com/400' }}" alt="{{ $destination->nama_destinasi }}" class="absolute top-0 left-0 w-full h-full object-cover transition-transform duration-300 transform group-hover:scale-105">
                        </div>

                    </div>
                    <div class="">
                        <!-- Display the destination name dynamically -->
                        <div class="pt-1 pb-1 text-black text-lg font-bold transition-transform duration-300 group-hover:text-gray-700 group-hover:underline">
                            {{ $destination->nama_destinasi }}
                        </div>
                        <div class="flex gap-[2px] justify-start items-center">
                            <!-- Display 5 rating dots -->
                            <div class="w-[0.8rem] h-[0.8rem] bg-[#22c55e] rounded-full"></div>
                            <div class="w-[0.8rem] h-[0.8rem] bg-[#22c55e] rounded-full"></div>
                            <div class="w-[0.8rem] h-[0.8rem] bg-[#22c55e] rounded-full"></div>
                            <div class="w-[0.8rem] h-[0.8rem] bg-[#22c55e] rounded-full"></div>
                            <div class="w-[0.8rem] h-[0.8rem] bg-[#22c55e] rounded-full"></div>
                            <div class="ml-2 text-sm text-gray-600">4002</div> <!-- Visitor count or rating -->
                        </div>
                        <!-- Display the location dynamically -->
                        <div class="text-sm text-gray-600 mt-0">Location: {{ $destination->alamat }}</div>
                    </div>
                </div>
            </a>
            @endforeach

        </div>
    </section>

    <x-footer />

    @vite('resources/js/kategori.js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>
