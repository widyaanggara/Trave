@extends('components.layout')

@section('content')

<div class="container mx-auto px-0 lg:px-6 py-10">
    <div class="bg-white shadow-lg rounded-lg p-8 sm:p-10 md:p-12 lg:w-2/3 mx-auto">
        <h2 class="text-3xl font-semibold text-blue-600 mb-8 text-center">Tambah Tempat Wisata</h2>

        {{-- Error message display --}}
        @if($errors->any())
        <div class="alert alert-danger mb-6 p-4 bg-red-100 text-red-700 rounded-lg">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form  action="{{ route('destinasi.store') }}" method="POST" enctype="multipart/form-data" >
            @csrf

            <div class="mb-6">
                <label for="name" class="block text-base font-medium text-gray-700 mb-2">Nama Tempat</label>
                <input
                    type="text"
                    id="name"
                    name="nama_destinasi"
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
                    name="alamat"
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
                    </div>

                    <!-- Gallery Image 2 -->
                    <div>
                        <input
                            type="file"
                            name="galeri_2"
                            accept="image/*"
                            class="w-full border border-gray-300 rounded-lg p-2.5 text-gray-800 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                        >
                    </div>

                    <!-- Gallery Image 3 -->
                    <div>
                        <input
                            type="file"
                            name="galeri_3"
                            accept="image/*"
                            class="w-full border border-gray-300 rounded-lg p-2.5 text-gray-800 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                        >
                    </div>
                </div>
            </div>

            <div class="mb-6">
                <label for="kategori" class="block text-base font-medium text-gray-700 mb-2">Kategori</label>
                <input
                    type="text"
                    id="kategori"
                    name="kategori"
                    required
                    class="w-full border border-gray-300 rounded-lg p-3 text-gray-800 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                />
            </div>


            <div class="mb-6">
                <label for="sub_judul" class="block text-base font-medium text-gray-700 mb-2">Sub Judul</label>
                <input
                    type="text"
                    id="sub_judul"
                    name="sub_judul"
                    required
                    class="w-full border border-gray-300 rounded-lg p-3 text-gray-800 placeholder-gray-400 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                    placeholder="Sub Nama Tempat Wisata"
                >
            </div>

            <div class="mb-6">
                <label for="duration" class="block text-base font-medium text-gray-700 mb-2">Durasi</label>
                <input
                    type="text"
                    id="duration"
                    name="duration"
                    required
                    class="w-full border border-gray-300 rounded-lg p-3 text-gray-800 placeholder-gray-400 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                    placeholder="Durasi tempat wisata"
                >
            </div>

            <!-- Harga dengan guide -->
            <div class="mb-6">
                <label class="font-semibold text-lg">Harga Paket Guide</label>
                <div class="mt-2">
                    <label for="harga_dewasa_paket" class="block text-base font-medium text-gray-700 mb-2">Dewasa</label>
                    <input
                        type="number"
                        id="harga_dewasa_paket"
                        name="harga_dewasa_paket"
                        required
                        class="w-full border border-gray-300 rounded-lg p-3 text-gray-800 placeholder-gray-400 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                        placeholder="Harga dewasa dengan guide"
                    >
                </div>
                <div class="mt-2">
                    <label for="harga_anak_paket" class="block text-base font-medium text-gray-700 mb-2">Anak-anak</label>
                    <input
                        type="number"
                        id="harga_anak_paket"
                        name="harga_anak_paket"
                        required
                        class="w-full border border-gray-300 rounded-lg p-3 text-gray-800 placeholder-gray-400 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                        placeholder="Harga anak-anak dengan guide"
                    >
                </div>
            </div>

            <!-- Harga tanpa guide -->
            <div class="mb-6">
                <label class="font-semibold text-lg">Harga Tanpa Guide</label>
                <div class="mt-2">
                    <label for="harga_dewasa_nonpaket" class="block text-base font-medium text-gray-700 mb-2">Dewasa</label>
                    <input
                        type="number"
                        id="harga_dewasa_nonpaket"
                        name="harga_dewasa_nonpaket"
                        required
                        class="w-full border border-gray-300 rounded-lg p-3 text-gray-800 placeholder-gray-400 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                        placeholder="Harga dewasa tanpa guide"
                    >
                </div>
                <div class="mt-2">
                    <label for="harga_anak_nonpaket" class="block text-base font-medium text-gray-700 mb-2">Anak-anak</label>
                    <input
                        type="number"
                        id="harga_anak_nonpaket"
                        name="harga_anak_nonpaket"
                        required
                        class="w-full border border-gray-300 rounded-lg p-3 text-gray-800 placeholder-gray-400 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                        placeholder="Harga anak-anak tanpa guide"
                    >
                </div>
            </div>

            <!-- Submit button -->
            <div class="text-center">
                <button
                    type="submit"
                    class="bg-blue-600 text-white px-6 py-2 rounded-lg shadow hover:bg-blue-700 transition-all duration-300"
                >
                    Tambah Tempat Wisata
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
