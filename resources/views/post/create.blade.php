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

                    {!! Form::open(['route' => 'admin.post.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}

                        @include('post.partial.form')

                    {!! Form::close() !!}

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
