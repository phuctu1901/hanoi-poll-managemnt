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

{{--                                            Tabs header--}}
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
                                            {{--                                            End Tabs header--}}



                                            <div class="tab-content px-1 pt-1">
                                                <div role="tabpanel" class="tab-pane active show" id="basic_info"
                                                     aria-labelledby="basic_info_tab" aria-expanded="true">
                                                    <h4 class="form-section"><i class="ft-user"></i> Thông tin chính
                                                    </h4>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control">Tiêu đề </label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="projectinput1" class="form-control"
                                                                   name="poll_name">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control">Danh mục: </label>
                                                        <div class="col-md-9">
                                                                <select id="category_id" name="category_id"
                                                                        class="form-control">
                                                                    <option value="0" selected="" disabled="">Chọn danh mục
                                                                    </option>
                                                                    <option
                                                                        value="1">Hành chính công</option>
                                                                    <option
                                                                        value="2">An sinh - xã hội</option>
                                                                </select>

                                                        </div>

                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control">Thời gian: </label>
                                                        <div class="col-md-9">
                                                            <p id="basicExample">
                                                                <input  name="start_at" type="text" class="date start" id="start_at" />
                                                                <input type="text" class="time start" name="start_time"/> đến
                                                                <input type="text" class="time end" name="end_time"/>
                                                                <input  name="end_at" type="text" class="date end" />
                                                            </p>
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
                                                            <h4 class="card-title">Nội dung thăm dò</h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="card-block" id="dynamic_field">
                                                                <div class="form-group row">
                                                                    <label class="col-md-3 label-control">Câu hỏi
                                                                        1</label>
                                                                    <div class="col-md-9">


                                                                    <textarea id="question_content_1" rows="2"
                                                                              class="form-control poll-info"
                                                                              name="question_content[]"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 pull-right">
                                                                    <div class="form-group row">
                                                                        <button type="button" name="add_option"
                                                                                id="add_option"
                                                                                class="btn btn-success pull-right">Thêm
                                                                            đáp án
                                                                        </button>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                    </div>
                                                        <div class="card-footer">
                                                            <div class="form-group-row">
                                                                <div class="col-md-9 pull-right">
                                                                    <button type="button" name="add_question"
                                                                            id="add_question"
                                                                            class="btn btn-success">Thêm câu hỏi
                                                                    </button>
                                                                    <button type="button" name="remove_question"
                                                                            id="remove_question"
                                                                            class="btn btn-warning">Xóa câu hỏi
                                                                    </button>
                                                                </div>


                                                            </div>
                                                    </div>
                                                        <input type="hidden"  id="question_number" name="question_number" value=1>
                                                </div>



                                            </div>
                                            </div>

                                        <div class="form-actions">
                                            <button type="reset" class="btn btn-raised btn-warning mr-1">
                                                <i class="ft-x"></i> Reset
                                            </button>
                                            <button type="submit" class="btn btn-raised btn-primary">
                                                <i class="fa fa-check-square"></i> Save
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

    <link rel="stylesheet" type="text/css" href="/client-assets/global/vendor/timepicker/jquery-timepicker.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script type='text/javascript' src='/admin-assets/vendors/js/core/jquery-3.2.1.min.js'></script>
    <script type='text/javascript'
            src='https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.1.0/jquery-migrate.min.js'></script>
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>

    <script src="/client-assets/global/vendor/timepicker/jquery.timepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.bootcss.com/datepair.js/0.4.16/datepair.js"></script>

    {{--    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>--}}
    <script>

        jQuery(function ($) {

            const options = {
                filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
            };

            // initialize input widgets first
            $('#basicExample .time').timepicker({
                'showDuration': true,
                'timeFormat': 'g:ia'
            });

            $('#basicExample .date').datepicker({
                'format': 'd/m/yyyy',
                'autoclose': true,
                'language':'vi'
            });

            // initialize datepair
            var basicExampleEl = document.getElementById('basicExample');
            var datepair = new Datepair(basicExampleEl);

            $(this).find('.poll-info').each(function (index) {
                console.log(index + ": " + $(this).attr('id'));
                CKEDITOR.replace($(this).attr('id'), options);

            });

            $(document).ready(function () {

                let i = 1;
                let days = 1;

                // $('#lfm_0').filemanager('image');
                // $('#tour_thumb').filemanager('image');
                // $('#tour_image_1').filemanager('image');


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



                $('#add_question').click(function () {

                    days++;
                    // $('#dynamic_field').append('<div class="form-group row" id=dynamic_field_' + days + ' > <label class="col-md-3 label-control">Câu hỏi ' + days + '</label> <div class="col-md-9"> <input type="text" class="form-control" name="itinerary_name[]"><div class="input-group"> <a id=tour_image_' + days + ' data-input=tour_image_data_' + days + ' data-preview=tour_image_preview_' + days + ' class="btn btn-primary"> <i class="fa fa-picture-o"></i> Choose </a> <input id=tour_image_data_' + days + ' class="form-control itinerary-image-input" type="text" name="itinerary_image[]" data-id=' + days + '> </div><img id=tour_image_preview_' + days + ' style="margin-top:15px;max-height:100px;" > <textarea id="question_content_' + days + '" rows="5" class="form-control tour-info" name="question_content[]"></textarea> </div> </div>');
                    $('#dynamic_field').append('<div class="form-group row"  id=dynamic_field_' + days + ' > <label class="col-md-3 label-control">Câu hỏi ' + days + '</label> <div class="col-md-9">  <textarea id="question_content_' + days + '" rows="5" class="form-control poll-info" name="question_content[]"></textarea> </div> </div>');
                    CKEDITOR.replace('question_content_' + days, options);
                    RefreshSomeEventListener_2();
                    $('#question_number').val(days);


                });

                $('#remove_question').click(function () {
                    $('#dynamic_field_' + days).remove();
                    days--;
                    $('#question_number').val(days);

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
