<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Store | Home Cpanel</title>
    <!-- Bootstrap Core CSS -->
    <link href="/css_admin/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="/css_admin/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- hover.css -->
    <link href="/css_admin/hover.css" rel="stylesheet" type="text/css">
    <!-- for alertify -->
    <link href="/css_admin/alertify.css" rel="stylesheet" type="text/css">
    <!-- for_fivicon -->
    <link href="#" type="text/css" rel="icon">
    <!-- Custom CSS -->
    <link href="/css_admin/style.css" rel="stylesheet">
</head>

<body>

<div id="wrapper">

    @include('admin.layouts.navbar')
    <div id="page-wrapper">

        <div class="container-fluid">

          @yield('content')
        </div>
    </div>
</div>
<!-- /#wrapper -->

<!-- scripts -->
<script type="text/javascript" src="/js_admin/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/js_admin/bootstrap.min.js"></script>
<script type="text/javascript" src="/js_admin/jquery.bpopup.js"></script>
<script type="text/javascript" src="/js_admin/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/js_admin/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="/js_admin/alertify.min.js"></script>
<script type="text/javascript" src="/js_admin/myscript.js"></script>

</body>

</html>