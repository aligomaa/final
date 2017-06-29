@extends('layouts.mastar')
@section('content')
<div class="myhead col-sm-12 col-xs-12">
    <div class="logo">
        <a href="{{route('index')}}">
            <img src="/imgs/logo.png" />
        </a>
    </div>

    <div class="btns1">
        <a href="{{route('logout')}}">
            تسجيل خروج            <span class="glyphicon glyphicon-user"></span>
        </a>
        @if($user->haswork > 0)

        <a href="{{route('show_profile',['id'=>$user->id])}}">
            صفحة عملك           <span class="glyphicon glyphicon"></span>
        </a>
        @endif
        @if($user->haswork == 0)
        <a href="{{route('add_profile')}}">
انشاء صفحة عمل            <span class="glyphicon glyphicon"></span>
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
@if(Auth::check())

<div class="comp-info col-xs-12">
    <div class="row">
        <div class="comp-img col-xs-12 col-sm-4">
            <h3>{{ Auth::user()->first_name}} {{ Auth::user()->last_name}} </h3>
            <div class="blockk col-md-2 col-sm-4 col-xs-6">
                <div class="block-img">
                    <img src="{{ asset('public/imgs/'.Auth::user()->myFileSelect)}}" class="img-responsive" alt="">
                </div>
            </div>
            {{--<div class="imgcontent">--}}
                {{--<div class="bstext" ><span>أختر صورة شخصية</span></div>--}}
                {{--<output id="list"></output>--}}
                {{--<input type="file" id="files" name="myFileSelect" multiple />--}}

            {{--</div>--}}
        </div>
        <div class="infos1 col-xs-12 col-sm-7">
            <ul>
                <li class="m">الاسم</li>
                <li>{{ Auth::user()->first_name}} {{ Auth::user()->last_name}}</li>

                <li class="m">رقم الهاتف</li>
                <li>{{ Auth::user()->phone}}</li>

                <li class="m">الايميل</li>
                <li>{{ Auth::user()->email}} </li>

                <li class="m">نبذه مختصرة </li>
                <li> {{ Auth::user()->user_about}}   </li>

            </ul>
        </div>
    </div><!-- end row -->
</div><!--end comp-info-->
@endif
<div  class="control-pg">
  	<span class="open-cog">
  		<a class="glyphicon glyphicon-cog">
  		</a>
  	</span>
    <span class="close-cog">
  		<a class="glyphicon glyphicon-cog">
  		</a>
  	</span>
    <div>
        <li class="edit-comp-btn" id="edit-comp">
            <span class="glyphicon glyphicon-pencil"></span>
            تعديل بياناتى الشخصية
        </li>

    </div>
</div><!--end control-pg-->

<div class="container1 edits">
    <div class="row">
        <div class="widme edit-comp col-md-7 col-sm-9 col-xs-12">
            <h3>تعديل بياناتى الشخصية </h3>
            <div class="row">
                <form role="form" method="post" action="{{route('edit_user')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="partone col-sm-6 col-xs-12">
                        <input type="text" name="first_name" class="form-control input-sm" value="{{Auth::user()->first_name}}" placeholder="الاسم الاول">
                        <input type="text" name="last_name" class="form-control input-sm"  value="{{Auth::user()->last_name}}" placeholder="الاسم الاخير">
                        <input type="email" name="email" class="form-control input-sm" value="{{Auth::user()->email}}" placeholder="البريد الإلكترونى">
                        <input type="text" name="phones" class="form-control input-sm"  value="{{Auth::user()->phone}}" placeholder="رقم الهاتف">
                        <textarea rows='6' name="user_about" class="form-control input-sm" placeholder="نبذه مختصره عن نفسك">{{Auth::user()->user_about}}</textarea>

                    </div><!--end partone-->

                    <div class="part-two col-sm-6 col-xs-12">
                        <div class="s-sort">
                            <div class="imgcontent">
                                <div class="bstext" ><span>تعديل الصورة الشخصية </span></div>
                                <output id="list"></output>
                                <input type="file" name="myFileSelect" multiple />
                            </div>
                        </div>
                    </div><!--end parttwo-->
                    <input type="submit" name="submit" value="ارسال" />
                </form>
            </div>
        </div><!--end edit-comp-->
    </div>
    @foreach($ads as $ad)
        <div class="company-ads col-xs-12">
            <img src="{{asset('public/imgs/'.$ad->ads_img)}}">
        </div>
        @endforeach
</div><!--end second container-->
    @endsection
