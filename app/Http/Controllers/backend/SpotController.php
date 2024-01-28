<?php

namespace App\Http\Controllers\backend;

use App\Models\Spot;
use Illuminate\Support\Str;
use App\Models\Center_Point;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.spot.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $centerPoint = Center_Point::get()->first();
        return view('backend.spot.create',['centerPoint'=>$centerPoint]);
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
