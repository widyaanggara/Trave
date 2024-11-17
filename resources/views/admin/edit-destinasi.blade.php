@extends('components.layout')

@section('content')

<div class="container mx-auto px-6 py-10">
    <h1 class="text-4xl font-extrabold text-gray-800 mb-10 text-center">Edit Destinasi</h1>

    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <form action="{{ route('destinasi.update', $destinasi->id_destinasi) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="p-6 space-y-6">

                <!-- Nama Destinasi -->
                <div>
                    <label for="nama_destinasi" class="block text-lg font-semibold text-gray-800">Nama Destinasi</label>
                    <input type="text" name="nama_destinasi" id="nama_destinasi" value="{{ old('nama_destinasi', $destinasi->nama_destinasi) }}" class="mt-2 w-full p-3 border border-gray-300 rounded-lg" required>
                    @error('nama_destinasi') 
                        <span class="text-red-500 text-sm">{{ $message }}</span> 
                    @enderror
                </div>

                <!-- Sub Judul -->
                <div>
                    <label for="sub_judul" class="block text-lg font-semibold text-gray-800">Sub Judul</label>
                    <input type="text" name="sub_judul" id="sub_judul" value="{{ old('sub_judul', $destinasi->sub_judul) }}" class="mt-2 w-full p-3 border border-gray-300 rounded-lg" required>
                    @error('sub_judul') 
                        <span class="text-red-500 text-sm">{{ $message }}</span> 
                    @enderror
                </div>

                <!-- Alamat -->
                <div>
                    <label for="alamat" class="block text-lg font-semibold text-gray-800">Alamat</label>
                    <input type="text" name="alamat" id="alamat" value="{{ old('alamat', $destinasi->alamat) }}" class="mt-2 w-full p-3 border border-gray-300 rounded-lg" required>
                    @error('alamat') 
                        <span class="text-red-500 text-sm">{{ $message }}</span> 
                    @enderror
                </div>

                <!-- Description -->
                <div>
                    <label for="description" class="block text-lg font-semibold text-gray-800">Description</label>
                    <textarea name="description" id="description" rows="4" class="mt-2 w-full p-3 border border-gray-300 rounded-lg" required>{{ old('description', $destinasi->description) }}</textarea>
                    @error('description') 
                        <span class="text-red-500 text-sm">{{ $message }}</span> 
                    @enderror
                </div>

                <!-- Thumbnail Image -->
                <div class="mb-6">
                    <label for="thumbnail" class="block text-base font-medium text-gray-700 mb-2">Thumbnail</label>
                    <input
                        type="file"
                        id="thumbnail"
                        name="thumbnail"
                        accept="image/*"
                        class="w-full border border-gray-300 rounded-lg p-2.5 text-gray-800 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                    >
                    <small class="text-gray-500">Format: JPG, PNG.</small>
                    @error('thumbnail') 
                        <span class="text-red-500 text-sm">{{ $message }}</span> 
                    @enderror
                    @if($destinasi->thumbnail)
                        <div class="mt-4">
                            <h3 class="text-lg font-semibold text-gray-800">Current Thumbnail</h3>
                            <img src="{{ asset('storage/' . $destinasi->thumbnail) }}" alt="Current Thumbnail" class="w-32 h-32 object-cover rounded-lg mt-2">
                        </div>
                    @endif
                </div>

                <!-- Gallery Images -->
                <div class="mb-6">
                    <label class="block text-base font-medium text-gray-700 mb-2">Galeri (3 Foto)</label>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                        <!-- Gallery Image 1 -->
                        <div>
                            <input
                                type="file"
                                name="galeri_1"
                                accept="image/*"
                                class="w-full border border-gray-300 rounded-lg p-2.5 text-gray-800 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                            >
                            @if($destinasi->galeri_1)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $destinasi->galeri_1) }}" alt="Galeri 1" class="w-32 h-32 object-cover rounded-lg">
                                </div>
                            @endif
                        </div>

                        <!-- Gallery Image 2 -->
                        <div>
                            <input
                                type="file"
                                name="galeri_2"
                                accept="image/*"
                                class="w-full border border-gray-300 rounded-lg p-2.5 text-gray-800 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                            >
                            @if($destinasi->galeri_2)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $destinasi->galeri_2) }}" alt="Galeri 2" class="w-32 h-32 object-cover rounded-lg">
                                </div>
                            @endif
                        </div>

                        <!-- Gallery Image 3 -->
                        <div>
                            <input
                                type="file"
                                name="galeri_3"
                                accept="image/*"
                                class="w-full border border-gray-300 rounded-lg p-2.5 text-gray-800 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                            >
                            @if($destinasi->galeri_3)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $destinasi->galeri_3) }}" alt="Galeri 3" class="w-32 h-32 object-cover rounded-lg">
                                </div>
                            @endif
                        </div>
                    </div>
                    @error('galeri_1') 
                        <span class="text-red-500 text-sm">{{ $message }}</span> 
                    @enderror
                    @error('galeri_2') 
                        <span class="text-red-500 text-sm">{{ $message }}</span> 
                    @enderror
                    @error('galeri_3') 
                        <span class="text-red-500 text-sm">{{ $message }}</span> 
                    @enderror
                </div>

                <!-- Kategori -->
                <div>
                    <label for="kategori" class="block text-lg font-semibold text-gray-800">Kategori</label>
                    <input type="text" name="kategori" id="kategori" value="{{ old('kategori', $destinasi->kategori) }}" class="mt-2 w-full p-3 border border-gray-300 rounded-lg" required>
                    @error('kategori') 
                        <span class="text-red-500 text-sm">{{ $message }}</span> 
                    @enderror
                </div>

                <!-- Durasi -->
                <div>
                    <label for="duration" class="block text-lg font-semibold text-gray-800">Durasi</label>
                    <input type="text" name="duration" id="duration" value="{{ old('duration', $destinasi->duration) }}" class="mt-2 w-full p-3 border border-gray-300 rounded-lg" required>
                    @error('duration') 
                        <span class="text-red-500 text-sm">{{ $message }}</span> 
                    @enderror
                </div>

                <!-- Harga Dewasa Paket -->
                <div>
                    <label for="harga_dewasa_paket" class="block text-lg font-semibold text-gray-800">Harga Dewasa (Paket)</label>
                    <input type="number" name="harga_dewasa_paket" id="harga_dewasa_paket" value="{{ old('harga_dewasa_paket', $destinasi->harga_dewasa_paket) }}" class="mt-2 w-full p-3 border border-gray-300 rounded-lg" required>
                    @error('harga_dewasa_paket') 
                        <span class="text-red-500 text-sm">{{ $message }}</span> 
                    @enderror
                </div>
                <!-- Harga Anak Paket -->
                <div>
                    <label for="harga_anak_paket" class="block text-lg font-semibold text-gray-800">Harga Anak (Paket)</label>
                    <input type="number" name="harga_anak_paket" id="harga_anak_paket" value="{{ old('harga_anak_paket', $destinasi->harga_anak_paket) }}" class="mt-2 w-full p-3 border border-gray-300 rounded-lg" required>
                    @error('harga_anak_paket') 
                        <span class="text-red-500 text-sm">{{ $message }}</span> 
                    @enderror
                </div>


                <!-- Harga Dewasa Nonpaket -->

                <div>
                    <label for="harga_dewasa_nonpaket" class="block text-lg font-semibold text-gray-800">Harga Dewasa (Nonpaket)</label>
                    <input type="number" name="harga_dewasa_nonpaket" id="harga_dewasa_nonpaket" value="{{ old('harga_dewasa_nonpaket', $destinasi->harga_dewasa_nonpaket) }}" class="mt-2 w-full p-3 border border-gray-300 rounded-lg" required>
                    @error('harga_dewasa_nonpaket') 
                        <span class="text-red-500 text-sm">{{ $message }}</span> 
                    @enderror
                </div>

                <!-- Harga Anak Nonpaket -->
                <div>
                    <label for="harga_anak_nonpaket" class="block text-lg font-semibold text-gray-800">Harga Anak (Nonpaket)</label>
                    <input type="number" name="harga_anak_nonpaket" id="harga_anak_nonpaket" value="{{ old('harga_anak_nonpaket', $destinasi->harga_anak_nonpaket) }}" class="mt-2 w-full p-3 border border-gray-300 rounded-lg" required>
                    @error('harga_anak_nonpaket') 
                        <span class="text-red-500 text-sm">{{ $message }}</span> 
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="flex justify-center mt-8">
                    <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition duration-300">
                        Update Destinasi
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
