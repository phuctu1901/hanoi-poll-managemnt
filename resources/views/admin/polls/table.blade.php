<table class="card-block table table-hover table-bordered table-striped toggle-arrow-tiny"
       id="exampleFooAccordion"
       data-sorting="true" data-show-toggle="true" data-toggle-column="last" style="background: white">
    <thead>
    <tr>
        <th>ID</th>
        <th>Tiêu đề</th>
        <th>Thời gian bắt đầu</th>
        <th>Thời gian kết thúc</th>
        <th>Ngày tạo</th>

        <th>Trạng thái</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $row)
        <tr>
            <td><a href="/did/detail/{{$row->id}}">{{ $row->id }}</a> </td>
            <td>{{$row->title}}</td>
            <td>{{$row->created_at}}</td>
            <td>{{$row->start_at}}</td>
            <td>{{$row->end_at}}</td>
            <td>
                <span class="badge badge-table @if($row->state===1) badge-success @elseif(@$row->state===0) badge-info @else badge-danger @endif"> @if($row->state===1) Đã hoàn thành @else Đang diễn ra @endif</span>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

{!! $data->links() !!}


