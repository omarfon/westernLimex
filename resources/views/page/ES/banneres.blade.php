<div class="banner">
    @if(isset($noticias))
        <div class="container">
            <div class="uno">
                @foreach ($noticias as $n)
                    <div class="row">
                        <div class="fondo-blanco">
                            <img class="imagen-slider" src="../photo/{{ $n->photo }}">
                            <h3>{{$n->title_es}}</h3>
                            <h5>{{$n->date}}</h5>
                            <h6>{{$n->author}}</h6>
                            <a href="{{$n->id}}"> ver mas</a>
                        </div>
                    </div>
                @endforeach
            </div>
            @endif
        </div>