<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sale extends Model
{
    use HasFactory;

    protected $table = 'sale'; // pastikan nama tabel sesuai
    protected $fillable = ['user_id', 'book_id', 'quantity', 'total_price'];
    public $timestamps = false;

    // Relasi dengan User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relasi dengan Buku (periksa nama model Buku)
    public function book()
    {
        return $this->belongsTo(Buku::class, 'book_id'); // pastikan model 'Buku' ada dan benar
    }
}
