@extends('layouts.app')

@section('content')
<!-- Comentario -->
{{--  --}}
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-btn fa-list"></i>Lista de Posts
                </div>

                <div class="panel-body">
                    <a href="{{ route('admin.post.create') }}" class="btn btn-success">
                        <i class="fa fa-btn fa-plus"></i>Nuevo
                    </a>
                    <hr/>

                    <table class="table table-hover">
                        <tr class="table-header">
                            <th>Código</th>
                            <th>Título</th>
                            <th>¿Publicado?</th>
                            <th>Categoría</th>
                            <th>Creación</th>
                            <th>Última modificación</th>
                        </tr>

                        @foreach($posts as $post)
                        <tr class="table-body">
                            <td>{{ $post->codigo }}</td>
                            <td>{{ $post->titulo }}</td>
                            <td>
                                @if($post->publicado)
                                Si
                                @else
                                No
                                @endif
                            </td>
                            <td>{{ $post->categoria->nombre }}</td>
                            <td>{{ $post->created_at->diffForHumans() }}</td>
                            <td>{{ $post->updated_at->diffForHumans() }}</td>
                        </tr>
                        @endforeach

                    </table>
                </div>

                <div class="panel-footer text-center">
                    {{ $posts->render() }}
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
