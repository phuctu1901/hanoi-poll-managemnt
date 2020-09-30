@extends('organization.layouts.master')

@section('main-content')

{{--    {"id":1,"code":"MTA","name":"H\u1ecdc vi\u1ec7n K\u1ef9 th\u1ee5\u00e2t Qu\u00e2n s\u1ef1","desc":"H\u1ecdc vi\u1ec7n K\u1ef9 th\u1ee5\u00e2t Qu\u00e2n s\u1ef1, tr\u01b0\u1eddng \u0110\u1ea1i h\u1ecdc h\u00e0ng \u0111\u1ea7u Vi\u1ec7t Nam","created_user":"1","logo":null,"thumb":null,"phone":null,"email":null,"website":null,"created_at":"2020-09-16T09:59:49.000000Z","updated_at":"2020-09-08T09:59:49.000000Z"}--}}
    <div class="main-content">
        <div class="content-wrapper">
            <!-- Basic form layout section start -->
            <section id="horizontal-form-layouts">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="horz-layout-basic">Thông tin tổ chức</h4>
                            </div>
                            <div class="card-body">
                                <div class="px-3">

                                    <form class="form form-horizontal"
                                          action="{{url('/organization/info/update')}} "
                                          method="POST" role="form" enctype="multipart/form-data">
                                        {{ csrf_field()}}
                                        <div class="form-body">
                                            <input type="hidden" id="id" name="id" value="{{$info->id}}">

                                            <h4 class="form-section"></h4>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Mã: </label>
                                                <div class="col-md-9">
                                                    <input id="title" class="form-control"
                                                           type="text"
                                                           name="code" value="{{$info->code}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Tên tổ chức: </label>
                                                <div class="col-md-9">
                                                    <input id="title" class="form-control"
                                                           type="text"
                                                           name="name" value="{{$info->name}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Tên tổ chức: </label>
                                                <div class="col-md-9">
                                                    <textarea id="desc" class="form-control"
                                                           type="text" rows="2"
                                                              name="desc">{{$info->desc}}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Số điện thoại: </label>
                                                <div class="col-md-9">
                                                    <input id="phone" class="form-control"
                                                           type="text"
                                                           name="phone"value="{{$info->phone}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Email: </label>
                                                <div class="col-md-9">
                                                    <input id="email" class="form-control"
                                                           type="email"
                                                           name="email" value="{{$info->email}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Website: </label>
                                                <div class="col-md-9">
                                                    <input id="facebook" class="form-control"
                                                           type="website"
                                                           name="website" value="{{$info->website}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Địa chỉ: </label>
                                                <div class="col-md-9">
                                                     <textarea id="address" rows="1" class="form-control"
                                                               name="address">{{$info->address}}</textarea>
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


            // $('#category_thumb').filemanager('image');


            // $(document).ready(function () {
            //     $('#category_thumb_data').change(function () {
            //         var data = $(this).val();
            //         $("#category_thumb_preview").attr("src", data);
            //         console.log(data)
            //     });
            //
            //
            // });
        });
    </script>
@endsection
