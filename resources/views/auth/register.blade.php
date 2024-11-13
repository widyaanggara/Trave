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
<body>
    <x-navbar />

    <x-guest-layout>
        <form method="POST" action="{{ route('register') }}">
            @csrf
    
            <section class="w-full h-full md:h-screen flex items-center justify-center">
                <div class="bg-white p-8 border rounded-lg shadow-md md:w-full w-[90%] max-w-[500px]">
                    <h1 class="text-2xl font-bold text-center mb-6">Login</h1>
                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
    
                    <!-- Phone -->
                    <div class="mt-4">
                        <x-input-label for="phone" :value="__('Phone')" />
                        <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autocomplete="phone" />
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>
                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
    
                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />
    
                        <x-text-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />
    
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
    
                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
    
                        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password" />
    
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
    
                    <div class="flex flex-col  mt-4">
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
    
                        {{-- <x-primary-button class="flex justify-center">
                            {{ __('Register') }}
                        </x-primary-button> --}}
                        <button class="mt-4 w-full py-2 h-12 bg-orange-500 text-white font-medium rounded-md transition ease-in-out duration-300 hover:bg-orange-400">Register</button>
                    </div>
                </div>
            </section>
        </form>
    </x-guest-layout>

    <x-footer />
    

    @vite('resources/js/login.js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>










