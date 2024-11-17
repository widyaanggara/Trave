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
            <div class="container">
                <h2>Dashboard Admin</h2>

                <!-- Grafik Pemesanan Harian -->
                
            </div>
        </div>
        <canvas id="ordersChart" width="400" height="200"></canvas>
    </div>
    <script>
        const months = @json($months); // Data bulan dari controller
        const orderCounts = @json($orderCounts); // Data jumlah pemesanan dari controller

        const ctx = document.getElementById('ordersChart').getContext('2d');
        const ordersChart = new Chart(ctx, {
            type: 'line', // Tipe grafik garis
            data: {
                labels: months, // Label bulan
                datasets: [{
                    label: 'Jumlah Pemesanan',
                    data: orderCounts, // Data jumlah pemesanan
                    borderColor: 'rgb(75, 192, 192)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return `Jumlah Pemesanan: ${tooltipItem.raw}`;
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Bulan'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Jumlah Pemesanan'
                        },
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection

