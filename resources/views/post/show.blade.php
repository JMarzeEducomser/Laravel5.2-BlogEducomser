@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <i class="fa fa-btn fa-trash"></i>Eliminar Post
                </div>

                <div class="panel-body">
                    {!! Form::open(['route' => ['admin.post.destroy', $post->codigo], 'method' => 'DELETE', 'class' => 'form-horizontal']) !!}

                    <h3>
                        ¿Está seguro de eliminar el post con código: <i>{{ $post->codigo }}</i>, titulado: <i>"{{ $post->titulo }}"</i>?
                    </h3>

                    <div class="form-group">
                        <div class="col-md-3 col-md-offset-2">
                            <input type="submit" value="Si" class="btn btn-danger"/>
                        </div>
                        <div class="col-md-3 col-md-offset-2">
                            {!! link_to_route('admin.post.index', 'No', [], ['class' => 'btn btn-default']) !!}
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
