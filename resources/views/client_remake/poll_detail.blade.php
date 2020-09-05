@extends('client_remake.layout')


@section('head-content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">


@show
@section('main-content')

    <section class="parallax-window" data-parallax="scroll" data-image-src="/client/img/cover.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>{{$poll->title}}</h1>
                        <span>{{$poll->overview}}</span>
                    </div>

                </div>
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
{{--                    <li><a href="/danh-sach-tour/{{$tour->tourcategory->slug}}">{{$tour->tourcategory->title}}</a>--}}
                    </li>
                    <li>Chi tiết</li>
                </ul>
            </div>
        </div>
        <!-- End Position -->



        <!-- End Map -->
        <div class="container margin_30 border border-primary">
            <div class="row">
                <form id="poll-info" action="{{url('/goi-yeu-cau')}} "
                      method="POST" role="form" enctype="multipart/form-data">
                    {{ csrf_field()}}
                    <div class="col-12">

                        {{--                    Poll info--}}
                        <?php $question_number = 1; ?>
                        @foreach($questions as $q)
                            <?php $option_index = 1; ?>

                            <div class="card card-shadow card-md border border-primary" style="margin-top: 30px;">
                                <div class="card-header card-header-bordered border-primary pb-15 green">
                                    <p class="font-size-24 black text-info mb-0 text-uppercase text-center">
                                        Câu {{$question_number}}</p>
                                </div>
                                <div class="card-block px-90 col-12" style="border-bottom: 1px solid blue; color:black;font-size:26px;">
                                    {{--                                            <pre>--}}
                                    <?php echo htmlspecialchars_decode($q->question);?>
                                    {{--                                            </pre>--}}
                                </div>

                                <div class="card-block px-90 col-12">



                                    <div class="panel panel-primary">
                                        <div class="panel-content">
                                            <div class="survey-radio">
                                                @foreach($q->options as $option)
                                                    <div class="survey-radio-success">
                                                        <input type="radio" name="answer[{{$question_number}}]"
                                                               id="{{$question_number.$option_index}}"
                                                               value="{{$option_index}}"/>
                                                        <label
                                                            for="{{$question_number.$option_index}}">{{$option}}</label>
                                                    </div>
                                                    <?php $option_index++;?>

                                                @endforeach

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $question_number++;?>
                        @endforeach
                        {{--                    Citizen info--}}

                        <div class="card card-shadow border border-info card-md" style="margin-top: 30px;">
                            <div class="card-block px-90 col-12">
                                <div class="row">
                                    <div class="col-md-12  form-group">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label for="" class="text-uppercase text-bold"><strong>Nguyên tắc hoạt
                                                        động và cam kết của chúng tôi</strong></label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>Chúng tôi cam kết và chịu trách nhiệm:</p>
                                                <ul>
                                                    <li>Không thu thập thông tin trái phép</li>
                                                    <li>Thao tác của bạn là ẩn danh</li>
                                                </ul>
                                                <p>Bạn hãy yên tâm rằng thông tin của bạn do bạn quản lý, chúng tôi
                                                    không biết bạn là ai cả. Đối với chúng tôi, quyền riêng tư luôn là
                                                    ưu tiên trên hết. </p>
                                                <p>Cảm ơn bạn đã tin dùng và ủng hộ</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-shadow border border-danger card-md" style="margin-top: 30px;">
                            <div class="card-header card-header-transparent pb-15">
                                <p class="font-size-14 blue-grey-700 mb-0 text-uppercase text-center">thông tin công
                                    dân</p>
                            </div>
                            <div class="card-block px-90 col-12">
                                <div class="row">
                                    <div class="col-md-12 col-lg-5 form-group">
                                        <div class="form-group d-flex justify-content-center">
                                            <div id="qrcode"></div>
                                        </div>

                                    </div>

                                    <div class="col-md-12 col-lg-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Địa chỉ thường trú: </label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="address" name="address"
                                                       placeholder=""
                                                       autocomplete="off" readonly/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Số căn cước: </label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="id_number" name="id_number"
                                                       placeholder=""
                                                       autocomplete="off" readonly/>
                                            </div>
                                        </div>


                                        <div class="form-group d-flex justify-content-center row">
                                            <button id="connection_check" class="btn btn-warning btn-arrow-left btn-space">1. Kiểm tra kết
                                                nối
                                            </button>
                                            <button id="verification_create" class="btn btn-success btn-arrow-left btn-space">2. Gởi yêu cầu
                                                đến ứng dụng
                                            </button>
                                            <button id="verification_check" class="btn btn-success btn-arrow-left btn-space">3. Kiểm tra
                                                trạng thái
                                            </button>

                                        </div>



                                        <div class="form-group row">
                                            <input type="hidden" value="{{$poll->id}}" name="poll_id">
                                            <input type="hidden" name="pre_ex_id" id="pre_ex_id">
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                        <!-- Panel Accordion -->


                        {{--                    Action for this page --}}
                        <div class="form-group">
                            <div class="col-md-12 center">
                                <button type="submit" id="btn-submit" class="btn btn-primary">4. Gởi ý kiến</button>
                                <button type="reset" class="btn btn-warning btn-outline">Đặt lại</button>
                            </div>

                        </div>

                        <!-- End Panel Accordion -->
                    </div>
                </form>

            </div>
        </div>
            <!--End row -->
        </div>
        <!--End container -->

        <div id="overlay"></div>
        <!-- Mask on input focus -->

    </main>
    <!-- End main -->


@endsection
@section('js-content')
    <!-- Date and time pickers -->
    <script src="/client/js/jquery.sliderPro.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function ($) {
            $('#Img_carousel').sliderPro({
                width: 960,
                height: 500,
                fade: true,
                arrows: true,
                buttons: false,
                fullScreen: false,
                smallSize: 500,
                startSlide: 0,
                mediumSize: 1000,
                largeSize: 3000,
                thumbnailArrows: true,
                autoplay: false
            });
        });
    </script>

    <!-- Date and time pickers -->
    <script>
        $('input.date-pick').datepicker('setDate', 'today');
        $('input.time-pick').timepicker({
            minuteStep: 15,
            showInpunts: false
        })
    </script>


    <style>
        .btn-space {
            margin-right: 5px;
        }
        body{
            color: black;
        }
        .survey-radio div {
            clear: both;
            overflow: hidden;
        }

        .survey-radio label {
            width: 100%;
            border-radius: 3px;
            border: 1px solid #D1D3D4;
            font-weight: normal;
        }

        .survey-radio input[type="radio"]:empty,
        .survey-radio input[type="checkbox"]:empty {
            display: none;
        }

        .survey-radio input[type="radio"]:empty ~ label,
        .survey-radio input[type="checkbox"]:empty ~ label {
            position: relative;
            line-height: 2.5em;
            text-indent: 3.25em;
            margin-top: 2em;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .survey-radio input[type="radio"]:empty ~ label:before,
        .survey-radio input[type="checkbox"]:empty ~ label:before {
            position: absolute;
            display: block;
            top: 0;
            bottom: 0;
            left: 0;
            content: '';
            width: 2.5em;
            background: #D1D3D4;
            border-radius: 3px 0 0 3px;
        }

        .survey-radio input[type="radio"]:hover:not(:checked) ~ label,
        .survey-radio input[type="checkbox"]:hover:not(:checked) ~ label {
            color: #888;
        }

        .survey-radio input[type="radio"]:hover:not(:checked) ~ label:before,
        .survey-radio input[type="checkbox"]:hover:not(:checked) ~ label:before {
            content: '\2714';
            text-indent: .9em;
            color: #C2C2C2;
        }

        .survey-radio input[type="radio"]:checked ~ label,
        .survey-radio input[type="checkbox"]:checked ~ label {
            color: #777;
        }

        .survey-radio input[type="radio"]:checked ~ label:before,
        .survey-radio input[type="checkbox"]:checked ~ label:before {
            content: '\2714';
            text-indent: .9em;
            color: #333;
            background-color: #ccc;
        }

        .survey-radio input[type="radio"]:focus ~ label:before,
        .survey-radio input[type="checkbox"]:focus ~ label:before {
            box-shadow: 0 0 0 3px #999;
        }

        .survey-radio-default input[type="radio"]:checked ~ label:before,
        .survey-radio-default input[type="checkbox"]:checked ~ label:before {
            color: #333;
            background-color: #ccc;
        }

        .survey-radio-primary input[type="radio"]:checked ~ label:before,
        .survey-radio-primary input[type="checkbox"]:checked ~ label:before {
            color: #fff;
            background-color: #337ab7;
        }

        .survey-radio-success input[type="radio"]:checked ~ label:before,
        .survey-radio-success input[type="checkbox"]:checked ~ label:before {
            color: #fff;
            background-color: #5cb85c;
        }

        .survey-radio-danger input[type="radio"]:checked ~ label:before,
        .survey-radio-danger input[type="checkbox"]:checked ~ label:before {
            color: #fff;
            background-color: #d9534f;
        }

        .survey-radio-warning input[type="radio"]:checked ~ label:before,
        .survey-radio-warning input[type="checkbox"]:checked ~ label:before {
            color: #fff;
            background-color: #f0ad4e;
        }

        .survey-radio-info input[type="radio"]:checked ~ label:before,
        .survey-radio-info input[type="checkbox"]:checked ~ label:before {
            color: #fff;
            background-color: #5bc0de;
        }

    </style>


    <script src="/client-assets/global/vendor/footable/footable.min.js"></script>
    <script src="/client-assets/assets/examples/js/dashboard/analytics.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="/client-assets/assets/js/qrcode.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if (exist) {
            swal('Cảm ơn bạn đã góp ý kiến', 'Đóng góp ý kiến thành công', 'success')
        }
    </script>

    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    {{--    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>--}}
    <script>
        {{--console.log({{$poll->id}})--}}
        $("#connection_check").prop("disabled", true);
        $("#verification_create").prop("disabled", true);
        $("#btn-submit").prop("disabled", true);
        $("#verification_check").prop("disabled", true);


        createConnection()

        $("#verification_create").click(function (event) {
            event.preventDefault();
            var connectionId = $("#connection_check").data('button-data').connectionId


            $.ajax({
                type: 'POST',
                data: {connectionId: connectionId},
                url: "/api/verification/create",
                success: function (data) {
                    toastr.success('Lấy thông tin thành công')
                    console.log(data.data)


                    $("#verification_check").data('button-data', {verificationId: data.data.presentation_exchange_id})
                    $("#verification_check").prop("disabled", false);

                },
                error: function (err) {
                    console.log(err)
                    toastr.error('Lỗi truy vấn thông tin')

                }
            });

        });

        {{--$("#btn-submit").click(function(event){--}}
        {{--    event.preventDefault();--}}
        {{--    toastr.info('Đang lấy thông tin')--}}
        {{--    const poll_id = {!! $poll->id !!};--}}


        {{--    // createConnection();--}}



        {{--});--}}


        // function subu() {
        //
        // }

        function getConnection(id) {
            $.ajax({
                type: 'GET',
                // data: {code: code},
                url: "/api/connection/get/" + id,
                success: function (data) {
                    toastr.success('Lấy thông tin thành công')
                    var data = data.data
                    if (data.state === 'response') {
                        swal('Thành công', 'Đã kết nối đến người dân', 'success')
                        $("#verification_create").prop("disabled", false);
                        // $("#connection_check").prop("disabled", false);

                    } else if (data.state === 'response') {
                        swal('Đang đợi kết nối', 'Vui lòng kết nối', 'info')
                    }
                    console.log(data)
                },
                error: function (err) {
                    console.log(err)
                    toastr.error('Lỗi truy vấn thông tin')

                }
            });
        }

        function createConnection() {
            // toastr.info('Đang khởi tạo QR Code')
            $.ajax({
                type: 'GET',
                // data: {code: code},
                url: "/api/connection/create",
                success: function (data) {
                    // toastr.success('Lấy thông tin thành công')
                    var data = data.data
                    var inviationUrl = data.invitation_url
                    var connectionId = data.connection_id
                    console.log(connectionId)
                    var qrcode = new QRCode(document.getElementById("qrcode"), {
                        text: inviationUrl,
                        width: 320,
                        height: 320,
                        colorDark: "#000000",
                        colorLight: "#ffffff",
                        correctLevel: QRCode.CorrectLevel.L
                    });
                    $("#connection_check").data('button-data', {connectionId: connectionId})

                    $("#connection_check").prop("disabled", false);

                },
                error: function (err) {
                    console.log(err)
                    // toastr.error('Lỗi truy vấn thông tin')

                }
            });
        }


        $("#connection_check").click(function (event) {
            event.preventDefault();
            var connectionId = $("#connection_check").data('button-data').connectionId
            getConnection(connectionId);
        })

        function getVerification(id) {
            $.ajax({
                type: 'GET',
                // data: {code: code},
                url: "/api/verification/detail/" + id,
                success: function (data) {

                    $("#pre_ex_id").val(id)

                    toastr.success('Lấy thông tin thành công')
                    var data = data.data
                    console.log(data.proof_id)
                    if (data.state === 'presentation_received') {
                        swal('Thành công', 'Đã cung cấp thông tin', 'success')
                        $("#btn-submit").prop("disabled", false);

                        $("#address").val(data.presentation.requested_proof.revealed_attrs.address.raw)
                        $("#id_number").val(data.presentation.requested_proof.revealed_attrs.id.raw)


                    } else {
                        swal('Đang đợi cung cấp thông tin', 'Vui lòng kết nối', 'info')
                    }
                    console.log(data)
                },
                error: function (err) {
                    console.log(err)
                    toastr.error('Lỗi truy vấn thông tin')

                }
            });
        }

        $("#verification_check").click(function (event) {
            event.preventDefault();
            var verificationId = $("#verification_check").data('button-data').verificationId
            getVerification(verificationId);
        })


    </script>

<style>
    main{
        background-color: #f1f4f5;
    }
</style>
@endsection
