@if(!$data)
    <h2>Không có cuộc trưng cầu ý kiến nào</h2>
@else

<?php foreach ($data as $value): ?>
    <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="">
                    <a href="/khao-sat/to-chuc/{{$value->slug}}">
                            <img src="{{$value->logo}}" alt="{{$value->slug}}" class="rounded-circle avatar-md avatar mx-auto d-block" style="max-height: 200px;">
                    </a>
                </div>
            </div>

            <div class="col-lg-5 col-md-6">
                <div class="tour_list_desc">
                    <a href="/khao-sat/to-chuc/{{$value->slug}}"><strong><span style="font-weight: 600; font-size: 20px;text-align: center;display: block;margin-top:20px;">{{$value->name}}</span></strong></a>
                    <hr>
                    <table class="table table-borderless">
                           <tr>
                               <td><strong>Webiste</strong></td>
                               <td><a href="{{$value->website}}" target="_blank">{{$value->website}}</a> </td>
                           </tr>
                        <tr>
                            <td><strong>Email</strong></td>
                            <td> <a href="mailto:{{$value->email}}">{{$value->email}}</a></td>
                        </tr>
                        <tr>
                            <td><strong>Số điện thoại</strong></td>
                            <td><a href="tel:{{$value->phone}}">{{$value->phone}}</a> </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-lg-3 col-md-2">
                <div class="tour_list_desc">
                    <p style="margin-top:20px;">{{$value->desc}}</p>
                    <a type="button" class="btn btn-success" href="/khao-sat/to-chuc/{{$value->slug}}">Danh sách cuộc khảo sát</a>
                </div>
                <style>
                    .tour_list_desc {
                        display: flex;
                        flex-direction: column;
                    }

                    a.btn {
                        margin-top: auto;
                        margin-bottom: 20px;
                    }
                </style>


            </div>

        </div>
    </div>
    <!--End strip -->
    <?php endforeach; ?>

    <nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
        {!! $data->links() !!}

    </ul>
</nav>
    @endif


