
@extends('layouts.mastar')
@section('content')
    <div class="myhead col-sm-12 col-xs-12">
        <div class="logo">
            <a href="{{route('index')}}">
                <img src="/imgs/logo.png" />
            </a>
        </div>

        <div class="btns">
            <a class="login-btn">
                تسجيل الدخول
                <span class="glyphicon glyphicon-user"></span>
            </a>

            <a href="{{route('user_register')}}">
                سجل الان
                <span class="glyphicon glyphicon-plus"></span>
            </a>
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
            <div class="add-comp col-sm-5 col-xs-11">
                <form role="form" method="post" action="{{route('add_user')}}" enctype="multipart/form-data">
                  {{csrf_field()}}
                    <input type="text" name="first_name" class="form-control input-sm"  placeholder="الاسم الأول" required>

                    <input type="text" name="last_name" class="form-control input-sm"  placeholder="الاسم الأخير" required>

                    <input type="email" name="email" class="form-control input-sm"  placeholder="البريد الإلكترونى" required>

                    <input type="password" name="password" class="form-control input-sm"  placeholder="كلمة المرور" required>
                    .

                    <input type="text" name="phone" class="form-control input-sm"  placeholder="رقم الهاتف" required>


                    <div class="s-sort">
                        <div class="imgcontent">
                            <div class="bstext" >
                                <span>أختر صورة شخصية</span></div>
                            <output id="list"></output>
                            <input type="file" id="files" name="myFileSelect"/>
                        </div>

                        <textarea name="user_about" rows='6' class="form-control input-sm" style="resize:vertical;" placeholder="نبذه مختصره عن نفسك "></textarea>
                        <!--rules-->

                    </div>
                    <input type="submit" name="submit" value="ارسال" />

                </form>
            </div><!--end add-comp-->
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
