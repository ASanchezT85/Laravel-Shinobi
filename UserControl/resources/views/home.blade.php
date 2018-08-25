@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bievenidos</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Una forma sencilla y practica pero muy robusta de crear Roles y Permisos utilizando el paquete <a href="https://github.com/caffeinated/shinobi" title="shinobi">Shinobi</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
