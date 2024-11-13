@extends('components.layout')

@section('content')

<div class="container mx-auto px-6 py-10">
    <h1 class="text-4xl font-extrabold text-gray-800 mb-10 text-center">Destinasi Wisata</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Menampilkan destinasi dari database -->
        @foreach($destinasi as $destination)
        <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-2xl">
            <img src="{{ $destination->thumbnail ? asset('storage/' . $destination->thumbnail) : 'https://via.placeholder.com/400' }}" alt="{{ $destination->nama_destinasi }}" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-semibold text-gray-900">{{ $destination->nama_destinasi }}</h2>
                <p class="text-gray-600 mt-2">{{ Str::limit($destination->description, 100) }}</p>
                <div class="mt-4">
                    <a href="{{ route('destinasi.show', $destination->id_destinasi) }}" class="flex items-center text-blue-500 hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M12.293 8.293a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L13 10.414V17a1 1 0 11-2 0v-6.586l-3.293 3.293a1 1 0 01-1.414-1.414l4-4z" />
                        </svg>
                        Lihat Selengkapnya
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="flex justify-center mt-8">
        <a href="{{ route('destinasi.create') }}" class="flex items-center bg-blue-500 text-white px-5 py-3 rounded-lg hover:bg-blue-600 transition duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 5a1 1 0 011-1h4a1 1 0 110 2h-4a1 1 0 01-1-1zM5 10a1 1 0 011-1h10a1 1 0 110 2H6a1 1 0 01-1-1zM5 15a1 1 0 011-1h10a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
            </svg>
            Tambah Destinasi
        </a>
    </div>
</div>

@endsection
