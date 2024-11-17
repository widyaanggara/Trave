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
                <div class="font-bold text-2xl">Transaksi Saya</div>
                <div class="text-gray-600">Lihat semua transaksi kamu di Trave</div>
                @if($pemesanans->isEmpty())
                    <p>Tidak ada transaksi ditemukan.</p>
                @else
                    @foreach($pemesanans as $pemesanan)
                    <div class="mt-10 border py-5 px-6 rounded-lg shadow-md">
                        {{-- Status --}}
                        <div class="flex flex-col md:flex-row md:justify-between md:items-center">
                            <div class="flex items-center {{ $pemesanan->status == 'confirmed' ? 'bg-green-500' : 'bg-red-500' }} w-max px-2 py-1 text-sm font-medium rounded-full mt-2 md:mt-0 md:order-2">
                                {{ ucfirst($pemesanan->status) }}
                            </div>
                            <div class="font-semibold text-lg mt-2 md:mt-0">{{ $pemesanan->destinasi->nama_destinasi }}</div>
                        </div>

                        <div class="mt-5">
                            <div class="text-sm text-gray-600">Dibuat: {{ \Carbon\Carbon::parse($pemesanan->date_order)->format('d F Y') }}</div>
                            <div class="text-sm text-gray-600">Jumlah Traveler: <span>{{ $pemesanan->jumlah_dewasa + $pemesanan->jumlah_anak }}</span> orang</div>
                            <div class="text-sm text-gray-600">Tanggal Travel: {{ \Carbon\Carbon::parse($pemesanan->date_travel)->format('d F Y') }}</div>
                            <div class="text-sm text-gray-600">Jam Travel: {{ \Carbon\Carbon::parse($pemesanan->time_travel)->format('H:i') }}</div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>

        </div>
    </section>



    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>
