<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/westernLimex.css')}}">
  <link rel="stylesheet" href="{{asset('css/slick.css')}}">
  <link rel="stylesheet" href="{{asset('css/slick-theme.css')}}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,800,900" rel="stylesheet">
  <title>Western-Limex - Principal</title>
</head>
<body>
  <div class="buscadorone">
    <form class="navbar-form cincuenta">
      <div class="form-group derecha inline">
        <ul class="idiomas">
          <li><a href="{{ route("page.en.index") }}">EN</a></li>
          <li><a href="{{ route("page.es.index") }}">ES</a></li>
        </ul>
        <input type="text" class="form-control" placeholder="busqueda">
        <button type="submit" class="btn btn-default">buscar</button>

      </div>
    </form>
  </div>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </button>
      <a class="navbar-brand" href="{{ route("home") }}"><img class="responsive-img" src="{{asset('img/logo.png')}}" alt=""></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route("home") }}">Home</a></li>
        <li><a href="{{ route("nosotros") }}">Nosotros</a></li>
        <li><a href="{{ route("servicios") }}">Servicios</a></li>
        <li><a href="{{ route("noticias") }}">Noticias</a></li>
        <li><a href="{{ route("locaciones") }}">Locaciones</a></li>
        <li><a href="{{ route("contactenos") }}">Contactenos</a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

@yield('content')

<footer>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-4 metal">
        <div class="titulo-bloque-footer">
          Nuestros Servicios
        </div>
        <hr>
        <ul>
          <li>Bienes Digitales/Intangibles</li>
          <li>Material/Tangibles</li>
        </ul>
      </div>
      <div class="col-xs-12 col-md-4 metal">
        <div class="titulo-bloque-footer">
          Locaciones
        </div>
        <hr>
        <ul>
          <li>Europe HQ</li>
          <li>Hong Kong Office</li>
          <li>Japan Center</li>
          <li>Peru Laison Office</li>
          <li>Mexico Laison Office</li>
        </ul>
      </div>
      <div class="col-xs-12 col-md-4 metal">
        <div class="titulo-bloque-footer">
          Siguenos
        </div>
        <hr>
        <ul class="redes">
          <li><a href="https://www.facebook.com/WesternLimex"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="https://www.twitter.com/WesternLimex"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="{{asset('js/slick.js')}}"></script>
  <script src="{{asset('js/slider.js')}}"></script>
  <script src="https://use.fontawesome.com/3d66408ee0.js"></script>
</body>
</html>
