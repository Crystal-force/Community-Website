<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use File;
use app\User; 

class CompaniesController extends Controller
{
    public function index() {
        return view('pages\companies');
    }

    public function companiesprofile(Request $request) {
        return view('pages\companies-profile');
    }

    public function saveavatar(Request $request) {
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

    public function removeavatar(Request $request) {
        $id = $request->id;
        $res = Company::where('user_id', $id)->delete();
        if($res == 1) {
            return  response()->json(['data' => '1']);
        }
    }



    public function editprofile() {
        $user_id = Auth::id();
        $user_name = Auth::user()->name;
        $company_data = Company::where('user_id', $user_id)->first();
        
        $avatar = '../assets/img/blank/blank.png';
        $id = '';
        $name = '';
        $jobs = '';
        $phone = '';
        $language = '';
        $location = '';
        $city = '';
        $zip = '';
        $country = '';
        $about = '';
        $facebook = '';
        $twitter = '';
        $instagram = '';
        $linkedin = '';

        if(isset($company_data)) {
            $avatar = $company_data->avatar;
            $id = $company_data->user_id;
            $name = $user_name;
            $jobs = $company_data->jobs;
            $phone = $company_data->phone_number;
            $language = $company_data->language;
            $location = $company_data->location;
            $city = $company_data->city;
            $zip = $company_data->zip_code;
            $country = $company_data->country;
            $about = $company_data->about;
            $facebook = $company_data->facebook;
            $twitter = $company_data->twitter;
            $instagram = $company_data->instagram;
            $linkedin = $company_data->linkedin;
        }

        return view('pages\edit-profile')->with([
            'avatar' => $avatar,
            'id' => $id,
            'jobs' => $jobs,
            'name' => $name,
            'phone' => $phone,
            'language' => $language,
            'location' => $location,
            'city' => $city,
            'zip' => $zip,
            'country' => $country,
            'about' => $about,
            'facebook' => $facebook,
            'twitter' => $twitter,
            'instagram' => $instagram,
            'linkedin' => $linkedin
        ]);
    }

    public function updateprofile(Request $request) {

        $job = $request->jobs;
        $phone_number = $request->phone_number;
        $language = $request->language;
        $location = $request->location;
        $city = $request->city;
        $zip_code = $request->zip_code;
        $country = $request->country;
        $about = $request->about;
        $facebook = $request->facebook;
        $twitter = $request->twitter;
        $instagram = $request->instagram;
        $linkedin = $request->linkedin;
      
        $registered_id = Auth::id();
        $user_id = Company::where('user_id', $registered_id)->first();

        if($user_id == null) {
            $res = Company::create([
                'user_id' =>$registered_id,
                'jobs' => $job,
                'phone_number' => $phone_number,
                'language' => $language,
                'location' => $location,
                'city' => $city,
                'zip_code' => $zip_code,
                'country' => $country,
                'about' => $about,
                'facebook' => $facebook,
                'twitter' => $twitter,
                'linkedin' => $linkedin,
                'instagram' => $instagram
            ]);
        }
        else {
            $res = Company::where('user_id', $registered_id)->update([
                'user_id' =>$registered_id,
                'jobs' => $job,
                'phone_number' => $phone_number,
                'language' => $language,
                'location' => $location,
                'city' => $city,
                'zip_code' => $zip_code,
                'country' => $country,
                'about' => $about,
                'jobs' => $job,
                'facebook' => $facebook,
                'twitter' => $twitter,
                'linkedin' => $linkedin,
                'instagram' => $instagram
            ]);
        }

        if($res == 1) {
            $success = "1";
            return response()->json(['data' => $success]);
        }
    }

    public function logged_companies() {
        return view('pages\lg-companies');
    }

    public function logged_companiesprofile() {
        return view('pages\lg-companies-profile');
    }
}
