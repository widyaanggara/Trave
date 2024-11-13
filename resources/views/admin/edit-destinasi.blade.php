@extends('components.layout')

@section('content')

<div class="container mx-auto  px-0 lg:px-6 py-10">
    <div class="bg-white shadow-lg rounded-lg p-8 sm:p-10 md:p-12 lg:w-2/3 mx-auto">
        <h2 class="text-3xl font-semibold text-blue-600 mb-8 text-center">Edit Informasi Destinasi</h2>

        <form>
            <div class="mb-6">
                <label for="name" class="block text-base font-medium text-gray-700 mb-2">Nama Tempat</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    required 
                    class="w-full border border-gray-300 rounded-lg p-3 text-gray-800 placeholder-gray-400 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" 
                    placeholder="Nama Tempat Wisata"
                >
            </div>

            <div class="mb-6">
                <label for="address" class="block text-base font-medium text-gray-700 mb-2">Alamat</label>
                <input 
                    type="text" 
                    id="address" 
                    name="address" 
                    required 
                    class="w-full border border-gray-300 rounded-lg p-3 text-gray-800 placeholder-gray-400 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" 
                    placeholder="Alamat lengkap destinasi"
                >
            </div>

            <div class="mb-6">
                <label for="description" class="block text-base font-medium text-gray-700 mb-2">Deskripsi</label>
                <textarea 
                    id="description" 
                    name="description" 
                    rows="4" 
                    required 
                    class="w-full border border-gray-300 rounded-lg p-3 text-gray-800 placeholder-gray-400 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" 
                    placeholder="Deskripsi tentang tempat wisata ini"
                ></textarea>
            </div>

            <!-- Thumbnail Image with Preview -->
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
                <!-- Preview Thumbnail -->
                <img id="thumbnail-preview" src="{{ asset('images/thumbnail photo.png') }}" alt="Preview Thumbnail" class="mt-4 w-24 h-24 object-cover rounded-lg">
            </div>

            <!-- Gallery Images in Grid with Preview -->
            <div class="mb-6">
                <label class="block text-base font-medium text-gray-700 mb-2">Galeri (3 Foto)</label>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                    <!-- Gallery Image 1 -->
                    <div>
                        <input 
                            type="file" 
                            name="gallery[]" 
                            accept="image/*" 
                            class="w-full border border-gray-300 rounded-lg p-2.5 text-gray-800 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                        >
                        <img id="gallery-preview-1" src="{{ asset('images/galery.png') }}" alt="Preview Galeri 1" class="mt-2 w-full h-28 object-cover rounded-lg">
                    </div>
                    
                    <!-- Gallery Image 2 -->
                    <div>
                        <input 
                            type="file" 
                            name="gallery[]" 
                            accept="image/*" 
                            class="w-full border border-gray-300 rounded-lg p-2.5 text-gray-800 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                        >
                        <img id="gallery-preview-2" src="{{ asset('images/galery.png') }}" alt="Preview Galeri 2" class="mt-2 w-full h-28 object-cover rounded-lg">
                    </div>

                    <!-- Gallery Image 3 -->
                    <div>
                        <input 
                            type="file" 
                            name="gallery[]" 
                            accept="image/*" 
                            class="w-full border border-gray-300 rounded-lg p-2.5 text-gray-800 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                        >
                        <img id="gallery-preview-3" src="{{ asset('images/galery.png') }}" alt="Preview Galeri 3" class="mt-2 w-full h-28 object-cover rounded-lg">
                    </div>
                </div>
            </div>

            <div class="mb-6">
                <label for="category" class="block text-base font-medium text-gray-700 mb-2">Kategori</label>
                <select 
                    id="category" 
                    name="category" 
                    required 
                    class="w-full border border-gray-300 rounded-lg p-3 text-gray-800 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                >
                    <option value="">Pilih Kategori</option>
                    <option value="pantai">Pantai</option>
                    <option value="pura">Pura</option>
                    <option value="artmarket">Art Market</option>
                    <option value="petualanganalam">Petualangan Alam</option>
                    <option value="snorkeling">Snorkeling</option>
                </select>
            </div>

            {{--  --}}
            <div>
                <div class="mb-6">
                    <label for="sub" class="block text-base font-medium text-gray-700 mb-2">Sub Judul</label>
                    <input 
                        type="text" 
                        id="sub" 
                        name="sub" 
                        required 
                        class="w-full border border-gray-300 rounded-lg p-3 text-gray-800 placeholder-gray-400 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" 
                        placeholder="Sub Nama Tempat Wisata"
                    >
                </div>

                <div class="mb-6">
                    <label for="duration" class="block text-base font-medium text-gray-700 mb-2">Duration</label>
                    <input 
                        type="text" 
                        id="duration" 
                        name="duration" 
                        required 
                        class="w-full border border-gray-300 rounded-lg p-3 text-gray-800 placeholder-gray-400 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" 
                        placeholder="Durasi tempat wisata"
                    >
                </div>

                {{-- harga Dengan Guide --}}
                <div class="font-bold text-xl">Harga</div>
                
                <div class="font-semibold mt-2">Harga paket guide</div>
                <div class="mb-1">
                    <label for="hargaguidedewasa" class="block text-base font-medium text-gray-700 mb-2">Dewasa</label>
                    <input 
                        type="number" 
                        id="hargaguidedewasa" 
                        name="hargaguidedewasa" 
                        required 
                        class="w-full border border-gray-300 rounded-lg p-3 text-gray-800 placeholder-gray-400 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" 
                        placeholder="Harga dewasa dengan guide"
                    >
                </div>
                <div class="mb-6">
                    <label for="hargaguideanak" class="block text-base font-medium text-gray-700 mb-2">Anak-anak</label>
                    <input 
                        type="number" 
                        id="hargaguideanak" 
                        name="hargaguideanak" 
                        required 
                        class="w-full border border-gray-300 rounded-lg p-3 text-gray-800 placeholder-gray-400 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" 
                        placeholder="Harga anak-anak dengan guide"
                    >
                </div>

                <div class="font-semibold mt-2">Harga tanpa paket guide</div>
                <div class="mb-1">
                    <label for="hargatanpadewasa" class="block text-base font-medium text-gray-700 mb-2">Dewasa</label>
                    <input 
                        type="number" 
                        id="hargatanpadewasa" 
                        name="hargatanpadewasa" 
                        required 
                        class="w-full border border-gray-300 rounded-lg p-3 text-gray-800 placeholder-gray-400 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" 
                        placeholder="Harga dewasa tanpa guide"
                    >
                </div>
                <div class="mb-6">
                    <label for="hargatanpaanak" class="block text-base font-medium text-gray-700 mb-2">Anak-anak</label>
                    <input 
                        type="number" 
                        id="hargatanpaanak" 
                        name="hargatanpaanak" 
                        required 
                        class="w-full border border-gray-300 rounded-lg p-3 text-gray-800 placeholder-gray-400 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" 
                        placeholder="Harga anak-anak tanpa guide"
                    >
                </div>
            </div>

            {{-- button --}}
            <div class="flex justify-between">
                <a href="{{ route('destinasi.index') }}" class="bg-gray-300 text-gray-800 px-4 py-3 rounded-lg hover:bg-gray-400 transition-colors duration-300">
                    Batal
                </a>
                <button 
                    type="submit" 
                    class="bg-blue-500 text-white px-6 py-3 rounded-lg font-semibold text-lg flex items-center transition-colors duration-300 hover:bg-blue-600 focus:ring-4 focus:ring-blue-200"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M5 20h14v-2H5v2zm0-4h14v-2H5v2zm0-4h14v-2H5v2zm0-4h14V6H5v2z"/></svg>
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
