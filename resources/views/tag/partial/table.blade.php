<table class="table table-hover">
    <tr class="table-header">
        <th>Id</th>
        <th>Nombre</th>
    </tr>

    @foreach($tags as $tag)
    <tr class="table-body">
        <td>{{ $tag->id }}</td>
        <td>{{ $tag->nombre }}</td>
    </tr>
    @endforeach
</table>

{{ $tags->render() }}

@section('script')
<script>
    // Paginación
    $(document).on('click', '.pagination a', function(e){
        e.preventDefault();
        // http://localhost:8000/admin/tag?page=1
        var href = $(this).attr('href').split('?');
        // href[0] = http://localhost:8000/admin/tag
        // href[1] = page=1
        var url = href[0];
        var data = href[1];

        $.ajax({
            url: url, // index
            method: 'GET',
            dataType: 'JSON',
            data: data
        }).done(function (response){
            $('.content-ajax').html(response);
        });
    });
</script>
@endsection
