<?php

namespace App\Http\Controllers;
use App\City;
use App\Country;
use App\Government;
use App\Product;
use App\Profile;
use App\Specification;
use App\Street;
use App\User;
use App\Ads;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()   // show dashboard to admin only
    {
        $specification=Specification::all();
        $profile=Profile::all();
        if(Auth::user() && Auth::user()->role==1)
        {
            return view('admin.index', compact('profile', 'specification'));
        }
        else{
            return redirect()->route('index');
        }
    }

    public function show_countries()
    {
        $countries=Country::all();
        return view('admin.countries',compact('countries'));
    }
    public function add_country(Request $request)
    {
        $this->validate(request(),[
           'name'=>'required'
        ]);
        $country=new Country();
        $name=$request->input('name');
        $country->name=$name;
        $country->save();
        return redirect()->back();
    }

    public function add_government(Request $request)
    {
        $this->validate(request(),[
            'name'=>'required'
        ]);
        $government=new Government();
        $country_id=$request->input('country_id');
        $name=$request->input('name');
        $government->country_id=$country_id;
        $government->name=$name;
        $government->save();
        return redirect()->back();
    }
    public function show_governments($id)
    {
        $government=Government::where('country_id',$id)->get();
        return view('admin.governments',compact('government','id'));
    }
    public function add_city(Request $request)
    {
        $this->validate(request(),[
            'name'=>'required'
        ]);
        $city=new City();
        $government_id=$request->input('government_id');
        $name=$request->input('name');
        $city->government_id=$government_id;
        $city->name=$name;
        $city->save();
        return redirect()->back();
    }
    public function show_cities($id)
    {
        $cities=City::where('government_id',$id)->get();
        return view('admin.cities',compact('cities','id'));
    }

    public function add_street(Request $request)
    {
        $this->validate(request(),[
            'name'=>'required'
        ]);
        $street=new Street();
        $city_id=$request->input('city_id');
        $name=$request->input('name');
        $street->city_id=$city_id;
        $street->name=$name;
        $street->save();
        return redirect()->back();
    }
    public function show_streets($id)
    {
        $streets=Street::where('city_id',$id)->get();
        return view('admin.streets',compact('streets','id'));
    }

    public function add_specification(Request $request)
    {
        $this->validate(request(),[
            'name'=>'required'
        ]);
        $specification=new Specification();
        $name=$request->input('name');
        $specification->name=$name;
        $specification->save();
        return redirect()->back();
    }
    public function show_specifications()
    {
        $specifications=Specification::all();
        return view('admin.specifications',compact('specifications'));
    }

    public function show_work_pages()
    {
        $pages=Profile::all();
        return view('admin.work_pages',compact('pages'));
    }
// Admins
    public function admin(Request $request)
    {

        //save into database
        $admin=new User();
        $first_name=$request->input('first_name');
        $email=$request->input('email');
        $password=$request->input('password');
        $user_role=1;
        $admin->first_name=$first_name;
        $admin->last_name="";
        $admin->email=$email;
        $admin->password=bcrypt($password);
        $admin->phone="050-6985236";
        $admin->user_about="This Admin for site";
        $admin->role=$user_role;
        $admin->myFileSelect="";
        $admin->save();
        return redirect()->back();

    }
    public function admins()
    {
        $admins=User::where('role',1)->get();
        return view('admin.admin',compact('admins'));
    }

    // Ads
    public function get_ads(){
        $ads=Ads::all();

        return view('admin.ads',compact('ads'));
    }

    public function new_ads(Request $request)
    {

        $ads=new Ads();
        $name=$request->input('name');
        $ads->name=$name;
        $filename = 'user.png';
        if ($request->file('ads_img')) {
            $file = $request->file('ads_img');
            $destinationPath = 'public/imgs';
            $filename = $file->getClientOriginalName();
            // dd($filename);
            $file->move($destinationPath, $filename);
        }
        $ads->ads_img = $filename;
        $ads->save();
        return redirect()->back();
    }
    public function delete_ads($id)
    {
     $ads=Ads::where('id',$id)->first();
     if(Auth::user() && Auth::user()->role==1)
     {
         $ads->delete();
     }
     return redirect()->back();
    }
    public function show_Ads()
    {
        $ads=Ads::inRandomOrder()->get();

    }
}


