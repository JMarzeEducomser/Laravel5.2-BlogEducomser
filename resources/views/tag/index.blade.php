@extends('layouts.app')

@section('content')
<!-- Comentario -->
{{--  --}}
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-btn fa-list"></i>Lista de Tags
                </div>

                <div class="panel-body">

                    <div class="content-ajax">
                        @include('tag.partial.table')
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
@endsection
