@extends('components.layout')

@section('content')

<div class="container mx-auto px-6 py-10">
    <h1 class="text-4xl font-extrabold text-gray-800 mb-10 text-center">Detail Destinasi</h1>

    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <!-- Thumbnail -->
        <img src="{{ asset('storage/' . $destination->thumbnail) }}" alt="{{ $destination->nama_destinasi }}" class="w-full h-72 object-cover">

        <div class="p-6">
            <h2 class="text-3xl font-semibold text-gray-900">{{ $destination->nama_destinasi }}</h2>
            <p class="text-gray-700 mt-2 mb-4 leading-relaxed">{{ $destination->description }}</p>

            <div class="flex items-center justify-between mt-4">
                <span class="text-lg font-semibold text-gray-800">
                    Lokasi:
                </span>
                <span class="text-gray-600">{{ $destination->alamat }}</span>
            </div>

            <div class="flex items-center justify-between mt-2">
                <span class="text-lg font-semibold text-gray-800">
                    Kategori:
                </span>
                <span class="text-gray-600">{{ $destination->kategori }}</span>
            </div>

            <div class="flex items-center justify-between mt-2">
                <span class="text-lg font-semibold text-gray-800">
                    Durasi:
                </span>
                <span class="text-gray-600">{{ $destination->duration }}</span>
            </div>

            <div class="flex items-center justify-between mt-2">
                <span class="text-lg font-semibold text-gray-800">
                    Harga Dewasa (Paket):
                </span>
                <span class="text-gray-600">Rp {{ number_format($destination->harga_dewasa_paket, 0, ',', '.') }}</span>
            </div>

            <div class="flex items-center justify-between mt-2">
                <span class="text-lg font-semibold text-gray-800">
                    Harga Anak (Paket):
                </span>
                <span class="text-gray-600">Rp {{ number_format($destination->harga_anak_paket, 0, ',', '.') }}</span>
            </div>
        </div>
    </div>

    <!-- Galeri -->
    <div class="mt-10">
        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Galeri</h3>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
            @if($destination->galeri_1)
                <a href="{{ asset('storage/' . $destination->galeri_1) }}" target="_blank">
                    <img src="{{ asset('storage/' . $destination->galeri_1) }}" alt="Galeri 1" class="w-full h-32 object-cover rounded-lg">
                </a>
            @endif
            @if($destination->galeri_2)
                <a href="{{ asset('storage/' . $destination->galeri_2) }}" target="_blank">
                    <img src="{{ asset('storage/' . $destination->galeri_2) }}" alt="Galeri 2" class="w-full h-32 object-cover rounded-lg">
                </a>
            @endif
            @if($destination->galeri_3)
                <a href="{{ asset('storage/' . $destination->galeri_3) }}" target="_blank">
                    <img src="{{ asset('storage/' . $destination->galeri_3) }}" alt="Galeri 3" class="w-full h-32 object-cover rounded-lg">
                </a>
            @endif
        </div>
    </div>

    <div class="flex justify-center gap-4 mt-8">
        
    <!-- Tombol hapus -->
        <form action="{{ route('destinasi.destroy', ['id_destinasi' => $destination->id_destinasi]) }}" method="POST" class="flex items-center">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 text-white px-6 py-3 rounded-lg hover:bg-red-600 transition duration-300">
                Delete
            </button>
        </form>
    
    <!-- Tombol Edit -->
        <a href="{{ route('destinasi.edit', $destination->id_destinasi) }}" class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition duration-300">
            Edit Destinasi
        </a>
    </div>
    
</div>

@endsection
