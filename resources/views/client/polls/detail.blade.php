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
                <li class="breadcrumb-item active">{{$poll->title}}</li>

            </ol>

        </div>
        <div class="page-content container-fluid">
            <div class="row" data-plugin="matchHeight" data-by-row="true">

                <div class="col-12">
{{--                    Poll info--}}
                    <?php $question_number = 1; ?>
                    @foreach($questions as $q)

                    <div  class="card card-shadow card-md border border-primary" style="margin-top: 30px;">
                        <div class="card-header card-header-transparent pb-15">
                            <p class="font-size-24 black text-info mb-0 text-uppercase text-center">Câu {{$question_number}}</p>
                        </div>
                        <div class="card-block px-90 col-12">
                            <div class="row">
                                <div class="col-md-12 col-lg-5">

                                                <div class="example-wrap m-sm-0">
                                                    <div class="question-content">
                                                        <?php echo htmlspecialchars_decode($q->question);?>
                                                    </div>
                                                    <ul class="list-unstyled example">
                                                        @foreach($q->options as $option)
                                                            <li class="mb-15">
                                                                <input type="checkbox" class="icheckbox-primary" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" name="checkboxname"/>
                                                                <label for="inputDisabledUnchecked">{{$option}}</label>
                                                            </li>
                                                        @endforeach

                                                    </ul>
                                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <?php $question_number++;?>
                    @endforeach



                    {{----}}



                    {{--                    Citizen info--}}
                    <div  class="card card-shadow border border-danger card-md" style="margin-top: 30px;">
                        <div class="card-header card-header-transparent pb-15">
                            <p class="font-size-14 blue-grey-700 mb-0 text-uppercase text-center">thông tin công dân</p>
                        </div>
                        <div class="card-block px-90 col-12">
                            <div class="row">
                                <div class="col-md-12 col-lg-5 form-group">
                                    <div class="form-group d-flex justify-content-center">
                                        <div id="qrcode"></div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="text-center">
                                            <button id="connection_check" class="btn btn-warning">1. Kiểm tra kết nối</button>
                                            <button id="verification_create" class="btn btn-success">2. Gởi yêu cầu đến ứng dụng</button>
                                            <button id="verification_check" class="btn btn-success">3. Kiểm tra trạng thái</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-lg-6">
                                    <form id="poll-info"  action="{{url('/goi-yeu-cau')}} "
                                          method="POST" role="form" enctype="multipart/form-data">
                                        {{ csrf_field()}}
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Địa chỉ thường trú: </label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="address"  name="address" placeholder=""
                                                       autocomplete="off" readonly/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Số căn cước: </label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="id_number" name="id_number" placeholder=""
                                                       autocomplete="off" readonly/>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <input type="hidden" value="{{$poll->id}}" name="poll_id">
                                            <input type="hidden" name="pre_ex_id" id="pre_ex_id">
                                            <label class="col-md-3 col-form-label">Nội dung: </label>
                                            <div class="col-md-9 input-group">
                                                <textarea cols="5" name="answer_content" class="form-control" id="content" placeholder="Nội dung ý kiến" autocomplete="off"></textarea>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-md-9">
                                                <button type="submit"  id="btn-submit" class="btn btn-primary">4. Gởi ý kiến</button>
                                                <button type="reset" class="btn btn-warning btn-outline">Đặt lại</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>


                            </div>

                        </div>
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
    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if (exist) {
            swal('Cảm ơn bạn đã góp ý kiến', 'Đóng góp ý kiến thành công','success')
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

        $("#verification_create").click(function(event){
            event.preventDefault();
            var connectionId = $("#connection_check").data('button-data').connectionId


            $.ajax({
                type: 'POST',
                data: {connectionId: connectionId},
                url:"/api/verification/create",
                success:function(data)
                {
                    toastr.success('Lấy thông tin thành công')
                    console.log(data.data)



                    $("#verification_check").data('button-data', {verificationId:data.data.presentation_exchange_id})
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

        function getConnection(id){
            $.ajax({
                type: 'GET',
                // data: {code: code},
                url:"/api/connection/get/"+id,
                success:function(data)
                {
                    toastr.success('Lấy thông tin thành công')
                    var data = data.data
                    if(data.state === 'response'){
                        swal('Thành công', 'Đã kết nối đến người dân','success')
                        $("#verification_create").prop("disabled", false);
                        // $("#connection_check").prop("disabled", false);

                    }
                    else if (data.state === 'response'){
                        swal('Đang đợi kết nối', 'Vui lòng kết nối','info')
                    }
                    console.log(data)
                },
                error: function (err) {
                    console.log(err)
                    toastr.error('Lỗi truy vấn thông tin')

                }
            });
        }

        function createConnection(){
            // toastr.info('Đang khởi tạo QR Code')
            $.ajax({
                type: 'GET',
                // data: {code: code},
                url:"/api/connection/create",
                success:function(data)
                {
                    // toastr.success('Lấy thông tin thành công')
                    var data = data.data
                    var inviationUrl = data.invitation_url
                    var connectionId = data.connection_id
                    console.log(connectionId)
                    var qrcode = new QRCode(document.getElementById("qrcode"), {
                        text: inviationUrl,
                        width: 320,
                        height: 320,
                        colorDark : "#000000",
                        colorLight : "#ffffff",
                        correctLevel : QRCode.CorrectLevel.L
                    });
                    $("#connection_check").data('button-data', {connectionId:connectionId})

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

        function getVerification(id){
            $.ajax({
                type: 'GET',
                // data: {code: code},
                url:"/api/verification/detail/"+id,
                success:function(data)
                {

                    $("#pre_ex_id").val(id)

                    toastr.success('Lấy thông tin thành công')
                    var data = data.data
                    console.log(data.proof_id)
                    if(data.state === 'presentation_received'){
                        swal('Thành công', 'Đã cung cấp thông tin','success')
                        $("#btn-submit").prop("disabled", false);

                        $("#address").val(data.presentation.requested_proof.revealed_attrs.address.raw)
                        $("#id_number").val(data.presentation.requested_proof.revealed_attrs.id.raw)




                    }
                    else {
                        swal('Đang đợi cung cấp thông tin', 'Vui lòng kết nối','info')
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


@endsection
