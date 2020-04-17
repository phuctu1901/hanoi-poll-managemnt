@extends('client_remake.layout')

@section('main-content')

    <section class="parallax-window" data-parallax="scroll" data-image-src="" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1> An sinh xã hội</h1>
                <p>Tổng hợp các vấn đề an sinh xã hội</p>
            </div>
        </div>
    </section>
    <!-- End section -->

    <main>

        <div id="position">
            <div class="container">
                <ul>
                    <li><a href="/">Trang chủ</a>
                    </li>
                    <li><a href="/danh-sach-tour">Tất cả điểm đến</a>
                    </li>
                    <li>An sinh xã hội</li>
                </ul>
            </div>
        </div>
        <!-- Position -->

        <div class="collapse" id="collapseMap">
            <div id="map" class="map"></div>
        </div>
        <!-- End Map -->


        <div class="container margin_60">

            <div class="row">
                <aside class="col-lg-3">


                    <div class="box_style_cat">
                        <ul id="cat_nav">
                            <li><a href="#" id="active"><i class="icon_set_1_icon-51"></i>Tất cả tour <span>(141)</span></a>
                            </li>
                            <li><a href="#"><i class="icon_set_1_icon-3"></i>Tour trong ngày <span>(20)</span></a>
                            </li>
                            <li><a href="#"><i class="icon_set_1_icon-4"></i>Tour nhiều ngày <span>(16)</span></a>
                            </li>

                        </ul>
                    </div>

                    <div id="filters_col">
                        <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt"><i class="icon_set_1_icon-65"></i>Lọc tour</a>
                        <div class="collapse show" id="collapseFilters">
                            <div class="filter_type">
                                <h6>Mức giá</h6>
                                <input type="text" id="range" name="range" value="">
                            </div>

                        </div>
                        <!--End collapse -->
                    </div>
                    <!--End filters col-->
                    <div class="box_style_2">
                        <i class="icon_set_1_icon-57"></i>
                        <h4>Need <span>Help?</span></h4>
                        <a href="tel://004542344599" class="phone">+45 423 445 99</a>
                        <small>Monday to Friday 9.00am - 7.30pm</small>
                    </div>
                </aside>
                <!--End aside -->
                <div class="col-lg-9">


{{--                    <?php foreach ($tours as $value): ?>--}}
{{--                    <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-4 col-md-4">--}}
{{--                                <div class="ribbon_3 popular"><span>Popular</span>--}}
{{--                                </div>--}}
{{--                                <div class="wishlist">--}}
{{--                                    <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>--}}
{{--                                </div>--}}
{{--                                <div class="img_list">--}}
{{--                                    <a href="/chi-tiet-tour/{{$value->slug}}"><img src="{{$value->thumb}}" alt="Image">--}}
{{--                                        <div class="short_info"> <?php echo $value->days, ' ngày ', $value->nights, ' đêm  ' ?>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-5 col-md-6">--}}
{{--                                <div class="tour_list_desc">--}}

{{--                                    <h3><strong>{{$value->title}}</strong></h3>--}}
{{--                                    <p>{{$value->overview}}</p>--}}
{{--                                    <ul class="add_info">--}}
{{--                                        <li>--}}
{{--                                            <div class="tooltip_styled tooltip-effect-4">--}}
{{--                                                <span class="tooltip-item"><i class="icon_set_1_icon-83"></i></span>--}}
{{--                                                <div class="tooltip-content">--}}
{{--                                                    <h4>Schedule</h4>--}}
{{--                                                    <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM--}}
{{--                                                    <br>--}}
{{--                                                    <strong>Saturday</strong> 09.00 AM - 5.30 PM--}}
{{--                                                    <br>--}}
{{--                                                    <strong>Sunday</strong> <span class="label label-danger">Closed</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <div class="tooltip_styled tooltip-effect-4">--}}
{{--                                                <span class="tooltip-item"><i class="icon_set_1_icon-41"></i></span>--}}
{{--                                                <div class="tooltip-content">--}}
{{--                                                    <h4>Address</h4> Musée du Louvre, 75058 Paris - France--}}
{{--                                                    <br>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <div class="tooltip_styled tooltip-effect-4">--}}
{{--                                                <span class="tooltip-item"><i class="icon_set_1_icon-97"></i></span>--}}
{{--                                                <div class="tooltip-content">--}}
{{--                                                    <h4>Languages</h4> English - French - Chinese - Russian - Italian--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <div class="tooltip_styled tooltip-effect-4">--}}
{{--                                                <span class="tooltip-item"><i class="icon_set_1_icon-27"></i></span>--}}
{{--                                                <div class="tooltip-content">--}}
{{--                                                    <h4>Parking</h4> 1-3 Rue Elisée Reclus--}}
{{--                                                    <br> 76 Rue du Général Leclerc--}}
{{--                                                    <br> 8 Rue Caillaux 94923--}}
{{--                                                    <br>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <div class="tooltip_styled tooltip-effect-4">--}}
{{--                                                <span class="tooltip-item"><i class="icon_set_1_icon-25"></i></span>--}}
{{--                                                <div class="tooltip-content">--}}
{{--                                                    <h4>Transport</h4>--}}
{{--                                                    <strong>Metro: </strong>Musée du Louvre station (line 1)--}}
{{--                                                    <br>--}}
{{--                                                    <strong>Bus:</strong> 21, 24, 27, 39, 48, 68, 69, 72, 81, 95--}}
{{--                                                    <br>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-3 col-md-2">--}}
{{--                                <div class="price_list">--}}
{{--                                    <div><span class="price"><?php echo number_format($value->adult_price, 0, ',', '.');?> VNĐ</span>--}}
{{--                                        <p><a href="/chi-tiet-tour/{{$value->slug}}" class="btn_1">Chi tiết</a>--}}
{{--                                        </p>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--End strip -->--}}
{{--                    <?php endforeach; ?>--}}


                    <hr>

                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><span class="page-link">1<span class="sr-only">(current)</span></span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- end pagination-->

                </div>
                <!-- End col lg-9 -->
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </main>
    <!-- End main -->

@endsection

@section('js-content')
{{--    <!-- Cat nav mobile -->--}}
{{--    <script src="/assets/js/cat_nav_mobile.js"></script>--}}
{{--    <script>--}}
{{--        $('#cat_nav').mobileMenu();--}}
{{--    </script>--}}

{{--    <!-- Map -->--}}
{{--    <script src="http://maps.googleapis.com/maps/api/js"></script>--}}
{{--    <script src="/assets/js/map.js"></script>--}}
{{--    <script src="/assets/js/infobox.js"></script>--}}

{{--    <!-- Check box and radio style iCheck -->--}}
{{--    <script>--}}
{{--        $('input').iCheck({--}}
{{--            checkboxClass: 'icheckbox_square-grey',--}}
{{--            radioClass: 'iradio_square-grey'--}}
{{--        });--}}
{{--    </script>--}}
@endsection
