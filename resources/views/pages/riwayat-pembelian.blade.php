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
                a
            </div>

        </div>
    </section>



    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>
