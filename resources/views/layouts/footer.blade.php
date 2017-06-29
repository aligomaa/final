<div class="footer col-sm-12">
    <div class="fo-links text-center">
        <a href="{{route('index')}}">الرئيسيه</a>
        @if(!Auth::user())
        <a href="{{route('user_register')}}">سجل الأن</a>
        @endif
        @if(Auth::user())
            <a href="{{route('account')}}">حسابى الخاص </a>
        @endif
        <a href="{{route('contact')}}">تواصل معنا</a>
        <!-- <a href="search-jop.html">إبحث عن وظيفة</a> -->
    </div>
</div><!--end footer-->

<script type="text/javascript" src="/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/jquery.bpopup.js"></script>
<script type="text/javascript" src="/js/jquery.bxslider.js"></script>
<script type="text/javascript" src="/js/script.js"></script>