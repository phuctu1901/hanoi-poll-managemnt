@extends('organization.layouts.master')

@section('main-content')

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
                                                <label class="col-md-3 label-control">Slug: </label>
                                                <div class="col-md-9">
                                                    <input id="slug" class="form-control"
                                                           type="text"
                                                           name="slug" value="{{$info->slug}}">
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
                                                               name="org_logo_data"  value="{{$info->logo}}">

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
                                                               name="org_thumb_data"  value="{{$info->thumb}}">

                                                    </div>
                                                    <img id="org_thumb_preview"
                                                         style="margin-top:15px;max-height:100px;">
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

@endsection

@section('js-content')

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
