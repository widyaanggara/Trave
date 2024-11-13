<div class="border shadow-md rounded-md p-6 lg:sticky top-20 self-start">
    <div class="font-medium mb-3">Navigasi Profil</div>
    <div class="flex flex-col gap-3">
        <a href="/profile" class="flex items-center hover:bg-gray-300 transition-colors rounded-md py-2 px-3">
            <span class="material-symbols-outlined" style="font-size: 1.2rem">person</span>
            <div class="ml-2">Profil Saya</div>
        </a>
        <a href="{{ route('riwayat') }}" class="flex items-center hover:bg-gray-300 transition-colors rounded-md py-2 px-3">
            <span class="material-symbols-outlined" style="font-size: 1.2rem">receipt_long</span>
            <div class="ml-2">Riwayat Pembelian</div>
        </a>
        
        <div class="bg-gray-300 h-[1px]"></div>

        <!-- Form Logout -->
        <form method="POST" action="{{ route('logout') }}" class="flex items-center hover:bg-gray-300 transition-colors rounded-md py-2 px-3">
            @csrf
            
            <button type="submit" class="flex items-center w-full text-left">
                <span class="material-symbols-outlined" style="font-size: 1.2rem">logout</span>
                <div class="ml-2">Log Out</div>
            </button>
        </form>
    </div>
</div>
