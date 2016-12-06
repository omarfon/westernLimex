@if(session()->has('msj'))
    <div class="alert alert-success" role="alert">{{ session('msj') }}</div>

@endif

@if(session()->has('errormsj'))
    <div class="alert alert-danger" role="alert"> Error al guardar los datos</div>
@endif

@if(isset($noticia))

<form class="form-horizontal" role="form" method="POST" action="{{ route('blog.update', $noticia->id)}}" enctype="multipart/form-data">
    <input name="_method" type="hidden"  value="PUT">
    <input type="text" class="hide" name="img" value="{{ $noticia->photo }}">
    {{csrf_field()}}



    <form>
        <div class="form-group">
            <label for="title_en" class="col-sm-2 control-label">titulo ingles</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="title_en"  value="{{$noticia->title_en}}">
                @if($errors->has('title_en'))
                    <span {{ $errors->first('title_en')}}</span>
                @endif
            </div>
        </div>


        <div class="form-group">
            <label for="title_es" class="col-sm-2 control-label">titulo español</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="title_es" value="{{$noticia->title_es}}">
                @if($errors->has('title_es'))
                    <span>{{ $errors->first('title_es')}}</span>
                @endif
            </div>
        </div>


        <div class="form-group">
            <label for="content_en" class="col-sm-2 control-label">contenido ingles</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control" name="content_en">{{$noticia->content_en}}</textarea>
                @if($errors->has('content_en'))
                    <span>{{ $errors->first('content_en')}}</span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label for="content_es" class="col-sm-2 control-label">contenido Español</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control" name="content_es" >{{$noticia->content_es}}</textarea>
                @if($errors->has('content_es'))
                    <span>{{ $errors->first('content_es')}}</span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label for="author" class="col-sm-2 control-label">autor</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="author" value="{{$noticia->author}}">
            </div>
        </div>

        <div class="form-group">
            <label for="photo" class="col-sm-2 control-label">File input</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name="photo">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-warning">Modificar</button>
            </div>
        </div>
    </form>



</form>
@endif