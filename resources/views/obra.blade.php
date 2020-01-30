@extends('master')

@section('scripts')
<script src="{{ URL::to('public/js/okzoom.min.js') }}" type="text/javascript"></script>

  <script type="text/javascript">

      $(document).ready(function(){
          $('.item_menu').removeClass('active');
          $('#obras_m').addClass('active');
      });

      $(function(){
        if( ($(window).width() > 1200) ){
          $('.zoom_in').okzoom({
            width: 300,
            height: 300,
            round: true,
            scaleWidth: 2000,
            background: "#fff",
            shadow: "0 0 5px rgba(198,138,62,0.5)",
            border: "2px solid rgba(198,138,62,0.5)"
          });
        }
      });

  </script>
@stop

@section('body')

  <section class="contenido_proyectos_aux">
    <div class="bloque_contenedor clearfix">
      <article class="img_proyecto_aux">
          <img class="zoom_in" src="{{ URL::to('public/images/obras', $o->imagen) }}" data-zoom-image="{{ URL::to('images/obras', $o->imagen) }}" alt="">
      </article>
      @foreach($imagenes as $img)
          <article class="img_proyecto_aux">
              <img class="zoom_in" src="{{ URL::to('public/images/obras', $img->url) }}" data-zoom-image="{{ URL::to('images/obras', $img->url) }}" alt="">
          </article>
      @endforeach
    </div>
  </section><!-- contenido_proyectos -->

  <section class="contenido_informacion_producto">
    <article class="informacion_producto">
      <div class="bloque_contenedor clearfix">
        <section class="titulo_producto float_left">
          @if(isset($o))
            <h1>{{ $o->titulo }}</h1>
          @endif
          @if(isset($desc))
            <h2>{{ $desc->descripcion }}</h2>
          @endif
          @if(isset($info))
        </section>
        <section class="producto float_left">
          <div class="info_informacion_producto float_left">
            <p>{{ $info->resumen1 }}</p>
            <p>{{ $info->resumen2 }}</p>
          </div><!-- info_informacion_producto -->
          <div class="info_informacion_producto float_left">
            <p>{{ $info->resumen3 }}</p>
            <p>{{ $info->resumen4 }}</p>
          </div><!-- info_informacion_producto -->
        </section><!-- producto -->
      </div><!-- bloque_contenedor -->
    </article><!-- informacion_producto -->
    @endif


    <article class="informacion_general">
      <div class="bloque_contenedor clearfix">

        <section class="info_piezas float_left">
          <article class="frase_celebre float_left">
            <div class="titulo_frase_celebre">
              <p>{{$s15}}</p><p><i class="fa fa-quote-right"></i></p>
            </div><!-- titulo_frase_celebre -->
            <div class="autor_frase_celebre">
              <p>José Ortega y Gasset</p>
            </div><!-- autor_frase_celebre -->
          </article><!-- frase_celebre -->

          <article class="complementos_producto float_left">
            <div class="icono_complementos float_left">
              <span class="fa fa-cubes"></span>
            </div>
            <div class="info_icono_complementos float_left">
              <div class="titulo_info_icono_complementos">
                <a href="#">{{$s18}}</a>
              </div>
              <div class="texto_info_icono_complementos">
                <p> {{$s16}}</p>
              </div>
            </div>
          </article><!-- complementos_producto -->

          <article class="certificado_producto float_left">
            <div class="icono_certificado float_left">
              <span class="fa fa-certificate"></span>
            </div>
            <div class="info_icono_certificado float_left">
              <div class="titulo_info_icono_complementos">
                <a href="#">{{$s19}}</a>
              </div>
              <div class="texto_info_icono_certificado">
                <p> {{$s17}}</p>
              </div>
            </div>
          </article><!-- certificado_producto -->
        </section><!-- info_piezas -->

      </div><!-- bloque_contenedor -->
    </article><!-- informacion_general -->
  </section><!-- contenido_informacion_producto -->
@stop
