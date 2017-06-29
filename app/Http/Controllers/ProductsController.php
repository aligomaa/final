<?php

namespace App\Http\Controllers;
use App\Profile;
use App\Product;
use Illuminate\Http\Request;
use Image;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    public function store(Request $request)
    {
            $this->validate(request(),[
                'product_name'=>'required',
                'product_price'=>'required',
                'product_description'=>'required'
            ] );
            //save into database
            $product=new Product();
            $profile_id=$request->input('profile_id');
            $product_name=$request->input('product_name');
            $product_price=$request->input('product_price');
            $product_description=$request->input('product_description');
            $product->profile_id=$profile_id;
            $product->product_name=$product_name;
            $product->product_price=$product_price;
            $product->product_description=$product_description;
            $filename = 'user.png';
            if ($request->file('myFileSelect')) {
                $file = $request->file('myFileSelect');
                $destinationPath = 'public/imgs';
                $filename = $file->getClientOriginalName();
                // dd($filename);
                $file->move($destinationPath, $filename);
            }
            $product->myFileSelect = $filename;
            $product->save();
            return redirect()->back();
        }

        public function show_product($id)
        {
            $product=Product::where('id',$id)->get();
            return view('account.showproduct',compact('product','id'));
        }

        public function delete($id)
        {
            $product=Product::where('id',$id)->first();
                if(Auth::user())
                {
                 $product->delete();
                }
                return redirect()->route('show_profile');

        }

    public function updateProduct(Request $request)
    {
        if(Auth::user()) {

            if ($request->file('myFileSelect')) {
                $file = $request->file('myFileSelect');
                $destinationPath = 'public/imgs';
                $filename = $file->getClientOriginalName();
                // dd($filename);
                $file->move($destinationPath, $filename);
                Product::where('id', $request['product_id'])
                    ->update([
                        'product_name' => filter_var($request->input('product_name'), FILTER_SANITIZE_STRING),
                        'product_price' => filter_var($request->input('product_price'), FILTER_SANITIZE_STRING),
                        'product_description' => filter_var($request->input('about_product'), FILTER_SANITIZE_STRING),
                        'myFileSelect' => $filename

                    ]);

            } else {
                Product::where('id', $request['product_id'])
                    ->update([
                        'product_name' => filter_var($request->input('product_name'), FILTER_SANITIZE_STRING),
                        'product_price' => filter_var($request->input('product_price'), FILTER_SANITIZE_STRING),
                        'product_description' => filter_var($request->input('about_product'), FILTER_SANITIZE_STRING),
                    ]);
            }
            $request->session()->flash('alert-success', 'تم إضافة العرض على المنتج بنجاح');

            return redirect()->back();


        }
    }
}
