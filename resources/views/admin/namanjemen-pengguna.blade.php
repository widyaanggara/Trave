@extends('components.layout')
@section('content')

<div class="container mx-auto px-6">
    <h1 class="text-4xl font-extrabold text-gray-800 mb-8">Manajemen Pengguna</h1>
    
    <!-- Pencarian -->
    <div class="mb-4">
        <input type="text" placeholder="Cari pengguna..." 
               class="w-full md:w-1/3 p-2 border border-gray-300 rounded-lg">
    </div>
    
    <!-- Total pengguna -->
    <p class="text-sm text-gray-600 mb-4">Total Pengguna: 2</p>
    
    <!-- Tabel Daftar Pengguna -->
    <div class="bg-white shadow-xl rounded-lg overflow-hidden mb-10">
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-100 border-b border-gray-200">
                    <tr>
                        <th class="py-4 px-6 text-left text-gray-700 font-semibold uppercase text-sm">Foto</th>
                        <th class="py-4 px-6 text-left text-gray-700 font-semibold uppercase text-sm">Nama</th>
                        <th class="py-4 px-6 text-left text-gray-700 font-semibold uppercase text-sm">Email</th>
                        <th class="py-4 px-6 text-left text-gray-700 font-semibold uppercase text-sm">Status</th>
                        <th class="py-4 px-6 text-left text-gray-700 font-semibold uppercase text-sm">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contoh baris pengguna -->
                    <tr class="hover:bg-gray-50 transition duration-200">
                        <td class="py-5 px-6 border-b border-gray-200 text-gray-700">
                            <div class="flex items-center">
                                <img class="w-12 h-12 rounded-full object-cover mr-4" 
                                     src="https://via.placeholder.com/150" 
                                     alt="Foto Profil">
                            </div>
                        </td>
                        <td class="py-5 px-6 border-b border-gray-200 text-gray-700 font-medium">Ahmad Yani</td>
                        <td class="py-5 px-6 border-b border-gray-200 text-gray-700">ahmad@example.com</td>
                        <td class="py-5 px-6 border-b border-gray-200 text-gray-700">
                            <span class="bg-green-100 text-green-700 px-2 py-1 rounded-full text-xs">Aktif</span>
                        </td>
                        <td class="py-5 px-6 border-b border-gray-200 text-gray-700 flex space-x-2">
                            <button class="text-blue-500 hover:underline">Edit</button>
                            <button class="text-red-500 hover:underline">Hapus</button>
                        </td>
                    </tr>
                    <!-- Tambahkan baris lainnya sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
