<?php

namespace App\Http\Controllers;
use App\Models\Sale;
use App\Models\Buku;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class SaleController extends Controller
{
    public function index(Request $request)
{
    // Ambil parameter search dari request
    $search = $request->get('search');

    // Query Sale berdasarkan pencarian buku
    if ($search) {
        $sale = Sale::with(['user', 'book'])
            ->whereHas('book', function($query) use ($search) {
                $query->where('title', 'like', "%{$search}%");
            })
            ->get();
    } else {
        $sale = Sale::with(['user', 'book'])->get(); // Semua transaksi jika tidak ada pencarian
    }

    // Ambil buku untuk pencarian (jika diperlukan untuk menampilkan daftar buku)
    if ($search) {
        $buku = Buku::where('title', 'like', "%{$search}%")->get();
    } else {
        $buku = Buku::all();
    }

    // Kirim data sale dan buku ke view
    return view('layout.toko.sale.index', compact('sale', 'buku'));
}



    public function create(Request $request)
    {
         // Ambil ID buku dari request (jika ada)
    $bookId = $request->input('id');
    $harga = $request->input('harga'); // Harga yang dikirimkan melalui URL (bisa ditambahkan jika perlu)

    // Ambil semua buku untuk daftar produk
    $books = Buku::all();
    // Ambil semua pengguna untuk keperluan tampilan jika diperlukan
    $users = User::all();

    // Ambil data pengguna yang sedang login
    $user = Auth::user(); // Menggunakan Auth::user() untuk mendapatkan pengguna yang sedang login

    // Log untuk melihat data pengguna (ini hanya untuk debugging, bisa dihapus nanti)
    Log::info('Current User: ' . json_encode($user));

    // Anda bisa menambahkan logika penyesuaian harga berdasarkan role atau preferensi pengguna
    if ($user && $user->role == 'member') {
        // Contoh diskon 10% untuk member
        $harga = $harga - ($harga * 0.10);
    }

    // Kirim data buku, pengguna, dan harga (jika perlu) ke view
    return view('layout.toko.sale.create', compact('books', 'users', 'harga', 'user'));
    }



    public function store(Request $request)
{
    $request->validate([
        'user_id' => 'required|exists:users,id',
        'book_id' => 'required|exists:buku,id',
        'quantity' => 'required|integer|min:1',
    ]);

    // Ambil data buku untuk menghitung total harga
    $book = Buku::findOrFail($request->book_id);

// Ambil harga satuan dari data buku
$unit_price = $book->unit_price;

// Hitung total harga
$total_price = $unit_price * $request->quantity;

    // Periksa apakah stok cukup
    if ($book->stok < $request->quantity) {
        return back()->with('error', 'Stok buku tidak cukup.');
    }

    // Hitung total harga
    $total_price = $book->harga * $request->quantity;

    // Simpan transaksi
    $sale = Sale::create([
        'user_id' => $request->user_id,
        'book_id' => $request->book_id,
        'quantity' => $request->quantity,
        'total_price' => $total_price,
    ]);

    // Kurangi stok buku
    $book->stok -= $request->quantity;
    $book->save();  // Simpan perubahan stok ke database

    return redirect()->route('sale.invoice', ['sale_id' => $sale->sale_id])->with('success', 'Transaksi berhasil disimpan.');
}

public function invoice($sale_id)
{
    // Cari data transaksi berdasarkan sale_id
    $sale = Sale::with(['user', 'book'])->findOrFail($sale_id);

    // Kirim data transaksi ke view invoice
    return view('layout.toko.sale.invoice', compact('sale'));
}






    /**
     * Display the specified resource.
     */
    public function show(sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sale $sale)
    {
        //
    }
}
