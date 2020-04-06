@extends('client.layouts.master')

@section('header-content')
    <link rel="stylesheet" href="/client-assets/global/vendor/footable/footable.core.css">
    <link rel="stylesheet" href="/client-assets/assets/examples/css/dashboard/analytics.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">


@show

@section('page')
    <div class="page">
        <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="/did/all">Định danh</a></li>
                <li class="breadcrumb-item active">Cấp định danh</li>

            </ol>

        </div>
        <div class="page-content container-fluid">
            <div class="row" data-plugin="matchHeight" data-by-row="true">

                <div class="col-12">
                    <div  class="card card-shadow card-md" style="margin-top: 30px;">
                        <div class="card-header card-header-transparent pb-15">
                            <p class="font-size-14 blue-grey-700 mb-0 text-uppercase">Thông tin định danh</p>
                        </div>
                        <div class="card-block px-90 col-12">

                        </div>  uwr
                    </div>
                    <!-- Panel Accordion -->

                    <!-- End Panel Accordion -->
                </div>
            </div>
        </div>


    </div>
@endsection
@section('scripts-content')
    <script src="/client-assets/global/vendor/footable/footable.min.js"></script>
    <script src="/client-assets/assets/examples/js/dashboard/analytics.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="/client-assets/assets/js/qrcode.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>

@endsection
