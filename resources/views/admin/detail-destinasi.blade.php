@extends('components.layout')

@section('content')

<div class="container mx-auto px-6 py-10">
    <h1 class="text-4xl font-extrabold text-gray-800 mb-10 text-center">Detail Destinasi</h1>

    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img src="{{ asset('storage/' . $destination->thumbnail) }}" alt="{{ $destination->nama_destinasi }}" class="w-full h-72 object-cover">

        <div class="p-6">
            <h2 class="text-3xl font-semibold text-gray-900">{{ $destination->nama_destinasi }}</h2>
            <p class="text-gray-700 mt-2 mb-4 leading-relaxed">{{ $destination->description }}</p>

            <div class="flex items-center justify-between mt-4">
                <span class="text-lg font-semibold text-gray-800 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 text-gray-500" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C8.1 2 5 5.1 5 9c0 5.3 7 13 7 13s7-7.7 7-13c0-3.9-3.1-7-7-7zm0 10.5c-1.9 0-3.5-1.6-3.5-3.5S10.1 5.5 12 5.5s3.5 1.6 3.5 3.5-1.6 3.5-3.5 3.5z"/>
                    </svg>
                    Lokasi:
                </span>
                <span class="text-gray-600">{{ $destination->alamat }}</span>
            </div>

            <div class="flex items-center justify-between mt-2">
                <span class="text-lg font-semibold text-gray-800 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 15l-5.878 3.09 1.122-6.545L.488 7.91l6.56-.955L10 1.5l2.95 5.455 6.56.955-4.754 4.635 1.122 6.545L10 15z"/>
                    </svg>
                    Rating:
                </span>
                <span class="text-yellow-500">★★★★☆</span>
            </div>

            <div class="flex items-center justify-between mt-2">
                <span class="text-lg font-semibold text-gray-800 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 text-blue-500" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 12a5 5 0 100-10 5 5 0 000 10zm0 2c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"/>
                    </svg>
                    Kategori:
                </span>
                <span class="text-gray-600">{{ $destination->kategori->nama_kategori }}</span>
            </div>
        </div>
    </div>

    <div class="mt-10">
        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Galeri</h3>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
            <a href="{{ asset('storage/' . $destination->galeri_1) }}" target="_blank" class="hover:opacity-75 transition">
                <img src="{{ asset('storage/' . $destination->galeri_1) }}" alt="Galeri 1" class="w-full h-32 object-cover rounded-lg">
            </a>
            <a href="{{ asset('storage/' . $destination->galeri_2) }}" target="_blank" class="hover:opacity-75 transition">
                <img src="{{ asset('storage/' . $destination->galeri_2) }}" alt="Galeri 2" class="w-full h-32 object-cover rounded-lg">
            </a>
            <a href="{{ asset('storage/' . $destination->galeri_3) }}" target="_blank" class="hover:opacity-75 transition">
                <img src="{{ asset('storage/' . $destination->galeri_3) }}" alt="Galeri 3" class="w-full h-32 object-cover rounded-lg">
            </a>
        </div>
    </div>

    <div class="flex justify-center mt-8">
        <a href="{{ route('destinasi.edit', $destination->id_destinasi) }}" class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition duration-300 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M5 20h14v-2H5v2zm0-4h14v-2H5v2zm0-4h14v-2H5v2zm0-4h14V6H5v2z"/></svg>
            Edit destinasi
        </a>
    </div>
</div>

@endsection
