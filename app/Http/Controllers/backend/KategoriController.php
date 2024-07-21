<?php

namespace App\Http\Controllers\backend;

use App\Models\kategori;
use Illuminate\Http\Request;
use App\Models\DetailKategori;
use App\Http\Controllers\Controller;

class KategoriController extends Controller
{
    public function index()
    {
        return view('backend.kategori.index');
    }
    public function create()
    {
        return view('backend.kategori.create');
    }
    public function store(Request $request)
    {
        $kategori = new kategori;
        $kategori->name = $request->name; // Mengisi nama kategori dari request
        // Tambahkan kode untuk mengisi kolom lainnya jika ada

        $kategori->save(); // Menyimpan kategori baru ke database

        return redirect()->route('kategori.index'); // Mengalihkan ke halaman index setelah menyimpan
    }
    public function edit($id)
    {
        $kategori = kategori::find($id); // Mengambil data kategori berdasarkan id
        return view('backend.kategori.edit', compact('kategori')); // Mengirim data kategori ke view
    }
    public function update(Request $request, $id)
    {
        $kategori = kategori::find($id); // Mengambil data kategori berdasarkan id
        $kategori->name = $request->name; // Mengisi nama kategori dari request
        // Tambahkan kode untuk mengisi kolom lainnya jika ada

        $kategori->save(); // Menyimpan kategori ke database

        return redirect()->route('kategori.index'); // Mengalihkan ke halaman index setelah menyimpan
    }
    public function destroy($id)
    {
        $kategori = kategori::find($id); // Mengambil data kategori berdasarkan id
        $kategori->delete(); // Menghapus data kategori dari database

        return redirect()->route('kategori.index'); // Mengalihkan ke halaman index setelah menghapus
    }
    public function getDetailKategori($kategoriId)
{
    $detailKategori = DetailKategori::where('kategori_id', $kategoriId)->get();
    return response()->json($detailKategori);
}

}
