@extends('layouts.mastar')
@section('content')
    <div class="container">
        <div class="row">
            <div class="head col-xs-12">
                <div class="row">
                    <div class="info col-md-6 col-xs-12">
                        <a href="{{route('index')}}"><img src="/imgs/logo.png" /></a>
                        <h3>إنشئ حساب خاص بك وبعملك</h3>
                        <p> يمكنك من خلال هذا الموقع انشاء حساب خاص بك كما يمكنك انشاء صفحة عمل خاصة تستطيع من خلالها عرض اى عمل تقدمه او تقوم به سواء كان خدمة تقدمها أو منتج تعرضه كما يمكنك مشاهدة ما يعرضه الاخرون من معلومات خاصه بهم أو عن صفحات العمل الخاصة بهم </p>

                        <div class="search col-md-6 col-xs-12">
                            <form action="{{route('search')}}" method="get" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <input type="text" name="search" placeholder="ابحث عن المنتج , الشركه , العرض " />
                            <!--							<span class="fa fa-search"></span>-->
                        </div>
                        <div class="area">

                            <select  name="country_id" id="countries" >
                                <option  selected="selected" disabled="disabled" >الدوله
                                </option>
                                @foreach($countries as $country)
                                    <option value="{{$country['id']}}">{{$country['name']}} </option>
                                @endforeach
                            </select>

                            <span id="state_loader"></span>
                            <select id="governorates" name="governorate_id">

                                <option selected="selected" disabled="disabled">المحافظه
                                </option>


                            </select>


                            <span id="street_loader"></span>
                            <select id="cities" name="city_id">
                                <option selected="selected" disabled="disabled">المدينه
                                </option>


                            </select>

                            <span id="specify_loader"></span>
                            <select id="streets" name="street_id">
                                <option selected="selected" disabled="disabled">الشارع
                                </option>


                            </select>


                            <span id="city_loader"></span>
                            <select id="city_dropdown" name="specify">
                                <option selected="selected" disabled="disabled">التخصص
                                </option>
                                @foreach($specification as $specification)
                                    <option value="{{$specification['id']}}">{{$specification['name']}} </option>
                                @endforeach

                            </select>

                            <div id="ok-btn">
                                <input type="submit" value="ذهــــاب"  name="submit" class="btn-info">
                            </div>
                            </form>
                        </div>
                    </div><!--end info-->
                    <div class="vid col-md-6 col-xs-12 text-center">
                        <h3>ضع اعلانك هنا</h3>

                        <div class="holder text-center col-sm-12">
                            @foreach($ads as $ad)
                            <div class="preview">
                                <img src="{{asset('public/imgs/'.$ad->ads_img)}}">
                            </div>
                                @endforeach
                        </div>

                        <div class="mybtn col-md-6 col-xs-12 text-center">
                            @if(!Auth::user())
                            <div>
                                <a class="login-btn"><span class="glyphicon glyphicon-user"></span>دخــول</a>
                            </div>
                            @endif
                                @if(Auth::user())
                                    <div>
                                        <a class="btn text-center" href="{{route('logout')}}"><span class="glyphicon glyphicon-user"></span>خروج</a>
                                    </div>
                                @endif
                                @if(!Auth::user())
                                <div>
                                <a class="btn text-center" href="{{route('user_register')}}">
                                    <span class="glyphicon glyphicon-plus"></span>سجل الان
                                </a>
                            </div>
                                    @endif
                                @if(Auth::user())
                                    <div>
                                        <a class="btn text-center" href="{{route('account')}}">
                                            <span class="glyphicon glyphicon"></span>حسابى الخاص
                                        </a>
                                    </div>
                                @endif


                        </div>
                    </div><!--end vid-->
                </div><!--end row-->
            </div><!--end head-->
            <div class="mymap col-xs-12">

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

            </div><!--end row-->
        </div><!--end container-->
    </div>
    <script>
        //Ajax get governrate in one contry
        $(document).ready(function () {
            $('#countries').on('change', function (e) {

                var country_id = e.target.value;
                console.log(country_id);
                //ajax
                $.get('/get_governrare?country_id=' + country_id, function (data) {
                    console.log(data);

                    $('#governorates').empty();
                    $('#cities').empty();
                    $('#streets').empty();

                    $('#governorates').append('<option selected disabled> المحافظة</option>');
                    $('#cities').append('<option selected disabled> المدينة</option>');
                    $('#streets').append('<option selected disabled> الشارع</option>');
                    $.each(data, function (index, governratesObj) {
                        $('#governorates').append(' <option value="' + governratesObj.id + '">' + governratesObj.name + '</option>');
                        $("#governorates option:first").attr('selected', 'selected');
                    });
                });
            });
        });
        //Ajax get cities in one governrate
        $('#governorates').on('change', function (e) {
            console.log();
            var governorate_id = e.target.value;
            //ajax
            $.get('/get_city?governorate_id=' + governorate_id, function (data) {
                console.log(data);
                $('#cities').empty();
                $('#streets').empty();
                $('#cities').append('<option selected disabled> المدينة</option>');
                $('#streets').append('<option selected disabled> الشارع</option>');

                $.each(data, function (index, citiesObj) {
                    $('#cities').append('<option value="' + citiesObj.id + '">' + citiesObj.name + '</option>');
                    $("#cities option:first").attr('selected', 'selected');
                });
            });
        });

    //Ajax get streets in one city

        $('#cities').on('change',function(e){
            console.log();
            var city_id = e.target.value;
            //ajax
            $.get('/get_street?city_id='+city_id,function(data){
                console.log(data);
                $('#streets').empty();
                $('#streets').append('<option selected disabled> الشارع</option>');
                $.each(data,function(index,streetsObj){
                    $('#streets').append('<option value="' + streetsObj.id +'">' +streetsObj.name+ '</option>');
                    $("#streets option:first").attr('selected','selected');
                });
            });
        });

    </script>
    @endsection