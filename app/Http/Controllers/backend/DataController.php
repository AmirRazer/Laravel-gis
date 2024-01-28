<?php

namespace App\Http\Controllers\backend;

use App\Models\Spot;
use App\Models\Center_Point;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        $spot = Spot::latest()->get();
        return datatables()->of($spot)
        ->addColumn('action','backend.Spot.action')
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->toJson();
    }
}
