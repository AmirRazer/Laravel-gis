<?php

namespace App\Http\Controllers\backend;

use App\Models\Spot;
use App\Models\kategori;
use App\Models\kecamatan;
use Illuminate\Support\Str;
use App\Models\Center_Point;
use Illuminate\Http\Request;
use App\Models\DetailKategori;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SpotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $kecamatan = kecamatan::all();
        $kategori = kategori::all();
        $detailkategori = DetailKategori::all();
        return view('backend.spot.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kecamatan = kecamatan::all();
        $kategori = kategori::all();
        $detailkategori = DetailKategori::all();
        $centerPoint = Center_Point::get()->first();
           return view('backend.spot.create', compact('kecamatan', 'kategori', 'centerPoint','detailkategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'description'=>'required',
            'image'=>'file|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        

        $spot = new Spot;
        if ($request->hasFile('image')) {

            //upload file image to public folder

            $file = $request->file('image');
            $uploadFile = $file->hashName();
            $file->move('upload/spots/',$uploadFile);
            $spot->image = $uploadFile;


            // //upload file image to strage
            // $file = $request->file('image');
            // $file->storeAs('public/ImageSpots',$file->hashName());
            // $spot->image = $file->hashName();

        }

        $spot->name = $request->input('name');
        $spot->slug = Str::slug($request->name, '-');
        $spot->kecamatan_id = $request->input('kecamatan_id');
        $spot->kategori_id = $request->input('kategori_id');
        $spot->detail_kategori_id = $request->input('detailkategori_id');
        
        $spot->description = $request->input('description');
        $spot->coordinates = $request->input('coordinate');
        $spot->save();
        
        if($spot){
            //redirect dengan pesan sukses
            return redirect()->route('spot.index')->with(['success'=>'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('spot.index')->with(['error'=>'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Spot $spot)
    {
        $centerPoint = Center_Point::get()->first();
        return view('backend.Spot.edit',[
            'centerPoint'=>$centerPoint,
            'spot'=>$spot
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Spot $spot)
    {
        $this->validate($request,[
            'name'=>'required',
            'description'=>'required',
            'image'=>'file|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')){

            /**
             * Hapus file image pada folder public/upload/spots
             */
            if (File::exists('upload/spots/' . $spot->image)) {
                File::delete('upload/spots/' . $spot->image);
            }

            /**
             * Proses upload file image ke folder public/upload/spots
             */
            $file = $request->file('image');
            $uploadFile = $file->hashName();
            $file->move('upload/spots/', $uploadFile);
            $spot->image = $uploadFile;

            /**
             * Proses hapus & upload file image ke folder public/upload/spots
             */
            //  Storage::disk('local')->delete('public/ImageSpots/' . ($spot->image));
            //  $file = $request->file('image');
            //  $file->storeAs('public/ImageSpots', $file->hashName());
            //  $spot->image = $file->hashName();
        }

       $spot->name = $request->input('name');
        $spot->slug = Str::slug($request->name, '-');
        $spot->kecamatan_id = $request->input('kecamatan_id');
        $spot->kategori_id = $request->input('kategori_id');
        $spot->detail_kategori_id = $request->input('detailkategori_id');
        
        $spot->description = $request->input('description');
        $spot->coordinates = $request->input('coordinate');
        $spot->update();
        
        if($spot){
            //redirect dengan pesan sukses
            return redirect()->route('spot.index')->with(['success'=>'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('spot.index')->with(['error'=>'Data Gagal Diupdate!']);
        }
        
        
    }

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $spot = Spot::findOrFail($id);
            if (File::exists('upload/spots/' . $spot->image)) {
                File::delete('upload/spots/' . $spot->image);
            }
        $spot->delete();
        return redirect()->route('spot.index')->with('success','Data Center Point Berhasil di hapus');
    }
}
