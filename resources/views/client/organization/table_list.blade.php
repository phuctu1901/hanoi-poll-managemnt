@if(!$data)
    <h2>Không có cuộc trưng cầu ý kiến nào</h2>
@else

<?php foreach ($data as $value): ?>
    <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="">
                    <a href="/chi-tiet-tour/{{$value->slug}}">
                            <img src="{{$value->logo}}" alt="{{$value->slug}}" class="rounded-circle avatar-md avatar mx-auto d-block">
                    </a>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="tour_list_desc">
                    <a href="/chi-tiet-to-chuc/{{$value->slug}}"><strong><span style="font-weight: 600; font-size: 20px;text-align: center;display: block;">{{$value->name}}</span></strong></a>
                    <hr>
                    <table class="table table-borderless">
                           <tr>
                               <td><strong>Webiste</strong></td>
                               <td>{{$value->website}}</td>
                           </tr>
                        <tr>
                            <td><strong>Email</strong></td>
                            <td>{{$value->email}}</td>
                        </tr>
                        <tr>
                            <td><strong>Số điện thoại</strong></td>
                            <td>{{$value->phone}}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-lg-3 col-md-2">
                <div class="tour_list_desc">
                    <p>{{$value->desc}}</p>
                    <a type="button" class="btn btn-success" href="/khao-sat/to-chuc/{{$value->slug}}">Danh sách cuộc khảo sát</a>
                </div>
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


