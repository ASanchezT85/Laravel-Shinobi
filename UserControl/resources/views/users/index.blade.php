@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <strong>Usuarios</strong>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @can('users.show')
                                    <a class="btn btn-sm btn-secondary" href="{{ route('users.show', $user->id) }}" title="">
                                        <i class="far fa-eye"></i>
                                    </a>
                                    @endcan
                                </td>
                                <td>
                                    @can('users.edit')
                                    <a class="btn btn-sm btn-warning" href="{{ route('users.edit', $user->id) }}" title="">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    @endcan
                                </td>
                                <td>
                                    @can('users.destroy')
                                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $users->render() }}
              </div>
            </div>
        </div>
    </div>
</div>
@endsection