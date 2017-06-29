<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand hvr-buzz-out" href="{{route('dashboard')}}">Admin Panel </a>
    </div>

    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav text-center">
        <li class="dropdown open-user">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="" class="avt"> {{Auth::user()->first_name}} <b class="caret"></b>
            </a>
            <ul class="dropdown-menu col-xs-12 text-center">

                <li class="frst">
                    <img src="{{asset('public/imgs/'.Auth::user()->myFileSelect)}}" class="image-admin" alt="image-admin">
                    <p>{{Auth::user()->first_name}}
                        <br>
                        <small>Member since {{Auth::user()->created_at}}</small></p>
                </li>

                <li class="personal">
                    <!--                            <a href="profile.html" class="profile hvr-bounce-to-right">Profile</a>-->
                    <a href="{{route('logout')}}" class="sgnout hvr-bounce-to-left">Sign Out</a>
                </li>
            </ul>
        </li>

    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">

            <li>
                <a href="{{route('show_countries')}}" class="hvr-underline-from-left"><i class="fa fa-fw fa-suitcase"></i> &nbsp;الدول والمناطق</a>
            </li>

            <li>
                <a href="{{route('add_specification')}}" class="hvr-underline-from-left"><i class="fa fa-fw fa-envelope"></i> &nbsp;التخصصات</a>
            </li>

            <li>
                <a href="{{route('show_work_pages')}}" class="hvr-underline-from-left"><i class="fa fa-fw fa-suitcase"></i> &nbsp;الأعمال</a>
            </li>

            <li>
                <a href="{{route('admins')}}" class="hvr-underline-from-left"><i class="fa fa-fw fa-suitcase"></i> &nbsp; الادارة</a>
            </li>

            <li>
                <a href="{{route('get_ads')}}" class="hvr-underline-from-left"><i class="fa fa-fw fa-suitcase"></i> &nbsp; الإعلانات</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>