@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    Rol
                </div>
                <div class="card-body">
                    {!! Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'PUT']) !!}
                        @include('roles.patrials.form')
                    {!! Form::close() !!}
              </div>
            </div>
        </div>
    </div>
</div>
@endsection