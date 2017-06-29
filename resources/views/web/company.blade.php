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
    <div class="comp-info col-xs-12">
        <div class="row">
            @foreach($profiles as $profile)

            <div class="comp-img col-xs-12 col-sm-4">

                <h3>{{$profile->work_name}}</h3>
                <div class="blockk col-md-2 col-sm-4 col-xs-6">
                    <div class="block-img">
                        <img src="{{ asset('public/imgs/'.$profile->myFileSelect)}}" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
            <div class="infos1 col-xs-12 col-sm-7">
                <ul>
                    <li class="m">اسم الشركة</li>
                    <li>{{$profile->work_name}}</li>

                    <li class="m">رقم الهاتف</li>
                    <li>{{$profile->work_phone}}</li>

                    <li class="m">العنوان</li>
                    <li>{{$profile->work_address}} </li>

                    <li class="m">مواعيد العمل </li>
                    <li>{{$profile->start_work}} الى {{$profile->end_work}}</li>

                    <li class="m">عن الشركة</li>
                    <li>{{$profile->about_work}} </li>

                    {{--<li class="m">صاحب العمل</li>--}}
                    {{--<li>{{$first_name}}{{$user->last_name}} </li>--}}

                </ul>
                @endforeach

            </div>

        </div><!-- end row -->
    </div><!--end comp-info-->


        <div class="login-form">
            <h1>تسجيل الدخول</h1>
            <form action="{{route('login')}}" method="post">
                {{csrf_field()}}
                <span class="fa fa-user" id="admintxt"></span>
                <input type="text" placeholder="البريد الالكترونى او اسم المستخدم" class="txt" required="" autofocus="" name="email">
                <span class="fa fa-lock" id="passtxt"></span>
                <input type="password" placeholder="الرقم السري" class="pass" required="" name="password">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> تذكرني
                    </label>
                </div>
                <button type="submit" class="bt" name="lginbtn">دخــول</button>
            </form>
        </div>

    <div class="grid">
        @foreach($products as $product)
            <h1 class="row-head">تتوافر لدينا هذه المنتجات</h1>

            <div class="block col-md-2 col-sm-4 col-xs-6">
                <div class="block-img">
                    <img src="{{ asset('public/imgs/'.$product->myFileSelect )}}" class="img-responsive" alt="">
                </div>
                <!-- end block-img -->

                <div class="block-caption">
                    <h3>{{$product->product_name}}</h3>
                    <a href="{{route('find_product',['id'=>$product->id])}}">صفحة المنتج</a>
                </div>
                <!-- end block-caption -->
            </div>
    @endforeach
    <!-- end block -->
    </div>
@endsection
