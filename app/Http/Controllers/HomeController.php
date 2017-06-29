<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Product;
use App\Profile;
use Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth')->except('searchAll');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('home');
    }
//    public function searchAll()
//    {
//        return view('web.showSearchResult');
//    }

    public  function  searchAll(Request $request)
    {
        $user=new Profile();
        $product=new Product();
        $searchKey=filter_var($request['search'],FILTER_SANITIZE_STRING);
        $country=$request['country_id'];
        $governorate=$request['governorate_id'];
        $city=$request['city_id'];
        $address=$request['street_id'];
        $specility=$request['specify'];

        if($searchKey == null){
            if($country != null && $governorate == null && $city == null && $address == null && $specility ==null){
                $users = $user->select('*')->where('country_id', $country)->get();

            }
            elseif($country != null && $governorate == null && $city == null && $address == null && $specility !=null){
                $users = $user->select('*')->where('country_id', $country)
                    ->where('specification_id', $specility)
                    ->get();
            }
            elseif($country != null && $governorate != null && $city == null && $address == null && $specility ==null){
                $users = $user->select('*')->where('country_id', $country)
                    ->where('government_id', $governorate)
                    ->get();
            }
            elseif($country != null && $governorate != null && $city == null && $address == null && $specility !=null){
                $users = $user->select('*')->where('active',1)->where('role',1)->where('country_id', $country)
                    ->where('government_id', $governorate)
                    ->where('specification_id', $specility)
                    ->get();
            }
            elseif($country != null && $governorate != null && $city != null && $address == null && $specility ==null){
                $users = $user->select('*')->where('country_id', $country)
                    ->where('government_id', $governorate)
                    ->where('city_id', $city)
                    ->get();
            }
            elseif($country != null && $governorate != null && $city != null && $address == null && $specility !=null){
                $users = $user->select('*')->where('country_id', $country)
                    ->where('government_id', $governorate)
                    ->where('city_id', $city)
                    ->where('specification_id', $specility)
                    ->get();
            }
            elseif($country != null && $governorate != null && $city != null && $address != null && $specility ==null){
                $users = $user->select('*')->where('country_id', $country)
                    ->where('government_id', $governorate)
                    ->where('city_id', $city)
                    ->where('street_id', $address)
                    ->get();
            }
            elseif($country != null && $governorate != null && $city != null && $address != null && $specility !=null){
                $users = $user->select('*')->where('country_id', $country)
                    ->where('government_id', $governorate)
                    ->where('city_id', $city)
                    ->where('street_id', $address)
                    ->where('specification_id', $specility)
                    ->get();
            }
            elseif($country == null && $governorate == null && $city == null && $address == null && $specility !=null) {
                $users = $user->select('*')
                    ->where('specification_id', $specility)
                    ->get();
            }

        }else{
            if($country != null && $governorate == null && $city == null && $address == null && $specility ==null){
                $users = $user->select('*')->where('work_name', 'LIKE', '%' . $searchKey . '%')
                    ->where('country_id', $country)->get();
            }
            elseif($country != null && $governorate == null && $city == null && $address == null && $specility !=null){
                $users = $user->select('*')->where('work_name', 'LIKE', '%' . $searchKey . '%')
                    ->where('country_id', $country)
                    ->where('specification_id', $specility)
                    ->get();
            }
            elseif($country != null && $governorate != null && $city == null && $address == null && $specility ==null){
                $users = $user->select('*')->where('work_name', 'LIKE', '%' . $searchKey . '%')
                    ->where('country_id', $country)
                    ->where('government_id', $governorate)
                    ->get();
            }
            elseif($country != null && $governorate != null && $city == null && $address == null && $specility !=null){
                $users = $user->select('*')->where('work_name', 'LIKE', '%' . $searchKey . '%')
                    ->where('country_id', $country)
                    ->where('government_id', $governorate)
                    ->where('specification_id', $specility)
                    ->get();
            }
            elseif($country != null && $governorate != null && $city != null && $address == null && $specility ==null){
                $users = $user->select('*')->where('work_name', 'LIKE', '%' . $searchKey . '%')
                    ->where('country_id', $country)
                    ->where('government_id', $governorate)
                    ->where('city_id', $city)
                    ->get();
            }
            elseif($country != null && $governorate != null && $city != null && $address == null && $specility !=null){
                $users = $user->select('*')->where('work_name', 'LIKE', '%' . $searchKey . '%')
                    ->where('country_id', $country)
                    ->where('government_id', $governorate)
                    ->where('city_id', $city)
                    ->where('specification_id', $specility)
                    ->get();
            }
            elseif($country != null && $governorate != null && $city != null && $address != null && $specility ==null){
                $users = $user->select('*')->where('work_name', 'LIKE', '%' . $searchKey . '%')
                    ->where('country_id', $country)
                    ->where('government_id', $governorate)
                    ->where('city_id', $city)
                    ->where('street_id', $address)
                    ->get();
            }
            elseif($country != null && $governorate != null && $city != null && $address != null && $specility !=null){
                $users = $user->select('*')->where('work_name', 'LIKE', '%' . $searchKey . '%')
                    ->where('country_id', $country)
                    ->where('government_id', $governorate)
                    ->where('city_id', $city)
                    ->where('street_id', $address)
                    ->where('specification_id', $specility)
                    ->get();
            }
            elseif($country == null && $governorate == null && $city == null && $address == null && $specility !=null) {
                $users = $user->select('*')->where('work_name', 'LIKE', '%' . $searchKey . '%')
                    ->where('specification_id', $specility)
                    ->get();
            }
            elseif($country == null && $governorate == null && $city == null && $address == null && $specility ==null){
                $users=Profile::select('*')->where('work_name','LIKE','%'.$searchKey.'%')->get();
            }

        }
        if($country == null && $governorate == null && $city == null && $address == null && $specility ==null && $searchKey== null){
            return redirect('/');
        }
        if($searchKey != null) {
            $product = Product::select('*')->where('product_name', 'LIKE', '%' . $searchKey . '%')->get();
        }
        return view('web.showSearchResult',compact('users','searchKey' ,'product','country','governorate','city','address','specility'));

    }
    public function find_company($id)
    {
        $profiles=Profile::where('id',$id)->get();
        $products=Product::where('profile_id',$id)->get();
        return view('web.company',compact('profiles','id','products'));
    }
    public function find_product($id)
    {
        $products=Product::where('id',$id)->get();
        return view('web.product',compact('products'));
    }
}
