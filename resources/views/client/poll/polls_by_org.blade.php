@extends('client.new_layout')


@section('head-content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
    <link href="/jquery.json-viewer/json-viewer/jquery.json-viewer.css" type="text/css" rel="stylesheet">
@show
@section('main-content')

    <section class="parallax-window" data-parallax="scroll" data-image-src="/client/img/cover.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>{{$org->name}}</h1>
                <p>{{$org->desc}}</p>
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
                    <li><a href="/khao-sat">Tất cả chủ đề</a>
                    </li>
                    <li>Tổng quan</li>
                </ul>
            </div>
        </div>


        @include('client.poll.polls_data')

        <div id="overlay"></div>

    </main>


@endsection
@section('css-content')

    <style>
        main {
            background-color: #f1f4f5;
        }
        .categories_grid a{
            height: unset;
        }
    </style>


@endsection
