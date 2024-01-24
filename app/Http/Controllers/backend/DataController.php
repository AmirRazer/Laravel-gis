<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Center_Point;

class DataController extends Controller
{
    public function centerpoint()
    {
        $centerpoint = Center_Point::latest()->get();
        return datatables()->of($centerpoint)
        ->addColumn('action','backend.Center_Point.action')
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->toJson();
    }
}
