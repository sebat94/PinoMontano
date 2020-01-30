@extends('master')

@section('scripts')
  <script type="text/javascript">
      $(document).ready(function(){
          $('#home_m').removeClass('active');
          $('#obras_m').addClass('active');
      });
  </script>
@stop

@section('body')

  <section class="grid_galeria">

    <div class="fila_grid_galeria">
      <div class="bloque_contenedor_galeria clearfix">

        @foreach($obras as $key=>$o)
            @if($key % 4 == 0 && $key != 0)
              <div class="fila_grid_galeria">
                <div class="bloque_contenedor_galeria clearfix">
            @endif
            <article class="carta_presentacion_producto transicion_1 float_left">
              <a href="{{ URL::to('work', $o->id) }}">
                <section class="imagen_carta_presentacion_producto">
                  <img src="{{ URL::to('public/images/obras', $o->imagen) }}" alt="">
                </section>
                <section class="texto_carta_presentacion_producto">
                  <h2>{{ $o->titulo }}</h2>
                  @foreach($descripciones as $d)
                      @if($d->obra == $o->id)
                          <h3>{{ $d->descripcion }}</h3>
                          @break
                      @endif
                  @endforeach
                </section><!-- texto_carta_presentacion_producto -->
              </a>
            </article><!-- carta_presentacion_producto -->
            @if(($key+1) % 4 == 0)
                </div><!-- bloque_contenedor_galeria -->
              </div><!-- fila_grid_galeria -->
            @endif

        @endforeach

      @if(count($obras) % 4 != 0)
          </div><!-- bloque_contenedor_galeria -->
        </div><!-- fila_grid_galeria -->
      @endif
  </section><!-- grid_galeria -->

@stop
