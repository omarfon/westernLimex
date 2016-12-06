@extends('page.en.cabeza')
@section('content')
    @if(isset($noticias))
        <div class="container-fluid">
            <div class="row fondo-gris">
                @foreach($noticias as $n)
                <div class="col-sm-12">
                    <h3  class="titulo-blog">  {{ $n->title_en }}</h3>
                </div>
                    <div class="col-sm-7 abajo">
                        <img class="imagen_blog" src="../photo/{{ $n->photo }}">
                    </div>
                    <div class="col-sm-5 ">
                        <p class="contenido_blog">{{ $n->content_en }}</p>
                        <h6 class="autor">{{ $n->author }}</h6>
                        {{-- <a class="bton" href="noticias/{{$n->id}}"> ver mas</a> --}}
                    </div>
                @endforeach
            </div>
        </div>
        </tbody>
    @endif
@endsection