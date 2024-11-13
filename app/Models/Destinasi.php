<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinasi extends Model
{
    use HasFactory;

    protected $table = 'destinasi';

    protected $primaryKey = 'id_destinasi';
    public $incrementing = true; // Set auto-increment jika ingin

    protected $fillable = [
        'nama_destinasi',
        'alamat',
        'description',
        'thumbnail',
        'galeri_1',
        'galeri_2',
        'galeri_3',
        'kategori',  // Kolom kategori langsung ada di table destinasi
        'sub_judul',
        'duration',
        'harga_dewasa_paket',
        'harga_anak_paket',
        'harga_dewasa_nonpaket',
        'harga_anak_nonpaket',
    ];

}
