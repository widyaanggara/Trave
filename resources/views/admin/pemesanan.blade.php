@extends('components.layout')

@section('content')

<div class="container mx-auto px-6 py-10">
    <h1 class="text-4xl font-extrabold text-gray-800 mb-10">Daftar Pemesan</h1>

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-200 text-gray-700">
                <tr>
                    <th class="py-3 px-6 text-left text-sm font-medium">No</th>
                    <th class="py-3 px-6 text-left text-sm font-medium">Nama</th>
                    <th class="py-3 px-6 text-left text-sm font-medium">Email</th>
                    <th class="py-3 px-6 text-left text-sm font-medium">Tanggal Pemesanan</th>
                    <th class="py-3 px-6 text-left text-sm font-medium">Destinasi</th>
                    <th class="py-3 px-6 text-left text-sm font-medium">Status</th>
                    <th class="py-3 px-6 text-left text-sm font-medium">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-gray-700 text-sm">
                <!-- Hardcoded Sample Data -->
                <tr class="border-b border-gray-200">
                    <td class="py-4 px-6">1</td>
                    <td class="py-4 px-6">John Doe</td>
                    <td class="py-4 px-6">john@example.com</td>
                    <td class="py-4 px-6">10 Sep 2023</td>
                    <td class="py-4 px-6">Bali</td>
                    <td class="py-4 px-6">
                        <span class="px-2 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700">
                            Confirmed
                        </span>
                    </td>
                    <td class="py-4 px-6">
                        <a href="{{ route('pemesanan.show') }}" class="text-blue-500 hover:text-blue-700">Lihat</a>
                    </td>
                </tr>
                <tr class="border-b border-gray-200">
                    <td class="py-4 px-6">2</td>
                    <td class="py-4 px-6">Jane Smith</td>
                    <td class="py-4 px-6">jane@example.com</td>
                    <td class="py-4 px-6">12 Sep 2023</td>
                    <td class="py-4 px-6">Jakarta</td>
                    <td class="py-4 px-6">
                        <span class="px-2 py-1 rounded-full text-xs font-semibold bg-yellow-100 text-yellow-700">
                            Pending
                        </span>
                    </td>
                    <td class="py-4 px-6">
                        <a href="{{ route('pemesanan.show') }}" class="text-blue-500 hover:text-blue-700">Lihat</a>
                    </td>
                </tr>
                <tr class="border-b border-gray-200">
                    <td class="py-4 px-6">3</td>
                    <td class="py-4 px-6">Mike Lee</td>
                    <td class="py-4 px-6">mike@example.com</td>
                    <td class="py-4 px-6">14 Sep 2023</td>
                    <td class="py-4 px-6">Lombok</td>
                    <td class="py-4 px-6">
                        <span class="px-2 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700">
                            Confirmed
                        </span>
                    </td>
                    <td class="py-4 px-6">
                        <a href="{{ route('pemesanan.show') }}" class="text-blue-500 hover:text-blue-700">Lihat</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Pagination Placeholder -->
    <div class="mt-6 flex justify-center">
        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                &laquo;
            </a>
            <a href="#" class="z-10 bg-blue-50 border-blue-500 text-blue-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                1
            </a>
            <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                2
            </a>
            <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                3
            </a>
            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                &raquo;
            </a>
        </nav>
    </div>
</div>

@endsection
