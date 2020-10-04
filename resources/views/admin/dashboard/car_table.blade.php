<table class="table table-responsive-md-md text-center table-striped">

    <thead>
    <tr>
        <th>Tên xe</th>
        <th>Số lượt truy cập</th>
        <th>Hành động</th>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr>
            <td>{{$post->title}}</td>
            <td>
                {{$post->view_counter}}
            </td>
            <td>
                <a class="success p-0" data-original-title="" title="Truy cập" target="_blank"  href="/chi-tiet-bai-viet/{{$post->slug}}">
                    <i class="ft-info font-medium-3 mr-2"></i>
                </a>
                <a class="success p-0" data-original-title="" title="Chỉnh sửa"  href="/organization/post/edit/{{$post->id}}">
                    <i class="ft-edit-2 font-medium-3 mr-2"></i>
                </a>
            </td>
        </tr>
    @endforeach

    </tbody>
</table>
<?php
