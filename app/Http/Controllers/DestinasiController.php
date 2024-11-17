<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use Illuminate\Support\Facades\Storage;

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
    public function indexuser()
    {
        $destinasi = Destinasi::all(); // Fetch all destinations
        return view('pages.home', compact('destinasi')); // Pass the data to the view
    }
    
    public function show($id_destinasi)
{
    // Ambil data destinasi berdasarkan id_destinasi
    $destination = Destinasi::findOrFail($id_destinasi);

    // Tampilkan halaman detail dengan data destinasi
    return view('admin.detail-destinasi', compact('destination'));
}

    public function showDestinations()
    {
        // Fetch destinations from the database
        $destinasi = Destinasi::all(); // or any query to get the data

        // Pass the destinations to the view
        return view('pages.home', compact('destinasi'));
    }
    public function showDetail($id_destinasi)
    {
        // Fetch destinasi berdasarkan ID
        $destination = Destinasi::findOrFail($id_destinasi);

        // Pass destinasi ke view
        return view('pages.detail', compact('destination'));
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



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_destinasi)
    {
        // Ambil data destinasi berdasarkan id_destinasi
        $destinasi = Destinasi::findOrFail($id_destinasi);

        // Kirim data ke view edit
        return view('admin.edit-destinasi', compact('destinasi'));
    }

    /**
     * Update the specified resource in storage.
     */
  /**
 * Update the specified resource in storage.
 */
public function update(Request $request, $id_destinasi)
{
    // Validasi data yang diinput
    $request->validate([
        'nama_destinasi' => 'required|string|max:50',
        'alamat' => 'required|string|max:100',
        'description' => 'required|string|max:255',
        'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
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

    // Ambil data destinasi yang akan diupdate
    $destination = Destinasi::findOrFail($id_destinasi);

    // Update gambar jika ada file baru yang diupload
    if ($request->hasFile('thumbnail')) {
        $thumbnailPath = $request->file('thumbnail')->store('images/destinasi', 'public');
        $destination->thumbnail = $thumbnailPath;
    }
    if ($request->hasFile('galeri_1')) {
        $galeri1Path = $request->file('galeri_1')->store('images/destinasi', 'public');
        $destination->galeri_1 = $galeri1Path;
    }
    if ($request->hasFile('galeri_2')) {
        $galeri2Path = $request->file('galeri_2')->store('images/destinasi', 'public');
        $destination->galeri_2 = $galeri2Path;
    }
    if ($request->hasFile('galeri_3')) {
        $galeri3Path = $request->file('galeri_3')->store('images/destinasi', 'public');
        $destination->galeri_3 = $galeri3Path;
    }

    // Update data lainnya
    $destination->update([
        'nama_destinasi' => $request->input('nama_destinasi'),
        'alamat' => $request->input('alamat'),
        'description' => $request->input('description'),
        'kategori' => $request->input('kategori'),
        'sub_judul' => $request->input('sub_judul'),
        'duration' => $request->input('duration'),
        'harga_dewasa_paket' => $request->input('harga_dewasa_paket'),
        'harga_anak_paket' => $request->input('harga_anak_paket'),
        'harga_dewasa_nonpaket' => $request->input('harga_dewasa_nonpaket'),
        'harga_anak_nonpaket' => $request->input('harga_anak_nonpaket'),
    ]);

    // Redirect ke halaman destinasi dengan pesan sukses
    return redirect()->route('destinasi.index')->with('success', 'Destinasi berhasil diperbarui!');

}


    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id_destinasi)
    {
        // Ambil data destinasi berdasarkan id_destinasi
        $destination = Destinasi::findOrFail($id_destinasi);

        // Hapus file gambar jika ada
        if ($destination->thumbnail) {
            Storage::disk('public')->delete($destination->thumbnail);
        }
        if ($destination->galeri_1) {
            Storage::disk('public')->delete($destination->galeri_1);
        }
        if ($destination->galeri_2) {
            Storage::disk('public')->delete($destination->galeri_2);
        }
        if ($destination->galeri_3) {
            Storage::disk('public')->delete($destination->galeri_3);
        }


        // Hapus data destinasi dari database
        $destination->delete();

        // Redirect ke halaman destinasi dengan pesan sukses
        return redirect()->route('destinasi.index')->with('success', 'Destinasi berhasil dihapus!');
    }


    

    // Untuk kategori pura
    public function showDestinationsPura()
    {
        $destinasiPura = Destinasi::where('kategori', 'Pura')->get();
        return view('pages.kategori-pura', compact('destinasiPura'));
    }

    public function showDetailPura($id_destinasi)
    {
        $destinasiPura = Destinasi::findOrFail($id_destinasi);
        return view('pages.detail', compact('destinasiPura'));  // Mengarahkan ke view 'pages.detail'
    }

    // Untuk kategori pantai
    public function showDestinationsPantai()
    {
        $destinasiPantai = Destinasi::where('kategori', 'Pantai')->get();
        return view('pages.kategori-pantai', compact('destinasiPantai'));
    }

    public function showDetailPantai($id_destinasi)
    {
        $destinasiPantai = Destinasi::findOrFail($id_destinasi);
        return view('pages.detail', compact('destinasiPantai'));  // Mengarahkan ke view 'pages.detail'
    }

    // Untuk kategori artmarket
    public function showDestinationsArtmarket()
    {
        $destinasiArtmarket = Destinasi::where('kategori', 'Art Market')->get();
        return view('pages.kategori-artmarket', compact('destinasiArtmarket'));
    }

    public function showDetailArtmarket($id_destinasi)
    {
        $destinasiArtmarket = Destinasi::findOrFail($id_destinasi);
        return view('pages.detail', compact('destinasiArtmarket'));  // Mengarahkan ke view 'pages.detail'
    }

    // Untuk kategori alam
    public function showDestinationsAlam()
    {
        $destinasiAlam = Destinasi::where('kategori', 'Alam')->get();
        return view('pages.kategori-alam', compact('destinasiAlam'));
    }

    public function showDetailAlam($id_destinasi)
    {
        $destinasiAlam = Destinasi::findOrFail($id_destinasi);
        return view('pages.detail', compact('destinasiAlam'));  // Mengarahkan ke view 'pages.detail'
    }

    // Untuk kategori snorkeling
    public function showDestinationsSnorkeling()
    {
        $destinasiSnorkeling = Destinasi::where('kategori', 'Snorkeling')->get();
        return view('pages.kategori-snorkeling', compact('destinasiSnorkeling'));
    }

    public function showDetailSnorkeling($id_destinasi)
    {
        $destinasiSnorkeling = Destinasi::findOrFail($id_destinasi);
        return view('pages.detail', compact('destinasiSnorkeling'));  // Mengarahkan ke view 'pages.detail'
    }

    

    // End


}