<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/css/home.css')
    <title>Trave</title>
    <meta charset="utf-8">

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>
    <x-navbar />

    {{-- Search Section --}}
    <section class="w-[90%] max-w-[1200px] mx-auto flex flex-col justify-center items-center">
        <div class="mt-20 hidden md:block">
            <h1 id="title-text" class="text-4xl md:text-5xl font-bold mt-12 text-center">Ingin ke mana?</h1>
        </div>
        <div class="option-btn mt-20 md:mt-8 mb-5 overflow-x-auto max-w-[54rem] w-full flex gap-2 justify-start lg:justify-center">
            <button class="option flex-shrink-0 flex justify-center items-center py-1 mx-2 text-black border-b-2 border-transparent font-semibold text-lg hover:border-black transition-colors duration-200 active">
                <img src="{{ asset('images/allsearch.png') }}" class="w-8" alt="">
                <p class="ml-[5px]">Search All</p>
            </button>
            <button class="option flex-shrink-0 flex justify-center items-center py-1 mx-2 text-black border-b-2 border-transparent font-semibold text-lg hover:border-black transition-colors duration-200">
                <img src="{{ asset('images/pantai.png') }}" class="w-8" alt="">
                <p class="ml-[5px]">Pantai</p>
            </button>
            <button class="option flex-shrink-0 flex justify-center items-center py-1 mx-2 text-black border-b-2 border-transparent font-semibold text-lg hover:border-black transition-colors duration-200">
                <img src="{{ asset('images/pura.png') }}" class="w-9" alt="">
                <p class="ml-[5px]">Pura</p>
            </button>
            <button class="option flex-shrink-0 flex justify-center items-center py-1 mx-2 text-black border-b-2 border-transparent font-semibold text-lg hover:border-black transition-colors duration-200">
                <img src="{{ asset('images/pasar.png') }}" class="w-8" alt="">
                <p class="ml-[5px]">Pasar Seni</p>
            </button>
            <button class="option flex-shrink-0 flex justify-center items-center py-1 mx-2 text-black border-b-2 border-transparent font-semibold text-lg hover:border-black transition-colors duration-200">
                <img src="{{ asset('images/gunung.png') }}" class="w-8" alt="">
                <p class="ml-[5px]">Wisata Alam</p>
            </button>
            <button class="option flex-shrink-0 flex justify-center items-center py-1 mx-2 text-black border-b-2 border-transparent font-semibold text-lg hover:border-black transition-colors duration-200">
                <img src="{{ asset('images/bahari.png') }}" class="w-8" alt="">
                <p class="ml-[5px]">Wisata Bahari</p>
            </button>

        </div>

        <div class="flex flex-col md:flex-row justify-center items-center max-w-[50rem] w-full shadow-md bg-white py-1 pb-5 md:pb-0 px-4 pl-6 rounded-xl md:rounded-full">
            <div class="flex items-center w-full mb-2 md:mb-1">
                <span class="material-symbols-outlined left-3 cursor-pointer">search</span>
                <input type="text" class="w-full p-4 bg-transparent rounded-full focus:outline-none " placeholder="Temukan objek wisata anda...">
            </div>
            <button button class="bg-green-500 hover:bg-green-400 text-black font-semibold md:w-28 py-3 md:mb-1 rounded-full w-full">
                Search
            </button>
        </div>
    </section>

    {{-- Banner section --}}
    <section class="w-[100%] sm:w-[90%] max-w-[1200px] mx-auto mt-20">
        <div class="banner relative md:p-20 p-[15px] pt-12 rounded-none sm:rounded-lg">
            <div class="banner-tagline lg:mr-[360px] lg:max-w-[650px]">
                <div class="lg:mx-auto lg:my-auto md:max-w-[550px]">
                    <div class="banner-tag text-white text-sm mb-2 md:md-0">Customer  <span class="bg-white text-black py-1 px-2 rounded-sm font-semibold">Choice</span></div>
                    <div class="banner-tag text-4xl lg:text-5xl lg:leading-[60px] font-bold text-white ">Trave Teman Perjalananmu</div>
                    <div class="banner-tag md:max-w-[520px] text-white mt-2 text-lg">Temukan destinasi impianmu dengan mudah dan nikmati pengalaman tak terlupakan bersama Trave.</div>
                    <div class="flex banner-tag">
                        <a href="#find" class="inline-block mt-6 text-white font-medium bg-violet-400 cursor-pointer px-5 py-4 rounded-full hover:bg-violet-300 transition-colors duration-200 text-center">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-1" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ffffff">
                                    <path d="M480-107q-14 0-28-5t-25-15q-65-60-115-117t-83.5-110.5q-33.5-53.5-51-103T160-552q0-103 52-185t147-120q26-11 57.5-17t62.5-7q17 0 28.5 11t11.5 28q0 17-11.5 29.5T479-800q-24 0-47 4.5T386-782q-70 29-108 92t-38 138q0 71 59 162.5T480-186q61-56 106-106.5t75-96.5q20-31 35-63.5t21-67.5q4-23 17.5-32t28.5-7q15 2 25.5 12t8.5 27q-8 62-35.5 116.5T697-299q-43 57-88.5 101.5T533-127q-11 10-25 15t-28 5Zm0-373q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0-80Zm240-200v80q0 17 11.5 28.5T760-640q17 0 28.5-11.5T800-680v-80h80q17 0 28.5-11.5T920-800q0-17-11.5-28.5T880-840h-80v-80q0-17-11.5-28.5T760-960q-17 0-28.5 11.5T720-920v80h-80q-17 0-28.5 11.5T600-800q0 17 11.5 28.5T640-760h80Z"/>
                                </svg>
                                Find Destination
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="find"></section>

    {{-- Katagori Section --}}
    <section class="w-[90%] max-w-[1200px] mx-auto mt-24 mb-10" >
        <div class="font-bold text-2xl lg:text-3xl">Explore Beautiful Bali</div>
        <div class="mt-1 mb-4 text-base lg:text-lg">Temukan Destinasi Impian Bersama Teman Perjalanan Anda</div>
        <!-- Slider -->
        <div class="carousel relative">
            <div class="swiper explore-slider overflow-hidden">
                <div class="swiper-wrapper">
                    <a href="{{ route('kategori.pantai') }}" class="swiper-slide rounded relative shadow-lg cursor-pointer group overflow-hidden">
                        <img src="{{ asset('images/pantai.jpg') }}" alt="Background Image" class="w-full h-full object-cover rounded transition-transform duration-300 transform group-hover:scale-105">
                        <div class="absolute w-full bottom-0">
                            <div class="bg-gradient-to-t from-[#000000c0] to-transparent px-5 pt-20 pb-5 text-white text-2xl font-bold rounded">
                                Pantai
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('kategori.pura') }}" class="swiper-slide rounded relative shadow-lg cursor-pointer group overflow-hidden">
                        <img src="{{ asset('images/pura-lempuyang.jpg') }}" alt="Background Image" class="w-full h-full object-cover rounded transition-transform duration-300 transform group-hover:scale-105">
                        <div class="absolute w-full bottom-0">
                            <div class="bg-gradient-to-t from-[#000000c0] to-transparent px-5 pt-20 pb-5 text-white text-2xl font-bold rounded">
                                Pura
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('kategori.artmarket') }}" class="swiper-slide rounded relative shadow-lg cursor-pointer group overflow-hidden">
                        <img src="{{ asset('images/ubud-art-market.jpg') }}" alt="Background Image" class="w-full h-full object-cover rounded transition-transform duration-300 transform group-hover:scale-105">
                        <div class="absolute w-full bottom-0">
                            <div class="bg-gradient-to-t from-[#000000c0] to-transparent px-5 pt-20 pb-5 text-white text-2xl font-bold rounded">
                                Art Market
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('kategori.alam') }}" class="swiper-slide rounded relative shadow-lg cursor-pointer group overflow-hidden">
                        <img src="{{ asset('images/Kanto-Lampo-waterfall.jpg') }}" alt="Background Image" class="w-full h-full object-cover rounded transition-transform duration-300 transform group-hover:scale-105">
                        <div class="absolute w-full bottom-0">
                            <div class="bg-gradient-to-t from-[#000000c0] to-transparent px-5 pt-20 pb-5 text-white text-2xl font-bold rounded">
                                Petualangan Alam
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('kategori.snorkeling') }}" class="swiper-slide rounded relative shadow-lg cursor-pointer group overflow-hidden">
                        <img src="{{ asset('images/snorkel_tulamben_bali_diving.jpg') }}" alt="Background Image" class="w-full h-full object-cover rounded transition-transform duration-300 transform group-hover:scale-105">
                        <div class="absolute w-full bottom-0">
                            <div class="bg-gradient-to-t from-[#000000c0] to-transparent px-5 pt-20 pb-5 text-white text-2xl font-bold rounded">
                                Snorkeling
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="swiper-prev shadow-lg absolute top-1/2 -left-5 -translate-y-1/2 z-10 w-10 h-10 bg-white text-black flex justify-center items-center rounded-full cursor-pointer">
                <span class="material-symbols-outlined">chevron_left</span>
            </div>
            <div class="swiper-next shadow-lg absolute top-1/2 -right-5 -translate-y-1/2 z-10 w-10 h-10 bg-white text-black flex justify-center items-center rounded-full cursor-pointer">
                <span class="material-symbols-outlined">chevron_right</span>
            </div>
        </div>
    </section>

    {{-- Recently Viewed Section --}}
    <section class="w-[90%] max-w-[1200px] mx-auto mt-24 mb-10">
        <div class="font-bold text-2xl lg:text-3xl mb-4">Recently viewed</div>
        <!-- Slider -->
        <div class="carousel relative">
            <div class="swiper recently-viewed-slider overflow-hidden">
                <div class="swiper-wrapper">
                    @foreach($destinasi as $destination)
                    <a href="" class="swiper-slide rounded relative cursor-pointer group overflow-hidden">
                        <div class="overflow-hidden rounded">
                            <img src="{{ $destination->thumbnail ? Storage::url($destination->thumbnail)  : 'https://via.placeholder.com/400' }}" alt="{{ $destination->nama_destinasi }}" class="w-full h-full object-cover transition-transform duration-300 transform group-hover:scale-105">
                        </div>
                        <div class="">
                            <div class="pt-1 pb-2 text-black text-[1.2rem] lg:text-lg font-bold rounded">
                                {{ $destination->sub_judul }}
                            </div>
                            <div class="flex gap-[2px] justify-start items-center">
                                <div class="w-[0.8rem] h-[0.8rem] bg-[#22c55e] rounded-full"></div>
                                <div class="w-[0.8rem] h-[0.8rem] bg-[#22c55e] rounded-full"></div>
                                <div class="w-[0.8rem] h-[0.8rem] bg-[#22c55e] rounded-full"></div>
                                <div class="w-[0.8rem] h-[0.8rem] bg-[#22c55e] rounded-full"></div>
                                <div class="w-[0.8rem] h-[0.8rem] bg-[#22c55e] rounded-full"></div>
                                <div class="ml-2 text-sm text-gray-600">4002</div>
                            </div>
                        </div>
                    </a>    
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Banner --}}
    <a href="/detail">
        <section class="w-[90%] max-w-[1200px] mx-auto mt-24 mb-10 bg-[#f2ecf9] rounded-md cursor-pointer">
            <div class="flex lg:py-6 lg:px-4">
                <div class="px-0 lg:px-10 mr-4 lg:mr-0">
                    <img src="{{ asset('images/lempuyang.jpg') }}" alt="" class="h-full md:h-52 object-cover w-36 lg:w-36 lg:h-36 lg:-rotate-12 rounded-md">
                </div>
                <div class="flex flex-col lg:flex-row justify-center lg:justify-between items-start lg:items-center w-full py-2 pr-2">
                    <div class="text-left">
                        <div class="font-bold text-xl">Pura Lempuyang: Keajaiban Spiritual di Puncak Bali</div>
                        <div class="mt-0 lg:mt-4">Jelajahi keindahan dan kekayaan budaya Bali di tengah alam yang menakjubkan.</div>
                    </div>
                    <div class="px-5 py-[14px] mt-4 lg:mt-auto bg-white font-semibold rounded-full border border-black hover:bg-black hover:text-white transition-colors duration-200 cursor-pointer inline-block text-center">Explore Now</div>
                </div>
            </div>
        </section>
    </a>

    {{-- Top Destination Section --}}
    <section class="w-[90%] max-w-[1200px] mx-auto mt-24 mb-10">
        <div class="font-bold text-2xl lg:text-3xl">Top destinations for your next vacation</div>
        <div class="mt-1 mb-4 text-base lg:text-lg">Temukan destinasi yang menjadi favorit rekan-rekan Anda</div>
        <!-- Slider -->
        <div class="carousel relative">
            <div class="swiper explore-next-slider overflow-hidden">
                <div class="swiper-wrapper">
                    @foreach($destinasi as $destination)
                    <a href="/detail" class="swiper-slide rounded relative shadow-lg cursor-pointer group overflow-hidden">
                        <img src="{{ $destination->thumbnail ? Storage::url($destination->thumbnail)  : 'https://via.placeholder.com/400' }}" alt="{{ $destination->nama_destinasi }}" class="w-full h-full object-cover rounded transition-transform duration-300 transform group-hover:scale-105">
                        <div class="absolute w-full bottom-0">
                            <div class="bg-gradient-to-t from-[#000000c0] to-transparent px-5 pt-20 pb-5 text-white text-2xl font-bold rounded">
                                {{ $destination->nama_destinasi }}
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            <div class="swiper-prevs shadow-lg absolute top-1/2 -left-5 -translate-y-1/2 z-10 w-10 h-10 bg-white text-black flex justify-center items-center rounded-full cursor-pointer">
                <span class="material-symbols-outlined">chevron_left</span>
            </div>
            <div class="swiper-nexts shadow-lg absolute top-1/2 -right-5 -translate-y-1/2 z-10 w-10 h-10 bg-white text-black flex justify-center items-center rounded-full cursor-pointer">
                <span class="material-symbols-outlined">chevron_right</span>
            </div>
        </div>
    </section>

    {{-- Promo --}}
    <section class="w-[90%] max-w-[1200px] mx-auto mt-24 mb-10 h-full md:p-20 py-20 px-2 bg-cover bg-center bg-no-repeat rounded-2xl relative flex justify-center items-center" style="background-image: url('{{ asset('images/background1.png') }}')">
        <div class="text-center text-white flex flex-col items-center z-10">
            <!-- Promotional Tagline -->
            <div class="flex items-center gap-2 text-lg font-medium text-primary mb-2">
                <span>Your Adventure Starts Here</span>
            </div>

            <!-- Main Heading -->
            <h1 class="text-3xl md:text-4xl font-bold">Book Your Tour Dates Now</h1>

            <!-- Integrated Search Bar -->
            <div class="mt-8 bg-white/60 backdrop-blur-md flex flex-col md:flex-row justify-center items-center gap-6 p-6 md:p-4 md:px-8 w-full md:w-max rounded-2xl md:rounded-full shadow-lg">
                <!-- Location Input Group -->
                <div class="flex items-center md:flex-row  gap-3 w-full md:w-auto">
                    <span class="material-symbols-outlined text-green-500">
                        location_on
                    </span>
                    <div class="flex flex-col w-full">
                        <h5 class="text-gray-800 text-lg font-semibold text-left">Location</h5>
                        <input type="text" placeholder="Where are you going?" class="bg-transparent border-none text-gray-600 text-sm placeholder-gray-400 focus:outline-none w-full">
                    </div>
                </div>

                <!-- Date Input Group -->
                <div class="flex md:flex-row items-center gap-3 w-full md:w-auto">
                    <span class="material-symbols-outlined text-green-500">
                        calendar_today
                    </span>
                    <div class="flex flex-col w-full">
                        <h5 class="text-gray-800 text-lg font-semibold text-left">Select Date</h5>
                        <input type="date" placeholder="hh/bb/tttt" class="bg-transparent border-none text-gray-600 text-sm placeholder-gray-400 focus:outline-none w-full">
                    </div>
                </div>

                <!-- Get Started Button -->
                <a href="" class="bg-green-500 text-black px-6 py-4 rounded-xl md:rounded-full w-full md:w-auto flex justify-center items-center font-semibold text-sm transition ease-in-out duration-300 hover:bg-green-400">Get Started</a>
            </div>


        </div>
    </section>

    <x-footer />




    @vite('resources/js/home.js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>
