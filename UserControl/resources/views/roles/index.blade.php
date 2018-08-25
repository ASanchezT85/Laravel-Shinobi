@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <strong>Roles</strong>
                    @can('products.create')
                        <a class="btn btm-sm btn-primary float-right" href="{{ route('roles.create') }}" title="">Crear</a>
                    @endcan
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $role->name }}</td>
                                <td>{{ $role->description }}</td>
                                <td>
                                    @can('roles.show')
                                    <a class="btn btn-sm btn-secondary" href="{{ route('roles.show', $role->id) }}" title="">
                                        <i class="far fa-eye"></i>
                                    </a>
                                    @endcan
                                </td>
                                <td>
                                    @can('roles.edit')
                                    <a class="btn btn-sm btn-warning" href="{{ route('roles.edit', $role->id) }}" title="">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    @endcan
                                </td>
                                <td>
                                    @can('roles.destroy')
                                    {!! Form::open(['route' => ['roles.destroy', $role->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $roles->render() }}
              </div>
            </div>
        </div>
    </div>
</div>
@endsection