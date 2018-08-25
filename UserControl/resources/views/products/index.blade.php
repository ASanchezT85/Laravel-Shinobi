@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <strong>Productos</strong>
                    @can('products.create')
                        <a class="btn btm-sm btn-primary float-right" href="{{ route('products.create') }}" title="">Crear</a>
                    @endcan
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product->name }}</td>
                                <td>
                                    @can('products.show')
                                    <a class="btn btn-sm btn-secondary" href="{{ route('products.show', $product->id) }}" title="">
                                        <i class="far fa-eye"></i>
                                    </a>
                                    @endcan
                                </td>
                                <td>
                                    @can('products.edit')
                                    <a class="btn btn-sm btn-warning" href="{{ route('products.edit', $product->id) }}" title="">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    @endcan
                                </td>
                                <td>
                                    @can('products.destroy')
                                    {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $products->render() }}
              </div>
            </div>
        </div>
    </div>
</div>
@endsection