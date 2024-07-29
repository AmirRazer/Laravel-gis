<?php

namespace App\Http\Controllers\backend;

use App\Models\kabupaten;
use App\Models\kecamatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KecamatanController extends Controller
{
    public function index()
    {
       
$kecamatan = kecamatan::with('kabupaten')->get();
     return view('backend.kecamatan.index');
    }
    
    public function create()
{
    $kabupaten = kabupaten::all();
    return view('backend.kecamatan.create', ['kabupaten' => $kabupaten]);
}
public function store(Request $request)
{
    // Validate the request...
    $request->validate([
        'name' => 'required|unique:kecamatans',
        'kabupaten_id' => 'required',
    ]);
    
    $kecamatan = new Kecamatan;
    $kecamatan->name = $request->name;
     $kecamatan->kabupaten_id = $request->kabupaten_id;
    // Set other fields...
    $kecamatan->save();

    return redirect()->route('kecamatan.index');
}
// edit
public function edit($id)
{
    $kecamatan = Kecamatan::find($id);
    $kabupaten = kabupaten::all();
    return view('backend.kecamatan.edit', 
    ['kecamatan' => $kecamatan,
     'kabupaten' => $kabupaten]);
}
// update
public function update(Request $request, kecamatan $kecamatan)
{
    
    $request->validate([
        'name' => 'required',
        'kabupaten_id' => 'required',
    ]);


    $kecamatan->name = $request->name;
    $kecamatan->kabupaten_id = $request->kabupaten_id;
    $kecamatan->save();

    return redirect()->route('kecamatan.index')->with('success', 'Data updated successfully');
}
public function destroy($id)
{
    $kecamatan = Kecamatan::find($id);
    $kecamatan->delete();
    return redirect()->route('kecamatan.index');

}
}