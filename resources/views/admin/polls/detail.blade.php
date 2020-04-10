@extends('admin.layouts.master')

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
                                                    <td><p class="border border-primary some-margin"><?php echo htmlspecialchars_decode($poll->overview);?></p></td>
                                                </tr>
                                                {{--                                        <tr>--}}
                                                {{--                                            <td>Bot station title</td>--}}
                                                {{--                                            <td>{{$transaction->bot->title}} <a target="_blank" href="/bots/get/{{$transaction->bot->id}}">Detail</a></td>--}}
                                                {{--                                        </tr>--}}
                                                {{--                                        <tr>--}}
                                                {{--                                            <td>Bot station address</td>--}}
                                                {{--                                            <td>{{$transaction->bot->address}}</td>--}}
                                                {{--                                        </tr>--}}
                                                {{--                                        <tr>--}}
                                                {{--                                            <td>Type of ticket</td>--}}
                                                {{--                                            <td>{{$transaction->type}}</td>--}}
                                                {{--                                        </tr>--}}
                                                {{--                                        <tr>--}}
                                                {{--                                            <td>Money</td>--}}
                                                {{--                                            <td><?php echo number_format($transaction->money, 0, ',', '.');?> VNĐ</td>--}}
                                                {{--                                        </tr>--}}
                                                {{--                                        <tr>--}}
                                                {{--                                            <td>TX on Blockchain</td>--}}
                                                {{--                                            <td><a target="_blank" href="https://scan.testnet.tomochain.com/txs/{{ $transaction->txs }}" >{{ $transaction->txs }}</a> </td>--}}
                                                {{--                                        </tr>--}}
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <?php $question_index = 1;?>
                        @foreach( $questions as $question)
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">  <?php echo htmlspecialchars_decode($question->question);?></h4>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body chartjs">
                                                <canvas id="chart-{{$question_index}}" height="400"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $question_index++;?>
                        @endforeach
                    </div>

                </div>
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
    <script>
        //Get the context of the Chart canvas element we want to select
        const label = {!! $poll->content !!};
        const data = @json($result)

            <?php $question_index=1;?>
            @foreach($questions as $question)
        var ctx_{{$question_index}} = $("#chart-{{$question_index}}");

        // Chart Options
        var chartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            responsiveAnimationDuration: 500,
            tooltips: {
                callbacks: {
                    label: function (tooltipItem, data) {
                        try {
                            let label = ' ' + data.labels[tooltipItem.index] || '';

                            if (label) {
                                label += ': ';
                            }

                            const sum = data.datasets[0].data.reduce((accumulator, curValue) => {
                                return accumulator + curValue;
                            });
                            const value = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];

                            label += Number((value / sum) * 100).toFixed(2) + '%';
                            return label;
                        } catch (error) {
                            console.log(error);
                        }
                    }
                }
            }
        };

        var chartData_{{$question_index}} = {
            labels: label[{{$question_index}}-1].options,
            datasets: [{
                label: label[{{$question_index}}-1].question,
                data: data[{{$question_index}}-1],
                backgroundColor: ['#00A5A8', '#626E82', '#FF7D4D', '#FF4558', '#16D39A'],
            }]
        };

        var config_{{$question_index}} = {
            type: 'pie',

            // Chart Options
            options: chartOptions,

            data: chartData_{{$question_index}}
        };

        // Create the chart
        var pieSimpleChart_{{$question_index}} = new Chart(ctx_{{$question_index}}, config_{{$question_index}});
        <?php $question_index++;?>

        @endforeach
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
    <style>
        .transaction-id{
            color: #868f9b;
            margin-bottom: 10px;
        }
        .table td, .table th{
            border-top:none;
        }

    </style>
@endsection

