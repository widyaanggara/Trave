<nav class='w-full h-20 flex flex-col justify-center items-center fixed bg-[#ffffff] z-50'>
  <div class='w-[90%] max-w-[1200px] flex justify-between items-center'>
      <div class='flex items-center justify-center gap-2'>
          <!-- Hamburger -->
          <div id="hamburger" class='lg:hidden flex flex-col cursor-pointer gap-1 md:mt-1'>
              <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#000000">
                  <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/>
              </svg>
          </div>

          <!-- Logo KOLAB -->
          <div class='hidden md:block'>
              <a class='navbar-link' href="#">
                  <div class='flex justify-start items-center'>
                      <div class='font-bold text-2xl md:text-4xl text-[#22c55e]'>
                          Trave
                      </div>
                  </div>
              </a>
          </div>
      </div>

      <div class='mx-auto md:hidden'>
          <a class='navbar-link' href="#">
              <div class='flex justify-start items-center'>
                  <div class='font-bold text-2xl md:text-4xl text-[#22c55e]'>
                      Trave
                  </div>
              </div>
          </a>
      </div>

      <!-- Link navigasi -->
      <div class='hidden lg:flex h-full'>
          <a class='font-medium text-base px-4 py-2 hover:bg-[#e4e4e4] transition-colors duration-200 rounded-3xl' href="/">Home</a>
          <a class='font-medium text-base px-4 py-2 hover:bg-[#e4e4e4] transition-colors duration-200 rounded-3xl' href="">About</a>
          <a class='font-medium text-base px-4 py-2 hover:bg-[#e4e4e4] transition-colors duration-200 rounded-3xl' href="">Tours</a>
      </div>

      <!-- Sign In Btn -->
      <div class="hidden md:block">
        @guest
            {{-- Tampilkan tombol Sign In jika user belum login --}}
            <a href="{{ route('login') }}">
                <div class="px-5 py-2 bg-[#191919] text-white rounded-3xl hover:bg-[#3f3f3f] transition-colors duration-200 cursor-pointer">
                    <span class="font-medium text-base">Sign In</span>
                </div>
            </a>
        @endguest

        @auth
            {{-- Tampilkan ikon user jika user sudah login --}}
            <a href="{{ route('profile') }}"> {{-- Arahkan ke halaman profil atau halaman lain yang sesuai --}}
                <img class="w-9 cursor-pointer" src="{{ asset('images/user.png') }}" alt="user">
            </a>
        @endauth
    </div>

    <div class="md:hidden">
        @guest
            {{-- Tampilkan tombol Sign In di layar kecil jika user belum login --}}
            <a href="{{ route('login') }}">
                <div class="px-5 py-2 bg-[#191919] text-white rounded-3xl hover:bg-[#3f3f3f] transition-colors duration-200 cursor-pointer">
                    <span class="font-medium text-base">Sign In</span>
                </div>
            </a>
        @endguest

        @auth
            {{-- Tampilkan ikon user di layar kecil jika user sudah login --}}
            <a href="{{ route('profile') }}">
                <img class="w-9 cursor-pointer" src="{{ asset('images/user.png') }}" alt="user">
            </a>
        @endauth
    </div>

  </div>

  <!-- Sidebar -->
  <div id="sidebar" class="fixed top-0 left-0 bg-white z-40 h-full w-72 transform -translate-x-full transition-transform duration-300 ease-in-out">
      <div class="flex flex-col h-full p-5">
          <div class="flex justify-between items-center">
            <!-- Logo Sidebar -->
            <div class='flex items-start mb-6'>
              <div class='font-bold text-2xl text-[#22c55e]'>
                  Trave
              </div>
            </div>

            <!-- Close Button -->
            <button id="close-sidebar" class="mb-4 text-black text-xl flex items-center hover:text-orange-600">
              <span class="material-symbols-outlined">close</span>
          </button>
          </div>
          <!-- Navigation Links -->
          <a class="font-medium text-base py-2" href="">Home</a>
          <a class="font-medium text-base py-2" href="">About</a>
          <a class="font-medium text-base py-2" href="">Tours</a>
          @auth
            <form method="POST" action="{{ route('logout') }}" class="mt-auto">
                @csrf
                <button type="submit" class="w-full px-4 py-2 bg-[#191919] text-white rounded-3xl hover:bg-[#3f3f3f] transition-colors duration-200 flex justify-center items-center text-sm">
                    Log Out <span class="material-symbols-outlined ml-2" style="font-size: 1.2rem">logout</span>
                </button>
            </form>
        @endauth
      </div>
  </div>
</nav>



@vite('resources/js/navbar.js')
