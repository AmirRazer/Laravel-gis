<?php

namespace App\Http\Controllers\Backend;

use App\Models\Spot;
use App\Models\kategori;
use App\Models\kecamatan;
use Illuminate\Http\Request;
use App\Models\DetailKategori;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DetailKategoriController extends Controller
{
    // Menampilkan daftar detail kategori
    public function index()
    {
        // $detailKategoris = DetailKategori::all();
        // return view('backend.detailKategoris.index', compact('detailKategoris'));
        $detailKategoris = DetailKategori::with('kategori')->get();
        return view('backend.DetailKategori.index');
    }
       public function create()
{
        $kategori = kategori::all();
        return view('backend.DetailKategori.create', ['kategori' => $kategori]);
}
public function store(Request $request)
{
    // Validate the request...
        $request->validate([
        'name' => 'required', // Validation for the 'name' field
        'kategori_id' => 'required', // Assuming 'kategori_id' also needs validation
    ]);
    $detailkategori = new DetailKategori;
    $detailkategori->name = $request->name;
     $detailkategori->kategori_id = $request->kategori_id;
    // Set other fields...
    $detailkategori->save();

    return redirect()->route('detailkategori.index');
}

// edit
public function edit($id)
{
    $detailkategori = DetailKategori::find($id);
    $kategori = kategori::all();
    return view('backend.DetailKategori.edit', 
    ['detailkategori' => $detailkategori,
     'kategori' => $kategori]);
}
// update
public function update(Request $request, DetailKategori $detailkategori)
{
    $detailkategori->name = $request->name;
    $detailkategori->kategori_id = $request->kategori_id;
    $detailkategori->save();

    return redirect()->route('detailkategori.index')->with('success', 'Data updated successfully');
}
// {
//     $kecamatan->name = $request->name;
//     $kecamatan->kabupaten_id = $request->kabupaten_id;
//     $kecamatan->save();

//     return redirect()->route('kecamatan.index');
// }
public function destroy($id)
{
    $detailKategori = DetailKategori::find($id);
    $detailKategori->delete();
    return redirect()->route('detailkategori.index');

}
public function getDetailKategori($kategoriId)
    {
        $detailKategori = DetailKategori::where('kategori_id', $kategoriId)->get();
        return response()->json($detailKategori);
    }

   
public function getChartData($kategoriId, $detailKategoriId)
{
    if($detailKategoriId==0){
        $data = Spot::select('kecamatan_id', DB::raw('count(spots.id) as spots_count'))
                        ->where('kategori_id', $kategoriId)
                        ->groupBy('kecamatan_id') // Group by both kecamatan_id and kecamatan.name to comply with ONLY_FULL_GROUP_BY
                        ->get();
    } 
    elseif ($kategoriId == 0) { // Assuming -1 (or another specific value) is used to indicate "all"
    // If a special value (e.g., -1) is selected, fetch all spots regardless of detail category
    $data = Spot::select('kecamatan_id', DB::raw('count(spots.id) as spots_count'))
                ->where('kategori_id', $kategoriId)
                ->groupBy('kecamatan_id')
                ->get();
            }
    else {
        
        $data = Spot::select('kecamatan_id', DB::raw('count(spots.id) as spots_count'))
        ->where('kategori_id', $kategoriId)
        ->where('detail_kategori_id', $detailKategoriId)
        ->groupBy('kecamatan_id') // Group by both kecamatan_id and kecamatan.name to comply with ONLY_FULL_GROUP_BY
        ->get();
    }
        

    $kec = Kecamatan::select('id','name')
            ->get();


   
    $labels = [];
    $chartData = [];

    foreach ($kec as $itemkec) {
        $labels[] = $itemkec->name;
        $valuedata=0;
        foreach ($data as $item) {
            if ($item->kecamatan_id==$itemkec->id) {
                $valuedata = $item->spots_count; // Use the aggregated count
            }
        }
        $chartData[] =$valuedata;

    }
    
    

    return response()->json([
        'status' => 'success',
        'labels' => $labels,
        'data' => $chartData
    ]);
}
}