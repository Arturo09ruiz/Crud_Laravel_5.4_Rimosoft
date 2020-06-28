<div class="form-group">
    {!! Form::label('name', 'Nombre Del Producto') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('short', 'Descripcion Breve Del Producto') !!}
    {!! Form::text('short', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body', 'Descripcion Del Producto') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
</div>