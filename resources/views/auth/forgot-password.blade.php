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
        <section class="w-full h-full md:h-screen flex items-center justify-center">
            <div class="bg-white p-4 sm:p-8 border rounded-lg shadow-md md:w-full w-[90%] max-w-[500px]">
                <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>
            
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
            
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
            
                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full py-2 px-3" type="email" name="email" :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
            
                    {{-- <div class="flex items-center justify-end mt-4">
                        <x-primary-button>
                            {{ __('Email Password Reset Link') }}
                        </x-primary-button>
                    </div> --}}
                    <button class="mt-4 w-full py-2 h-12 bg-orange-500 text-white font-medium rounded-md transition ease-in-out duration-300 hover:bg-orange-400">{{ __('Email Password Reset Link') }}</button>
                </form>
            </div>
        </section>
    </x-guest-layout>

    <x-footer />
    

    @vite('resources/js/login.js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>










