<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/css/login.css')
    <title>Trave</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body class="bg-white">
    <x-navbar />

    <section class="w-full h-full pt-20 md:h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg md:w-full w-[90%] max-w-[500px]">
            <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Register</h1>
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input id="username" type="text" placeholder="Enter your Name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 p-2">
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                <input id="phone" type="tel" placeholder="Enter your Phone Number" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 p-2">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" type="email" placeholder="Enter your Email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 p-2">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" placeholder="Enter your Password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 p-2">
            </div>
            <p class="text-left text-gray-600 text-sm">Already have an account? <span class="text-blue-500"><a href="#">Login</a></span></p>
            <button class="mt-4 w-full py-2 h-12 bg-orange-500 text-white font-medium rounded-md transition ease-in-out duration-300 hover:bg-orange-400">Login</button>
        </div>
    </section>

    <x-footer />
    

    @vite('resources/js/login.js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>
