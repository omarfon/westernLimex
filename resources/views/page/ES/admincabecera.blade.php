<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/westernLimex.css')}}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,800,900" rel="stylesheet">
  <title>Western-Limex - Principal</title>
</head>
<body>

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
        <li><a href="{{ route("home") }}">Nosotros</a></li>
        <li><a href="{{ route("home") }}">Servicios</a></li>
        <li><a href="{{ route("home") }}">Noticias</a></li>
        <li><a href="{{ route("home") }}">Locaciones</a></li>
        <li><a href="{{ route("home") }}">Contactenos</a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

@yield('content')



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/3d66408ee0.js"></script>
</body>
</html>
