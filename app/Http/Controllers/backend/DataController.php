<?php

namespace App\Http\Controllers\backend;

use App\Models\Spot;
use App\Models\User;
use App\Models\Setting;
use App\Models\kategori;
use App\Models\kabupaten;
use App\Models\kecamatan;
use App\Models\Center_Point;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class DataController extends Controller
{
    public function centerpoint()
    {
        $centerpoint = Center_Point::latest()->get();
        return datatables()->of($centerpoint)
        ->addColumn('action','backend.centerpoint.action')
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->toJson();
    }

    public function spot()
    {
          $spot = Spot::with(['kecamatan', 'kategori'])->latest()->get();
        
        return datatables()->of($spot)
        ->addColumn('nama_kecamatan', function($row){
            return $row->kecamatan->name;
        })
        ->addColumn('nama_kategori', function($row){
            return $row->kategori->name;
        })
        ->addColumn('action','backend.Spot.action')
        ->addIndexColumn()
        ->rawColumns([ 'nama_kecamatan', 'nama_kategori','action'])
        ->toJson();
    }
      public function kabupaten()
    {
        $kabupaten = kabupaten::latest()->get();
        return datatables()->of($kabupaten)
        ->addColumn('action','backend.kabupaten.action')
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->toJson();
    }
       public function kecamatan()
    {
         $kecamatan = Kecamatan::with('kabupaten')->select('kecamatan.*');

    return Datatables::of($kecamatan)
        ->addIndexColumn()
        ->addColumn('nama_kabupaten', function($row){
            return $row->kabupaten->name;
        })
        ->addColumn('action', 'backend.kecamatan.action')
        ->rawColumns(['action'])
        ->make(true);
    }
    public function kategori()
    {
       $kategori = Kategori::select('kategori.*');

    return Datatables::of($kategori)
        ->addIndexColumn()
        ->addColumn('action','backend.kategori.action')
        ->rawColumns(['action'])
        ->make(true);
    }
    public function manageakun()
    {
       $users = User::with('setting')->select('users.*');

    return DataTables::of($users)
        ->addIndexColumn()
        ->addColumn('first_name', function($row){
            return $row->setting->first_name ?? '';
        })
        ->addColumn('gender', function($row){
            return $row->setting->gender ?? '';
        })
        ->addColumn('phone', function($row){
            return $row->setting->phone ?? '';
        })
        ->addColumn('action', 'backend.manageakun.action')
        ->rawColumns(['action'])
        ->make(true);
    }
}
