@extends('master')


@section('scripts')
  <script>
    $(document).ready(function() {
      // Cambiar Clase Activa
      $('.elem_acceso_rapido_cookies').click(function(){
        var link = $(this);

        $('.cookie_active').removeClass('cookie_active');
        $(link).addClass('cookie_active');
      });

      $('.nav_menu_cabecera_main ul li').removeClass('active');

      // Efecto Deslizar
      $('a[href="#volver"]').click(function(){
          // Ponemos la clase activa al comienzo otra vez
          $('.cookie_active').removeClass('cookie_active');
          $('.elem_acceso_rapido_cookies').first().addClass('cookie_active');
          // Función scroll
          var link = $(this);
          var anchor  = link.attr('href');
          $('html, body').stop().animate({
              scrollTop: jQuery(anchor).offset().top
          }, 1000);
          return false;
      });

    });
  </script>
@stop

@section('body')
  <section class="contenido_cookies" id="volver">
    <div class="bloque_contenedor">

      <section class="acceso_rapido_cookies">
        <article class="elem_acceso_rapido_cookies cookie_active">
          <div>
            <a href="#uno">¿Qué son las cookies?</a>
          </div>
        </article>
        <article class="elem_acceso_rapido_cookies">
          <div>
            <a href="#dos">¿Qué tipos de cookies utiliza esta página web?</a>
          </div>
        </article>
        <article class="elem_acceso_rapido_cookies">
          <div>
            <a href="#tres">Cookies de terceros</a>
          </div>
        </article>
        <article class="elem_acceso_rapido_cookies">
          <div>
            <a href="#cuatro">Advertencia sobre eliminar cookies</a>
          </div>
        </article>
        <article class="elem_acceso_rapido_cookies">
          <div>
            <a href="#cinco">Desactivar las cookies.</a>
          </div>
        </article>
      </section><!-- acceso_rapido_cookies -->

      <section class="descripcion_cookies">

        <article class="elem_descripcion_cookies" id="uno">
          <header>
            <h1>¿Qué son las cookies?</h1>
          </header>
          <section>
            <p>En cumplimiento con lo dispuesto en el artículo 22.2 de la Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Información y de Comercio Electrónico, esta página web le informa, en esta sección, sobre la política de recogida y tratamiento de cookies.</p>
            <br>
            <h2>¿Qué son las cookies?</h2><!-- Revisar css poner nuevo -->
            <p>Una cookie es un fichero que se descarga en su ordenador al acceder a determinadas páginas web. Las cookies permiten a una página web, entre otras cosas, almacenar y recuperar información sobre los hábitos de navegación de un usuario o de su equipo y, dependiendo de la información que contengan y de la forma en que utilice su equipo, pueden utilizarse para reconocer al usuario.</p>
          </section>
        </article>

        <article class="elem_descripcion_cookies" id="dos">
          <header>
            <h2>¿Qué tipos de cookies utiliza esta página web?</h2>
          </header>
          <section>
            <p>Esta página web utiliza los siguientes tipos de cookies:</p>
            <br>
            <p>Cookies de análisis: Son aquéllas que bien tratadas por nosotros o por terceros, nos permiten cuantificar el número de usuarios y así realizar la medición y análisis estadístico de la utilización que hacen los usuarios del servicio ofertado. Para ello se analiza su navegación en nuestra página web con el fin de mejorar la oferta de productos o servicios que le ofrecemos.</p>
            <br>
            <p>Cookies técnicas: Son aquellas que permiten al usuario la navegación a través del área restringida y la utilización de sus diferentes funciones, como por ejemplo, llevar a cambio el proceso de compra de un artículo.</p>
            <br>
            <p>Cookies de personalización: Son aquellas que permiten al usuario acceder al servicio con algunas características de carácter general predefinidas en función de una serie de criterios en el terminal del usuario como por ejemplo serian el idioma o el tipo de navegador a través del cual se conecta al servicio.</p>
            <br>
            <p>Cookies publicitarias: Son aquéllas que, bien tratadas por esta web o por terceros, permiten gestionar de la forma más eficaz posible la oferta de los espacios publicitarios que hay en la página web, adecuando el contenido del anuncio al contenido del servicio solicitado o al uso que realice de nuestra página web. Para ello podemos analizar sus hábitos de navegación en Internet y podemos mostrarle publicidad relacionada con su perfil de navegación.</p>
            <br>
            <p>Cookies de publicidad comportamental: Son aquellas que permiten la gestión, de la forma más eficaz posible, de los espacios publicitarios que, en su caso, el editor haya incluido en una página web, aplicación o plataforma desde la que presta el servicio solicitado. Este tipo de cookies almacenan información del comportamiento de los visitantes obtenida a través de la observación continuada de sus hábitos de navegación, lo que permite desarrollar un perfil específico para mostrar avisos publicitarios en función del mismo.</p>
          </section>
        </article>

        <article class="elem_descripcion_cookies" id="tres">
          <header>
            <h2>Cookies de terceros</h2>
          </header>
          <section>
            <p>Esta página web utiliza servicios de terceros para recopilar información con fines estadísticos y de uso de la web. Se usan cookies de DoubleClick para mejorar la publicidad que se incluye en el sitio web. Son utilizadas para orientar la publicidad según el contenido que es relevante para un usuario, mejorando así la calidad de experiencia en el uso del mismo.</p>
            <br>
            <p>En concreto, usamos los servicios de Google Adsense y de Google Analytics para nuestras estadísticas y publicidad. Algunas cookies son esenciales para el funcionamiento del sitio, por ejemplo el buscador incorporado.</p>
            <br>
            <p>Nuestro sitio incluye otras funcionalidades proporcionadas por terceros. Usted puede fácilmente compartir el contenido en redes sociales como Facebook, Twitter o Google +, con los botones que hemos incluido a tal efecto.</p>
          </section>
        </article>

        <article class="elem_descripcion_cookies" id="cuatro">
          <header>
            <h2>Advertencia sobre eliminar cookies</h2>
          </header>
          <section>
            <p>Usted puede eliminar y bloquear todas las cookies de este sitio, pero parte del sitio no funcionará o la calidad de la página web puede verse afectada.</p>
            <br>
            <p>Si tiene cualquier duda acerca de nuestra política de cookies, puede contactar con esta página web a través de nuestros canales de Contacto.</p>
          </section>
        </article>

        <article class="elem_descripcion_cookies" id="cuatro">
          <header>
            <h2>Advertencia sobre eliminar cookies</h2>
          </header>
          <section>
            <p>Usted puede eliminar y bloquear todas las cookies de este sitio, pero parte del sitio no funcionará o la calidad de la página web puede verse afectada.</p>
            <br>
            <p>Si tiene cualquier duda acerca de nuestra política de cookies, puede contactar con esta página web a través de nuestros canales de Contacto.</p>
          </section>
        </article>

        <article class="elem_descripcion_cookies" id="cinco">
          <header>
            <h2>Desactivar las cookies</h2>
          </header>
          <section>
            <p>Puede usted permitir, bloquear o eliminar las cookies instaladas en su equipo mediante la configuración de las opciones del navegador instalado en su ordenador.</p>
            <br>
            <p>En la mayoría de los navegadores web se ofrece la posibilidad de permitir, bloquear o eliminar las cookies instaladas en su equipo.</p>
          </section>
        </article>

        <!--<div class="btn_subir">
          <div class="cookies_volver_arriba"><a href="#volver"><i class="fa fa-angle-up"></i></a></div>
        </div>-->

      </section><!-- descripcion_cookies -->

    </div><!-- bloque_contenedor -->
  </section>
@stop
