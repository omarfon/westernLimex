@if(session()->has('msj'))
    <div class="alert alert-success" role="alert">{{ session('msj') }}</div>

@endif

@if(session()->has('errormsj'))
<div class="alert alert-danger" role="alert"> Error al guardar los datos</div>
@endif

<form class="form-horizontal" role="form" method="POST" action="{{url('blog')}}" enctype="multipart/form-data">
    {{csrf_field()}}

        <form>
          <div class="form-group">
            <label for="title_en" class="col-sm-2 control-label">titulo ingles</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="title_en" placeholder="Titulo En">
                @if($errors->has('title_en'))
                <span {{ $errors->first('title_en')}}</span>
            @endif
            </div>
          </div>


          <div class="form-group">
            <label for="title_es" class="col-sm-2 control-label">titulo español</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="title_es" placeholder="Titulo Es">
            @if($errors->has('title_es'))
                <span>{{ $errors->first('title_es')}}</span>
            @endif
            </div>
          </div>


           <div class="form-group">
            <label for="content_en" class="col-sm-2 control-label">contenido ingles</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control" name="content_en" placeholder="Contenido Ingles"></textarea>
                @if($errors->has('content_en'))
                    <span>{{ $errors->first('content_en')}}</span>
                @endif
            </div>
          </div>

          <div class="form-group">
            <label for="content_es" class="col-sm-2 control-label">contenido Español</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control" name="content_es" placeholder="Contenido Español"></textarea>
                @if($errors->has('content_es'))
                    <span>{{ $errors->first('content_es')}}</span>
                @endif
            </div>
          </div>

          <div class="form-group">
            <label for="author" class="col-sm-2 control-label">autor</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="author" placeholder="author">
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
                <button type="submit" class="btn btn-primary">Crear</button>
              </div>
          </div>
        </form>



</form>