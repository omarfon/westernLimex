@extends('page.es.cabeza')

@section('content')
    @if(isset($noticias))
        <div class="container-fluid fondo-gris">
            <div class="row ">
                @foreach($noticias as $n)
                <div class="col-sm-12">
                    <h3  class="titulo-blog">  {{ $n->title_es }}</h3>
                </div>
                    <div class="col-sm-7 abajo">
                        <img class="imagen_blog" src="../photo/{{ $n->photo }}">
                    </div>
                    <div class="col-sm-5 ">
                        <p class="contenido_blog">{{ $n->content_es }}</p>
                        <h6 class="autor right">{{ $n->author }}</h6>
                        <a href="es/noticias/{{$n->id}}"> ver mas</a>
                    </div>
                @endforeach
            </div>
        </div>
        </tbody>
    @endif
@endsection