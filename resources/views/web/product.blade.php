@extends('layouts.mastar')
@section('content')
    <div class="myhead col-sm-12 col-xs-12">
        <div class="logo">
            <a href="{{route('index')}}">
                <img src="/imgs/logo.png" />
            </a>
        </div>
        <div class="btns">
            @if(!Auth::user())
                <a class="login-btn">
                    تسجيل الدخول
                    <span class="glyphicon glyphicon-user"></span>
                </a>
            @endif
            @if(Auth::user())
                <a class="btn text-center" href="{{route('logout')}}">
                    تسجيل الخروج
                    <span class="glyphicon glyphicon-user"></span>
                </a>
            @endif
            @if(Auth::user())
                <a href="{{route('account')}}">
                    حسابى الخاص                 <span class="glyphicon glyphicon-plus"></span>
                </a>
            @endif

            @if(!Auth::user())
                <a href="{{route('user_register')}}">
                    أضف شركتك
                    <span class="glyphicon glyphicon-plus"></span>
                </a>
            @endif
        </div>

        <div class="search">
            <div>
                <input type="text" placeholder="البحث"/>
                <input type="submit" />
                <span class="glyphicon glyphicon-search"></span>
            </div>

        </div>
    </div><!--end my heade-->
    <div class="container">
        <div class="row">
            @foreach($products as $product)
                <div class="pr-head col-xs-12">
                    <div class="row">
                        <div class="blockk col-md-2 col-sm-4 col-xs-6">
                            <div class="block-img">
                                <br><br>
                                <img src="{{ asset('public/imgs/'.$product->myFileSelect)}}" class="img-responsive" alt="">
                            </div>
                        </div>
                        <div class="pr-info col-xs-12 col-sm-8">
                            <table>
                                <tr>
                                    <th class="m">المنتج</th>
                                    <td class="m">المواصفات</td>
                                </tr>

                                <tr>
                                    <th>اسم المنتج</th>
                                    <td>{{$product->product_name}} </td>
                                </tr>

                                <tr>
                                    <th>السعر</th>
                                    <td>{{$product->product_price}} جنيه</td>
                                </tr>

                                <tr>
                                    <th>عن المنتج</th>
                                    <td>{{$product->product_description}} </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div><!--end row-->
            @endforeach
        </div><!--end pr-other-->
    </div><!--end pr-info-->


    <div  class="control-pg">


    <div class="back"></div>
    <div class="login-form">
        <h1>تسجيل الدخول</h1>
        <form action="" method="">
            <span class="fa fa-user" id="admintxt"></span>
            <input type="text" placeholder="إدخل الاسم" class="txt"   required autofocus name="txtname">
            <span class="fa fa-lock" id="passtxt"></span>
            <input type="password" placeholder="الرقم السري" class="pass"  required name="txtpass">
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> تذكرني
                </label>
            </div>
            <button type="submit" class="bt" name="lginbtn">دخــول</button>
        </form>
    </div>
    </div>
@endsection