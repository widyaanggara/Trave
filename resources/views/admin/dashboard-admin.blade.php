@extends('components.layout')
@section('content')
    <div class="container mx-auto">
        <!-- Header Dashboard -->
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Dashboard Utama</h1>
        
        <!-- Statistik Utama -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
            <!-- Jumlah Pengguna Aktif -->
            <div class="bg-white p-6 rounded-lg shadow-md flex items-center">
                <div class="p-4 bg-blue-100 rounded-full">
                    <svg class="w-8 h-8 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 12a4 4 0 100-8 4 4 0 000 8zM2 18a8 8 0 0116 0H2z"/>
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="text-lg font-semibold">Pengguna Aktif</p>
                    <p class="text-2xl font-bold">1,234</p>
                </div>
            </div>
            
            <!-- Ulasan Baru -->
            <div class="bg-white p-6 rounded-lg shadow-md flex items-center">
                <div class="p-4 bg-green-100 rounded-full">
                    <svg class="w-8 h-8 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M5 3a2 2 0 000 4h10a2 2 0 100-4H5zM3 9h14a2 2 0 012 2v5a2 2 0 01-2 2H3a2 2 0 01-2-2v-5a2 2 0 012-2z"/>
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="text-lg font-semibold">Ulasan Baru</p>
                    <p class="text-2xl font-bold">567</p>
                </div>
            </div>
            
            <!-- Popularitas Destinasi -->
            <div class="bg-white p-6 rounded-lg shadow-md flex items-center">
                <div class="p-4 bg-yellow-100 rounded-full">
                    <svg class="w-8 h-8 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm4-1h8v2H6v-2z"/>
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="text-lg font-semibold">Destinasi Populer</p>
                    <p class="text-2xl font-bold">15</p>
                </div>
            </div>
        </div>
        <canvas id="myChart" style="width:100%;max-width:700px; opacity:1;"></canvas>

    </div>
@endsection

<script>
    const xValues = [50,60,70,80,90,100,110,120,130,140,150];
    const yValues = [7,8,8,9,9,9,10,11,14,14,15];

    new Chart("myChart", {
    type: "line",
    data: {
        labels: xValues,
        datasets: [{
        backgroundColor:"rgba(0,0,255,1.0)",
        borderColor: "rgba(0,0,255,0.1)",
        data: yValues
        }]
    },
    options:{...}
    });
</script>

