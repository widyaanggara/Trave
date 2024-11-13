@extends('components.layout')

@section('content')

<div class="container mx-auto px-6 py-10">
    <h1 class="text-4xl font-extrabold text-gray-800 mb-10">Detail Pemesanan</h1>

    <!-- Kartu Informasi Pemesan -->
    <div class="bg-white shadow-md rounded-lg overflow-hidden mb-8 p-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Informasi Pemesan</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Nama Pemesan -->
            <div>
                <p class="text-sm text-gray-600">Nama:</p>
                <p class="text-lg font-semibold text-gray-800">John Doe</p>
            </div>
            <!-- Email -->
            <div>
                <p class="text-sm text-gray-600">Email:</p>
                <p class="text-lg font-semibold text-gray-800">john@example.com</p>
            </div>
            <!-- Nomor Kontak -->
            <div>
                <p class="text-sm text-gray-600">Nomor Kontak:</p>
                <p class="text-lg font-semibold text-gray-800">+62 123 456 789</p>
            </div>
        </div>
    </div>

    <!-- Kartu Detail Pemesanan -->
    <div class="bg-white shadow-md rounded-lg overflow-hidden mb-8 p-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Detail Pemesanan</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Tanggal Pemesanan -->
            <div>
                <p class="text-sm text-gray-600">Tanggal Pemesanan:</p>
                <p class="text-lg font-semibold text-gray-800">10 Sep 2023</p>
            </div>
            <!-- Destinasi -->
            <div>
                <p class="text-sm text-gray-600">Destinasi:</p>
                <p class="text-lg font-semibold text-gray-800">Bali</p>
            </div>
            <!-- Jumlah Peserta -->
            <div>
                <p class="text-sm text-gray-600">Jumlah Peserta:</p>
                <p class="text-lg font-semibold text-gray-800">4 Orang</p>
            </div>
            <!-- Status -->
            <div>
                <p class="text-sm text-gray-600">Status:</p>
                <span class="px-3 py-1 inline-block rounded-full text-xs font-semibold bg-green-100 text-green-700">
                    Confirmed
                </span>
            </div>
        </div>
    </div>

    <!-- Aksi Pemesanan -->
    <div class="bg-white shadow-md rounded-lg overflow-hidden p-6 mb-8">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Aksi</h2>
        
        <div class="flex space-x-4">
            <button class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition flex items-center">
                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Konfirmasi Pemesanan
            </button>
            <button class="px-4 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 transition flex items-center">
                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m4-8h.01M6.4 6.4l1.6 1.6m6 6l1.6 1.6m1.4-6.4l-1.6 1.6M8.4 15.6l1.6-1.6" />
                </svg>
                Edit Pemesanan
            </button>
            <button onclick="confirm('Apakah Anda yakin ingin menghapus pemesanan ini?')" class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition flex items-center">
                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
                Hapus Pemesanan
            </button>
        </div>
    </div>

    <!-- Rincian Tambahan -->
    <div class="bg-white shadow-md rounded-lg overflow-hidden p-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Rincian Tambahan</h2>
        
        <div>
            <p class="text-sm text-gray-600 mb-2">Catatan untuk Pemesanan:</p>
            <p class="text-lg text-gray-800">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id arcu aliquet, elementum nisi quis, condimentum nibh.
            </p>
        </div>
    </div>
    
    <!-- Tombol Kembali -->
    <div class="mt-6">
        <a href="{{ url('/admin/pemesanan') }}" class="text-blue-500 hover:text-blue-700">
            &larr; Kembali ke Daftar Pemesanan
        </a>
    </div>
</div>

@endsection
