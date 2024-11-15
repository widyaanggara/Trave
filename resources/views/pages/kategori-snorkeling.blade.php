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
            <img src="{{ asset('images/banner-snorkeling.png') }}" alt="" class="object-cover w-full h-80 lg:h-full rounded-lg">
        </div>
        <div class="w-full mt-8">
            <div class="grid grid-cols-1 md:grid-cols-[75%,1fr] lg:grid-cols-[57%,1fr] gap-4">
                <div class="">
                    <div class="font-bold text-4xl">Pesona Pasar Seni</div>
                    <div class="mt-4">Pasar seni adalah tempat di mana kreativitas dan budaya Bali berpadu, menghadirkan pengalaman berbelanja yang autentik dan penuh warna. Dalam kategori ini, Anda akan menemukan beragam pasar seni yang menawarkan berbagai kerajinan tangan, lukisan, patung, tekstil, dan suvenir khas Bali. Setiap pasar memiliki keunikan tersendiri, mulai dari suasana tradisional yang hangat hingga koleksi barang seni yang memukau. Berbelanja di pasar seni bukan hanya sekadar membeli, tetapi juga sebuah perjalanan mengenal jiwa seni dan warisan budaya Bali. Jelajahi kategori Pasar Seni untuk menemukan karya-karya unik yang membawa keindahan dan cerita Bali ke dalam hidup Anda.</div>
                </div>
                <div class=""></div>
            </div>
        </div>
    </section>

    <section class="w-[90%] max-w-[1200px] mx-auto mt-14 mb-10">
        <div class="font-bold text-2xl mb-4">Plan your trip</div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            @foreach($destinasi as $destination)
            <a href="{{ route('destinasi.showDetail', $destination->id_destinasi) }}" class="">
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
