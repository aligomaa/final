<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Country;
use App\Government;
use App\City;
use App\Street;
use App\Specification;
use App\Ads;

use Illuminate\Http\Request;
use Image;
use App\Http\Requests;

class UserController extends Controller
{
    public function index()
    {
        $ads=Ads::inRandomOrder()->limit(1)->get();
        $countries=Country::all();
        $government=Government::all();
        $city=City::all();
        $street=Street::all();
        $specification=Specification::all();
        return view('web.index',compact('ads','countries','specification','government','city','street'));
    }
    public function contact()
    {
        return view('web.contact');
    }
public  function  GetGovenrateByCountryId(Request $request)
{
    $country_id=$request->input('country_id');
    $governrate=Government::where('country_id',$country_id)->get();
    return $governrate;
}

    public  function  getcitybyid(Request $request)
    {
        $governorate_id=$request->input('governorate_id');
        $city=City::where('government_id',$governorate_id)->get();
        return $city;
    }

    public  function  getstreetbyid(Request $request)
    {
        $city_id=$request->input('city_id');
        $street=Street::where('city_id',$city_id)->get();
        return $street;
    }

    public function create()
    {
        return view('web.login');
    }
    public function register()
    {
                    return view('web.register');
    }
    public function store(Request $request)
    {
        $this->validate(request(),[
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'phone'=>'required',
            'user_about'=>'required',

        ] );
        //save into database
        $user=new User();
        $first_name=$request->input('first_name');
        $last_name=$request->input('last_name');
        $email=$request->input('email');
        $password=$request->input('password');
        $phone=$request->input('phone');
        $user_about=$request->input('user_about');
        $user_role=0;
        $user->first_name=$first_name;
        $user->last_name=$last_name;
        $user->email=$email;
        $user->password=bcrypt($password);
        $user->phone=$phone;
        $user->user_about=$user_about;
        $user->role=$user_role;
        $filename = 'user.png';
        if ($request->file('myFileSelect')) {
            $file = $request->file('myFileSelect');
            $destinationPath = 'public/imgs';
            $filename=$file->getClientOriginalName();
            // dd($filename);
            $file->move($destinationPath, $filename);
        }
        $user->myFileSelect=$filename;
        $user->save();
return redirect()->back();

    }

    public function login(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(Auth::attempt(
            ['email'=>$request['email'],
                'password'=>$request['password']])){
            if(Auth::user()->role==0) {
                return redirect()->route('account');
            }
            else {
                return redirect()->route('dashboard');
            }
        }
        return back()->withErrors([
            'message'=>'please check your data and try again'
        ]);


    }
    public function account(  )
    {

        $user=auth()->user();
        $ads=Ads::inRandomOrder()->limit(1)->get();

        return view('account.account',compact('user','ads'));
    }



    public function logout()
{
    auth()->logout();
    return redirect()->route('index');
}

public function edituser(Request $request)
{
    if(Auth()->user())
    {
        $id=Auth::user()->id;
        User::where('id',$id)
            ->update(['first_name'=>filter_var($request->input('first_name'),FILTER_SANITIZE_STRING),
                'last_name'=>filter_var($request->input('last_name'),FILTER_SANITIZE_STRING),
                'email'=>filter_var($request->input('email'),FILTER_SANITIZE_EMAIL),
                'phone'=>filter_var($request->input('phones'),FILTER_SANITIZE_STRING),
                'user_about'=>filter_var($request->input('user_about').FILTER_SANITIZE_STRING)
            ]);


    }
    return redirect()->back();

}

}
