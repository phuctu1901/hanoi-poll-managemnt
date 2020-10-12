@extends('admin.layouts.master')

@section('main-content')


    <div class="main-content">
        <div class="content-wrapper">
            <!-- Basic form layout section start -->
            <section id="horizontal-form-layouts">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="horz-layout-basic">Chỉnh sửa thông tin</h4>
                            </div>
                            <div class="card-body">
                                <div class="px-3">

                                    <form class="form form-horizontal"
                                          action="{{url('/admin/organization/editRequest')}} "
                                          method="POST" role="form" enctype="multipart/form-data">
                                        {{ csrf_field()}}
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="ft-user"></i> Thông tin chính</h4>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Tên tổ chức: </label>
                                                <div class="col-md-9">
                                                    <input id="title" class="form-control"
                                                           type="text"
                                                           name="org_name" value="{{$org->name}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Mã: </label>
                                                <div class="col-md-9">
                                                    <input id="title" class="form-control"
                                                           type="text"
                                                           name="org_code" value="{{$org->code}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Mô tả: </label>

                                                <div class="col-md-9">
                                                            <textarea id="desc" rows="3" class="form-control"
                                                                      name="org_des">{{$org->desc}}</textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Logo: </label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <a id="org_logo" data-input="org_logo_data"
                                                           data-preview="org_logo_preview"
                                                           class="btn btn-primary">
                                                            <i class="fa fa-picture-o"></i> Choose
                                                        </a>
                                                        <input id="org_logo_data" class="form-control"
                                                               type="text"
                                                               name="org_logo_data"  value="{{$org->logo}}">

                                                    </div>
                                                    <img id="org_logo_preview"
                                                         style="margin-top:15px;max-height:100px;">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Banner: </label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <a id="org_thumb" data-input="org_thumb_data"
                                                           data-preview="org_thumb_preview"
                                                           class="btn btn-primary">
                                                            <i class="fa fa-picture-o"></i> Choose
                                                        </a>
                                                        <input id="org_thumb_data" class="form-control"
                                                               type="text"
                                                               name="org_thumb_data"  value="{{$org->thumb}}">

                                                    </div>
                                                    <img id="org_thumb_preview"
                                                         style="margin-top:15px;max-height:100px;">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Trạng thái: </label>
                                                <div class="col-md-9">

                                                    <select id="isActive" name="org_state"
                                                            class="form-control">
                                                        <option value="0" selected="" disabled="">Chọn trạng thái cho danh
                                                            mục
                                                        </option>
                                                        <option  value=2>Khóa vĩnh viễn</option>
                                                        <option  value=0>Chưa kích hoạt</option>
                                                        <option  value=1>Đang hoạt động</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <h4 class="form-section"><i class="ft-phone-call"></i>Thông tin liên hệ</h4>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Số điện thoại: </label>
                                                <div class="col-md-9">
                                                    <input id="org_phone" class="form-control"
                                                           type="text"
                                                           name="org_phone"  value="{{$org->phone}}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Thư điện tử: </label>
                                                <div class="col-md-9">
                                                    <input id="org_mail" class="form-control"
                                                           type="text"
                                                           name="org_mail"  value="{{$org->email}}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Website: </label>
                                                <div class="col-md-9">
                                                    <input id="org_website" class="form-control"
                                                           type="text"
                                                           name="org_website"  value="{{$org->website}}">
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

    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        jQuery(function ($) {

            const options = {
                filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
            };


            $('#org_thumb').filemanager('image');


            $(document).ready(function () {
                $('#org_thumb').change(function () {
                    var data = $(this).val();
                    $("#org_thumb_preview").attr("src", data);
                    console.log(data)
                });


            });

            $('#org_logo').filemanager('image');


            $(document).ready(function () {
                $('#org_logo').change(function () {
                    var data = $(this).val();
                    $("#org_logo_preview").attr("src", data);
                    console.log(data)
                });


            });
        });
    </script>
@endsection
