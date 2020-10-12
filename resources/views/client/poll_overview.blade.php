@extends('client.layout')


@section('head-content')
    <link href="/jquery.json-viewer/json-viewer/jquery.json-viewer.css" type="text/css" rel="stylesheet">
@show
@section('main-content')

    <section class="parallax-window" data-parallax="scroll" data-image-src="/client/img/cover.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>{{$poll->title}}</h1>
                <p>{{$poll->overview}}</p>
                <p>{{$poll->org->name}}</p>
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
        <div class="container margin_60">
            <div class="row" style="background-color: white;">
                <div class="col-6">
                    <div class="panel panel-bordered">
                        <div class="panel-body">
                            <div class="poll-detail">
                                <table class="table table-borderless">
                                    <tr>
                                        <td>Tên cuộc khảo sát</td>
                                        <td>{{$poll->title}}</td>
                                    </tr>
                                    <tr>
                                        <td>Tổng quan</td>
                                        <td>{{$poll->overview}}</td>
                                    </tr>
                                    <tr>
                                        <td>Tổ chức trưng cầu ý kiến</td>
                                        <td>{{$poll->org->name}}</td>
                                    </tr>


                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="panel panel-bordered">
                        <div class="panel-body">
                            <div class="poll-detail">
                                <table class="table table-borderless">
                                    <tr>
                                        <td>Thông tin xác minh</td>
                                        <td>{{$poll->proof_request_desc}}</td>
                                    </tr>
                                    <tr>
                                        <td>Thời gian bắt đầu</td>
                                        <td>{{$poll->start_at}}</td>
                                    </tr>
                                    <tr>
                                        <td>Thời gian kết thúc</td>
                                        <td>{{$poll->end_at}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-12">
                    <div class="panel panel-bordered primary">
                        <div class="panel-body">
                            <div class="poll-detail">

                                <div class="form-group row">
                                    <label class="col-md-3 label-control">Thông tin làm rõ: </label>
                                    <pre id="json-renderer-re"></pre>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control">Thông tin ẩn: </label>
                                    <pre id="json-renderer-pre"></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-12 col-lg-12 " style="margin-top: 20px;">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <a type="button" href="javascript:history.back()" class="btn btn-danger">Trở lại</a>

                        <a type="button" href="/khao-sat/chi-tiet/{{$poll->slug}}" class="btn btn-success">Tham gia khảo sát</a>
                    </div>
                </div>
            </div>
        </div>


        <div id="overlay"></div>

    </main>


@endsection
@section('js-content')
    <script src="/jquery.json-viewer/json-viewer/jquery.json-viewer.js"></script>
    <script>
        function IsJsonString(str) {
            try {
                JSON.parse(str);
            } catch (e) {
                console.log('fail')
                return false;
            }
            return true;
        }


        if (IsJsonString(`{!! $poll->proof_request_re !!}`)) {
            content = JSON.parse(`{!! $poll->proof_request_re !!} `)
            console.log(content)
            $('#json-renderer-re').jsonViewer(content);
        }

        if (IsJsonString(`{!! $poll->proof_request_pre !!}`)) {
            content = JSON.parse(`{!! $poll->proof_request_pre !!}`)
            console.log(content)

            $('#json-renderer-pre').jsonViewer(content);
        }
    </script>
    <style>
        main {
            background-color: #f1f4f5;
        }

    </style>
@endsection
