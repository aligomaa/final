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

    <div class="container">
    <div class="row">
        @foreach($product as $product)
        <div class="pr-head col-xs-12">
            <div class="row">
                {{--<div class="pr-img col-xs-12 col-sm-4">--}}
                    {{--<h3>{{$product->product_name}}</h3>--}}
                    {{--<img src="{{asset('/public/imgs/'.$product->myFileSelect)}}" />--}}
                {{--</div><!--end pr-img-->--}}

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
  	<span class="open-cog">
  		<a class="glyphicon glyphicon-cog">
  		</a>
  	</span>
    <span class="close-cog">
  		<a class="glyphicon glyphicon-cog">
  		</a>
  	</span>

    <div>
        <a href="{{route('delete_product',['id'=>$product->id])}}">
        <li class="delete-btn">
            <span class="glyphicon glyphicon-pencil"></span>
            حذف المنتج
        </li>
        </a>

        <li class="add-prod-btn">
            <span class="glyphicon glyphicon-plus"></span>
            تعديل المنتج
        </li>
    </div>
</div><!--end control-pg-->


<div class="back"></div>
<div class="widme add-prod col-md-7 col-sm-8 col-xs-12">

    <h3>تعديل المنتج</h3>
    <form action="{{route('edit_product')}}" method="post" enctype="multipart/data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <input type="hidden" name="product_id" value="{{$product->id}}">
                <input type="text" name="product_name" value="{{$product->product_name}}" placeholder="اسم المنتج" />
                <input type="text" name="product_price" placeholder="السعر"  value="{{$product->product_price}}">

                <textarea rows='6' name="about_product" class="form-control input-sm"  placeholder="تفاصيل المنتج">{{$product->product_description}}</textarea>
            </div>

            <div class="col-sm-6 col-xs-12">
                <div class="imgcontent">
                    <div class="bstext" ><span>أختر صورة المنتج</span></div>
                    <output id="list"></output>
                    <input type="file" name="myFileSelect" multiple />
                </div><!--end imagecontent-->
            </div>
        </div>
        <input type="submit" name="submit" value="إضافة" id="addpr-btn" />

    </form>
</div><!--end edit-comp-->

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

@endsection