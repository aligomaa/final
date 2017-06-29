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
            <h3>تواصل معنا</h3>
            <div class="contact col-sm-6 col-xs-12">
                <form>
                    <input type="text" placeholder="الإسم" />
                    <input type="email" placeholder="البريد الإلكترونى" />
                    <textarea placeholder="نص الرساله ......"></textarea>
                    <input type="submit" value="إرسال" class="btn-info" />
                </form>
            </div><!--end contact-->
            <div class="map col-sm-6 col-xs-12">
                <div class="infos">
                    <div>
                        <p>الهاتف</p>
                        <span>050485985</span>
                    </div>

                    <div>
                        <p>البريد الإلكترونى</p>
                        <span>info@Shop.com</span>
                    </div>

                    <div>
                        <p>العنوان</p>
                        <span>المنصوره    </span>
                    </div>
                </div>
            </div>
        </div><!--end row-->
    </div><!--end container-->
    <div class="login-form">
        <h1>تسجيل الدخول</h1>
        <form action="{{route('login')}}" method="post">
            {{csrf_field()}}
            <span class="fa fa-user" id="admintxt"></span>
            <input type="email" placeholder="إدخل الايميل" class="txt"   required autofocus name="email">
            <span class="fa fa-lock" id="passtxt"></span>
            <input type="password" placeholder="الرقم السري" class="pass"  required name="password">
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> تذكرني
                </label>
            </div>
            <button type="submit" class="bt" name="submit">دخــول</button>
        </form>
    </div>
@endsection