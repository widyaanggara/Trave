<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destinasi;
use App\Models\Pemesanan;

class PemesanantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
      return view('admin.pemesanan'); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'destinasi_id' => 'required|exists:destinasi,id_destinasi',
            'date_travel' => 'required|date',
            'time_travel' => 'required|date_format:H:i',
            'jumlah_dewasa' => 'required|integer|min:0',
            'jumlah_anak' => 'required|integer|min:0',
            'paket' => 'required|in:guide,nonguide',
        ]);

        // Ambil data destinasi untuk mendapatkan harga
        $destinasi = Destinasi::findOrFail($validated['destinasi_id']);

        // Hitung jumlah pembayaran
        if ($validated['paket'] === 'guide') {
            $harga_dewasa = $destinasi->harga_dewasa_paket;
            $harga_anak = $destinasi->harga_anak_paket;
        } else {
            $harga_dewasa = $destinasi->harga_dewasa_nonpaket;
            $harga_anak = $destinasi->harga_anak_nonpaket;
        }

        $jumlah_pembayaran = ($validated['jumlah_dewasa'] * $harga_dewasa) + ($validated['jumlah_anak'] * $harga_anak);

        // Simpan ke tabel pemesanan
        $pemesanan = new Pemesanan();
        $pemesanan->user_id = $validated['user_id'];
        $pemesanan->destinasi_id = $validated['destinasi_id'];
        $pemesanan->date_order = now()->toDateString(); // Default ke tanggal hari ini
        $pemesanan->date_travel = $validated['date_travel'];
        $pemesanan->time_travel = $validated['time_travel'];
        $pemesanan->jumlah_dewasa = $validated['jumlah_dewasa'];
        $pemesanan->jumlah_anak = $validated['jumlah_anak'];
        $pemesanan->jumlah_pembayaran = $jumlah_pembayaran;
        $pemesanan->paket = $validated['paket'];
        $pemesanan->status = 'waiting'; // Default ke 'waiting'
        $pemesanan->save();

        // Redirect ke halaman sukses atau tujuan tertentu
        return redirect()->route('pemesanant.payment')->with('success', 'Destinasi berhasil ditambahkan!');
    }

    public function payment()
    {
        return view('pages.payment');
    }

    /**
     * Display the specified resource.
     */
    public function show(/*string $id*/)
    {
        return view('admin.detail-pemesanan'); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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