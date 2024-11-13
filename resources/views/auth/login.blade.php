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
<body class="">
    <x-navbar />

<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <section class="w-full h-full md:h-screen flex items-center justify-center">
        <div class="bg-white p-4 sm:p-8 border rounded-lg shadow-md md:w-full w-[90%] max-w-[500px]">
            <h1 class="text-2xl font-bold text-center mb-6">Login</h1>
            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full py-2 px-3" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="mb-6">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full py-2 px-3"
                type="password"
                name="password"
                required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-3000 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 " name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
            </div>
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 rounded-md focus:outline-none" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                {{-- <x-primary-button class="ms-3">
                    {{ __('Log in') }}
                </x-primary-button> --}}
            </div>
            <p class="text-left text-gray-600 text-sm mt-4">Don't have an account? <span class="text-blue-500"><a href="{{ route('register') }}">Register</a></span></p>
            <button class="mt-4 w-full py-2 h-12 bg-orange-500 text-white font-medium rounded-md transition ease-in-out duration-300 hover:bg-orange-400">{{ __('Log in') }}</button>
        </div>
    </section>
    </form>
</x-guest-layout>

    <x-footer />
    

    @vite('resources/js/login.js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>
