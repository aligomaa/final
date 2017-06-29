@extends('admin.layouts.mastar')
@section('content')

    <div id="page-wrapper">

        <div class="container-fluid">

            <div class="cont-serch text-right col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1>إضافة اعلان جديد </h1>
                <a class="add-sector">
                    <i class="fa fa-plus"></i>
                </a>
            </div>

            <div class="com-tabel col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <table>
                    <tr>
                        <th>NO</th>
                        <th>اسم الاعلان</th>
                        <th>Controls</th>
                    </tr>
                    @foreach($ads as $ad)
                        <tr>
                            <th> {{$ad->id}}</th>
                            <th>{{$ad->name}}</th>
                            <th>
                                {{--<span class="edit" data-toggle="tooltip" data-placement="top" title="Edit Sectore"><i class="fa fa-pencil"></i></span>--}}
                                <a href="{{route('delete_ads',['id'=>$ad->id])}}"><span class="remove" data-toggle="tooltip" data-placement="top" title="Remove Sectore"><i class="fa fa-close"></i></span></a>
                            </th>
                        </tr>
                    @endforeach

                </table>
            </div>

            {{--<div class="edit-sector col-md-4 col-sm-6 col-xs-12">--}}
                {{--<!-- end sector-img -->--}}
                {{--<input type="text" placeholder="Edit country name ..">--}}
                {{--<input type="submit" value="Save" class="save">--}}
            {{--</div>--}}

            <div class="edit-sector1 col-md-4 col-sm-6 col-xs-12">

                <form method="post" action="{{route('new_ads')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="sector-img col-xs-12 text-center">
                        <img src="{{asset("/images/p2.jpg")}}" alt="Your images" class="target" data-toggle="tooltip" data-placement="top" title="Image Show">
                        <div class="fileUpload col-xs-12 text-center">
                            <span><i class="fa fa-camera"></i> &nbsp; Upload the Ads image</span>
                            <input type="file" name="ads_img" class="upload" id="file1">
                        </div>
                    </div>
                    <input type="text"  name="name" placeholder="اسم الاعلان">
                    <input type="submit" name="submit" value="Add">
                </form>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->


@endsection