<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/css/detail.css')
    <title>Trave</title>
    <meta charset="utf-8">

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>

    <x-navbar />

  

    <section class="w-[90%] max-w-[1200px] mx-auto flex flex-col">
        <div class="mt-24 font-bold text-[28px]">Pura Luhur Lempuyang - Gerbang Surga di Atas Awan</div>
        <div class="flex items-center mt-1 gap-1 font-medium text-gray-700 underline">
            Karangasem, Bali
        </div>
        <div class="mt-3 flex flex-col md:flex-row items-start">
            <div class="flex gap-[3px] justify-start items-center">
                <div class="w-[1rem] h-[1rem] bg-[#22c55e] rounded-full"></div>
                <div class="w-[1rem] h-[1rem] bg-[#22c55e] rounded-full"></div>
                <div class="w-[1rem] h-[1rem] bg-[#22c55e] rounded-full"></div>
                <div class="w-[1rem] h-[1rem] bg-[#22c55e] rounded-full"></div>
                <div class="w-[1rem] h-[1rem] bg-[#22c55e] rounded-full"></div>
                <div class="ml-2 text-base text-gray-600 font-medium underline cursor-pointer">145 reviews</div>
            </div>
            <div class="flex items-center gap-1 mt-2 md:mt-0"> 
                <span class="material-symbols-outlined text-red-500 md:ml-2  md:mr-1" style="font-variation-settings:'FILL' 1,'wght' 400, 'GRAD' 0, 'opsz' 24">verified</span>Recommended by 96% of travellers
            </div>
        </div>

        {{-- Galeri --}}
        <div class="grid md:grid-cols-[64%_36%] gap-1 mt-8">
            <!-- Left Column (64%) -->
            <div class="object-cover h-full">
                <img src="{{ asset('images/lemmpuyangg.jpg') }}" alt="" class="h-full w-full rounded-md md:rounded-l-md md:rounded-r-none object-cover">
            </div>
            
            <!-- Right Column (36%) with Two Rows -->
            <div class="hidden md:grid grid-rows-2 gap-1 h-full">
                <div class="h-full">
                    <img src="{{ asset('images/lemmpuyangg.jpg') }}" alt="" class="w-full h-full md:rounded-l-none md:rounded-tr-md object-cover">
                </div>
                <div class="h-full">
                    <img src="{{ asset('images/lemmpuyangg.jpg') }}" alt="" class="w-full h-full md:rounded-l-none md:rounded-br-md object-cover">
                </div>
            </div>
        </div>  

    </section>


    <section class="w-[90%] max-w-[1200px] mx-auto mt-10 mb-10">
        <div class="grid lg:grid-cols-[7fr_5fr] gap-10">
            <div class="order-2 lg:order-1">
                <div class="flex items-center justify-between">
                    <div class="font-bold text-lg">About</div>
                    <div class="flex justify-center items-center gap-1 font-medium cursor-pointer">
                        <span class="material-symbols-outlined">stylus</span>
                        <div class="underline">Write a review</div>
                    </div>
                </div>
                {{-- About --}}
                <div class="my-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga natus ratione vero fugit! Atque repellat sit animi incidunt sunt maxime inventore eaque, nisi explicabo magni necessitatibus. Illo quia corrupti culpa. Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, rerum harum debitis officiis alias non a fuga ipsa, nesciunt mollitia provident voluptatibus laudantium unde veniam odit, quis excepturi sequi animi?</div>
                <div class="h-[1px] bg-gray-300"></div>
                <div class="my-8 flex flex-col gap-[8px]">
                    <div class="flex items-center text-base">
                        <span class="material-symbols-outlined mr-3 text-gray-800">groups</span>Age 7-65
                    </div>
                    <div class="flex items-center text-base">
                        <span class="material-symbols-outlined mr-3 text-gray-800">update</span>Duration: 6h
                    </div>
                    <div class="flex items-center text-base">
                        <span class="material-symbols-outlined mr-3">schedule</span>Start time: Check availability
                    </div>
                </div>
                <div class="h-[1px] bg-gray-300"></div>

                <div class="faq-container">
                    <div class="py-5 border-b border-gray-300 cursor-pointer" id="faq1">
                        <div class="flex items-center justify-between group">
                            <div class="font-medium  group-hover:underline">What's included</div>
                            <span class="material-symbols-outlined">keyboard_arrow_down</span>
                        </div>
                        <div class="accordion-body max-h-0 overflow-hidden transition-all duration-200 ease-out">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores modi atque quas recusandae deserunt dolorem tempore officia, repellat quos labore laborum fuga velit veniam nam repudiandae molestiae, optio odio ducimus!
                        </div>
                    </div>
                    <div class="py-5 border-b border-gray-300 cursor-pointer" id="faq2">
                        <div class="flex items-center justify-between group">
                            <div class="font-medium group-hover:underline">What's included</div>
                            <span class="material-symbols-outlined">keyboard_arrow_down</span>
                        </div>
                        <div class="accordion-body max-h-0 overflow-hidden transition-all duration-200 ease-out">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores modi atque quas recusandae deserunt dolorem tempore officia, repellat quos labore laborum fuga velit veniam nam repudiandae molestiae, optio odio ducimus!
                        </div>
                    </div>
                    <div class="py-5 border-b border-gray-300 cursor-pointer" id="faq3">
                        <div class="flex items-center justify-between group">
                            <div class="font-medium group-hover:underline">What's included</div>
                            <span class="material-symbols-outlined">keyboard_arrow_down</span>
                        </div>
                        <div class="accordion-body max-h-0 overflow-hidden transition-all duration-200 ease-out">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores modi atque quas recusandae deserunt dolorem tempore officia, repellat quos labore laborum fuga velit veniam nam repudiandae molestiae, optio odio ducimus!
                        </div>
                    </div>
                    <div class="py-5 border-b border-gray-300 cursor-pointer" id="faq4">
                        <div class="flex items-center justify-between group">
                            <div class="font-medium group-hover:underline">What's included</div>
                            <span class="material-symbols-outlined">keyboard_arrow_down</span>
                        </div>
                        <div class="accordion-body max-h-0 overflow-hidden transition-all duration-200 ease-out">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores modi atque quas recusandae deserunt dolorem tempore officia, repellat quos labore laborum fuga velit veniam nam repudiandae molestiae, optio odio ducimus!
                        </div>
                    </div>
                    <div class="py-5 border-b border-gray-300 cursor-pointer" id="faq5">
                        <div class="flex items-center justify-between group">
                            <div class="font-medium group-hover:underline">What's included</div>
                            <span class="material-symbols-outlined">keyboard_arrow_down</span>
                        </div>
                        <div class="accordion-body max-h-0 overflow-hidden transition-all duration-200 ease-out">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores modi atque quas recusandae deserunt dolorem tempore officia, repellat quos labore laborum fuga velit veniam nam repudiandae molestiae, optio odio ducimus!
                        </div>
                    </div>
                    <div class="py-5 border-b border-gray-300 cursor-pointer" id="faq6">
                        <div class="flex items-center justify-between group">
                            <div class="font-medium group-hover:underline">What's included</div>
                            <span class="material-symbols-outlined">keyboard_arrow_down</span>
                        </div>
                        <div class="accordion-body max-h-0 overflow-hidden transition-all duration-200 ease-out">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores modi atque quas recusandae deserunt dolorem tempore officia, repellat quos labore laborum fuga velit veniam nam repudiandae molestiae, optio odio ducimus!
                        </div>
                    </div>
                </div>
            </div>


            <div class="order-1 lg:order-2 lg:sticky top-20 self-start border p-4 rounded-lg shadow-lg">
                <div class="font-bold text-2xl">From IDR 200.000</div>
                <div class="text-gray-800">Per adult (price varies by group size)</div>
                <div class="mt-4 font-semibold text-base">Select date and travellers</div>
                <div class="flex items-center gap-2 mt-3">
                    <div class=" relative" id="date">
                        <input type="date" id="datePicker" class="border border-gray-300 h-14 w-44 flex justify-center items-center rounded-full cursor-pointer focus:border-gray-500">
                    </div>

                    <!-- Trigger button for modal -->
                    <div id="open-modal" class="border border-gray-300 flex items-center justify-center gap-2 h-14 w-[84px] rounded-full cursor-pointer">
                        <span class="material-symbols-outlined">groups</span> 3
                    </div>

                    <!-- Modal -->
                    <div id="modal" class="z-40 fixed inset-0  flex items-center justify-center hidden">
                        <div class="bg-white rounded-lg p-6 w-[300px] shadow-lg">
                            <!-- Header Section -->
                            <h2 class="text-center font-semibold text-lg mb-4">Select Travellers</h2>
                            
                            <!-- Adults Section -->
                            <div class="flex justify-between items-center border-b pb-4 mb-4">
                                <div>
                                    <div class="font-semibold">Dewasa <span class="text-sm font-normal">Umur 18 - 65</span></div>
                                    <div class="text-gray-600 text-sm">IDR</div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <button id="decrease-adults" class="w-8 h-8 flex items-center justify-center bg-gray-200 text-black rounded-full">
                                        <span class="material-symbols-outlined">remove</span>
                                    </button>
                                    <span id="adult-count" class="font-semibold">2</span>
                                    <button id="increase-adults" class="w-8 h-8 flex items-center justify-center bg-gray-200 text-black rounded-full">
                                        <span class="material-symbols-outlined">add</span>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Children Section -->
                            <div class="flex justify-between items-center border-b pb-4 mb-4">
                                <div>
                                    <div class="font-semibold">Anak-anak <span class="text-sm font-normal">Umur 7 - 17</span></div>
                                    <div class="text-gray-600 text-sm">IDR</div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <button id="decrease-children" class="w-8 h-8 flex items-center justify-center bg-gray-200 text-black rounded-full">
                                        <span class="material-symbols-outlined">remove</span>
                                    </button>
                                    <span id="child-count" class="font-semibold">1</span>
                                    <button id="increase-children" class="w-8 h-8 flex items-center justify-center bg-gray-200 text-black rounded-full">
                                        <span class="material-symbols-outlined">add</span>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Update Button -->
                            <button id="update-search" class="w-full bg-orange-500 text-white py-2 rounded-full font-semibold hover:bg-orange-400 transition-colors duration-200">Update search</button>
                        </div>
                    </div>
                    
                </div>

                {{-- Paket --}}
                <div class="mt-8">
                    <div class="mb-2 font-semibold text-lg">Pilih Paket</div>
                    {{-- pilihan 1 --}}
                    <div class="relative border-2 rounded-xl border-gray-300 transition duration-300 ease-in-out" id="package-card-1">
                        <input type="radio" name="packages" value="withguide" id="withguide" class="hidden peer" />
                        <label for="withguide" class="w-full block cursor-pointer p-4">
                            <div class="font-semibold text-lg">Tour Dengan Guide</div>
                            <div class="bg-black inline-block text-white px-2 py-1 rounded-[4px] mt-1 font-semibold text-sm">Populer*</div>
                            <div class="mt-2">
                                <div class="text-sm">Menjelajahi Pura Lempuyang</div>
                                <div class="text-sm">Duration: 2h</div>
                                <div class="text-sm">Travel Guide</div>
                                <div class="text-sm">Location: Karangasem, Bali</div>
                            </div>
                            <div class="mt-3">
                                <div class="text-sm"><span>1</span> Dewasa x IDR <span>150.000</span></div>
                                <div class="text-sm"><span>1</span> Anak-anak x IDR <span>150.000</span></div>
                                <div class="text-base font-semibold">Total IDR <span>300.000</span></div>
                            </div>
                            <div class="mt-2">
                                <label for="time" class="block font-medium mb-1">Pilih Waktu:</label>
                                <input type="time" id="time" name="time" class="border border-gray-300 rounded-lg p-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-transparent focus:border-gray-500 cursor-pointer">
                            </div>
                            <div class="mt-2 text-xs text-gray-700">*Pilihan populer berdasarkan jumlah pemesanan di situs Trave selama 60 hari terakhir.</div>
                        </label>

                        <span class="absolute right-4 top-4 rounded-full border-2 border-gray-500 bg-transparent transition duration-300 cursor-pointer" id="outer-circle-1">
                            <span class="bg-black rounded-full" id="inner-dot-1" style="visibility: hidden;"></span>
                        </span>
                    </div>
                
                    {{-- pilihan 2 --}}
                    <div class="mt-3 relative border-2 rounded-xl border-gray-300 transition duration-300 ease-in-out" id="package-card-2">
                        <input type="radio" name="packages" value="withoutguide" id="withguide" class="hidden peer" />
                        <label for="withoutguide" class="w-full block cursor-pointer p-4">
                            <div class="font-semibold text-lg">Tour Tanpa Guide</div>
                            <div class="mt-1">
                                <div class="text-sm">Menjelajahi Pura Lempuyang</div>
                                <div class="text-sm">Duration: 2h</div>
                                <div class="text-sm">Location: Karangasem, Bali</div>
                            </div>
                            <div class="mt-3">
                                <div class="text-sm"><span>1</span> Dewasa x IDR <span>100.000</span></div>
                                <div class="text-sm"><span>1</span> Anak-anak x IDR <span>100.000</span></div>
                                <div class="text-base font-semibold">Total IDR <span>200.000</span></div>
                            </div>
                            <div class="mt-2">
                                <label for="time" class="block font-medium mb-1">Pilih Waktu:</label>
                                <input type="time" id="time" name="time" class="border border-gray-300 rounded-lg p-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-transparent focus:border-gray-500 cursor-pointer">
                            </div>
                        </label>

                        <span class="absolute right-4 top-4 rounded-full border-2 border-gray-500 bg-transparent transition duration-300 cursor-pointer" id="outer-circle-2">
                            <span class="bg-black rounded-full" id="inner-dot-2" style="visibility: hidden;"></span>
                        </span>
                    </div>
                </div>
                
                <div class="bg-orange-500 hover:bg-orange-400 flex justify-center items-center py-3 mt-4 rounded-full cursor-pointer text-white transition-colors duration-200">Booking Now</div>

            </div>
        </div>
    </section>


    {{-- Rekomendasi --}}
    <section class="w-[90%] max-w-[1200px] mx-auto mt-20 mb-10">
        <div class="font-bold text-2xl lg:text-[28px] mb-4">Wisata serupa</div>
        <!-- Slider -->
        <div class="carousel relative">
            <div class="swiper recently-viewed-slider overflow-hidden">
                <div class="swiper-wrapper">
                    <div class="swiper-slide rounded relative cursor-pointer group overflow-hidden">
                        <div class="overflow-hidden rounded"> 
                            <img src="{{ asset('images/white-river-rafting-bali.jpg') }}" alt="Background Image" class="w-full h-full object-cover transition-transform duration-300 transform group-hover:scale-105">
                        </div>
                        <div class="">
                            <div class="pt-1 pb-2 text-black text-[1.2rem] lg:text-lg font-bold rounded">
                                Rafting Sungai Ayung Bali - Ubud White Water Rafting
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
                    </div>
    
                    <div class="swiper-slide rounded relative cursor-pointer group overflow-hidden">
                        <div class="overflow-hidden rounded"> <!-- Add overflow-hidden here -->
                            <img src="{{ asset('images/penglipuran.jpg') }}" alt="Background Image" class="w-full h-full object-cover transition-transform duration-300 transform group-hover:scale-105">
                        </div>
                        <div class="">
                            <div class="pt-1 pb-2 text-black text-[1.2rem] lg:text-lg font-bold rounded">
                                Tur Budaya di Desa Penglipuran - Menyelami Tradisi Bali
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
                    </div>

                    <div class="swiper-slide rounded relative cursor-pointer group overflow-hidden">
                        <div class="overflow-hidden rounded"> <!-- Add overflow-hidden here -->
                            <img src="{{ asset('images/ubud-jungle-atv-3.jpg') }}" alt="Background Image" class="w-full h-full object-cover transition-transform duration-300 transform group-hover:scale-105">
                        </div>
                        <div class="">
                            <div class="pt-1 pb-2 text-black text-[1.2rem] lg:text-lg font-bold rounded">
                                Petualangan ATV di Ubud - Eksplorasi Alam Bali 
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
                    </div>

                    <div class="swiper-slide rounded relative cursor-pointer group overflow-hidden">
                        <div class="overflow-hidden rounded">
                            <img src="{{ asset('images/tegenungan.webp') }}" alt="Background Image" class="w-full h-full object-cover transition-transform duration-300 transform group-hover:scale-105">
                        </div>
                        <div class="">
                            <div class="pt-1 pb-2 text-black text-[1.2rem] lg:text-lg font-bold rounded">
                                Air Terjun Tegenungan - Surga Tersembunyi di Bali
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
                    </div>

                    <div class="swiper-slide rounded relative cursor-pointer group overflow-hidden">
                        <div class="overflow-hidden rounded">
                            <img src="{{ asset('images/sekumpul.png') }}" alt="Background Image" class="w-full h-full object-cover transition-transform duration-300 transform group-hover:scale-105">
                        </div>
                        <div class="">
                            <div class="pt-1 pb-2 text-black text-[1.2rem] lg:text-lg font-bold rounded">
                                Air Terjun Sekumpul - Keindahan Alam di Utara Bali
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
                    </div>

                    <div class="swiper-slide rounded relative cursor-pointer group overflow-hidden">
                        <div class="overflow-hidden rounded">
                            <img src="{{ asset('images/jatiluwih.jpg') }}" alt="Background Image" class="w-full h-full object-cover transition-transform duration-300 transform group-hover:scale-105">
                        </div>
                        <div class="">
                            <div class="pt-1 pb-2 text-black text-[1.2rem] lg:text-lg font-bold rounded">
                                Sawah Terasering Jatiluwih - Panorama Hijau yang Menakjubkan
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
                    </div>

                    <div class="swiper-slide rounded relative cursor-pointer group overflow-hidden">
                        <div class="overflow-hidden rounded">
                            <img src="{{ asset('images/Pantai-Amedd.jpg') }}" alt="Background Image" class="w-full h-full object-cover transition-transform duration-300 transform group-hover:scale-105">
                        </div>
                        <div class="">
                            <div class="pt-1 pb-2 text-black text-[1.2rem] lg:text-lg font-bold rounded">
                                Pantai Amed - Surga Bawah Laut untuk Pecinta Snorkeling
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
                    </div>

                    <div class="swiper-slide rounded relative cursor-pointer group overflow-hidden">
                        <div class="overflow-hidden rounded">
                            <img src="{{ asset('images/uluwatu.jpg') }}" alt="Background Image" class="w-full h-full object-cover transition-transform duration-300 transform group-hover:scale-105">
                        </div>
                        <div class="">
                            <div class="pt-1 pb-2 text-black text-[1.2rem] lg:text-lg font-bold rounded">
                                Kecak Dance Uluwatu - Pertunjukan Epik di Atas Lautan
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
                    </div>

                    <div class="swiper-slide rounded relative cursor-pointer group overflow-hidden">
                        <div class="overflow-hidden rounded">
                            <img src="{{ asset('images/menjangann.jpg') }}" alt="Background Image" class="w-full h-full object-cover transition-transform duration-300 transform group-hover:scale-105">
                        </div>
                        <div class="">
                            <div class="pt-1 pb-2 text-black text-[1.2rem] lg:text-lg font-bold rounded">
                                Pulau Menjangan - Surga Snorkeling di Barat Bali
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
                    </div>
    
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

    <section class="w-[90%] max-w-[1200px] mx-auto mt-24 mb-10">
        <div class="font-bold text-2xl lg:text-[28px] mb-4">Reviews</div>
        <div class="grid lg:grid-cols-[4fr_8fr] gap-10">
            <div>
                b
            </div>

            <div>
                a
            </div>

        </div>
    </section>


    <x-footer />

    @vite('resources/js/detail.js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>
