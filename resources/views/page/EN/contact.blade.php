@extends('page.en.cabeza')
@section('content')
		<div class="banner-locaciones">

</div>
<div class="titulo-contactenos">
  We are here to help you, contact us
</div>
    <div class="container formulario">
   {!!Form::open(['route'=>'mail.store','method'=>'POST'])!!}
      <div class="col-md-6 col-md-offset-6">
      <div class="form-group">
        {!!Form::label('Name')!!}
        {!!Form::text('name',null,['class'=>'form-control'])!!}
      </div>
      <div class="form-group">
        {!!Form::label('Phone')!!}
        {!!Form::number('telefono',null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
        {!!Form::label('Email')!!}
        {!!Form::text('email',null,['class'=>'form-control'])!!}
        </div>
      <div class="form-group">
        {!!Form::textarea('Comment',null,['class'=>'form-control'])!!}
      </div>
    {!!Form::submit('SEND',['class'=>'btn btn-primary margin-abajo'])!!}
    {!!Form::Close()!!}
    </div>
  </div>
@endsection