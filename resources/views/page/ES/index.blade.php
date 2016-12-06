@extends('page.es.cabeza')

@section('content')

@include('page.es.banneres')



<div class="buscador"></div>
<h1 class="titulo-home">¡El mundo entero en sus manos!</h1>
<h3 class="slogan-home">Ahora es más fácil que nunca hacer negocios en el extranjero. No se quede atrás y déjenos ayudarle.</h3>

<h3 class="mayuscula celeste">TEXTO DE BIENVENIDA</h3>
<p class="bienvenida">Integer tincidunt. Aenean viverra rhoncus pede. Sed a   libero. Phasellus nec sem in justo pellentesque facilisis. Praesent ac massa at ligula laoreet iaculis.

Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Suspendisse nisl elit, rhoncus eget, elementum ac, condimentum eget, diam. Pellentesque posuere. Vestibulum dapibus nunc ac augue. Sed fringilla mauris sit amet nibh.</p>

<div class="barra-azul">
  <p class="blanco-home">¿Necesita productos del extranjero pero no sabe cómo?
Nuestras consultas son gratis y sin complicaciones. </p>
<div class="boton"><a href="{{route('contactenos')}}">contactanos</a></div>
</div>
@endsection