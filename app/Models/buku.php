<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class buku extends Model
{
    // Nama tabel yang sesuai di database
    protected $table = 'buku';

    // Kolom yang dapat diisi (disesuaikan dengan kolom tabel Anda)
    protected $fillable = [
        'name',       // Nama Penulis
        'title',      // Judul
        'harga',      // Harga
        'kategori',   // Kategori
        'deskripsi',  // Deskripsi
        'image',      // URL Gambar
        'date'        // Tanggal
    ];

    // Jika kolom created_at dan updated_at tidak ada di tabel, atur ke false
    public $timestamps = false;

    // Accessor to get the date in Carbon format
    public function getDateAttribute($value)
    {
        return Carbon::parse($value);  // Converts the string to Carbon instance
    }
}
