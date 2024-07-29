<?php

namespace App\Http\Controllers\backend;

use App\Models\kabupaten;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KabupatenController extends Controller
{
      public function index()
    {
        return view('backend.kabupaten.index');
    }
    public function create()
    {
        return view('backend.kabupaten.create');
    }
     public function store(Request $request)
    {

        $request->validate([
            'name' => 'required', // Validation for the 'name' field
        ]);
        $kabupaten = new kabupaten;
        $kabupaten->name = $request->name; // Mengisi nama kabupaten dari request
        // Tambahkan kode untuk mengisi kolom lainnya jika ada

        $kabupaten->save(); // Menyimpan kabupaten baru ke database

        return redirect()->route('kabupaten.index'); // Mengalihkan ke halaman index setelah menyimpan
    }
       public function edit(kabupaten $kabupaten)
    {
        $kabupaten = kabupaten::get()->first();
        return view('backend.kabupaten.edit',[
          
            'kabupaten'=>$kabupaten
        ]);
    }
    public function update(Request $request, kabupaten $kabupaten)
    {
        $kabupaten->name = $request->name; // Mengisi nama kabupaten dari request
        // Tambahkan kode untuk mengisi kolom lainnya jika ada

        $kabupaten->save(); // Menyimpan kabupaten baru ke database

        return redirect()->route('kabupaten.index'); // Mengalihkan ke halaman index setelah menyimpan
    }
    public function destroy(string $id)
{
    $centerpoint = kabupaten::findOrFail($id);
    $centerpoint->delete();
    return redirect()->route('kabupaten.index')->with('success','Data Center Point Berhasil di hapus');
}
    
}
