<table class="table table-responsive-md-md text-center table-striped">

    <thead>
    <tr>
        <th>Tên tour</th>
        <th>Số lượt truy cập</th>
        <th>Hành động</th>
    </tr>
    </thead>
    <tbody>
    @foreach($tours as $tour)
        <tr>
            <td>{{$tour->title}}</td>
            <td>
                {{$tour->view_counter}}
            </td>
            <td>
                <a class="success p-0" data-original-title="" title="Truy cập" target="_blank"  href="/chi-tiet-tour/{{$tour->slug}}">
                    <i class="ft-info font-medium-3 mr-2"></i>
                </a>
                <a class="success p-0" data-original-title="" title="Chỉnh sửa tour"  href="/organization/tour/edit/{{$tour->id}}">
                    <i class="ft-edit-2 font-medium-3 mr-2"></i>
                </a>
            </td>
        </tr>
    @endforeach

    </tbody>
</table>
<?php
