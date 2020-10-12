<table class="card-block table table-hover table-bordered table-striped toggle-arrow-tiny center"
       id="exampleFooAccordion"
       data-sorting="true" data-show-toggle="true" data-toggle-column="last" style="background: white">
    <thead>
    <tr>
{{--        <th>ID (Tổng quan)</th>--}}
        <th>Tên</th>
        <th>Mã</th>
        <th>Ngày tạo</th>
{{--        <th>Thời gian bắt đầu</th>--}}
{{--        <th>Thời gian kết thúc</th>--}}
        <th>Số tài khoản</th>
        <th>Số cuộc trưng cầu ý kiến</th>

        <th>Trạng thái</th>
        <th>Hành động</th>
    </tr>
    </thead>
    <tbody>
    @foreach($orgs as $org)
        <tr>
            <td>{{$org->name}}</td>
            <td>{{$org->code}}</td>
            <td>{{$org->created_at}}</td>
            <td>4</td>
            <td>5</td>
            <td>
                <span class="badge badge-table @if($org->state===1) badge-success @elseif(@$org->state===0) badge-info @else badge-danger @endif"> @if($org->state===2) Đang hoạt động @elseif($org->state===1) Ngừng kích hoạt  @else Khóa vĩnh viễn @endif</span>
            </td>
            <td>
                <a class="success p-0" data-original-title="" title="Chi tiết"  href="/admin/organization/{{$org->id}}">
                    <i class="ft-info font-medium-3 mr-2"></i>
                </a>
                <a class="danger p-0" data-original-title="" title="Chỉnh sửa"   href="/admin/organization/edit/{{$org->id}}">
                    <i class="ft-edit-2 font-medium-3 mr-2"></i>
                </a><a class="danger p-0" data-original-title="" title="Người dùng"   href="/admin/organization/user/{{$org->id}}">
                    <i class="ft-user font-medium-3 mr-2"></i>
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

{!! $orgs->links() !!}


