@extends('client.layout')


@section('main-content')

    <section class="parallax-window" data-parallax="scroll" data-image-src="/client/img/cover.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>Tất cả tổ chức</h1>
                <p>Dánh sách các tổ chức tham gia hệ thống trưng cầu ý kiến 4.0</p>
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
                    <li>Tổng quan</li>
                </ul>
            </div>
        </div>


        <div class="container margin_60">
            <div class="col-12">

                <div class="row">
                    {{--            col-md-3 col-sm-4--}}
                    <div class="col-4">
                    </div>
                    <div class="col-6">
                        <form action="/to-chuc/tim-kiem" method="post">
                            {{ csrf_field()}}
                            <input class="form-control" type="text" name="keyword" id="input-search" placeholder="Nhập tên hoặc mã của tổ chức">
                        </form>
                    </div>
                    <div class="col-2 text-right">
                        <a href="?display=thumb" class="bt_filters"><i class="icon-th"></i></a>
                        <a href="?display=list" class="bt_filters"><i class=" icon-list"></i></a>
                    </div>
                </div>
            </div>
            <!-- Page Content -->

                    <div class="col-12" id="table_data">
                        <br>
                        @include('client.organization.table_list')
                    </div>

        </div>


        <div id="overlay"></div>

    </main>


@endsection
{{--    <div class="page">--}}
{{--        <div class="row page-header">--}}

{{--            <div class="col-sm-7" >--}}
{{--                <form action="/transactions/searchresult" method="post">--}}
{{--                    {{ csrf_field()}}--}}
{{--                    <input class="form-control pull-right" type="text" name="keyword" id="input-search" placeholder="Search with Plate Number/BOT ID/ID/TXS">--}}

{{--                </form>--}}
{{--            </div>--}}

{{--        </div>--}}


{{--       --}}
{{--        <!-- End Page Content -->--}}
{{--    </div>--}}
@section('js-content')
    <script>
        $(document).ready(function(){

            $(document).on('click', '.pagination a', function(event){
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                fetch_data(page);
            });

            function fetch_data(page)
            {
                $.ajax({
                    url:"/to-chuc/lay-du-lieu?page="+page,
                    success:function(data)
                    {
                        $('#table_data').html(data);
                    }
                });
            }

        });
    </script>
    <style>
        input[type=text] {
            width: 500px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            font-size: 18px;
            background-color: white;
            background-position: 10px 10px;
            background-repeat: no-repeat;
            padding: 12px 20px 12px 10px;
            display: block;
            margin: 0 0 0 auto;
        }
    </style>
@endsection
