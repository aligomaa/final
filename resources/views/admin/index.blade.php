@extends('admin.layouts.mastar')
@section('content')



    <div class="block col-md-6 col-xs-12 text-center">
        <div class="block-cont blue">
            <h1>
                <i class="fa fa-bank"></i>&nbsp;&nbsp;عدد الشركات
            </h1>
            <h1>{{count($profile)}}</h1>
        </div>
        <!-- end block-cont -->
    </div>
    <!-- end block -->

    <div class="block col-md-6 col-xs-12 text-center">
        <div class="block-cont green">
            <h1>
                <i class="fa fa-cubes"></i>&nbsp;&nbsp;عدد التخصصات
            </h1>
            <h1>{{count($specification)}}</h1>
        </div>
        <!-- end block-cont -->
    </div>
    <!-- end block -->

@endsection