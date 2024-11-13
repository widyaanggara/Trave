<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profil Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white shadow-md rounded-lg w-96 p-6">
            <!-- Foto Profil -->
            <div class="flex justify-center mb-4">
                <img src="https://via.placeholder.com/150" alt="User Profile" class="w-24 h-24 rounded-full object-cover">
            </div>

            <!-- Informasi Pengguna -->
            <div class="space-y-4">
                <!-- Username -->
                <div>
                    <label class="block text-gray-600 text-sm font-medium">Username</label>
                    <input type="text" value="username123" class="w-full mt-1 px-3 py-2 bg-gray-100 border border-gray-300 rounded-md" readonly>
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-gray-600 text-sm font-medium">Email</label>
                    <input type="email" value="user@example.com" class="w-full mt-1 px-3 py-2 bg-gray-100 border border-gray-300 rounded-md" readonly>
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-gray-600 text-sm font-medium">Password</label>
                    <input type="password" value="password123" class="w-full mt-1 px-3 py-2 bg-gray-100 border border-gray-300 rounded-md" readonly>
                </div>

                <!-- No HP -->
                <div>
                    <label class="block text-gray-600 text-sm font-medium">Nomor HP</label>
                    <input type="tel" value="+6281234567890" class="w-full mt-1 px-3 py-2 bg-gray-100 border border-gray-300 rounded-md" readonly>
                </div>
            </div>

            <!-- Tombol Edit dan Logout -->
            <div class="mt-6 flex justify-between">
                <button class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
                    Edit Profil
                </button>
                <button class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 transition">
                    Logout
                </button>
            </div>
        </div>
    </div>

</body>
</html>