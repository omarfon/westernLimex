@extends('page.es.cabeza')

@section('content')
	<div class="banner">
  <div class="row">
  </div>
</div>
<div class="buscador"></div>
  <ul class="nav nav-pills nav-justified">
    <li class="active"><a href="#home" data-toggle="tab">Artículos Digitales & Intangibles
</a></li>
    <li><a href="#profile" data-toggle="tab">Artículos Materiales & Tangibles</a></li>
  </ul>

  <div class="tab-content">
    <div role="tabpanel" class="tab-pane  fade in active" id="home">
      <p class="articulos">
        Sin las formalidades del importe y exporte, ofrecer productos digitales en mercados extranjeros puede ser facil. ¿Sin embargo, puede usted mejorar sus ventas? ¡Sí puede! Si usted solamente ofrece su producto en un idioma y no lo adapta antes de ofrecerlo en el exterior, puede que esté perdiendo millones de clientes potenciales a causa de incompatibilidad. La adaptación de su producto al nuevo mercado es importantísimo para aumentar su rentabilidad. Nosotros en Western Limex localizamos sus productos, los optimizamos para el nuevo mercado y analizamos las ventas para maximizar sus ganancias.
      </p>
      <div class="row">
        <div class="col-xs-12 col-md-8 azul">
          <div class="titulo-blanco">
            Nuestro servicio completo de A a Z incluye:
          </div>
          <ul class="lista-servicios">
            <li>Traducciones y localización</li>
            <li>Análisis del Mercado e Inversiones</li>
            <li>Estimación de Precios y Costos</li>
            <li>Bosquejo de Contratos de Licencia</li>
            <li>Investigación sobre Fabricantes y Agencias</li>
            <li>Establecimiento de Contactos de Negocios</li>
          </ul>
        </div>
        <div class="col-xs-0 col-md-4"></div>
      </div>
      <div class="contenedor-iconos container">
        <div class="row">
          <div class="col-xs-4 col-md-3 centro">
            <div class="caja">
                <div class="prueba">Software para equipos</div>
              <img src="{{asset('img/uno.png')}}" alt="">
            </div>
          </div>

          <div class="col-xs-4 col-md-3 centro">
            <div class="caja">
                <div class="prueba">clicks de video</div>
              <img src="{{asset('img/dos.png')}}" alt="">
            </div>
          </div>

          <div class="col-xs-4 col-md-3 centro">
            <div class="caja">
                <div class="prueba">Licencias</div>
              <img src="{{asset('img/cuatro.png')}}" alt="">
            </div>
          </div>

          <div class="col-xs-4 col-md-3 centro">
            <div class="caja">
                <div class="prueba">Contenido creativo</div>
              <img src="{{asset('img/cinco.png')}}" alt="">
            </div>
          </div>

          <div class="col-xs-4 col-md-3 centro">
            <div class="caja">
                <div class="prueba">Aplicaciones android</div>
              <img src="{{asset('img/seis.png')}}" alt="">
            </div>
          </div>

          <div class="col-xs-4 col-md-3 centro">
            <div class="caja">
                <div class="prueba">E-book / e-revistas</div>
              <img src="{{asset('img/siete.png')}}" alt="">
            </div>
          </div>

          <div class="col-xs-4 col-md-3 centro">
            <div class="caja">
                <div class="prueba">saaS</div>
              <img src="{{asset('img/ocho.png')}}" alt="">
            </div>
          </div>

          <div class="col-xs-4 col-md-3 centro">
            <div class="caja">
                <div class="prueba">Base de datos</div>
              <img src="{{asset('img/diez.png')}}" alt="">
            </div>
          </div>

          <div class="col-xs-4 col-md-3 centro">
            <div class="caja">
                <div class="prueba">Musica y sonidos</div>
              <img src="{{asset('img/once.png')}}" alt="">
            </div>
          </div>

          <div class="col-xs-4 col-md-3 centro">
            <div class="caja">
                <div class="prueba">Medios de comunicacion</div>
              <img src="{{asset('img/doce.png')}}" alt="">
            </div>
          </div>

          <div class="col-xs-4 col-md-3 centro">
            <div class="caja">
                <div class="prueba">Imagenes y fotografía</div>
              <img src="{{asset('img/trece.png')}}" alt="">
            </div>
          </div>

          <div class="col-xs-4 col-md-3 centro">
            <div class="caja">
                <div class="prueba">Sitios web</div>
              <img src="{{asset('img/catorce.png')}}" alt="">
            </div>
          </div>
        </div>
        </div>
    </div>
    <div role="tabpanel" class="tab-pane fade " id="profile">
      <p class="articulos">
        Importar y exportar productos materiales no es tan fácil como parece. Una vez el producto sea ofrecido en el extranjero ¿qué tan bien se venderá? ¿regresará la gente por más?
        Navegar el laberinto de reglas y tarifas de un país extranjero con la incertidumbre si el producto se venderá o no puede ser desalentador. Western Limex se encarga de estas dos preocupaciones. Después de haber evaluado la atractividad y rentabilidad de su producto nosotros nos encargamos de las formalidades por y para usted.
      </p>
        <div class="row">
          <div class="col-xs-4 col-md-3 centro">
            <div class="caja">
                <div class="prueba">Juguetes</div>
              <img src="{{asset('img/quince.png')}}" alt="">
            </div>
          </div>

          <div class="col-xs-4 col-md-3 centro">
            <div class="caja">
                <div class="prueba">Electronica de consumo</div>
              <img src="{{asset('img/dieciseis.png')}}" alt="">
            </div>
          </div>

          <div class="col-xs-4 col-md-3 centro">
            <div class="caja">
                <div class="prueba">Ropa</div>
              <img src="{{asset('img/diecisiete.png')}}" alt="">
            </div>
          </div>

          <div class="col-xs-4 col-md-3 centro">
            <div class="caja">
                <div class="prueba">Cosmeticos</div>
              <img src="{{asset('img/dieciocho.png')}}" alt="">
            </div>
          </div>

          <div class="col-xs-4 col-md-3 centro">
            <div class="caja">
                <div class="prueba">Juegos</div>
              <img src="{{asset('img/diecinueve.png')}}" alt="">
            </div>
          </div>

          <div class="col-xs-4 col-md-3 centro">
            <div class="caja">
                <div class="prueba">Artefactos electricos</div>
              <img src="{{asset('img/veinte.png')}}" alt="">
            </div>
          </div>

          <div class="col-xs-4 col-md-3 centro">
            <div class="caja">
                <div class="prueba">Libros</div>
              <img src="{{asset('img/veintiuno.png')}}" alt="">
            </div>
          </div>

          <div class="col-xs-4 col-md-3 centro">
            <div class="caja">
                <div class="prueba">Muebles</div>
              <img src="{{asset('img/veintidos.png')}}" alt="">
            </div>
          </div>

          <div class="col-xs-4 col-md-3 centro">
            <div class="caja">
                <div class="prueba">Maquinaria pesafa</div>
              <img src="{{asset('img/veintitres.png')}}" alt="">
            </div>
          </div>

          <div class="col-xs-4 col-md-3 centro">
            <div class="caja">
                <div class="prueba">Recuerdos</div>
              <img src="{{asset('img/veinticuatro.png')}}" alt="">
            </div>
          </div>

          <div class="col-xs-4 col-md-3 centro">
            <div class="caja">
                <div class="prueba">Novedades</div>
              <img src="{{asset('img/veinticinco.png')}}" alt="">
            </div>
          </div>

          <div class="col-xs-4 col-md-3 centro">
            <div class="caja">
                <div class="prueba">Artesanias</div>
              <img src="{{asset('img/veintiseis.png')}}" alt="">
            </div>
          </div>
        </div>
  </div>
@endsection