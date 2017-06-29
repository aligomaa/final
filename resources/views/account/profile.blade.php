@extends('layouts.mastar')
@section('content')
<div class="myhead col-sm-12 col-xs-12">
    <div class="logo">
        <a href="{{route('index')}}">
            <img src="/imgs/logo.png" />
        </a>
    </div>

    <div class="btns1">
        <a class="text" href="{{route('logout')}}">
            تسجيل الخروج
            <span class="glyphicon glyphicon-user"></span>
        </a>

        <a href="{{route('account')}}">
حسابى           <span class="glyphicon glyphicon"></span>
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

<div class="comp-info col-xs-12">
    <div class="row">
        <div class="comp-img col-xs-12 col-sm-4">
            <h3>{{$user->profile->work_name}}</h3>
            <div class="blockk col-md-2 col-sm-4 col-xs-6">
                <div class="block-img">
                    <img src="{{ asset('public/imgs/'.$user->profile->myFileSelect)}}" class="img-responsive" alt="">
                </div>
            </div>
        </div>
        <div class="infos1 col-xs-12 col-sm-7">
            <ul>
                <li class="m">اسم الشركة</li>
                <li>{{$user->profile->work_name}}</li>

                <li class="m">رقم الهاتف</li>
                <li>{{$user->profile->work_phone}}</li>

                <li class="m">العنوان</li>
                <li>{{$user->profile->work_address}} </li>

                <li class="m">مواعيد العمل </li>
                <li>{{$user->profile->start_work}} الى {{$user->profile->end_work}}</li>

                <li class="m">عن الشركة</li>
                <li>{{$user->profile->about_work}} </li>

                <li class="m">صاحب العمل</li>
                <li>{{$user->first_name}}{{$user->last_name}} </li>

            </ul>
        </div>

    </div><!-- end row -->
</div><!--end comp-info-->

<div class="login-pass">
    <h1>تعديل كلمة المرور</h1>
    <form action="" method="">
        <input type="password" placeholder="أدخل كلمة المرور القديمة" class="pass1"   required autofocus name="pass">
        <input type="password" placeholder="أدخل كلمة المرور الجديدة" class="pass1"  required name="txtpass">
        <input type="password" placeholder="أعد  إدخال كلمة المرور الجديدة" class="pass1"  required name="txtpass">
        <button type="submit" class="bt1" name="lginbtn">حفظ</button>
        <button type="submit" class="bt1" name="lginbtn">إلغاء</button>
    </form>
</div><!--end login-form-->



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
            تعديل بيانات الشركه
        </li>

        <li class="add-prod-btn" id="edit-prod">
            <span class="glyphicon glyphicon-plus"></span>
            اضافة منتج
        </li>
    </div>
</div><!--end control-pg-->

<div class="container1 edits">
    <div class="row">
        <div class="widme edit-comp col-md-7 col-sm-9 col-xs-12">
            <h3>تعديل بيانات الشركه </h3>
            <div class="row">
                <form role="form" method="post" action="{{route('editprofile')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="partone col-sm-6 col-xs-12">
                        <input type="text" name="comname" class="form-control input-sm"  value="{{$user->profile->work_name}}">

                        <input type="text" name="phones" class="form-control input-sm"  value="{{$user->profile->work_phone}}" placeholder="أرقام الهواتف">
                        <div class="time">
                            <label>مواعيد العمل</label>
                            <input type="time" name="work_start" class="form-control input-sm"  title="من" value="{{$user->profile->start_work}}">
                            <input type="time" name="work_end" class="form-control input-sm"  title="إلى" value="{{$user->profile->end_work}}">
                        </div>

                        <div class="places">
                            <label>حدد مكان الشركه</label>
                            <select>
                                <option value="">الدوله</option>
                                <option>اختبار</option>
                                <option>اختبار</option>
                                <option>اختبار</option>
                                <option>اختبار</option>
                            </select>
                            <select>
                                <option value="">المحافظة</option>
                                <option>اختبار</option>
                                <option>اختبار</option>
                                <option>اختبار</option>
                                <option>اختبار</option>
                            </select>

                            <select>
                                <option value="">المدينه</option>
                                <option>اختبار</option>
                                <option>اختبار</option>
                                <option>اختبار</option>
                                <option>اختبار</option>
                            </select>

                            <select>
                                <option value="">المنطقه</option>
                                <option>اختبار</option>
                                <option>اختبار</option>
                                <option>اختبار</option>
                                <option>اختبار</option>
                            </select>

                            <input type="text" name="address" class="form-control input-sm"  value="{{$user->profile->work_address}}" placeholder="العنوان تفصيليا">
                        </div>
                    </div><!--end partone-->

                    <div class="part-two col-sm-6 col-xs-12">
                        <div class="s-sort">
                            <label>التصنيف</label>
                            <select>
                                <option>ملابس</option>
                                <option>كمبيوتر</option>
                                <option>قطع غيار</option>
                            </select>

                            <div class="imgcontent">
                                <div class="bstext" ><span>تعديل صورة العمل</span></div>
                                <output id="list"></output>
                                <input type="file" name="myFileSelect" multiple />
                            </div>


                            <textarea rows='6' name="about_work" class="form-control input-sm"  placeholder="نبذه مختصره عن العمل">{{$user->profile->about_work}}</textarea>

                        </div>
                    </div><!--end parttwo-->
                    <input type="submit" name="submit" value="ارسال" />
                </form>
            </div>
        </div><!--end edit-comp-->

        <div class="widme add-prod col-md-7 col-sm-8 col-xs-12">

            <h3>اضافة منتج</h3>
            <form action="{{route('add_product')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <input type="hidden" name="profile_id" value="{{$user->profile->id}}">
                        <input type="text" name="product_name" placeholder="اسم المنتج" />
                        <input type="text" name="product_price" placeholder="السعر" />
                        <textarea rows='6' name="product_description" class="form-control input-sm" placeholder="عن المنتج"></textarea>
                    </div>

                    <div class="col-sm-6 col-xs-12">
                        <div class="imgcontent">
                            <div class="bstext" ><span>أختر صورة المنتج</span></div>
                            <output id="list"></output>
                            <input type="file" name="myFileSelect"  />
                        </div><!--end imagecontent-->
                    </div>
                </div>
                <input type="submit" name="submit" value="إضافة" id="addpr-btn" />

            </form>
        </div><!--end edit-comp-->
    </div>
</div><!--end second container-->
@if(count($product))
<h1 class="row-head">تتوافر لدينا هذه المنتجات</h1>

<div class="grid">
    @foreach($product as $product)
    <div class="block col-md-2 col-sm-4 col-xs-6">
        <div class="block-img">
            <img src="{{ asset('public/imgs/'.$product->myFileSelect )}}" class="img-responsive" alt="">
        </div>
        <!-- end block-img -->

        <div class="block-caption">
            <h3>{{$product->product_name}}</h3>
            <a href="{{route('show_product',['id'=>$product->id])}}">صفحة المنتج</a>
        </div>
        <!-- end block-caption -->
    </div>
    @endforeach
    @endif
    <!-- end block -->





</div>
@endsection
