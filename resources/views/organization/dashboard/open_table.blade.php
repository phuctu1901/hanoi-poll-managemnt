<table class="table table-responsive-md-md text-center table-striped">

    <thead>
    <tr>
        <th>Tên cuộc trưng cầu ý kiến</th>
        <th>Lượt góp ý</th>
        <th>Hành động</th>
    </tr>
    </thead>
    <tbody>
    @foreach($open_polls as $poll)
        <tr>
            <td>{{$poll->title}}</td>
            <td>
                1
{{--                {{$tour->view_counter}}--}}
            </td>
            <td>
                <a class="success p-0" data-original-title="" title="Truy cập" target="_blank"  href="/chi-tiet-tour/{{$poll->slug}}">
                    <i class="ft-info font-medium-3 mr-2"></i>
                </a>
                <a class="success p-0" data-original-title="" title="Chỉnh sửa tour"  href="/organization/tour/edit/{{$poll->id}}">
                    <i class="ft-edit-2 font-medium-3 mr-2"></i>
                </a>
            </td>
        </tr>
    @endforeach

    </tbody>
</table>
<?php
