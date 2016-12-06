@extends('page.es.cabeza')

@section('content')
	<div class="banner-locaciones">
  <div class="contenedor-elementos">
    <div class="titulo-img-banner">Hong Kong Office</div>
    <div class="parrafo-img-banner">Ubicado en Viena, Austria. Gestiona las operaciones globales de Western Limex y transacciones en el continente Europeo. </div>
  </div>
</div>
<div class="cuerpo">
  <div class="titulo-locaciones">Western Limex en el mundo</div>
  <img class="img-locaciones responsive-img" src="{{asset('img/mapamundi.png')}}">
</div>

@endsection