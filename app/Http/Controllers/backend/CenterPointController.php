<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Center_Point;

class CenterPointController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.centerpoint.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.centerpoint.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'coordinate' => 'required',

        ]);
        $centerpoint = new Center_Point;
        $centerpoint->coordinate = $request->input('coordinate');
        $centerpoint->save();

        if ($centerpoint){
            return to_route('center-point.index')->with('success','Data Center Point Berhasil di buat');
        }else{
            return to_route('center-point.index')->with('error','Data Center Point Gagal di buat');
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
    public function edit(Center_Point $id)
    {
        $centerpoint = Center_Point::findOrFail($id->id);
        return view('backend.centerpoint.edit',['centerpoint' => $centerpoint]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Center_Point $id)
    {
        $id = Center_Point::findOrFail($id->id);
        $id->coordinate = $request->input('coordinate');
        $id->update();
        if ($id){
            return to_route('center-point.index')->with('success','Data Center Point Berhasil di ubah');
        }else{
            return to_route('center-point.index')->with('error','Data Center Point Gagal di ubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $centerpoint = Center_Point::findOrFail($id);
        $centerpoint->delete();
        return redirect()->route('center-point.index')->with('success','Data Center Point Berhasil di hapus');
    }
}
