@extends('organization.layouts.master')

@section('main-content')
    <div class="main-content">
        <div class="content-wrapper">
            <!-- Basic form layout section start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Id: {{$id}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Chi tiết</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <pre id="json-renderer"></pre>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tổng quan</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <pre id="json-renderer2"></pre>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection

@section('js-content')
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
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script type='text/javascript' src='/admin-assets/vendors/js/core/jquery-3.2.1.min.js'></script>
    <script type='text/javascript'
            src='https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.1.0/jquery-migrate.min.js'></script>
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>

    <script src="/client-assets/global/vendor/timepicker/jquery.timepicker.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.bootcss.com/datepair.js/0.4.16/datepair.js"></script>
    <script src="/jquery.json-viewer/json-viewer/jquery.json-viewer.js"></script>

    <script>
        var data ={!! $response !!};
        var data2 ={!! $rawdata !!};
        $('#json-renderer').jsonViewer(data);
        $('#json-renderer2').jsonViewer(data2);
    </script>
    <style>
        .transaction-id {
            color: #868f9b;
            margin-bottom: 10px;
        }

        .table td, .table th {
            border-top: none;
        }

    </style>
@endsection

