<?php

namespace App\Http\Controllers\backend;

use App\User;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    // public function index()
    // {
    //      $user = Auth::user();
    //     $setting = Setting::where('user_id', $user->id)->first();
    //     return view('backend/setting.index', ['user' => $user, 'setting' => $setting]);
    // }
      public function index()
    {
        $user = Auth::user(); // Get the currently authenticated user
        $setting = Setting::where('user_id', $user->id)->first(); // Get the setting related to the user
        return view('backend/setting.index', ['user' => $user, 'setting' => $setting]); // Send the user and setting data to the view
    }
   public function update(Request $request)
{
    $user = Auth::user();
    $setting = Setting::where('user_id', $user->id)->first();

    if (!$setting) {
        $setting = new Setting;
        $setting->user_id = $user->id;
    }

    // Update the user's name
 

    // Update the related setting
    $setting->first_name = $request->input('first_name');
    $setting->last_name = $request->input('last_name');
    $setting->gender = $request->input('gender');
    $setting->phone = $request->input('phone');
    $setting->alamat = $request->input('alamat');

         if ($request->hasFile('image')){

            /**
             * Hapus file image pada folder public/upload/spots
             */
            if (File::exists('upload/profile/' . $setting->image)) {
                File::delete('upload/profile/' . $setting->image);
            }

            /**
             * Proses upload file image ke folder public/upload/spots
             */
            $file = $request->file('image');
            $uploadFile = $file->hashName();
            $file->move('upload/profile/', $uploadFile);
            $setting->image = $uploadFile;

            /**
             * Proses hapus & upload file image ke folder public/upload/spots
             */
            //  Storage::disk('local')->delete('public/ImageSpots/' . ($spot->image));
            //  $file = $request->file('image');
            //  $file->storeAs('public/ImageSpots', $file->hashName());
            //  $spot->image = $file->hashName();
        }

    $setting->save();
   

    return redirect()->back()->with('success', 'Settings updated successfully');
}

    public function destroy()
    {
        $user = Auth::user();
        $setting = Setting::where('user_id', $user->id)->first();

        if ($setting) {
            $setting->delete();
        }

        return redirect()->back()->with('success', 'Settings deleted successfully');
    }
}
