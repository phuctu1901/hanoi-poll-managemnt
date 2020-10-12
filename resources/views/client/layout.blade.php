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

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/client-assets/global/css/bootstrap.min.css">
    <link rel="stylesheet" href="/client-assets/global/css/bootstrap-extend.min.css">

    <!-- CUSTOM CSS -->
    <link href="/client/css/custom.css" rel="stylesheet">

    <!-- REVOLUTION SLIDER CSS -->
    <link href="/client/layerslider/css/layerslider.css" rel="stylesheet">

    @section('head-content')
    @show

</head>
<body>
<div id="preloader">
    <div class="sk-spinner sk-spinner-wave">
        <div class="sk-rect1"></div>
        <div class="sk-rect2"></div>
        <div class="sk-rect3"></div>
        <div class="sk-rect4"></div>
        <div class="sk-rect5"></div>
    </div>
</div>
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
                            <a href="/chu-de" class="show-submenu">Tham gia khảo sát<i class="icon-down-open-mini"></i></a>
                            <ul>
                                <li ><a href="javascript:void(0);">An sinh xã hội</a></li>
                                <li ><a href="javascript:void(0);">Hành chính công</a></li>
                            </ul>
                        </li>


                        <li>
                            <a href="/to-chuc/">Tổ chức</a>
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

<hr>

<footer class="revealed">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3>Thông tin liên hệ</h3>
{{--                <ul>--}}
{{--                    @foreach($footer as $f)--}}
{{--                        <li class="row">--}}
{{--                            <div class="col-md-5">{{$f->title}}</div>--}}
{{--                            <div class="col-md-7"><a href="tel://{{$f->pnumber}}">{{$f->pnumber}}</a></div>--}}

{{--                        </li>--}}
{{--                    @endforeach--}}

{{--                </ul>--}}

                {{--                <a href="mailto:help@citytours.com" id="email_footer">help@citytours.com</a>--}}
            </div>
            <div class="col-md-3">
                <h3>Về chúng tôi</h3>
                <ul>
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="#">Đối tác</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3>Hỗ trợ</h3>
                <ul>
                    <li><a href="#">Hỗ trợ khách hàng</a></li>
                    <li><a href="#">Chính sách và quyền riêng tư</a></li>
                    <li><a href="#">Liên lạc</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3>Văn phòng</h3>
                <ul>
                    <li><span style="color: #ffffff;">236 Hoàng Quốc Việt, Hà Nội</span></li>
                </ul>
            </div>
        </div>
        <!-- End row -->
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
                    <p>© Tu Ngong 2020</p>
                </div>
            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</footer>
<!-- End footer -->

<div id="toTop"></div>
<!-- Back to top button -->


<!-- Common scripts -->
<script src="/client/js/jquery-2.2.4.min.js"></script>
<script src="/client/js/common_scripts_min.js"></script>
<script src="/client/js/functions.js"></script>

<!-- Specific scripts -->
<script src="/client/layerslider/js/greensock.js"></script>
<script src="/client/layerslider/js/layerslider.transitions.js"></script>
<script src="/client/layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        'use strict';
        $('#layerslider').layerSlider({
            autoStart: true,
            responsive: true,
            responsiveUnder: 1280,
            layersContainer: 1170,
            skinsPath: '/client/layerslider/skins/'
            // Please make sure that you didn't forget to add a comma to the line endings
            // except the last line!
        });
    });
</script>
<script src="{{ asset('/js/app.js') }}"></script>


@section('js-content')
    <script src="/client-assets/global/js/config/colors.js"></script>


@show
@section('css-content')
@show
</body>

</html>
