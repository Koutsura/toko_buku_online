<?php

namespace App\Http\Controllers;

use App\Models\Buku;

class AboutController extends Controller
{
    public function index()
    {
        $buku = Buku::all(); // Mengambil semua data buku
        /* $buku = Buku::orderBy('kategori')->get(); */
        return view('about', compact('buku'));
    }
}

