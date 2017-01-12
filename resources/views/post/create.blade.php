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

                    @include('post.partial.validation')

                    {!! Form::open(['route' => 'admin.post.store', 'method' => 'POST', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include('post.partial.form')

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input type="submit" value="Guardar" class="btn btn-success"/>
                            </div>
                        </div>

                    {!! Form::close() !!}

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
