@extends('admin.layouts.mastar')
@section('content')

    <div id="page-wrapper">

        <div class="container-fluid">

            <div class="com-tabel col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <table>
                    <tr>
                        <th>NO</th>
                        <th>اسم العمل </th>
                        <th>Controls</th>
                    </tr>
                    @foreach($pages as $page)
                        <tr>
                            <th> {{$page->id}}</th>
                            <th><a href="{{route('get_company',['id'=>$page->id])}}"> {{$page->work_name}}</a></th>
                            <th>
                                <span class="remove" data-toggle="tooltip" data-placement="top" title="Remove Sectore"><i class="fa fa-close"></i></span>
                            </th>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->


@endsection