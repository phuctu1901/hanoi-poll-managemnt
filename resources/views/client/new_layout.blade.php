<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Hệ thống đóng góp ý kiến công dân thành phố Hà Nội - ứng dụng hệ thống định danh phân tán">
    <meta name="author" content="Ansonika">
    <title>Hệ thống trưng cầu ý kiến 4.0</title>

    <!-- Favicons-->
    {{--    <link rel="shortcut icon" href="/client/img/favicon.ico" type="image/x-icon">--}}
    <link rel="shortcut icon" href="/client-assets/assets/images/Hanoi_Logo.png">

    <link rel="apple-touch-icon" type="image/x-icon" href="/client/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="/client/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="/client/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="/client/img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Montserrat:300,400,700" rel="stylesheet">

    <!-- COMMON CSS -->
    {{--    <link href="/client/css/bootstrap.min.css" rel="stylesheet">--}}
    <link href="/client/css/style.css" rel="stylesheet">
    <link href="/client/css/vendors.css" rel="stylesheet">
    <link href="/client/css/bootstrap.min.css" rel="stylesheet">

    <!-- Stylesheets -->
    {{--    <link rel="stylesheet" href="/client-assets/global/css/bootstrap.min.css">--}}
    {{--    <link rel="stylesheet" href="/client-assets/global/css/bootstrap-extend.min.css">--}}

<!-- CUSTOM CSS -->
    <link href="/client/css/custom.css" rel="stylesheet">

    <!-- REVOLUTION SLIDER CSS -->
    {{--    <link href="/client/layerslider/css/layerslider.css" rel="stylesheet">--}}

    @section('head-content')
    @show

</head>
<body>
{{--<div id="preloader">--}}
{{--    <div class="sk-spinner sk-spinner-wave">--}}
{{--        <div class="sk-rect1"></div>--}}
{{--        <div class="sk-rect2"></div>--}}
{{--        <div class="sk-rect3"></div>--}}
{{--        <div class="sk-rect4"></div>--}}
{{--        <div class="sk-rect5"></div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- End Preload -->

<div class="layer"></div>
<!-- Mobile menu overlay mask -->


<!-- Mobile menu overlay mask -->
<header>
    <div id="top_line">
        <div class="container">
            <div class="row">
                <div class="col-6"><i class="icon-phone"></i><strong>(+84) 97-87-97-135</strong></div>
                {{--                <div class="col-6">--}}
                {{--                    <ul id="top_links">--}}
                {{--                        <li><a href="https://facebook.com/ng.tu.2502"><i class="icon-facebook"></i>Facebook</a></li>--}}
                {{--                    </ul>--}}
                {{--                </div>--}}
            </div>
            <!-- End row -->
        </div>
        <!-- End container-->
    </div>
    <!-- End top line-->

    <div class="container">
        <div class="row">
            <div class="col-3">
                {{--                <div id="logo_home">--}}
                {{--                    <h1><a href="/" title="Trở về trang chủ">Trở về trang chủ</a></h1>--}}
                {{--                </div>--}}
            </div>
            <nav class="col-9">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                <div class="main-menu">
                    <div id="header_menu">
                        {{--                        <img src="{{$config->logo}}" width="160" height="34" alt="City tours" data-retina="true">--}}
                    </div>
                    <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                    <ul>
                        <li class="">
                            <a href="/">Trang chủ</a>
                        </li>
                        <li class="submenu">
                            <a href="/danh-sach-tour" class="show-submenu">Tham gia khảo sát<i class="icon-down-open-mini"></i></a>
                            <ul>
                                <li ><a href="javascript:void(0);">An sinh xã hội</a></li>
                                <li ><a href="javascript:void(0);">Hành chính công</a></li>
                            </ul>
                        </li>


                        <li class="submenu">
                            <a href="/thue-xe" class="show-submenu">Kết quả<i class="icon-down-open-mini"></i></a>
                            <ul>
                                <li ><a href="javascript:void(0);">An sinh xã hội</a></li>
                                <li ><a href="javascript:void(0);">Hành chính công</a></li>
                            </ul>
                        </li>


                        <li>
                            <a href="/bai-viet">Tin tức</a>
                        </li>
                        <li>
                            <a href="/gioi-thieu">Giới thiệu</a>
                        </li>

                    </ul>
                </div>

            </nav>
        </div>
    </div>
    <!-- container -->
</header>


@section('main-content')

@show
<footer class="revealed">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Need help?</h3>
                <a href="tel://004542344599" id="phone">+45 423 445 99</a>
                <a href="mailto:help@citytours.com" id="email_footer">help@citytours.com</a>
            </div>
            <div class="col-md-3">
                <h3>About</h3>
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Register</a></li>
                    <li><a href="#">Terms and condition</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3>Discover</h3>
                <ul>
                    <li><a href="#">Community blog</a></li>
                    <li><a href="#">Tour guide</a></li>
                    <li><a href="#">Wishlist</a></li>
                    <li><a href="#">Gallery</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h3>Settings</h3>
                <div class="styled-select">
                    <select name="lang" id="lang">
                        <option value="English" selected>English</option>
                        <option value="French">French</option>
                        <option value="Spanish">Spanish</option>
                        <option value="Russian">Russian</option>
                    </select>
                </div>
                <div class="styled-select">
                    <select name="currency" id="currency">
                        <option value="USD" selected>USD</option>
                        <option value="EUR">EUR</option>
                        <option value="GBP">GBP</option>
                        <option value="RUB">RUB</option>
                    </select>
                </div>
            </div>
        </div><!-- End row -->
        <div class="row">
            <div class="col-md-12">
                <div id="social_footer">
                    <ul>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-google"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                        <li><a href="#"><i class="icon-pinterest"></i></a></li>
                        <li><a href="#"><i class="icon-vimeo"></i></a></li>
                        <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                    </ul>
                    <p>© Citytours 2020</p>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</footer><!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->

<!-- Search Menu -->
<div class="search-overlay-menu">
    <span class="search-overlay-close"><i class="icon_set_1_icon-77"></i></span>
    <form role="search" id="searchform" method="get">
        <input value="" name="q" type="search" placeholder="Search..." />
        <button type="submit"><i class="icon_set_1_icon-78"></i>
        </button>
    </form>
</div><!-- End Search Menu -->

<!-- Sign In Popup -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
    <div class="small-dialog-header">
        <h3>Sign In</h3>
    </div>
    <form>
        <div class="sign-in-wrapper">
            <a href="#0" class="social_bt facebook">Login with Facebook</a>
            <a href="#0" class="social_bt google">Login with Google</a>
            <div class="divider"><span>Or</span></div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email">
                <i class="icon_mail_alt"></i>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" id="password" value="">
                <i class="icon_lock_alt"></i>
            </div>
            <div class="clearfix add_bottom_15">
                <div class="checkboxes float-left">
                    <input id="remember-me" type="checkbox" name="check">
                    <label for="remember-me">Remember Me</label>
                </div>
                <div class="float-right"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
            </div>
            <div class="text-center"><input type="submit" value="Log In" class="btn_login"></div>
            <div class="text-center">
                Don’t have an account? <a href="javascript:void(0);">Sign up</a>
            </div>
            <div id="forgot_pw">
                <div class="form-group">
                    <label>Please confirm login email below</label>
                    <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                    <i class="icon_mail_alt"></i>
                </div>
                <p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
                <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
            </div>
        </div>
    </form>
    <!--form -->
</div>
<!-- /Sign In Popup -->

<!-- Common scripts -->
<script src="/client/js/jquery-2.2.4.min.js"></script>

<script src="/client/js/common_scripts_min.js"></script>
<script src="/client/js/functions.js"></script>


@section('js-content')
@show
@section('css-content')
@show
</body>

</html>
