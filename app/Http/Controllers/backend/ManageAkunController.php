<?php

namespace App\Http\Controllers\backend;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ManageAkunController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Get the currently authenticated user
        $setting = Setting::where('user_id', $user->id)->first(); // Get the setting related to the user
        return view('backend.manageakun.index');
    }
}
