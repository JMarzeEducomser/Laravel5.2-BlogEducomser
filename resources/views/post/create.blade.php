@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <i class="fa fa-btn fa-plus"></i>Agregar nuevo Post
                </div>

                <div class="panel-body">

                    {!! Form::open(['route' => 'admin.post.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}

                        <div class="form-group">
                            {!! Form::label('codigo', 'Código', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('codigo', null, ['placeholder' => 'Ej. XXX-123456', 'class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('titulo', 'Título', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('titulo', null, ['placeholder' => 'Ej. Nuevo Post', 'class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('contenido', 'Contenido', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::textarea('contenido', null, ['placeholder' => 'Ej. Contenido del Post', 'class' => 'form-control']) !!}
                            </div>
                        </div>

                    {!! Form::close() !!}

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
