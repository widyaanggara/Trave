<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $table = 'pemesanan';
    protected $primaryKey = 'id_pemesanan';
    protected $fillable = [
        'user_id',
        'destinasi_id',
        'date_order',
        'date_travel',
        'time_travel',
        'jumlah_dewasa',
        'jumlah_anak',
        'jumlah_pembayaran',
        'paket',
        'status',
    ];

    // Relasi ke model Destinasi
    public function destinasi()
    {
        return $this->belongsTo(Destinasi::class, 'destinasi_id', 'id_destinasi');
    }
}
