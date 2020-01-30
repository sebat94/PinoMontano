<!DOCTYPE html>
<html lang="{{$lang}}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="{{$s23}}">
        <title>{{$s22}}</title>
        <link rel="stylesheet" media="screen" href="{{URL::to('public/css/general.css')}}">
        <link rel="stylesheet" media="screen" href="{{URL::to('public/css/fonts.css')}}">
        <link rel="stylesheet" media="screen" href="{{URL::to('public/css/font-awesome.min.css')}}">
        <link rel="shortcut icon" type="image/png" href="{{URL::to('public/images/favicon.png')}}">
        @yield('styles')
        <script src="{{URL::to('public/js/jquery-3.1.0.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::to('public/js/web.js')}}" type="text/javascript"></script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-90108168-1', 'auto');
          ga('send', 'pageview');
        </script>
        <script type="text/javascript">

            $(document).ready(function(e){
                $('.alert_error').css('display', 'none');
                $('.alert_error_contacto').css('display', 'none');

                // Control formulario registro
                $('#form_registro').submit(function(e){
                    e.preventDefault();

                    if(noHayErrorFormularioRegistro()){
                        regAJAX();
                        return true;
                    } else {
                        return false;
                    }
                });

                $('#form_login').submit(function(e){
                    e.preventDefault();
                    if(noHayErrorFormularioLogin()){
                        logAJAX();
                        return true;
                    } else {
                        return false;
                    }
                });

                $('#form_contacto').submit(function(e){
                    e.preventDefault();
                    if(noHayErrorFormularioContacto()){
                        menAJAX();
                        return true;
                    } else {
                        return false;
                    }
                });

                function printError(mensaje){
                    $('.alert_error').css('display', 'block');
                    $('.margin_alert_error').html("<p>" + mensaje + "</p>");
                };

                function printErrorContacto(mensaje){
                    $('.alert_error_contacto').css('display', 'block');
                    $('.margin_alert_error_contacto').html("<p>" + mensaje + "</p>");
                };

                // Funciones de comprobación
                function checkEmail(){
                    if($('#email').val() == "" || $('#email').val() == null){
                        printError("El email no puede estar vacío");
                        return false;
                    }
                    return true;
                }

                function checkNombre(){
                    if($('#nombre').val() == "" || $('#nombre').val() == null){
                        printError("El nombre no puede estar vacío");
                        return false;
                    }
                    return true;
                };

                function checkApellidos(){
                    if($('#apellidos').val() == "" || $('#apellidos').val() == null){
                        printError("El apellido no puede estar vacío");
                        return false;
                    }
                    return true;
                };

                function checkContrasenya(){
                    if($('#contrasenya').val() == "" || $('#contrasenya').val() == null){
                        printError("La contraseña no puede estar vacía");
                        return false;
                    }
                    return true;
                };

                function checkReContrasenya(){
                    if($('#re-contrasenya').val() == "" || $('#re-contrasenya').val() == null
                      || $('#contrasenya').val() != $('#re-contrasenya').val()){
                        printError("Las contraseñas no coinciden");
                        return false;
                    }
                    return true;
                };

                function noHayErrorFormularioRegistro(){
                    if(!checkEmail() || !checkNombre() || !checkApellidos() || !checkContrasenya() || !checkReContrasenya()){
                          return false;
                    } else { return true; }
                };

                function checkEmailLogin(){
                    if($('#email_login').val() == "" || $('#email_login').val() == null){
                        printError("El email no puede estar vacío");
                        return false;
                    }
                    return true;
                };

                function checkContrasenyaLogin(){
                    if($('#contrasenya_login').val() == "" || $('#contrasenya_login').val() == null){
                        printError("La contraseña no puede estar vacía");
                        return false;
                    }
                    return true;
                };

                function noHayErrorFormularioLogin(){
                    if(!checkEmailLogin() || !checkContrasenyaLogin()){
                        return false;
                    } else { return true; }
                }

                function checkNombreContacto(){
                    if($('#nombre_contacto').val() == null || $('#nombre_contacto').val() == ""){
                        printErrorContacto("El nombre no puede estar vacío");
                        return false;
                    } else { return true; }
                }

                function checkEmailContacto(){
                    if($('#email_contacto').val() == null || $('#email_contacto').val() == ""){
                        printErrorContacto("El email no puede estar vacío");
                        return false;
                    } else { return true; }
                }

                function checkAsuntoContacto(){
                    if($('#asunto').val() == null || $('#asunto').val() == ""){
                        printErrorContacto("El asunto no puede estar vacío");
                        return false;
                    } else { return true; }
                }

                function checkMensajeContacto(){
                    if($('#mensaje').val() == null || $('#mensaje').val() == ""){
                        printErrorContacto("El mensaje no puede estar vacío");
                        return false;
                    } else { return true; }
                }

                function noHayErrorFormularioContacto(){
                    if(!checkNombreContacto() || !checkEmailContacto() || !checkAsuntoContacto() || !checkMensajeContacto()){
                        return false;
                    } else { return true; }
                }

                // Peticiones POST AJAX
                function regAJAX(){
                    /*$.ajax({
                        url: '',
                        type: 'POST',
                        data: $('#form_registro').serialize(),
                        success: function(results){
                            if(results.length > 0){
                                printError(results);
                            } else {
                                $('.alert_error').css('display', 'none');
                                window.location = "/";
                            }
                        }
                    });*/
                };

                function logAJAX(){
                    /*$.ajax({
                        url: '',
                        type: 'POST',
                        data: $('#form_login').serialize(),
                        success: function(results){
                            if(results.length > 0){
                                printError(results);
                            } else {
                                $('.alert_error').css('display', 'none');
                                window.location = "/";
                            }
                        }
                    });*/
                };

                function menAJAX(){
                    $.ajax({
                        url: "{{URL::to('', 'contact')}}",
                        type: 'POST',
                        data: $('#form_contacto').serialize(),
                        success: function(results){
                            $('.alert_error_contacto').css('display', 'block');
                            $('.margin_alert_error_contacto').html('<p>' + results + '</p>');
                        }
                    });
                }

                $('#btn_accept').click(function(){
                    $.ajax({
                      url: "{{ URL::to('/acceptCookies') }}",
                      method: 'POST',
                      data: $('#form_acceptCookies').serialize()
                    })
                });
            });

        </script>
    </head>
    <body>

      <header class="cabecera_main">
        <div class="bloque_contenedor">

          <div class="logotipo_cabecera_main float_left">
            <a href="{{URL::to('/')}}">
              <div class="logotipo_parte_arriba float_left">
                <p>PINO MONTANO</p>
              </div>
              <div class="logotipo_parte_abajo float_left">
                <p>TAURO<span>ART</span>DESIGN</p>
              </div>
            </a>
          </div><!-- logotipo_cabecera_main -->


          <div class="login_registro_cabecera_main float_right">
              <div class="boton_login float_left">
                <p>Login</p>
                <div class="pophover"><i class="fa fa-caret-up"></i>
                  <div class="engranaje"><i class="fa fa-cog fa-spin fa-fw"></i></div>
                  <div class="txt_engranaje"><em>En construcción.</em></div>
                </div>
              </div><!-- login_cabecera_main -->
              <div class="boton_registro float_left">
                <p>{{$s3}}</p>
                <div class="pophover"><i class="fa fa-caret-up"></i>
                  <div class="engranaje"><i class="fa fa-cog fa-spin fa-fw"></i></div>
                  <div class="txt_engranaje"><em>En construcción.</em></div>
                </div>
              </div><!-- registro_cabecera_main -->
          </div><!-- login_registro_cabecera_main -->


          <div class="hamburguesa_menu_cabecera_main">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="menu_cabecera_main transicion_1 clearfix">
            <nav class="nav_menu_cabecera_main">
              <ul>
                <li id="home_m"><a href="{{URL::to('/')}}">HOME</a></li>
                <li id="comprar_m"><span>{{$s0}}</span>
                  <div class="pophover"><i class="fa fa-caret-up"></i>
                                        <span class="fa fa-caret-left"></span>
                    <div class="engranaje"><i class="fa fa-cog fa-spin fa-fw"></i></div>
                    <div class="txt_engranaje"><em>En construcción.</em></div>
                  </div>
                </li>
                <li id="obras_m"><a href="{{URL::to('/work')}}">{{$s1}}</a></li>
                <li id="about_m"><a href="{{URL::to('/about')}}">Historia</a>
                  <div class="pophover"><i class="fa fa-caret-up"></i>
                                        <span class="fa fa-caret-left"></span>
                    <div class="engranaje"><i class="fa fa-cog fa-spin fa-fw"></i></div>
                    <div class="txt_engranaje"><em>En construcción.</em></div>
                  </div>
                </li>
                <li class="boton_contacto"><span>{{$s2}}</span></li>
              </ul>
            </nav><!-- nav_menu_cabecera_main -->
          </div><!-- menu_cabecera_main -->
        </div><!-- bloque_contenedor -->
      </header><!-- cabecera_main -->


      <!-- ************** -->
      <!-- MODAL BUSCADOR -->
      <!-- ************** -->

      <div class="buscador_cabecera">
        <div class="mg_buscador">
          <form action="" method="">
            <div class="input_buscador">
              <input type="text" name="" placeholder="Buscar...">
              <div class="submit_buscador">
                <i class="fa fa-search"></i>
                <input type="submit" value="">
              </div>
            </div><!-- input_buscador -->
          </form>
        </div>
      </div><!-- buscador_cabecera -->


      <!-- *********** -->
      <!-- MODAL LOGIN -->
      <!-- *********** -->
          <div class="bg_modal_login">

            <div class="close_modal_login">
              <span class="fa fa-close"></span>
            </div><!-- close_modal_login -->

            <div class="contenedor_modal_login">
              <div class="margen_modal_login">
                <div class="contenido_modal_login">

                  <div class="alert_error">
                    <div class="contenido_alert_error">
                      <div class="margin_alert_error">

                      </div>
                    </div>
                  </div><!-- alert_error -->

                  <!-- LOGIN MODAL -->
                  <div class="recuadro_login float_right">
                    <div class="carta_recuadro_login">

                      <div class="close_modal_login_2">
                        <span class="fa fa-close"></span>
                      </div><!-- close_modal_login -->

                      <div class="titulo_carta_recuadro_login">
                        <p>Login</p>
                      </div>

                      <div class="inputs_carta_recuadro_login">
                        <form action="/login" id="form_login" method="post">
                            <div class="input_nombre_login float_left">
                                <span class="fa fa-at"></span>
                                    <input type="text" tabindex="1" autofocus placeholder="Email" name="email" value="" id="email_login" >

                            </div>
                            <div class="input_pass_usuario float_left">
                                <span class="fa fa-lock"></span>

                                    <input type="password" tabindex="2" placeholder="Contraseña" name="contrasenya" value="" id="contrasenya_login">

                            </div>
                            <div class="password_olvidada_y_recuerdame clear">
                              <div class="password_olvidada float_left">
                                <p><a href="#">Recuperar Contraseña</a></p>
                              </div>
                              <div class="recuerdame float_right">
                                <div class="checkbox_login">
                                	<input type="checkbox" id="check_id_1">
                                	<label for="check_id_1">Recordar</label>
                                </div>
                              </div>
                            </div>
                            <div class="boton_logearse float_left">
                              <input type="submit" tabindex="3" value="Login">
                            </div>
                            <div class="registrate_ya ir_a_registro float_left">
                              <a href="#">Regístrate ahora</a>
                            </div>
                        </form>

                      </div><!-- inputs_carta_recuadro_login -->

                    </div><!-- carta_recuadro_login -->
                  </div><!-- recuadro_login -->

                  <!-- TEXTO MODAL -->
                  <div class="recuadro_texto_login float_right">
                    <div class="contenido_recuadro_texto">
                      <div class="texto_recuadro_texto float_left">
                        <p>Pino Montano</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p>Tauro<span class="color_art">Art</span>Design</p>
                      </div>
                      <div class="boton_recuadro_texto ir_a_registro float_left">
                        <p>{{$s3}}</p>
                      </div>
                    </div>
                  </div><!-- recuadro_texto -->

                </div><!-- contenido_modal_login -->
              </div><!-- margen_modal_login -->
            </div><!-- contenedor_modal_login -->
          </div><!-- bg_modal_login -->

          <!-- ************** -->
          <!-- MODAL REGISTRO -->
          <!-- ************** -->

          <div class="bg_modal_registro transicion_1">

            <div class="close_modal_registro">
              <span class="fa fa-close"></span>
            </div>

            <div class="contenedor_modal_registro">
              <div class="margen_modal_login">
                <div class="contenido_modal_login">

                <div class="alert_error">
                  <div class="contenido_alert_error">
                    <div class="margin_alert_error">

                    </div>
                  </div>
                </div><!-- alert_error -->

                  <!-- LOGIN MODAL -->
                  <div class="recuadro_login float_right">
                    <div class="carta_recuadro_login">

                      <div class="close_modal_registro_2">
                        <span class="fa fa-close"></span>
                      </div><!-- close_modal_login -->

                      <div class="titulo_carta_recuadro_login">
                        <p>Registro</p>
                      </div>

                      <div class="inputs_carta_recuadro_login">

                        <form id="form_registro" action="/registro" method="post">

                            <div class="input_nombre_login float_left">
                                <span class="fa fa-at"></span>
                                    <input type="text" tabindex="1" autofocus placeholder="Email" name="email" value="" id="email">
                            </div>
                            <div class="input_nombre_apellidos float_left">
                                <div class="input_nombre_usuario float_left">
                                    <span class="fa fa-user"></span>

                                        <input type="text" tabindex="2" placeholder="Nombre" name="nombre" value="" id="nombre">
                                </div>
                                <div class="input_apellidos_usuario float_left">
                                    <span class="fa fa-user"></span>

                                        <input type="text" tabindex="3" placeholder="Apellidos" name="apellidos" value="" id="apellidos" >
                                </div>
                            </div>
                            <div class="input_pass_usuario float_left">
                                <span class="fa fa-lock"></span>
                                    <input type="password" tabindex="4" placeholder="Contraseña" name="contrasenya" value="" id="contrasenya" >
                            </div>
                            <div class="input_pass_usuario float_left">
                              <span class="fa fa-lock"></span>
                              <input type="password" tabindex="5" placeholder="Repetir Contraseña" id="re-contrasenya">
                            </div>
                            <div class="boton_logearse float_left">
                              <input type="submit" tabindex="6" value="Registrarse" id="btn_registro">
                            </div>
                            <div class="logueate_ya ir_a_login float_left">
                              <a href="#">¿Ya tienes una cuenta?</a>
                            </div>
                        </form>
                      </div><!-- inputs_carta_recuadro_login -->

                    </div><!-- carta_recuadro_login -->
                  </div><!-- recuadro_login -->

                  <div class="recuadro_texto_registro float_right">
                    <div class="contenido_recuadro_texto">
                      <div class="texto_recuadro_texto float_left">
                        <p>Pino Montano</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p>Tauro<span class="color_art">Art</span>Design</p>
                      </div>
                      <div class="boton_recuadro_texto ir_a_login float_left">
                        <p>Accede Ahora</p>
                      </div>
                    </div>
                  </div><!-- recuadro_texto -->

                </div><!-- contenido_modal_login -->
              </div><!-- margen_modal_registro -->
            </div><!-- contenedor_modal_registro -->
          </div><!-- bg_modal_registro -->

      <!-- ************** -->
      <!-- MODAL CONTACTO -->
      <!-- ************** -->

      <div class="bg_modal_contacto">

        <div class="close_modal_contacto">
          <span class="fa fa-close"></span>
        </div><!-- close_modal_login -->

          <div class="contenedor_modal_contacto">
            <div class="margen_modal_contacto">
              <!-- **************************** -->
                <div class="contenido_contacto">

                  <div class="alert_error_contacto">
                    <div class="contenido_alert_error_contacto">
                      <div class="margin_alert_error_contacto">

                      </div>
                    </div>
                  </div><!-- alert_error -->

                  <div class="formulario_contenido_contacto float_left">

                    <div class="close_modal_contacto_2">
                      <span class="fa fa-close"></span>
                    </div><!-- close_modal_login -->

                    <div class="ajustar_formulario_contenido_contacto">
                      <h2>CONTACTO</h2>
                      <form action="/contacto" id="form_contacto" name="form_contacto" method="post">
                        <div class="campo_input_nombre float_left">
                              <input name="nombre" id="nombre_contacto" type="text" tabindex="1" autofocus placeholder="Nombre" class="focus_in">
                        </div><!-- campo_input_nombre -->
                        <div class="campo_input_email float_left">
                              <input name="email" id="email_contacto" type="text" tabindex="2" placeholder="Email" class="focus_in" >
                        </div><!-- campo_input_email -->
                        <div class="campo_input_obra float_left">
                               <input name="asunto" id="asunto" type="text" tabindex="3" placeholder="Asunto" class="focus_in" >
                        </div><!-- campo_input_obra -->
                        <div class="campo_input_mensaje float_left">
                          <textarea name="mensaje" id="mensaje" tabindex="4" maxlength="540" class="focus_in" placeholder="Mensaje"></textarea>
                        </div><!-- campo_input_mensaje -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="boton_contenido_contacto float_right clear">
                          <input type="submit" tabindex="5" value="Enviar" class="focus_in">
                        </div><!-- boton_contenido_contacto -->
                      </form>
                    </div><!-- ajustar_formulario_contenido_contacto -->
                  </div><!-- formulario_contenido_contacto -->

                  <div class="informacion_contenido_contacto float_left">
                    <div class="direccion_contacto">
                      <div class="titulo_direccion_contacto">
                        <h2>Dirección</h2>
                      </div><!-- titulo_direccion_contacto -->
                      <div class="contenido_direccion_contacto">
                        <p>Alicante, España</p>
                      </div><!-- contenido_direccion_contacto -->
                    </div><!-- direccion_contacto -->

                    <div class="telefono_contacto">
                      <div class="titulo_telefono_contacto">
                        <h2>Teléfono</h2>
                      </div><!-- titulo_telefono_contacto -->
                      <div class="contenido_telefono_contacto">
                        <p>+34 677 848 156</p>
                        <p>+34 676 681 420</p>
                      </div><!-- contenido_telefono_contacto -->
                    </div><!-- telefono_contacto -->

                    <div class="email_contacto">
                      <div class="titulo_email_contacto">
                        <h2>E-Mail</h2>
                      </div><!-- titulo_email_contacto -->
                      <div class="contenido_email_contacto">
                        <p>info<i class="fa fa-at" aria-hidden="true"></i>pinomontano.es</p>
                      </div><!-- contenido_email_contacto -->
                    </div><!-- email_contacto -->
                  </div><!-- informacion_contenido_contacto -->

                </div><!-- contenido_contacto -->


              <!-- **************************** -->
            </div><!-- margen_modal_contacto -->
          </div><!-- contenedor_modal_contacto -->
        </div><!-- bg_modal_contacto -->
        <!-- final MODAL CONTACTO -->

        @if (Cookie::get('acceptCookies') == null)
          <div class="cookies">
            <span>{{$s10}} <a href="{{ URL::to('/legal') }}">link</a>. <button class="close_cookies" id="btn_accept">{{$s11}}</button></span>
          </div><!-- cookies -->
        @endif



        @yield('body')

        @yield('scripts')

        <footer class="pie_web unselectable" id="pie_web">
          <div class="bloque_contenedor_pie">
            <div class="desplegar_pie_web"><p>{{$s8}} <span class="fa fa-caret-up"></span></p></div>
          </div>

          <div class="bloque_contenedor_pie">
            <div class="pie_web_1 float_left">
              <div class="txt_pie_web_1 float_left">
                <span>Pino Montano</span>
              </div>
              <div class="lista_pie_web_1 float_left">
                <div class="contactanos">
                  <div class="tlf_contactanos float_left">
                    <p><i class="fa fa-phone"></i> +34 677 848 156</p>
                  </div>
                  <div class="correo_contactanos float_left">
                    <p><i class="fa fa-envelope-o"></i> info<i class="fa fa-at"></i>pinomontano.es</p>
                  </div>
                  <div class="localizacion_contactanos float_left">
                    <p><i class="fa fa-map-marker"></i> Alicante, España</p>
                  </div>
                </div>
              </div>
            </div><!-- pie_web_1 -->

            <div class="pie_web_2 float_left">
              <div class="txt_pie_web_2 float_left">
                <span>{{$s9}}</span>
              </div>
              <div class="lista_pie_web_2 float_left">
                <ul>
                  <li><a href="#">Acerca de</a></li>
                  <li><a href="#" class="boton_contacto">{{$s2}}</a></li>
                  <li><a href="#">Historia</a></li>
                  <li><a href="#">Novedades</a></li>
                  <li><a href="{{ URL::to('/legal') }}">Aviso Legal</a></li>
                </ul>
              </div>
            </div><!-- pie_web_2 -->

            <div class="pie_web_3 float_left">
              <div class="txt_pie_web_3 float_left">
                <span>FAQ</span>
              </div>
              <div class="lista_pie_web_3 float_left">
                <ul>
                  <li><a href="#" title="COMPRAR">Comprar</a></li>
                  <li><a href="#" title="CÓMO FUNCIONAMOS">Cómo Funcionamos</a></li>
                  <li><a href="#" title="RECIBIR MI PRODUCTO EN CASA">Recibir mi producto en casa</a></li>
                  <li><a href="#" title="CÓMO CUIDAR LA OBRA UNA VEZ RECIBIDA">Cómo cuidar la obra una vez recibida</a></li>
                  <li><a href="#" title="SOLICITAR UN PEDESTAL A MEDIDA">solicitar un pedestal a medida</a></li>
                </ul>
              </div>
            </div><!-- pie_web_3 -->

            <div class="pie_web_4 float_left">
              <div class="txt_pie_web_4 float_left">
                <span>Newsletter</span>
                <p>{{$s12}}</p>
              </div>
              <div class="input_suscrito_novedades float_left">
                <form action="" method="">
                  <input type="email" placeholder="Email">
                  <div class="icono_input_suscrito_novedades"><span class="fa fa-envelope-o"></span></div>
                  <div class="submit_suscrito_novedades"><input type="submit" value=""></div>
                </form>
              </div>
              <div class="siguenos_redes_sociales float_left">
                <span>{{$s13}}</span>
                <div class="redes_sociales float_left">
                  <div class="social_icon"><a href="https://www.instagram.com/pinomontanoart/?hl=es"><i class="fa fa-instagram"></i></a></div>
                  <div class="social_icon"><a href="https://www.facebook.com/Pinomontanoart-1421947377842997/"><i class="fa fa-facebook"></i></a></div>
                  <div class="social_icon"><a href="https://twitter.com/pinomontanoart"><i class="fa fa-twitter"></i></a></div>
                  <div class="social_icon"><a href="#"><i class="fa fa-pinterest-p"></i></a></div>
                  <div class="social_icon"><a href="#"><i class="fa fa-google-plus"></i></a></div>
                </div>
              </div>

              <div class="seleccionar_idioma">
                <span>Es <i class="fa fa-caret-up"></i></span>
                <ul>
                  <li class="idioma_active"><a href="#">Es<img src="{{URL::to('public/images/flags/es.png')}}" alt=""></a></li>
                  <li><a href="#">En<img src="{{URL::to('public/images/flags/en.png')}}" alt=""></a></li>
                </ul>
              </div>

            </div><!-- pie_web_4 -->



          </div><!-- bloque_contenedor -->

          <div class="copyright_pie_web">
            <p>&copy; 2017 Pino Montano - {{$s14}} Designed by <a href="http://careberos.com">CAREBEROS</a></p>
          </div><!-- copyright_pie_web -->
        </footer>

        <form class="" action="/acceptCookies" method="post" id="form_acceptCookies">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>

    </body>
</html>
