<table class="table table-responsive-md-md text-center table-striped">

    <thead>
    <tr>
        <th>Tên dịch vụ</th>
        <th>Số lượt truy cập</th>
        <th>Hành động</th>
    </tr>
    </thead>
    <tbody>
    @foreach($services as $service)
        <tr>
            <td>{{$service->title}}</td>
            <td>
                {{$service->view_counter}}
            </td>
            <td>
                <a class="success p-0" data-original-title="" title="Truy cập" target="_blank"  href="/chi-tiet-dich-vu/{{$service->slug}}">
                    <i class="ft-info font-medium-3 mr-2"></i>
                </a>
                <a class="success p-0" data-original-title="" title="Chỉnh sửa"  href="/organization/service/edit/{{$service->id}}">
                    <i class="ft-edit-2 font-medium-3 mr-2"></i>
                </a>
            </td>
        </tr>
    @endforeach

    </tbody>
</table>
<?php
