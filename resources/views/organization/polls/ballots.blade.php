@extends('organization.layouts.master')

@section('main-content')
    <div class="main-content">
        <div class="content-wrapper">
            <!-- Basic form layout section start -->
            <section id="horizontal-form-layouts">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tên cuộc khảo sát: {{$poll->title}}</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <table class="table table-borderless">
                                        <tr>
                                            <td>ID</td>
                                            <td>{{$poll->id}}</td>
                                        </tr>
                                        <tr>
                                            <td>Tiêu đề</td>
                                            <td>{{$poll->title}}</td>
                                        </tr>
                                        <tr>
                                            <td>Thời gian bắt đầu</td>
                                            <td>{{$poll->start_at}} (UTC)</td>
                                        </tr>
                                        <tr>
                                            <td>Thời gian kết thúc</td>
                                            <td>{{$poll->end_at}} (UTC)</td>
                                        </tr>
                                        <tr>
                                            <td>Tổng quan</td>
                                            <td><p><?php echo htmlspecialchars_decode($poll->overview);?></p></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12"  id="table_data">
                        @include('organization.polls.table_details')
                    </div>
                </div>
            </section>
            <!-- // Basic form layout section end -->

        </div>
    </div>
    <script>
        var msg = '{{Session::get('
    alert ')}}';
        var exist = '{{Session::has('
    alert ')}}';
        if (exist) {
            alert(msg);
        }
    </script>

    <link rel="stylesheet" type="text/css" href="/client-assets/global/vendor/timepicker/jquery-timepicker.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script type='text/javascript' src='/admin-assets/vendors/js/core/jquery-3.2.1.min.js'></script>
    <script type='text/javascript'
            src='https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.1.0/jquery-migrate.min.js'></script>
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>

    <script src="/client-assets/global/vendor/timepicker/jquery.timepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.bootcss.com/datepair.js/0.4.16/datepair.js"></script>


@endsection
