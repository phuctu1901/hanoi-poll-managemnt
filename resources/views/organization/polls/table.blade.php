<table class="card-block table table-hover table-bordered table-striped toggle-arrow-tiny"
       id="exampleFooAccordion"
       data-sorting="true" data-show-toggle="true" data-toggle-column="last" style="background: white">
    <thead>
    <tr>
        <th>ID (Tổng quan)</th>
        <th>Tiêu đề</th>
        <th>Ngày tạo</th>
        <th>Thời gian bắt đầu</th>
        <th>Thời gian kết thúc</th>

        <th>Trạng thái</th>
        <th>Chi tiết</th>
        <th>Chỉnh sửa</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $row)
        <tr>
            <td><a href="/organization/poll/detail/{{$row->id}}">{{ $row->id }}</a> </td>
            <td>{{$row->title}}</td>
            <td>{{$row->created_at}}</td>
            <td>{{$row->start_at}}</td>
            <td>{{$row->end_at}}</td>
            <td>
                <span class="badge badge-table @if($row->state===1) badge-success @elseif(@$row->state===0) badge-info @else badge-danger @endif"> @if($row->state===2) Đã hoàn thành @elseif($row->state===1) Đang diễn ra  @else Đang chờ @endif</span>
            </td>
            <td><a href="/organization/ballots/{{$row->id}}">Chi tiết</a> </td>
            <td><a href="/organization/poll/edit/{{$row->id}}">Chỉnh sửa</a> </td>

        </tr>
    @endforeach
    </tbody>
</table>

{!! $data->links() !!}


