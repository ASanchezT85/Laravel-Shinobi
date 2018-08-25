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
                    <p><strong>Nombre:</strong> {{ $product->name }}</p>
                    <p><strong>Descripción:</strong> {{ $product->description }}</p>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection