@extends('master')

@section('scripts')
  <script src="{{ URL::to('public/js/okzoom.min.js') }}" type="text/javascript"></script>
  <script type="text/javascript">

      $(document).ready(function(){
          $('.item_menu').removeClass('active');
          $('#home_m').addClass('active');
      });

      $(function(){
        if( ($(window).width() > 1200) ){
          $('.zoom_in').okzoom({
            width: 200,
            height: 200,
            round: true,
            background: "#fff",
            shadow: "0 0 5px rgba(198,138,62,0.5)",
            border: "2px solid rgba(198,138,62,0.5)"
          });
        }
      });

  </script>
@stop

@section('body')
<!-- ******************* -->
  <!-- IMAGEN PRESENTACIÓN -->
  <!-- ******************* -->

  <section class="presentacion_main float_left">
    <article class="foto_presentacion_main">

      <img src="{{ URL::to('public/images/foto2.jpg') }}" alt="foto2">

      <div class="transparencia_foto_presentacion_main">
        <div class="texto_foto_presentacion_main">
          <div class="pino_montano_texto_foto_presentacion_main float_left">
            <h1>PINO MONTANO</h1>
          </div><!-- pino_montano_texto_foto_presentacion_main -->
          <div class="sub_pino_montano_texto_foto_presentacion_main float_left">
            <h2>TAURO<span class="color_art">ART</span>DESIGN</h2>
          </div><!-- sub_pino_montano_texto_foto_presentacion_main -->
        </div><!-- texto_foto_presentacion_main -->
      </div><!-- transparencia_foto_presentacion_main -->

    </article><!-- foto_presentacion_main -->
  </section><!-- presentacion_main -->

  <!-- ********* -->
  <!-- CONTENIDO -->
  <!-- ********* -->

<main class="contenido_web_main float_left">
  <section class="contenido_web_main_superpuesto float_left">

    <article class="carta_presentacion_main">
      <div class="bloque_contenedor">
        <div class="centrar_carta_presentacion_main">

          <div class="imagen_carta_presentacion_main float_right">
            <img src="{{ URL::to('public/images/foto_derecha.jpg') }}" alt="fotoderecha">
            <div class="boton_mas_informacion">
              <a href="#">{{$s7}}</a>
            </div><!-- boton_mas_informacion -->
          </div><!-- imagen_carta_presentacion_main -->

          <div class="texto_carta_presentacion_main float_right">
            <h2>PINO MONTANO</h2>
            <h3>TAURO ART DESIGN</h3>
            <p>{{$s4}}</p>
            <p>{{$s5}}</p>
            <p>{{$s6}}</p>
          </div><!-- texto_carta_presentacion_main -->

        </div><!-- centrar_carta_presentacion_main -->
      </div><!-- bloque_contenedor -->
    </article><!-- carta_presentacion_main -->

    @foreach($obras as $key=>$o)
      <article class="carta_presentacion_productos no_box_sizing">
        <div class="bloque_contenedor">
          <div class="centrar_carta_presentacion_productos">

            <div class="imagen_carta_presentacion_productos float_left">
              <img class="zoom_in" src="{{ URL::to('public/images', $o->imagen) }}" data-zoom-image="images/_MG_3117.jpg" alt="imagen">
              <!--<div class="solapa_imagenes"><span class="fa fa-search-plus"></span></div> solapa_imagenes -->
            </div><!-- imagen_carta_presentacion_productos -->

            <div class="bocadillo_zoom">
              <div class="bocadillo_flecha_abajo"><span class="fa fa-caret-down"></span></div>
              <p>Deslice el dedo por la imagen para hacer zoom</p>
            </div><!-- bocadillo_zoom -->

            <div class="texto_carta_presentacion_productos float_left">
              <h2>{{$o->titulo}}</h2>
              <h3>{{$descripciones[$key]->descripcion}}</h3>
              @if(isset($infos[$key]->resumen1))
                <p>{{$infos[$key]->resumen1}}</p>
              @endif
              @if(isset($infos[$key]->resumen2))
                <p>{{$infos[$key]->resumen2}}</p>
              @endif
              @if(isset($infos[$key]->resumen3))
                <p>{{$infos[$key]->resumen3}}</p>
              @endif
              @if(isset($infos[$key]->resumen4))
                <p>{{$infos[$key]->resumen4}}</p>
              @endif
              <div class="boton_mas_informacion_2"><a href="{{ URL::to('work', $o->id) }}">{{$s7}}</a></div>
            </div><!-- texto_carta_presentacion_productos -->

          </div><!-- centrar_carta_presentacion_productos -->
        </div><!-- bloque_contenedor -->
      </article><!-- carta_presentacion_productos -->
    @endforeach

  </section><!-- contenido_web_main_superpuesto -->
</main><!-- contenido_web_main -->
@stop
