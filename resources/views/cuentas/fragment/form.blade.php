<div class="form-group">
    {!! Form::label('nombre', 'Nombre de la cuenta') !!}
    {!! Form::text('nombre', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('usuario', 'Usuario') !!}
    {!! Form::text('usuario', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('clave', 'Clave') !!}
    {!! Form::text('clave', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Enviar', ['class'=>'btn btn-primary']) !!}
</div>