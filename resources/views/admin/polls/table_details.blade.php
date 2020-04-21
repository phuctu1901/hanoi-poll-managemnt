<table class="card-block table table-hover table-bordered table-striped toggle-arrow-tiny"
       id="exampleFooAccordion"
       data-sorting="true" data-show-toggle="true" data-toggle-column="last" style="background: white">
    <thead>
    <tr>
        <th>ID</th>
        <th>Thời gian</th>
{{--        <th>Bằng chứng</th>--}}
    </tr>
    </thead>
    <tbody>
    @foreach($data as $row)
        <tr>
            <td><a href="/admin/proofs/detail/{{$row->proof_id}}">{{ $row->id }}</a> </td>
            <td>{{$row->created_at}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

{!! $data->links() !!}


