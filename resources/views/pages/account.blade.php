<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Trave</title>
    <meta charset="utf-8">

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>

    <x-navbar />


    <section class="w-[90%] max-w-[1200px] mx-auto flex flex-col mb-14 h-full lg:h-screen">

        <div class="mt-[140px] grid lg:grid-cols-[3fr_9fr] gap-8">
            
            {{-- Navigation --}}
            <x-account-navigation />

            {{-- Account Detail --}}
            <div>
                <div class="font-bold text-3xl text-center mb-1 mt-10 lg:mt-0">Welcome, Anggara</div>
                <div class="text-gray-600 mb-10 text-center">Informasi mengenai profil dan preferensi kamu di seluruh layanan myskill.</div>
                <div class="flex flex-col gap-5">
                    <div>
                        <label class="block text-gray-600 text-sm font-medium mb-1">Username</label>
                        <input type="text" value="username123" class="w-full mt-1 px-3 py-2 bg-gray-100 border border-gray-300 rounded-md">
                    </div>
                    {{-- Nomor Hp --}}
                    <div>
                        <label class="block text-gray-600 text-sm font-medium">Nomor HP</label>
                        <input type="tel" value="+6281234567890" class="w-full mt-1 px-3 py-2 bg-gray-100 border border-gray-300 rounded-md">
                    </div>

                    <div class="lg:grid grid-cols-[6fr_6fr] gap-6">
                        {{-- Email --}}
                        <div>
                            <label class="block text-gray-600 text-sm font-medium">Email</label>
                            <input type="email" value="user@example.com" class="w-full mt-1 px-3 py-2 bg-gray-100 border border-gray-300 rounded-md">
                        </div>
                        {{-- Password --}}
                        <div>
                            <label class="block text-gray-600 text-sm font-medium">Password</label>
                            <input type="password" value="password123" class="w-full mt-1 px-3 py-2 bg-gray-100 border border-gray-300 rounded-md">
                        </div>
                    </div>

                    {{-- Tombol Edit --}}
                    <div class="mt-4 sm:mt-6 flex sm:justify-end">
                        <button class="w-full sm:w-auto px-4 py-3 bg-green-500 text-white rounded-md hover:bg-green-600 transition">
                            Simpan Perubahan
                        </button>
                    </div>
                    

                </div>
            </div>

        </div>
    </section>



    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>
