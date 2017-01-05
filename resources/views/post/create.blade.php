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

                    <form action="{{ route('admin.post.store') }}" method="post" class="form-horizontal">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="codigo" class="col-md-4 control-label">Código</label>
                            <div class="col-md-6">
                                <input type="text" name="codigo" id="codigo" class="form-control" placeholder="Ej. XXX-123456">
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
