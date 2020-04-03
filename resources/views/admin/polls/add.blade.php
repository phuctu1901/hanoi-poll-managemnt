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
                                <h4 class="card-title" id="horz-layout-basic">Thêm cuộc thăm dò ý kiến mới </h4>
                            </div>
                            <div class="card-body">
                                <div class="px-3">

                                    <form class="form form-horizontal" action="{{url('/admin/poll/addRequest')}} "
                                          method="POST" role="form" enctype="multipart/form-data">
                                        {{ csrf_field()}}
                                        <div class="form-body">
                                            <ul class="nav nav-tabs nav-justified">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="basic_info_tab" data-toggle="tab"
                                                       href="#basic_info" aria-controls="basic_info"
                                                       aria-expanded="true">Thông tin cơ bản</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="itinerary_tab" data-toggle="tab"
                                                       href="#itinerary" aria-controls="itinerary"
                                                       aria-expanded="false">Câu hỏi</a>
                                                </li>

                                            </ul>


                                            <div class="tab-content px-1 pt-1">
                                                <div role="tabpanel" class="tab-pane active show" id="basic_info"
                                                     aria-labelledby="basic_info_tab" aria-expanded="true">
                                                    <h4 class="form-section"><i class="ft-user"></i> Thông tin chính</h4>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control">Tiêu đề </label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="projectinput1" class="form-control"
                                                                   name="poll_name">
                                                        </div>
                                                    </div>




                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control">Tổng quan: </label>
                                                        <div class="col-md-9">
                                                            <textarea class="form-control"
                                                                      name="overview"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput2">Xuất
                                                            phát: </label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="projectinput2" class="form-control"
                                                                   name="location">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="">Giá người
                                                            lớn: </label>
                                                        <div class="col-md-9">
                                                            <input type="number" id="projectinput2" class="form-control"
                                                                   name="adult_price">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput3">Thời
                                                            gian: </label>
                                                        <div class="col-md-1">
                                                            <input type="number" id="projectinput3" class="form-control"
                                                                   name="days">
                                                        </div>
                                                        <label class="label-control" for="projectinput2">Ngày</label>

                                                        <div class="col-md-1">
                                                            <input type="number" id="projectinput3"
                                                                   class="form-control " name="nights">
                                                        </div>
                                                        <label class="label-control" for="projectinput2">Đêm</label>

                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput9">Nổi
                                                            bật: </label>
                                                        <div class="col-md-9">
                                                            <textarea id="highlights" rows="5" class="form-control"
                                                                      name="highlights"></textarea>

                                                            <script
                                                                src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
                                                            <script>
                                                                CKEDITOR.replace('highlights');

                                                            </script>
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control">Ảnh đại diện: </label>
                                                        <div class="col-md-9">
                                                            <div class="input-group">
                                                                <a id="tour_thumb" data-input="tour_thumb_data"
                                                                   data-preview="tour_thumb_preview"
                                                                   class="btn btn-primary">
                                                                    <i class="fa fa-picture-o"></i> Choose
                                                                </a>
                                                                <input id="tour_thumb_data" class="form-control"
                                                                       type="text"
                                                                       name="thumb">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="tab-pane" id="itinerary" role="tabpanel"
                                                     aria-labelledby="itinerary_tab" aria-expanded="false">
                                                    <div class="card">
                                                        <div class="card-header">
                                                                <div class="form-group row">
                                                                    <label class="col-md-3 label-control">Câu hỏi
                                                                        1</label>
                                                                    <div class="col-md-9">

                                                                        <input type="text" class="form-control"
                                                                               name="itinerary_name[]">
                                                                        <div class="input-group">
                                                                            <a id="tour_image_1"
                                                                               data-input="tour_image_data_1"
                                                                               data-preview="tour_image_preview_1"
                                                                               class="btn btn-primary">
                                                                                <i class="fa fa-picture-o"></i> Choose
                                                                            </a>

                                                                            <input id="tour_image_data_1"
                                                                                   class="form-control itinerary-image-input"
                                                                                   type="text"
                                                                                   name="itinerary_image[]" data-id=1>
                                                                        </div>

                                                                        <img id="tour_image_preview_1"
                                                                             style="margin-top:15px;max-height:100px;">
                                                                        <textarea id="itinerary_desc_1" rows="5"
                                                                                  class="form-control tour-info"
                                                                                  name="itinerary_desc[]"></textarea>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="card-footer">
                                                            <div class="form-group-row">
                                                                <div class="col-md-9 pull-right">
                                                                    <button type="button" name="add" id="add_day"
                                                                            class="btn btn-success">Thêm câu hỏi
                                                                    </button>
                                                                    <button type="button" name="remove" id="remove_day"
                                                                            class="btn btn-warning">Xóa câu hỏi
                                                                    </button>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <button type="reset" class="btn btn-raised btn-warning mr-1">
                                                    <i class="ft-x"></i> Reset
                                                </button>
                                                <button type="submit" class="btn btn-raised btn-primary">
                                                    <i class="fa fa-check-square-o"></i> Save
                                                </button>
                                            </div>
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

    <script type='text/javascript' src='/admin-assets/vendors/js/core/jquery-3.2.1.min.js'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.1.0/jquery-migrate.min.js'></script>
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>


    <script>


        jQuery(function ($) {
            var options = {
                filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
            };
            $(this).find('.tour-info').each(function (index) {
                console.log(index + ": " + $(this).attr('id'));
                CKEDITOR.replace($(this).attr('id'), options);

            });


        });
    </script>
{{--    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>--}}
    <script>

        jQuery(function($) {
            //
            const options = {
                filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
            };

            let i = 1;
            let days = 1;

            // $('#lfm_0').filemanager('image');
            // $('#tour_thumb').filemanager('image');
            // $('#tour_image_1').filemanager('image');

            function RefreshSomeEventListener() {
                // Remove handler from existing elements
                $('.image-input').off();

                // Re-add event handler for all matching elements
                $('.image-input').change(function () {
                    var data = $(this).val();
                    var id = $(this).data("id")
                    $("#holder_" + id).attr("src", data);
                    console.log(data)
                });
            };

            function RefreshSomeEventListener_2() {
                // Remove handler from existing elements
                $('.itinerary-image-input').off();

                // Re-add event handler for all matching elements
                $('.itinerary-image-input').change(function () {
                    var data = $(this).val();
                    var id = $(this).data("id")
                    $("#tour_image_preview_" + id).attr("src", data);
                    console.log(data)
                });
            };

            $('#add').click(function () {

                i++;
                $('#dynamic_field').append('<tr id=row_' + i + '><td><div class="input-group"><a id=lfm_' + i + ' data-input=thumbnail_' + i + ' data-preview=holder_' + i + ' class="btn btn-primary"><i class="fa fa-picture-o"></i> Choose</a><input id=thumbnail_' + i + ' class="form-control image-list image-input" type="text"name="images[]" data-id=' + i + ' ></div><img id=holder_' + i + ' style="margin-top:15px;max-height:100px;" ></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>')
                // $('#dynamic_field').append('<tr id="row' + i + '"><td><label class="file center-block"><input type="file" name="images[]"></label></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
                $('#lfm_' + i).filemanager('image');
                RefreshSomeEventListener();

            });

            $('#add_day').click(function () {

                days++;
                $('#dynamic_itinerary').append('<div class="form-group row" id=dynamic_itinerary_' + days + ' > <label class="col-md-3 label-control">Câu hỏi ' + days + '</label> <div class="col-md-9"> <input type="text" class="form-control" name="itinerary_name[]"><div class="input-group"> <a id=tour_image_' + days + ' data-input=tour_image_data_' + days + ' data-preview=tour_image_preview_' + days + ' class="btn btn-primary"> <i class="fa fa-picture-o"></i> Choose </a> <input id=tour_image_data_' + days + ' class="form-control itinerary-image-input" type="text" name="itinerary_image[]" data-id=' + days + '> </div><img id=tour_image_preview_' + days + ' style="margin-top:15px;max-height:100px;" > <textarea id="itinerary_desc_' + days + '" rows="5" class="form-control tour-info" name="itinerary_desc[]"></textarea> </div> </div>');
                CKEDITOR.replace('itinerary_desc_' + days, options);
                $('#tour_image_' + days).filemanager('image');
                RefreshSomeEventListener_2();


            });


            $(document).ready(function () {
                $('.image-input').change(function () {
                    var data = $(this).val();
                    var id = $(this).data("id")
                    $("#holder_" + id).attr("src", data);
                    console.log(data)
                });

                $('.itinerary-image-input').change(function () {
                    var data = $(this).val();
                    var id = $(this).data("id")
                    $("#tour_image_preview_" + id).attr("src", data);
                    console.log(data)
                });


                $(document).on('click', '.btn_remove', function () {

                    var button_id = $(this).attr("id");
                    console.log(button_id);
                    i--;
                    $('#row_' + button_id + '').remove();


                });

                $('#remove_day').click(function () {
                    $('#dynamic_itinerary_' + days).remove();
                    days--;
                })


                function printErrorMsg(msg) {

                    $(".print-error-msg").find("ul").html('');

                    $(".print-error-msg").css('display', 'block');

                    $(".print-success-msg").css('display', 'none');

                    $.each(msg, function (key, value) {

                        $(".print-error-msg").find("ul").append('<li>' + value + '</li>');

                    });

                }

            });
        });
    </script>
@endsection
