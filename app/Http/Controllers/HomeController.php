<?php

namespace App\Http\Controllers;

use App\Models\Spot;

use App\Models\User;
use App\Models\kategori;
use App\Models\Center_Point;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\kecamatan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware('auth')->except('spots','detailSpot');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   public function index()
{
    $spotCount = Spot::count();
    $kategoriCount = kategori::count();
    $kecamatans =kecamatan::withCount('spots')->get();
    $userCount = User::count();
    $kategori = kategori::all();
    return view('home', ['spotCount' => $spotCount, 'kategoriCount' => $kategoriCount, 'userCount' => $userCount, 'kecamatans' => $kecamatans,'kategori'=>$kategori]);
}
public function dashboard()
{
    $currentUser = Auth::user(); // Mengambil pengguna yang sedang login
    return view('dashboard-volt', ['user' => $currentUser]);
}
    public function simple_map()
    {
        return view('leaflet.simple_map');
    }
    public function marker()
    {
        return view('leaflet.marker');
    }
    public function circle()
    {
        return view('leaflet.circle');
    }
    public function polygon()
    {
        return view('leaflet.polygon');
    }
    public function polyline()
    {
        return view('leaflet.polyline');
    }
    
    public function rectangle()
    {
        return view('leaflet.rectangle');
    }
    public function layer()
    {
        return view('leaflet.layer');
    }
    public function layer_group()
    {
        return view('leaflet.layer_group');
    }

    public function geojson()
    {
        return view('leaflet.geojson');
    }
    public function get_coordinate()
    {
        return view('leaflet.get_coordinate');
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

    public function detailSpot($slug)
    {
         // Menggunakan eager loading untuk relasi 'kecamatan' dan 'kategori'
    $spot = Spot::with(['kecamatan', 'kategori'])->where('slug', $slug)->firstOrFail();
    return view('frontendnew.detail', ['spot' => $spot]);
    }
    
}
