<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;

use Illuminate\Http\Request;

class DestinasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data destinasi dari database
        $destinasi = Destinasi::all();

        // Mengirim data destinasi ke view
        return view('admin.destinasi', compact('destinasi'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Ambil semua kategori untuk dipakai dalam form
        return view('admin.create-destinasi');
    }


    /**
     * Store a newly created resource in storage.
     */


     public function store(Request $request)
     {
         // Validasi data yang diinput
         $request->validate([
             'nama_destinasi' => 'required|string|max:50',
             'alamat' => 'required|string|max:100',
             'description' => 'required|string|max:255',
             'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
             'galeri_1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
             'galeri_2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
             'galeri_3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
             'kategori' => 'required|string|max:50',
             'sub_judul' => 'required|string|max:100',
             'duration' => 'required|string|max:5',
             'harga_dewasa_paket' => 'required|integer',
             'harga_anak_paket' => 'required|integer',
             'harga_dewasa_nonpaket' => 'required|integer',
             'harga_anak_nonpaket' => 'required|integer',
         ]);

         // Upload gambar
         $thumbnailPath = $request->file('thumbnail')->store('images/destinasi', 'public');

         // Jika ada gambar galeri
         $galeri1Path = $request->hasFile('galeri_1') ? $request->file('galeri_1')->store('images/destinasi', 'public') : null;
         $galeri2Path = $request->hasFile('galeri_2') ? $request->file('galeri_2')->store('images/destinasi', 'public') : null;
         $galeri3Path = $request->hasFile('galeri_3') ? $request->file('galeri_3')->store('images/destinasi', 'public') : null;

         // Simpan data ke database
         Destinasi::create([
             'nama_destinasi' => $request->input('nama_destinasi'),
             'alamat' => $request->input('alamat'),
             'description' => $request->input('description'),
             'thumbnail' => $thumbnailPath,
             'galeri_1' => $galeri1Path,
             'galeri_2' => $galeri2Path,
             'galeri_3' => $galeri3Path,
             'kategori' => $request->input('kategori'),
             'sub_judul' => $request->input('sub_judul'),
             'duration' => $request->input('duration'),
             'harga_dewasa_paket' => $request->input('harga_dewasa_paket'),
             'harga_anak_paket' => $request->input('harga_anak_paket'),
             'harga_dewasa_nonpaket' => $request->input('harga_dewasa_nonpaket'),
             'harga_anak_nonpaket' => $request->input('harga_anak_nonpaket'),
         ]);

         // Redirect ke halaman destinasi dengan pesan sukses
         return redirect()->route('destinasi.index')->with('success', 'Destinasi berhasil ditambahkan!');
     }

    /**
     * Display the specified resource.
     */
    // Fungsi untuk menampilkan halaman detail destinasi
// DestinasiController.php

public function show($id_destinasi)
{
    // Ambil data destinasi berdasarkan id_destinasi
    $destination = Destinasi::findOrFail($id_destinasi);

    // Tampilkan halaman detail dengan data destinasi
    return view('admin.detail-destinasi', compact('destination'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(/*string $id*/)
    {
        // Link ke halaman form edit destinasi
        return view('admin.edit-destinasi');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}