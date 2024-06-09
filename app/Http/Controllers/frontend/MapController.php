<?php

namespace App\Http\Controllers\frontend;

use App\Models\Spot;
use App\Models\Center_Point;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MapController extends Controller
{
   
    public function index()
    {
        $centerPoint = Center_Point::get()->first();
        $spot = Spot::get();

        return view('frontendnew.maap',[
            'centerPoint' => $centerPoint,
            'spot' => $spot
        ]);
    }
        public function spots()
    {
        $centerPoint = Center_Point::get()->first();
        $spot = Spot::get();

        return view('frontend.home',[
            'centerPoint' => $centerPoint,
            'spot' => $spot
        ]);
    }
}
