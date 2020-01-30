@extends('master')

@section('scripts')
<script type="text/javascript">

    $(document).ready(function(){
        $('.item_menu').removeClass('active');
        $('#about_m').addClass('active');
    });
</script>
@stop


@section('body')
<section class="section_about_us">
  <div class="bloque_contenedor clearfix">

    <div class="wrap_historia">

      <article class="historia">
        <h1>Historia</h1>
        <p>
          El origen del nombre PINO MONTANO: Allá por los años veinte en España comienza a fraguarse
          unos movimientos intelectuales, artísticos y culturales que serán de una notable importancia
          que perdurarán hasta nuestros tiempos. Ilustres poetas como Rafaél Alverti, García Lorca,
          Gerardo Diego así como también
          dramaturgos como Max Aub, Fernando Villalón, León Felipe y la gran pasión de aquel
          entonces: Los toros.</p><br>
          <p>España se debatía en la denominada edad
          de oro del toreo y como referentes dos toreros sevillanos: Joselito y Belmonte. José
          Gómez Ortega, Joselito es el pequeño de una saga de toreros
          y el que más destaca de todos. Se decía de él que conocía tanto a los toros que parecía
          que lo había parido una vaca. Joselito, durante su importante
          carrera como torero, compra a las afueras de Sevilla una finca cortijo
          llamada PINO MONTANO. Tras su muerte en 1920 debido a una
          cornada en Talavera de la Reina, la finca pasa a manos de su cuñado el gran personaje
          Ignacio Sánchez Mejias.</p><br>
          <p>Ignacio fué un hombre polifacético; torero, dramaturgo, periodista, político, presidente del Betis futbol club, mecenas de la
          generación del 27 y un largo etc.
          Por ese motivo Sanchez Mejias es un nombre ligado a Pino Montano. Por esa finca pasaron
          los más ilustres nombres de la sociedad española del momento.
          Son famosas las interminables veladas de cante flamenco y bandas de jazz que allí se
          organizaban. También las meriendas y los actos lúdicos
          para todo aquel que quisiera visitar Pino Montano. Aristocracia y pueblo, poetas y generales,
          republicanos y monárquicos, ricos y pobres,
          todos tenían su sitio, en PINO MONTANO.
        </p>
      </article>
      <article class="imagen_historia">
        <img src="{{URL::to('public/images/balcony-1632289_1920.jpg')}}" alt="">
      </article>
    </div>

  </div>
</section>
@stop
