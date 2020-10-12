<table class="card-block table table-hover table-bordered table-striped toggle-arrow-tiny"
       id="exampleFooAccordion"
       data-sorting="true" data-show-toggle="true" data-toggle-column="last" style="background: white">
    <thead>
    <tr>
        <th>ID (Tổng quan)</th>
        <th>Tiêu đề</th>
        <th>Chỉnh sửa</th>
    </tr>
    </thead>
    <tbody>
    @foreach($categories as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->name}}</td>

            <td><a href="/organization/ballots/{{$row->id}}">Chi tiết</a> </td>
            <td><a href="/organization/poll/edit/{{$row->id}}">Chỉnh sửa</a> </td>

        </tr>
    @endforeach
    </tbody>
</table>

{!! $categories->links() !!}


