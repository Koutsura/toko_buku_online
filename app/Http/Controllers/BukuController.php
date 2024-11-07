<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;



class BukuController extends Controller
{
    // Menampilkan daftar buku
    public function index()
    {
        $buku = Buku::all(); // Mengambil semua data buku
        return view('layout.toko.buku.index', compact('buku'));
    }

    // Menampilkan form untuk menambah buku baru
    public function create()
    {
        return view('layout.toko.buku.create'); // Menampilkan form create
    }

    // Menyimpan buku baru ke database
    public function store(Request $request)
{
    // Validasi form
    $request->validate([
        'name' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'harga' => 'required|numeric',
        'kategori' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'date' => 'required|date',
        'stok' => 'required|integer|min:0',
    ]);

// Menyimpan file gambar
if ($request->hasFile('image') && $request->file('image')->isValid()) {
    // Membuat nama file gambar unik
    $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();

    // Memindahkan gambar ke folder public/images
    $imagePath = $request->file('image')->move(public_path('images/imagess'), $imageName);


    // Membuat dan menyimpan data buku
    $buku = new Buku();
    $buku->name = $request->name;
    $buku->title = $request->title;
    $buku->harga = $request->harga;
    $buku->kategori = $request->kategori;
    $buku->deskripsi = $request->deskripsi;
    $buku->image = basename($imagePath); // Hanya menyimpan nama file
    $buku->date = Carbon::parse($request->date); // Menggunakan Carbon untuk parsing tanggal
    $buku->stok = $request->stok;
    $buku->save();


    return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan');
}
}

    // Menampilkan form untuk mengedit buku
    public function edit($id)
{
    $buku = Buku::findOrFail($id); // Menemukan buku berdasarkan ID
    return view('layout.toko.buku.edit', compact('buku')); // Menampilkan halaman edit dengan data buku
}

public function update(Request $request, $id)
{
    // Validasi form
    $request->validate([
        'name' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'harga' => 'required|numeric',
        'kategori' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'date' => 'required|date',
        'stok' => 'required|integer|min:0',
    ]);

    // Temukan buku berdasarkan ID
    $buku = Buku::findOrFail($id);

    // Jika ada gambar yang di-upload, proses upload gambar baru
    if ($request->hasFile('image') && $request->file('image')->isValid()) {
        // Hapus gambar lama jika ada
        if ($buku->image && File::exists(public_path('images/imagess/' . $buku->image))) {
            Log::info('File exists at: ' . public_path('images/imagess/' . $buku->image));
            File::delete(public_path('images/imagess/' . $buku->image));
        } else {
            Log::info('File not found at: ' . public_path('images/imagess/' . $buku->image));
        }

        // Membuat nama file gambar unik
        $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();

        // Memindahkan gambar ke folder public/images/imagess
        $imagePath = $request->file('image')->move(public_path('images/imagess'), $imageName);

        // Menyimpan nama file gambar ke database
        $buku->image = $imageName;
    }

    // Update data buku dengan input yang diterima
    $buku->name = $request->name;
    $buku->title = $request->title;
    $buku->harga = $request->harga;
    $buku->kategori = $request->kategori;
    $buku->deskripsi = $request->deskripsi;
    $buku->date = Carbon::parse($request->date);
    $buku->stok = $request->stok;
    $buku->save();

    return redirect()->route('buku.index')->with('success', 'Buku berhasil diperbarui');
}




    // Menghapus data buku dari database
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id); // Mencari data buku berdasarkan ID
        $buku->delete(); // Menghapus data buku

        // Redirect ke halaman daftar buku
        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus');
    }
}
