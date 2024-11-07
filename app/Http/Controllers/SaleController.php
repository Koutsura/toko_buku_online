<?php

namespace App\Http\Controllers;
use App\Models\Sale;
use App\Models\Buku;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SaleController extends Controller
{
    public function index()
    {
        // Menampilkan daftar transaksi
        $sale = Sale::with(['user', 'book'])->get();
        return view('layout.toko.sale.index', compact('sale'));
    }

    public function create()
    {
        // Menampilkan form transaksi
        $books = Buku::all();
        $users = User::all();
        Log::info('Users:', $users->toArray());
        return view('layout.toko.sale.create', compact('books', 'users'));
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

    return redirect()->route('sale.index')->with('success', 'Transaksi berhasil disimpan.');
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
