<?php

use Illuminate\Http\Request;
use App\Webdata as Webdata;
use App\Obra as Obra;
use App\Description as Description;
use App\ObraInfo as ObraInfo;

Route::get('/', function (Request $req) {
    $lang = 'en';
    try {
      $lang = explode("-", explode(",", $req->server('HTTP_ACCEPT_LANGUAGE'))[0])[0];
    } catch (\Exception $e){
      try {
        $lang = strtolower(explode("-", $req->server('HTTP_ACCEPT_LANGUAGE'))[0]);

      }catch (\Exception $e){
        try {
            $lang = explode(";", explode(",", $req->server('HTTP_ACCEPT_LANGUAGE'))[1])[0];
        }catch (\Exception $e){
        }
      }
    }

    // Menú
    $s0 = Webdata::where('id', '=', '0')->where('lang', '=', $lang)->first();
    $s1 = Webdata::where('id', '=', '1')->where('lang', '=', $lang)->first();
    $s2 = Webdata::where('id', '=', '2')->where('lang', '=', $lang)->first();
    $s3 = Webdata::where('id', '=', '3')->where('lang', '=', $lang)->first();
    $s21 = Webdata::where('id', '=', '21')->where('lang', '=', $lang)->first();
    $s22 = Webdata::where('id', '=', '22')->where('lang', '=', $lang)->first();
    $s23 = Webdata::where('id', '=', '23')->where('lang', '=', $lang)->first();

    // Párrafo
    $s4 = Webdata::where('id', '=', '4')->where('lang', '=', $lang)->first();
    $s5 = Webdata::where('id', '=', '5')->where('lang', '=', $lang)->first();
    $s6 = Webdata::where('id', '=', '6')->where('lang', '=', $lang)->first();

    // Más información
    $s7 = Webdata::where('id', '=', '7')->where('lang', '=', $lang)->first();

    // Cookies
    $s10 = Webdata::where('id', '=', '10')->where('lang', '=', $lang)->first();
    $s11 = Webdata::where('id', '=', '11')->where('lang', '=', $lang)->first();

    // Footer
    $s8 = Webdata::where('id', '=', '8')->where('lang', '=', $lang)->first();
    $s9 = Webdata::where('id', '=', '9')->where('lang', '=', $lang)->first();
    $s12 = Webdata::where('id', '=', '12')->where('lang', '=', $lang)->first();
    $s13 = Webdata::where('id', '=', '13')->where('lang', '=', $lang)->first();
    $s14 = Webdata::where('id', '=', '14')->where('lang', '=', $lang)->first();

    $obra1 = Obra::where('id', '=', 6)->first();
    $info1 = ObraInfo::where('obra', '=', 6)->where('lang', '=', $lang)->first();
    $descripcion1 = Description::where('obra', '=', 6)->where('lang', '=', $lang)->first();

    $obra2 = Obra::where('id', '=', 7)->first();
    $info2 = ObraInfo::where('obra', '=', 7)->where('lang', '=', $lang)->first();
    $descripcion2 = Description::where('obra', '=', 7)->where('lang', '=', $lang)->first();

    $obra3 = Obra::where('id', '=', 8)->first();
    $info3 = ObraInfo::where('obra', '=', 8)->where('lang', '=', $lang)->first();
    $descripcion3 = Description::where('obra', '=', 8)->where('lang', '=', $lang)->first();

    $obra4 = Obra::where('id', '=', 9)->first();
    $info4 = ObraInfo::where('obra', '=', 9)->where('lang', '=', $lang)->first();
    $descripcion4 = Description::where('obra', '=', 9)->where('lang', '=', $lang)->first();

    $obras = array (
      $obra1, $obra2, $obra3, $obra4
    );

    $infos = array(
      $info1, $info2, $info3, $info4
    );

    $descripciones = array (
      $descripcion1, $descripcion2, $descripcion3, $descripcion4
    );

    $data = array(
      's0' => $s0->stuff,
      's1' => $s1->stuff,
      's2' => $s2->stuff,
      's3' => $s3->stuff,
      's4' => $s4->stuff,
      's5' => $s5->stuff,
      's6' => $s6->stuff,
      's7' => $s7->stuff,
      's8' => $s8->stuff,
      's9' => $s9->stuff,
      's10' => $s10->stuff,
      's11' => $s11->stuff,
      's12' => $s12->stuff,
      's13' => $s13->stuff,
      's14' => $s14->stuff,
      's21' => $s21->stuff,
      'obras' => $obras,
      'infos' => $infos,
      'descripciones' => $descripciones,
      'lang' => $lang,
      's22' => $s22->stuff,
      's23' => $s23->stuff,
    );

    return view('index', $data);
});

Route::get('/work', 'ObrasController@readAll');

Route::get('/work/{id}', 'ObrasController@read');

Route::post('/acceptCookies', function(){
    Cookie::queue('acceptCookies', 'true', 45000);
    return "200";
});

Route::get('/legal', function (Request $req) {
    $lang = 'en';
    try {
      $lang = explode("-", explode(",", $req->server('HTTP_ACCEPT_LANGUAGE'))[0])[0];
    } catch (\Exception $e){
      try {
        $lang = strtolower(explode("-", $req->server('HTTP_ACCEPT_LANGUAGE'))[0]);

      }catch (\Exception $e){
        try {
            $lang = explode(";", explode(",", $req->server('HTTP_ACCEPT_LANGUAGE'))[1])[0];
        }catch (\Exception $e){
        }
      }
    }

    // Menú
    $s0 = Webdata::where('id', '=', '0')->where('lang', '=', $lang)->first();
    $s1 = Webdata::where('id', '=', '1')->where('lang', '=', $lang)->first();
    $s2 = Webdata::where('id', '=', '2')->where('lang', '=', $lang)->first();
    $s3 = Webdata::where('id', '=', '3')->where('lang', '=', $lang)->first();
    $s21 = Webdata::where('id', '=', '21')->where('lang', '=', $lang)->first();
    $s22 = Webdata::where('id', '=', '22')->where('lang', '=', $lang)->first();
    $s23 = Webdata::where('id', '=', '23')->where('lang', '=', $lang)->first();

    // Cookies
    $s10 = Webdata::where('id', '=', '10')->where('lang', '=', $lang)->first();
    $s11 = Webdata::where('id', '=', '11')->where('lang', '=', $lang)->first();

    // Footer
    $s8 = Webdata::where('id', '=', '8')->where('lang', '=', $lang)->first();
    $s9 = Webdata::where('id', '=', '9')->where('lang', '=', $lang)->first();
    $s12 = Webdata::where('id', '=', '12')->where('lang', '=', $lang)->first();
    $s13 = Webdata::where('id', '=', '13')->where('lang', '=', $lang)->first();
    $s14 = Webdata::where('id', '=', '14')->where('lang', '=', $lang)->first();

    $data = array(
      's0' => $s0->stuff,
      's1' => $s1->stuff,
      's2' => $s2->stuff,
      's3' => $s3->stuff,
      's8' => $s8->stuff,
      's9' => $s9->stuff,
      's10' => $s10->stuff,
      's11' => $s11->stuff,
      's12' => $s12->stuff,
      's13' => $s13->stuff,
      's14' => $s14->stuff,
      's21' => $s21->stuff,
      'lang' => $lang,
      's22' => $s22->stuff,
      's23' => $s23->stuff,
    );
    return view('cookies', $data);
});

Route::post('/contact', function(Request $request){
    $data = array(
        'name' => $request->input('nombre'),
        'email' => $request->input('email'),
        'subject' => $request->input('asunto'),
        'msg' => $request->input('mensaje'),
    );

    Mail::send('emails.contact', $data, function ($message) {

        $message->from('madstodolist1@gmail.com', 'PINO MONTANO');

        $message->to('pcl23ua@gmail.com')->subject('Nuevo mensaje desde la web');

    });

    return "200";
});

Route::get('/about', function(Request $req){
  $lang = 'en';
  try {
    $lang = explode("-", explode(",", $req->server('HTTP_ACCEPT_LANGUAGE'))[0])[0];
  } catch (\Exception $e){
    try {
      $lang = strtolower(explode("-", $req->server('HTTP_ACCEPT_LANGUAGE'))[0]);

    }catch (\Exception $e){
      try {
          $lang = explode(";", explode(",", $req->server('HTTP_ACCEPT_LANGUAGE'))[1])[0];
      }catch (\Exception $e){
      }
    }
  }

  // Menú
  $s0 = Webdata::where('id', '=', '0')->where('lang', '=', $lang)->first();
  $s1 = Webdata::where('id', '=', '1')->where('lang', '=', $lang)->first();
  $s2 = Webdata::where('id', '=', '2')->where('lang', '=', $lang)->first();
  $s3 = Webdata::where('id', '=', '3')->where('lang', '=', $lang)->first();
  $s21 = Webdata::where('id', '=', '21')->where('lang', '=', $lang)->first();

  // Cookies
  $s10 = Webdata::where('id', '=', '10')->where('lang', '=', $lang)->first();
  $s11 = Webdata::where('id', '=', '11')->where('lang', '=', $lang)->first();

  // Footer
  $s8 = Webdata::where('id', '=', '8')->where('lang', '=', $lang)->first();
  $s9 = Webdata::where('id', '=', '9')->where('lang', '=', $lang)->first();
  $s12 = Webdata::where('id', '=', '12')->where('lang', '=', $lang)->first();
  $s13 = Webdata::where('id', '=', '13')->where('lang', '=', $lang)->first();
  $s14 = Webdata::where('id', '=', '14')->where('lang', '=', $lang)->first();
  $s22 = Webdata::where('id', '=', '22')->where('lang', '=', $lang)->first();
  $s23 = Webdata::where('id', '=', '23')->where('lang', '=', $lang)->first();

  $data = array(
    's0' => $s0->stuff,
    's1' => $s1->stuff,
    's2' => $s2->stuff,
    's3' => $s3->stuff,
    's8' => $s8->stuff,
    's9' => $s9->stuff,
    's10' => $s10->stuff,
    's11' => $s11->stuff,
    's12' => $s12->stuff,
    's13' => $s13->stuff,
    's14' => $s14->stuff,
    's21' => $s21->stuff,
    'lang' => $lang,
    's22' => $s22->stuff,
    's23' => $s23->stuff,
  );


  return view('about', $data);
});

Route::get('/sitemap', function(){
   return Response::view('sitemap')->header('Content-Type', 'application/xml');
});
