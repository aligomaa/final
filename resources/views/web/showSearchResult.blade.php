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
    <i class="fa fa-arrow-down " id="show-down" data-toggle="tooltip" data-placement="right" title="" data-original-title="Show Nav"></i>
    <div class="contact-det">
        <div class="container">
            <div class="row">
                <div class="all-companies col-xs-12 text-center">
                    <h1 class="row-head">نتائج البحث</h1>
                    <div class="cont-company">
                        @if($searchKey != null)
                            @if(count($users) || $product != null)
                            @else
                                <br><br><br>
                                <h3 style="color: black">لاتوجد نتائج بحث !!</h3>
                            @endif
                        @elseif(count($users))
                        @else
                            <br><br><br>

                            <h3>لاتوجد نتائج بحث !!</h3>

                        @endif
                        @if($country == null && $governorate == null && $city == null && $address == null && $specility ==null)
                            @if(count($users))
                                @foreach($users as $user)
                                    <div class="block col-md-2 col-sm-4 col-xs-6">
                                        <div class="block-img">
                                            {{--@if( $user->myFileSelect!='' )--}}
                                                <img  src="{{asset('public/imgs/'.$user->myFileSelect)}}"   class="img-responsive" alt="">
                                            {{--@endif--}}

                                            {{--@if( $user->pic_path=='' )--}}
                                                {{--<img  src="dist/images/logo.png"   class="img-responsive" alt="">--}}
                                            {{--@endif--}}
                                        </div>
                                        <!-- end block-img -->
                                        <div class="block-caption">
                                            <h3> {{$user->work_name}}</h3>
                                            <a href="/companyprofile/{{$user->id}}"> صفحة الشركة</a>
                                        </div>
                                        <!-- end block-caption -->
                                    </div>
                                    <!-- end block -->
                                @endforeach
                            @else
                            @endif
                        @else
                            @if(count($users))
                                @foreach($users as $user)
                                {{--@for($i=0 ; $i<Count($users); $i++ )--}}
                                    <div class="block col-md-2 col-sm-4 col-xs-6">
                                        <div class="block-img">
                                            @if( $user['myFileSelect']!='' )
                                                <img  src="{{asset('public/imgs/'.$user->myFileSelect)}}"   class="img-responsive" alt="">
                                            @endif
                                            {{--@if( $users[$i]['pic_path']=='' )--}}
                                                {{--<img  src="dist/images/logo.png"   class="img-responsive" alt="">--}}
                                            {{--@endif--}}
                                        </div>
                                        <!-- end block-img -->
                                        <div class="block-caption">
                                            <h3> {{$user['work_name']}}</h3>
                                            <a href="{{route('get_company',['id'=>$user->id])}}"> صفحة الشركة</a>
                                        </div>
                                        <!-- end block-caption -->
                                    </div>
                                    <!-- end block -->
                                    @endforeach
                                {{--@endfor--}}
                            @else
                            @endif
                        @endif
                        @if($searchKey != null)
                            @if(count($product))
                                {{--@for($i=0 ; $i<Count($products); $i++ )--}}
                                @foreach($product as $products)
                                    <div class="block col-md-2 col-sm-4 col-xs-6">
                                        <div class="block-img">
                                            <img src="{{asset('public/imgs/'.$products->myFileSelect)}}" class="img-responsive" alt="">
                                        </div>
                                        <!-- end block-img -->
                                        <div class="block-caption">
                                            <h3> {{$products->product_name}}</h3>
                                            <a href="{{route('find_product',['id'=>$products->id])}}">صفحة المنتج</a>
                                        </div>
                                        <!-- end block-caption -->
                                    </div>
                                    <!-- end block -->
                                    @endforeach
                            {{--@endfor--}}
                        @else
                        @endif
                    @else
                    @endif
                    <!-- end block -->
                    </div>
                    <!-- end cont-company -->
                </div>
                <!-- end all-companies -->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </div>
    <!-- end cont-det -->
    <!--
code of login
-->
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
@stop