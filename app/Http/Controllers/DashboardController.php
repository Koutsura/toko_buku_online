<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class DashboardController extends Controller
{
    public function index()
    {
        $buku = Buku::all(); // Mengambil semua data buku
        return view('dashboard', compact('buku'));
    }
    //
}
