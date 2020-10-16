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
            <td><a href="/admin/poll/detail/{{$row->id}}">{{ $row->id }}</a></td>
            <td>{{$row->title}}</td>
            <td>{{$row->created_at}}</td>
            <td>{{$row->start_at}}</td>
            <td>{{$row->end_at}}</td>
            <td>
                 <span class="badge badge-table
                @switch($row->state)
                 @case(0)
                     badge-secondary
@break

                 @case(1)
                     badge-primary
@break

                 @case(2)
                     badge-success
@break

                 @case(3)
                     badge-warning
@break

                 @default
                     badge-dark
@endswitch
                     ">
                    @switch($row->state)
                         @case(0)
                         Chưa bắt đầu
                         @break

                         @case(1)
                         Đang diễn ra
                         @break

                         @case(2)
                         Đã kết thúc
                         @break

                         @case(3)
                         Đã đóng
                         @break

                         @default
                         Lỗi
                     @endswitch
                    </span>
            </td>
            <td><a href="/admin/ballots/{{$row->id}}">Chi tiết</a></td>
            <td><a href="/admin/poll/edit/{{$row->id}}">Chỉnh sửa</a></td>

        </tr>
    @endforeach
    </tbody>
</table>

{!! $data->links() !!}


