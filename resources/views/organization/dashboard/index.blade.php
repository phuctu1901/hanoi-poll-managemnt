@extends('organization.layouts.master')

@section('main-content')


        <div class="main-content">
{{--            <div class="content-wrapper">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">--}}
{{--                        <div class="card gradient-blackberry">--}}
{{--                            <div class="card-content">--}}
{{--                                <div class="card-body pt-2 pb-0">--}}
{{--                                    <div class="media">--}}
{{--                                        <div class="media-body white text-left">--}}
{{--                                            <h3 class="font-large-1 mb-0">{{$tour}}</h3>--}}
{{--                                            <span>SỐ TOUR HIỆN CÓ</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="media-right white text-right">--}}
{{--                                            <i class="ft-briefcase font-large-1"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">--}}
{{--                        <div class="card gradient-ibiza-sunset">--}}
{{--                            <div class="card-content">--}}
{{--                                <div class="card-body pt-2 pb-0">--}}
{{--                                    <div class="media">--}}
{{--                                        <div class="media-body white text-left">--}}
{{--                                            <h3 class="font-large-1 mb-0">{{$car}}</h3>--}}
{{--                                            <span>SỐ XE</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="media-right white text-right">--}}
{{--                                            <i class="fa fa-car font-large-1"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">--}}
{{--                        <div class="card gradient-green-tea">--}}
{{--                            <div class="card-content">--}}
{{--                                <div class="card-body pt-2 pb-0">--}}
{{--                                    <div class="media">--}}
{{--                                        <div class="media-body white text-left">--}}
{{--                                            <h3 class="font-large-1 mb-0">{{$service}}</h3>--}}
{{--                                            <span>SỐ DỊCH VỤ</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="media-right white text-right">--}}
{{--                                            <i class="ft-layers font-large-1"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">--}}
{{--                        <div class="card gradient-pomegranate">--}}
{{--                            <div class="card-content">--}}
{{--                                <div class="card-body pt-2 pb-0">--}}
{{--                                    <div class="media">--}}
{{--                                        <div class="media-body white text-left">--}}
{{--                                            <h3 class="font-large-1 mb-0">{{$post}}</h3>--}}
{{--                                            <span>SỐ BÀI VIẾT</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="media-right white text-right">--}}
{{--                                            <i class="ft-edit font-large-1"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--Statistics cards Ends-->--}}

{{--                <!--Line with Area Chart 1 Starts-->--}}
{{--                <div class="row">--}}
{{--                    <div class="col-sm-6">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-header">--}}
{{--                                <h4 class="card-title">TOUR TRUY CẬP NHIỀU</h4>--}}
{{--                            </div>--}}
{{--                            <div class="card-content">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="card-block">--}}
{{--                                        @include('organization.dashboard.tour_table')--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-6">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-header">--}}
{{--                                <h4 class="card-title">BÀI VIẾT ĐỌC NHIỀU</h4>--}}
{{--                            </div>--}}
{{--                            <div class="card-content">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="card-block">--}}
{{--                                        @include('organization.dashboard.post_table')--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-sm-6">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-header">--}}
{{--                                <h4 class="card-title">DỊCH VỤ TRUY CẬP NHIỀU</h4>--}}
{{--                            </div>--}}
{{--                            <div class="card-content">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="card-block">--}}
{{--                                        @include('organization.dashboard.service_table')--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-6">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-header">--}}
{{--                                <h4 class="card-title">XE TRUY CẬP NHIỀU</h4>--}}
{{--                            </div>--}}
{{--                            <div class="card-content">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="card-block">--}}
{{--                                        @include('organization.dashboard.car_table')--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>




    @endsection
@section('js-content')
@show

@section('end-css-content')

@show
