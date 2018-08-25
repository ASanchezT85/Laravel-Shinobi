<div class="container">
    <div class="form-group">
        {{ Form::label('name', 'Nombre') }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}
    </div>
    <hr>
    <h3>Lista de Roles</h3>
    <div class="form-group">
        <ul class="list-unstyled">
            @foreach($roles as $role)
                <li>
                    <label>
                        {{ Form::checkbox('roles[]', $role->id, null) }}
                        <strong class="mx-1">{{ $role->name }}</strong>
                        <em>({{ $role->description ?: 'Sin descripción' }})</em>
                    </label>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="form-group">
        {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
    </div>
</div>