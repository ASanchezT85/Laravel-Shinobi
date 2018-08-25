@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    Producto
                </div>
                <div class="card-body">
                    {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT']) !!}
                        @include('products.patrials.form')
                    {!! Form::close() !!}
              </div>
            </div>
        </div>
    </div>
</div>
@endsection