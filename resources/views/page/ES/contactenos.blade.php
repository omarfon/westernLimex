@extends('page.es.cabeza')

@section('content')
	<div class="banner-locaciones">

</div>
<div class="titulo-contactenos">
  Estamos para ayudarte, contactate con nosotros
</div>
<div class="container formulario">
   {!!Form::open(['route'=>'mail.store','method'=>'POST'])!!}
      <div class="col-md-6 col-md-offset-6">
      <div class="form-group">
        {!!Form::label('Nombre')!!}
        {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa tu nombre'])!!}
      </div>
      <div class="form-group">
        {!!Form::label('telefono')!!}
        {!!Form::number('telefono',null,['class'=>'form-control','placeholder'=>'ingresa tu número de Telefono'])!!}
        </div>
        <div class="form-group">
        {!!Form::label('email')!!}
        {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'ingresa tu email'])!!}
        </div>
      <div class="form-group">
        {!!Form::textarea('mensaje',null,['class'=>'form-control','placeholder'=>'cuentanos de tu necesidad'])!!}
      </div>
    {!!Form::submit('Enviar',['class'=>'btn btn-primary margin-abajo'])!!}
    {!!Form::Close()!!}
    </div>
  </div>
@endsection