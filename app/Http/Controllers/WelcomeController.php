<?php

namespace App\Http\Controllers;


use App\Models\Buku;

class WelcomeController extends Controller
{
    public function index()
    {
        $items = Buku::all(); // Mengambil semua data buku
        /* $buku = Buku::orderBy('kategori')->get(); */
        return view('welcome', compact('items'));

    }
    //
}
