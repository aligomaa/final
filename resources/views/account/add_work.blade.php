@extends('layouts.mastar')
@section('content')

<div class="myhead col-sm-12 col-xs-12">
    <div class="logo">
        <a href="index.html">
            <img src="/imgs/logo.png" />
        </a>
    </div>


</div><!--end my heade-->

<div class="container">
    <div class="row">
        <div class="add-comp col-sm-5 col-xs-11">
            <form role="form" method="post" action="{{route('add_work')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <input type="text" name="work_name" class="form-control input-sm"  placeholder=" اسم العمل" required>
                <input type="text" name="work_phone" class="form-control input-sm"  placeholder="أرقام الهواتف" required>
                <input type="text" name="work_address" class="form-control input-sm"  placeholder=" العنوان... " required>

                <div class="time">
                    <label>مواعيد العمل</label>
                    <input type="time" name="start_work" class="form-control input-sm"  title="من">

                    <input type="time" name="end_work" class="form-control input-sm"  title="إلي">

                </div>

                <div class="places">
                    <label>حدد مكان الشركه</label>
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

                    <div class="s-sort">
                        <label>التصنيف</label>
                        <select required="required" name="specification_id" id="specification">
                            <option  id="selectedSpec" selected disabled value="">التصنيف</option>
                            @foreach($specification as $specification)
                                <option value="{{$specification['id']}}">{{$specification['name']}}</option>
                            @endforeach

                        </select>

                        </div><!--end an-sort-->

                    <div class="imgcontent">
                        <div class="bstext" ><span>أختر صورة المؤسسة</span></div>
                        <output id="list"></output>
                        <input type="file" id="files" name="myFileSelect"/>
                    </div>

                    <textarea rows='6' name="about_work" class="form-control input-sm" style="resize:vertical;" placeholder="نبذه مختصره عن الشركه"></textarea>
                    <!--rules-->
                </div>
                <input type="submit" name="submit" value="ارسال" />

            </form>
        </div><!--end add-comp-->
    </div><!--end row-->
</div><!--end container-->
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