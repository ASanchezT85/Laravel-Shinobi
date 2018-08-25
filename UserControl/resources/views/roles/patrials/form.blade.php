<div class="container">
    <div class="form-group">
        <strong>{{ Form::label('name', 'Nombre') }}</strong>
        {{ Form::text('name', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        <strong>{{ Form::label('slug', 'URL Amigable') }}</strong>
        {{ Form::text('slug', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        <strong>{{ Form::label('description', 'Descripción del Rol') }}</strong>
        {{ Form::textarea('description', null, ['class' => 'form-control']) }}
    </div>
    <hr>
    <h3>Permiso especial</h3>
    <div class="form-group">
        <label class="mx-2">
            {{ Form::radio('special', 'all-access') }} <strong>Acceso Total</strong>
        </label>
        <label class="mx-2">
            {{ Form::radio('special', 'no-access') }} <strong>Ningún Acceso</strong>
        </label>
    </div>
    <hr>
    <h3>Lista de Permisos</h3>
    <div class="form-group">
        <ul class="list-unstyled">
            @foreach($permissions as $permission)
                <li>
                    <label>
                        {{ Form::checkbox('permissions[]', $permission->id, null) }}
                        <strong class="mx-1">{{ $permission->name }}</strong>
                        <em>({{ $permission->description ?: 'Sin descripción' }})</em>
                    </label>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="form-group">
        {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
    </div>
</div>
