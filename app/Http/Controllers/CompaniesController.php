<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use File;

class CompaniesController extends Controller
{
    public function index() {
        return view('pages\companies');
    }

    public function companiesprofile(Request $request) {
        return view('pages\companies-profile');
    }

    function saveavatar(Request $request) {
        $avatar = $request->avatar;  // your base64 encoded
        $base64_img = str_replace('data:image/png;base64,', '', $avatar);
        $image = str_replace(' ', '+', $base64_img);
        $imageName = md5(uniqid(rand(), true)) . '.png';
        Storage::disk('local')->put($imageName, base64_decode($image));
        $storage_url = '/storage'.'/'.$imageName;
        
        $registered_id = Auth::id();
        $user_id = Company::where('user_id', $registered_id)->first();
        
        if($user_id == null) {
            $res = Company::create([
                'user_id' => $registered_id,
                'avatar' => $storage_url
            ]);
        }
        else {
            $res = Company::where('user_id', $registered_id)->update([
                'avatar' => $storage_url,
            ]);
        }
        if($res == 1) {
            return response()->json(['data' => '1']);
        }
    }



    public function editprofile() {
        $user_id = Auth::id();
        $user_name = Auth::user()->name;
        $company_data = Company::where('user_id', $user_id)->first();
        $com_avatar = $company_data->avatar;

        return view('pages\edit-profile')->with([
            'avatar' => $com_avatar,
            'name' => $user_name
        ]);
    }

    public function logged_companies() {
        return view('pages\lg-companies');
    }

    public function logged_companiesprofile() {
        return view('pages\lg-companies-profile');
    }
}
