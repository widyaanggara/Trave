<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside id="sidebar" class="fixed w-64 bg-white shadow-lg z-50 h-full lg:block hidden">
            <!-- Close Button for Mobile -->
            <button id="closeSidebarButton" class="absolute top-4 right-4 text-gray-600 lg:hidden">
                <i class="bi bi-x-lg"></i>
            </button>

            <div class="px-6 py-4 flex items-center">
                <img src="logo.svg" alt="Logo" class="w-8 h-8 mr-3">
                <span class="text-lg font-semibold text-purple-600">Dashboard</span>
            </div>
            <nav class="mt-4 space-y-1">
                <a href="/admin" class="flex items-center px-6 py-3  font-semibold  {{ request()->is('/admin') ? 'text-purple-600' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M4 4h5v12H4zM11 8h5v8h-5zM11 4h5v3h-5z"></path>
                    </svg>
                    Dashboard
                </a>
                <a href="{{ route('destinasi.index') }}" class="flex items-center px-6 py-3 text-gray-600 {{ request()->is('destinasi') ? 'text-purple-600' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 12a5 5 0 100-10 5 5 0 000 10zM2 16a8 8 0 0116 0H2z"></path>
                    </svg>
                    Destinasi
                </a>
                {{-- <a href="{{ route('manajemen.index') }}" class="flex items-center px-6 py-3 text-gray-600{{ request()->is('pemesanan') ? 'text-purple-600' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 6h16v2H2zM4 12h12v2H4zM6 16h8v2H6z"></path>
                    </svg>
                  Manajemen Pengguna
                </a> --}}
                {{-- <a href="{{ route('pemesanan.index') }}" class="flex items-center px-6 py-3 text-gray-600{{ request()->is('pemesanan') ? 'text-purple-600' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 6h16v2H2zM4 12h12v2H4zM6 16h8v2H6z"></path>
                    </svg>
                  Manajemen Pemesanan
                </a> --}}
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex flex-col flex-grow lg:ml-64">
            <!-- Navbar -->
            <header class="fixed w-full flex items-center justify-between px-6 py-4 bg-white shadow z-40 top-0 left-0">
                <!-- Mobile Menu Button -->
                <button id="menuButton" class="text-gray-600 lg:hidden">
                    <i class="bi bi-list"></i>
                </button>

                <!-- Centered Search Bar -->
                <div class="flex-grow flex justify-center lg:ml-0">
                    <input type="text" placeholder="Search..." class="w-full max-w-md px-4 py-2 bg-gray-100 border rounded-md focus:outline-none">
                </div>

                <div class="flex items-center space-x-4">
                    <button class="text-gray-600">
                        <i class="bi bi-bell"></i>
                    </button>
                    <div class="relative flex items-center">
                        <img id="profileImage" class="h-10 w-10 rounded-full cursor-pointer" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        <div id="profileDropdown" class="fixed right-4 top-16 w-48 bg-white rounded-md shadow-lg hidden">
                            <a href="/akun" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Account Settings</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</a>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Content Area -->
            <main class="flex-grow p-6 mt-16 bg-gray-200">
                <div class="w-full h-full rounded-lg">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    @vite('resources/js/layout.js')
</body>
</html>
