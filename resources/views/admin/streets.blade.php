@extends('admin.layouts.mastar')
@section('content')

    <div id="page-wrapper">

        <div class="container-fluid">

            <div class="cont-serch text-right col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1>إضافة شارع جديد </h1>
                <a class="add-sector">
                    <i class="fa fa-plus"></i>
                </a>
            </div>

            <div class="com-tabel col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <table>
                    <tr>
                        <th>NO</th>
                        <th>اسم الشارع</th>
                        <th>Controls</th>
                    </tr>
                    @foreach($streets as $street)
                        <tr>
                            <th> {{$street->id}}</th>
                            <th><a href="">{{$street->name}}</a></th>
                            <th>
                                {{--<span class="edit" data-toggle="tooltip" data-placement="top" title="Edit Sectore"><i class="fa fa-pencil"></i></span>--}}
                                <span class="remove" data-toggle="tooltip" data-placement="top" title="Remove Sectore"><i class="fa fa-close"></i></span>
                            </th>
                        </tr>
                    @endforeach

                </table>
            </div>

            <div class="edit-sector col-md-4 col-sm-6 col-xs-12">
                <!-- end sector-img -->
                <input type="text" placeholder="Edit country name ..">
                <input type="submit" value="Save" class="save">
            </div>

            <div class="edit-sector1 col-md-4 col-sm-6 col-xs-12">
                <form method="post" action="{{route('add_street')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="city_id" value="{{$id}}" >
                    <input type="text"  name="name" placeholder="Street name ..">
                    <input type="submit" name="submit" value="Add">
                </form>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->


@endsection