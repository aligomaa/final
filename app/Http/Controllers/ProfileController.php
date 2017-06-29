<?php

namespace App\Http\Controllers;
use App\City;
use App\Country;
use App\Government;
use App\Specification;
use App\Street;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;

class ProfileController extends Controller
{
    public function add_profile()
    {
        $countries=Country::all();
        $government=Government::all();
        $city=City::all();
        $street=Street::all();
        $specification=Specification::all();
        return view('account.add_work',compact('countries','specification','government','city','street'));
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'work_name' => 'required',
            'work_phone' => 'required',
            'start_work' => 'required',
            'end_work' => 'required',
            'work_address' => 'required',
            'myFileSelect' => 'required',
            'about_work' => 'required'

        ]);
        //save into database
        $profile = new Profile();
        $user_id = $request->input('user_id');
        $work_name = $request->input('work_name');
        $work_phone = $request->input('work_phone');
        $start_work = $request->input('start_work');
        $end_work = $request->input('end_work');
        $work_address = $request->input('work_address');
        $about_work = $request->input('about_work');
        $country=$request->get('country_id');
        $government=$request->get('governorate_id');
        $city=$request->get('city_id');
        $street=$request->get('street_id');
        $specification=$request->get('specification_id');

        $profile->user_id = $user_id;
        $profile->work_name = $work_name;
        $profile->work_phone = $work_phone;
        $profile->start_work = $start_work;
        $profile->end_work = $end_work;
        $profile->work_address = $work_address;
        $profile->about_work = $about_work;
        $profile->country_id=$country;
        $profile->government_id=$government;
        $profile->city_id=$city;
        $profile->street_id=$street;
        $profile->specification_id=$specification;
        $filename = 'user.png';
        if ($request->file('myFileSelect')) {
            $file = $request->file('myFileSelect');
            $destinationPath = 'public/imgs';
            $filename = $file->getClientOriginalName();
            // dd($filename);
            $file->move($destinationPath, $filename);
        }
        $profile->myFileSelect = $filename;
        $profile->save();
        return redirect()->route('show_profile');

    }

    public function show_profile()
    {
        $user = auth()->user();
        $id = $user->profile->id;
        $product = Product::where('profile_id', $id)->get();
        return view('account.profile', compact('user', 'product', 'id'));
    }

    public function editprofile(Request $request)
    {
        $user = auth()->user();

        if (Auth::user()) {
            $id = $user->profile->id;

           $profile= Profile::where('id',$id)
                ->update(['work_name'=>filter_var($request->Input('comname'),FILTER_SANITIZE_STRING),
                'work_phone' => filter_var($request->input('phones'),FILTER_SANITIZE_STRING),
                    'start_work' =>$request->input['work_start'],
                    'end_work' =>$request->input['work_end'],
                    'work_address'=>filter_var($request->input('address'),FILTER_SANITIZE_STRING),
                    'about_work'=>filter_var($request->input('about_work'),FILTER_SANITIZE_STRING)
                ]);

            return redirect()->back();
            }

        }




}
