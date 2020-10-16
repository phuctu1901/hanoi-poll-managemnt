@extends('organization.layouts.master')

@section('main-content')


    <div class="main-content">
        <div class="content-wrapper">
            <!-- Basic form layout section start -->
            <section id="horizontal-form-layouts">
                <div class="row">

                    <div class="col-md-12">

                        <?php //Hiển thị thông báo lỗi?>
                        @if ( Session::has('error') )
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <strong>{{ Session::get('error') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="horz-layout-basic">Thêm người dùng mới mới</h4>
                            </div>
                            <div class="card-body">
                                <div class="px-3">

                                    <form class="form form-horizontal"
                                          action="{{url('/organization/user/addRequest')}} "
                                          method="POST" role="form" enctype="multipart/form-data">
                                        {{ csrf_field()}}
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="ft-user"></i> Thông tin người dùng</h4>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Tên: </label>
                                                <div class="col-md-9">
                                                    <input class="form-control"
                                                           type="text"
                                                           name="name" value="{{ old('name') }}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Tên đăng nhập: </label>
                                                <div class="col-md-9">
                                                    <input  class="form-control"
                                                           type="text"
                                                           name="username" value="{{ old('username') }}">
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Email: </label>
                                                <div class="col-md-9">
                                                    <input  class="form-control"
                                                           type="text"
                                                           name="email" value="{{ old('email') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Password: </label>
                                                <div class="col-md-9">
                                                    <input  class="form-control"
                                                            type="password"
                                                            name="password">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Password: </label>
                                                <div class="col-md-9">
                                                    <input  class="form-control"
                                                            type="password"
                                                            name="password_confirmation">
                                                </div>
                                            </div>





                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Trạng thái: </label>
                                                <div class="col-md-9">

                                                    <select id="state" name="state"
                                                            class="form-control">
                                                        <option value="0" selected="" disabled="">Chọn trạng thái cho
                                                            danh
                                                            mục
                                                        </option>
                                                        <option value=0>Không kích hoạt</option>
                                                        <option value=1>Kích hoạt</option>
                                                    </select>
                                                </div>
                                            </div>


                                        </div>


                                        <div class="form-actions">
                                            <button type="button" class="btn btn-raised btn-warning mr-1">
                                                <i class="ft-x"></i> Reset
                                            </button>
                                            <button type="submit" class="btn btn-raised btn-primary">
                                                <i class="fa fa-check-square-o"></i> Save
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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

     <script type='text/javascript' src='/asset-admin/vendors/js/core/jquery-3.2.1.min.js'></script>
    <script type='text/javascript' src='/client/asset/js/jquery-migrate.min.js'></script>
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>


    <script>


        jQuery(function ($) {
            var options = {
                filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
            };


        });
    </script>
    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
    <script>

        jQuery(function ($) {

            const options = {
                filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
            };


            $('#slider_thumb').filemanager('image');


            $(document).ready(function () {
                $('#slider_thumb_data').change(function () {
                    var data = $(this).val();
                    $("#slider_thumb_preview").attr("src", data);
                    console.log(data)
                });


            });
        });
    </script>
@endsection
