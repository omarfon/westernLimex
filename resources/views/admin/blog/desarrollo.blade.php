@extends('page.es.cabeza')
@section('content')
        <div class="container">
            <div class="row">

                    <div class="col-sm-6">
                        <h3  class="titulo-blog">  {{ $noticias->title_es }}</h3>
                        <img class="imagen_blog" src="../photo/{{ $noticias->photo }}">
                        <p class="contenido_blog">{{ $noticias->content_es }}</p>
                        <h6 class="contenido_blog">{{ $noticias->author }}</h6>

                    </div>
                <a href="{{ route('noticias')}}">volver</a>
                    </tr>

        </div>
        </tbody>
@endsection