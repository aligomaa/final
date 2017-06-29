<!DOCTYPE html>
<html>
<head>
    <title>Egy4Shop</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">


    <!-- for bootstrap file -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!-- for custome style -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!-- <script src="http://maps.googleapis.com/maps/api/js"></script>-->
    <!-- for fontawesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- for bxslider -->
    <link  href="css/jquery.bxslider.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="head col-xs-12">
            <div class="row">
                <div class="info col-md-6 col-xs-12">
                    <a href="#"><img src="imgs/logo.png" /></a>
                    <h3>إنشئ حساب خاص بشركتك</h3>
                    <p>يمكنك من خلال الموقع انشاء حساب خاص بشركتك , حيث يمكنك إدارة شركتك واضافة منتجاتك والتسويق لبضائعك , فى أكبر موقع لتسويق المحلات والشركات .
                        كما يمكن ادارة شركتك بصوره كامله من خلال هذا الموقع حيث يمكن إدارة نظام الفواتير والصادر والوارد</p>

                    <div class="search col-md-6 col-xs-12">
                        <form action="" method="post">
                            <input type="text" placeholder="ابحث عن المنتج , الشركه , العرض " />
                            <input type="submit" />
                        </form>
                        <!--							<span class="fa fa-search"></span>-->
                    </div>
                    <div class="area">
                        <form action="" method="post">
                            <select>
                                <option>الدوله</option>
                                <option>مصر</option>
                                <option>ليبيا</option>
                                <option>تونس</option>
                            </select>
                            <select>
                                <option>المحافظه</option>
                                <option>الدقهليه</option>
                                <option>الاسكندريه</option>
                            </select>
                            <select>
                                <option>المدينه</option>
                                <option>المنصوره</option>
                            </select>
                            <select>
                                <option>المنطقه</option>
                                <option>الجلاء</option>
                            </select>

                            <select>
                                <option>التصنيف</option>
                                <option>ملابس</option>
                                <option>أجهزة</option>
                                <option>مطاعم</option>
                            </select>

                            <input type="submit" value="بحث" />
                        </form>
                    </div>
                </div><!--end info-->
                <div class="vid col-md-6 col-xs-12 text-center">
                    <h3>كيف تستخدم هذا الموقع</h3>

                    <!--                        <iframe src="https://player.vimeo.com/video/124674160" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->

                    <div class="holder text-center col-sm-12">
                        <div class="preview">
                            <img src="imgs/web1.png">
                        </div>
                    </div>

                    <div class="mybtn col-md-6 col-xs-12 text-center">
                        <div>
                            <a class="login-btn"><span class="glyphicon glyphicon-user"></span>دخــول</a>
                        </div>

                        <div>
                            <a class="btn text-center" href="addComp.html">
                                <span class="glyphicon glyphicon-plus"></span>
                                أضف شركتك
                            </a>
                        </div>


                        <div>
                            <a class="signup-btn"><span class="fa fa-eye"></span>إبحث عن وظيفة</a>
                        </div>

                    </div>
                </div><!--end vid-->
            </div><!--end row-->
        </div><!--end head-->
        <div class="mymap col-xs-12">

            <!--
                            <div id="googleMap"></div>
                        </div>end mymap
            -->

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

            <div class="sign-form">
                <div class="up-form">
                    <h1>للتسجيل في الموقع</h1>
                    <form name="signup-form" action="#" method="get">
                        <input type="text" placeholder="الإسم الأول" class="fname" name="fname" required>
                        <input type="text" placeholder="الإسم الأخير" class="fname" name="lname" required>
                        <input type="email" placeholder="إدخل الإيميل" class="fname" name="up-mail" required>
                        <input type="password" placeholder="الرقم السري" class="up-pass" name="up-pass" required>
                        <input type="password" placeholder="أعد كتابة الرقم السري" class="up-pass" name="up-pass" required>
                        <div class="up-check">
                            <label>
                                <input type="checkbox" value="remember-me"> انا قرأت كافة الحقوق الخاصه بهذا الموقع وأوافق علي التسجيل
                            </label>
                        </div>
                        <input type="submit" value="تسجيــل" id="up-btn">
                    </form>
                </div>

                <div class="divided"></div>

                <div class="social-form">
                    <a href="#"><span class="fa fa-facebook" id="fac"></span></a>
                    <a href="#"><span class="fa fa-twitter" id="twit"></span></a>
                    <a href="#"><span class="fa fa-google" id="google"></span></a>
                </div>
            </div>


            <div class="area-serch">

                <div class="show-radio">
                    <div class="bman">
                        <label>
                            <span>صاحب عمل</span>  <input type="radio" name="bm" id="bm" onClick='checkButton1()'>
                        </label>
                    </div>

                    <div class="employ">
                        <label>
                            <span>أبحث عن وظيفة</span>  <input type="radio" name="bm" id="emp" onClick='checkButton1()'>
                        </label>
                    </div>

                </div>
                <div class="show-search">
                    <from action="" method="">

                        <select>
                            <option>الدوله</option>
                            <option selected>مصر</option>
                            <option>ليبيا</option>
                            <option>تونس</option>
                        </select>

                        <select>
                            <option>المحافظه</option>
                            <option>القاهره</option>
                            <option>الدقهليه</option>
                            <option>الإسكندريه</option>
                        </select>

                        <select>
                            <option>المدينه</option>
                            <option>المنصوره</option>
                            <option>القاهره</option>
                            <option>سندوب</option>
                        </select>

                        <select>
                            <option>المنطقه</option>
                            <option>الجلاء</option>
                            <option>الترعه</option>
                            <option>قناة السويس</option>
                        </select>

                        <select>
                            <option>التصنيف</option>
                            <option>أجهوه</option>
                            <option>ملابس</option>
                            <option>مطاعم</option>
                        </select>

                        <span class="opt">أو يمكنك البحث من خلال <i class="fa fa-angle-down"></i></span>

                        <input type="search" placeholder="إبحث عن الوظيفه في جميع انحاء الجمهورية" class="area-ser    ">
                    </from>
                </div>
                <input type="submit" value="ذهاب" />

            </div>

            <div class="bef-login">
                <div class="bman1">
                    <label>
                        <span>أنت مسجل بالفعل في الموقع</span>  <input type="radio" name="bm" id="bm1" onClick='checkButton2()'>
                    </label>
                </div>

                <div class="employ1">
                    <label>
                        <span>لست مسجل في الموقع لذلك يرجي التسجيل من هنا</span>  <input type="radio" name="bm" id="emp1" onClick='checkButton2()'>
                    </label>
                </div>
            </div>

            <div class="footer col-sm-12">
                <div class="fo-links text-center">
                    <a href="index.html">الرئيسيه</a>
                    <a href="addComp.html">أضف شركتك</a>
                    <a href="contact.html">تواصل معنا</a>
                    <!-- <a href="search-jop.html">إبحث عن وظيفة</a> -->
                </div>
            </div><!--end footer-->
        </div><!--end row-->
    </div><!--end container-->


    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.bpopup.js"></script>
    <script type="text/javascript" src="js/jquery.bxslider.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>