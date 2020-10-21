@extends('client.layout')

@section('header-content')
    <link href="/client/layerslider/css/layerslider.css" rel="stylesheet">

@show

@section('main-content')

    <main>
        <!-- Slider -->
        <div id="full-slider-wrapper">
            <div id="layerslider" style="width:100%;height:600px;">
                <!-- first slide -->
                <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:5;">
                    <img src="/client/img/slides/4.jpg" class="ls-bg" alt="Slide background">
                    <h3 class="ls-l slide_typo" style="top: 45%; left: 50%;"
                        data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">
                        AN TOÀN - BẢO MẬT</h3>
                    <p class="ls-l slide_typo_2" style="top:52%; left:50%;"
                       data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">Bạn hoàn toàn ẩn danh khi đóng
                        góp</p>
                </div>

                <!-- second slide -->
                <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:85;">
                    <img src="/client/img/slides/3.jpg" class="ls-bg" alt="Slide background">
                    <h3 class="ls-l slide_typo" style="top: 45%; left: 50%;"
                        data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">
                        NHANH CHÓNG - KỊP THỜI</h3>
                    <p class="ls-l slide_typo_2" style="top:52%; left:50%;"
                       data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">Dữ liệu góp ý của bạn sẽ được ghi
                        nhận và trả lời nhanh nhất</p>
                </div>

            </div>
        </div>
        <!-- End layerslider -->


        @foreach($categories as $category)
            <div class="container margin_60">

                <div class="main_title">
                    <h2>{{$category->name}}</h2>
                    <p>{{$category->desc}}</p>
                </div>

                <div class="owl-carousel owl-theme list_carousel add_bottom_30">
                    @foreach($category->data as $poll)
                        <div class="item">
                            <div class="tour_container">
                                <div class="img_container">
                                    <a href="/khao-sat/tong-quan/{{$poll->slug}}">
                                        <figure>
                                            <img
                                                src="https://colorlib.com/preview/theme/buson/assets/img/recent/rcent_1.png"
                                                width="800" height="533" class="img-fluid lazy" alt="{{$poll->slug}}"
                                                style="height: 224px;  object-fit: cover;">
                                            <figcaption class="tour">{{$poll->org->name}}</figcaption>
                                        </figure>
                                        <div class="short_info">
                                            {{$poll->overview}}<span class="price"></span>

                                        </div>
                                    </a>
                                </div>
                                <div class="tour_title">
                                    <h3><strong> <a href="/khao-sat/tong-quan/{{$poll->slug}}"></a>{{$poll->title}}
                                        </strong></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- End row -->
                {{--                <div class="row">--}}
                <p class="text-center nopadding">
                    <a href="/khao-sat/chu-de/{{$category->slug}}" class="btn_1">Tất cả cuộc trưng cầu ý kiến</a>
                </p>
                <hr>

            </div>


        @endforeach
        <section class="promo_full">
            <div class="promo_full_wp magnific">
                <div>
                    <h3>BẠN HÃY YÊN TÂM, DỮ LIỆU CỦA BẠN LÀ BẢO MẬT</h3>
                    <p>
                        Xem video về quy trình hoạt động của hệ thống, cũng như cách chúng tôi bảo vệ bạn an toàn
                    </p>
                    <a href="https://www.youtube.com/watch?v=Zz5cu72Gv5Y" class="video"><i
                            class="icon-play-circled2-1"></i></a>
                </div>
            </div>
        </section>
        <!-- End section -->

        <div class="container margin_60">

            <div class="main_title">
                <h2>LÝ DO BẠN NÊN SỬ DỤNG HỆ THỐNG CỦA CHÚNG TÔI</h2>
                <p>
                    Hãy lựa chọn và tin tưởng vào hệ thống mà chúng tôi đang triển khai
                </p>
            </div>

            <div class="row">

                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.2s">
                    <div class="feature_home">
                        <i class="icon_set_1_icon-41"></i>
                        <h3>An toàn</h3>
                        <p>
                            Ứng dụng cộng nghệ blockchain để đảm bảo an toàn thông tin trong khi sử dụng.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="feature_home">
                        <i class="icon_set_1_icon-57"></i>
                        <h3>Riêng tư</h3>
                        <p>
                            Một trong những sản phẩm tiên phong trong ứng dụng "định danh tự chủ" vào công việc hằng
                            ngày.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.4s">
                    <div class="feature_home">
                        <i class="icon_set_1_icon-30"></i>
                        <h3>Minh bạch</h3>
                        <p>
                            Minh bạch trong định danh thời kỳ số hóa, hãy quên đi các loại giấy tờ rườm rà và lạc hậu.
                        </p>
                    </div>
                </div>


            </div>
            <!--End row -->

            <hr>

            <div class="row">
                <div class="col-md-6">
                    <img src="/client/img/tungong.png" alt="Laptop" class="img-fluid laptop">
                </div>
                <div class="col-md-6">
                    <h3><span>Hướng dẫn sử dụng</span> cho lần đầu</h3>
                    <h4>
                        Nếu đây là lần đầu tiên sử dụng hệ thống, bạn vui lòng làm theo hướng dẫn
                    </h4>
                    <ul class="list_order">
                        <li><span>1</span>Tải ứng dụng <a href="download-link" target="_blank">uID</a> cho điện thoại
                        </li>
                        <li><span>2</span>Tiến hành nhận định danh tương ứng</li>
                        <li><span>3</span>Truy cập hệ thống và sử dụng theo hướng dẫn</li>
                    </ul>
                </div>
            </div>
            <!-- End row -->

        </div>
        <!-- End container -->
    </main>
    <!-- End main -->
    <style>
        figcaption {
            background: rgba(226, 125, 95, 0.9);
            text-align: center;
            text-justify: auto;
            position: absolute;
            left: 0;
            top: 0;
            display: inline-block;
            color: white;
            width: 100%;
            height: 45px;
            padding: 15px;
            line-height: 1;
            font-weight: 600;
        }

        figcaption.tour {
            background: rgba(72, 135, 176, 0.9);
        }
    </style>
@endsection
@section('js-content')
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
@endsection
