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

    <section class="w-[90%] max-w-[1200px] mx-auto flex flex-col">
        <div class="mt-20 grid lg:grid-cols-[9fr_3fr] gap-6">
            <div class="mb-20">
                <div class="">
                    <img src={{ asset('images/payment.png') }} alt="" class="rounded-lg">
                </div>
                <div class="mt-5 bg-white shadow-sm p-5 border rounded-lg">
                    <div class="text-2xl font-bold">Payment Method</div>
                    <div class="font-semibold text-lg mt-2">Customer Information</div>
                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-2 mt-2">
                        <div>
                            <div class="font-semibold mb-1">User</div>
                            <div class="relative">
                                <input type="text" value="User" class="p-3 bg-gray-200 w-full pl-10 font-medium text-sm rounded-lg">
                                <span class="material-symbols-outlined absolute left-3 top-1/2 transform -translate-y-1/2" style="font-size: 1.3rem">account_circle</span>
                            </div>
                        </div>

                        <div>
                            <div class="font-semibold mb-1">Email</div>
                            <div class="relative">
                                <input type="text" value="user@gmail.com" class="p-3 bg-gray-200 w-full pl-10 font-medium text-sm rounded-lg">
                                <span class="material-symbols-outlined absolute left-3 top-1/2 transform -translate-y-1/2" style="font-size: 1.3rem">mail</span>
                            </div>
                        </div>

                        <div>
                            <div class="font-semibold mb-1">Phone</div>
                            <div class="relative">
                                <input type="text" value="123456789021" class="p-3 bg-gray-200 w-full pl-10 font-medium text-sm rounded-lg">
                                <span class="material-symbols-outlined absolute left-3 top-1/2 transform -translate-y-1/2" style="font-size: 1.3rem">phone</span>
                            </div>
                        </div>

                        <div>
                            <div class="font-semibold mb-1">Total</div>
                            <div class="relative">
                                <input type="text" value="2" class="p-3 bg-gray-200 w-full pl-10 font-medium text-sm rounded-lg">
                                <span class="material-symbols-outlined absolute left-3 top-1/2 transform -translate-y-1/2" style="font-size: 1.3rem">group</span>
                            </div>
                        </div>

                        <div>
                            <div class="font-semibold mb-1">Date</div>
                            <div class="relative">
                                <input type="text" value="10/11/2024" class="p-3 bg-gray-200 w-full pl-10 font-medium text-sm rounded-lg">
                                <span class="material-symbols-outlined absolute left-3 top-1/2 transform -translate-y-1/2" style="font-size: 1.3rem">calendar_month</span>
                            </div>
                        </div>

                        <div>
                            <div class="font-semibold mb-1">Time</div>
                            <div class="relative">
                                <input type="text" value="10.00" class="p-3 bg-gray-200 w-full pl-10 font-medium text-sm rounded-lg">
                                <span class="material-symbols-outlined absolute left-3 top-1/2 transform -translate-y-1/2" style="font-size: 1.3rem">schedule</span>
                            </div>
                        </div>
                    </div>

                    <div class="font-semibold text-lg mt-4">Payment</div>
                    <div class="mt-2 bg-[#f2f5fa] flex flex-col justify-center items-center font-medium p-10 rounded-lg text-center">
                        <div>Your total payment</div>
                        <div class="text-3xl font-bold my-1">IDR 200.000</div>
                        <div class="text-sm text-gray-600 ">Pay before 11 November 2024</div>
                    </div>

                    <div class="font-semibold text-lg mt-4">Select Method</div>
                    <div class="mt-2">
                        
                        <div class="mb-2 flex justify-between px-4 border rounded-md cursor-pointer">
                            <input type="radio" name="payment" id="ewallet" class="cursor-pointer">
                            <label for="ewallet" class="w-full flex items-center justify-between px-2 cursor-pointer py-2">
                                <div class="font-medium">E-Wallet</div>
                                <div class="hidden sm:flex gap-2">
                                    <img src={{ asset('images/gopay.png') }} alt="" class="w-16">
                                    <img src={{ asset('images/qris.png') }} alt="" class="w-16">
                                    <img src={{ asset('images/dana.png') }} alt="" class="w-16">
                                </div>
                            </label>
                        </div>

                        <div class="mb-2 flex justify-between px-4 border rounded-md cursor-pointer">
                            <input type="radio" name="payment" id="bank" class="cursor-pointer">
                            <label for="bank" class="w-full flex items-center justify-between px-2 cursor-pointer py-2">
                                <div class="font-medium">Bank Transfer</div>
                                <div class="hidden sm:flex gap-2">
                                    <img src={{ asset('images/bri.png') }} alt="" class="w-16">
                                    <img src={{ asset('images/mandiri.png') }} alt="" class="w-16">
                                    <img src={{ asset('images/bca.png') }} alt="" class="w-16">
                                </div>
                            </label>
                        </div>
                        
                        <div class="mb-0 flex justify-between px-4 border rounded-md cursor-pointer">
                            <input type="radio" name="payment" id="credit" class="cursor-pointer">
                            <label for="credit" class="w-full flex items-center justify-between px-2 cursor-pointer py-2">
                                <div class="font-medium">Credit Card</div>
                                <div class="hidden sm:flex gap-0">
                                    <img src={{ asset('images/visa.png') }} alt="" class="w-16">
                                    <img src={{ asset('images/mastercard.png') }} alt="" class="w-16">
                                </div>
                            </label>
                        </div>

                    </div>


                </div>
            </div>

            <div class="bg-gray-50">
                b
            </div>

        </div>
    </section>


    <x-footer />

    @vite('resources/js/payment.js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>
