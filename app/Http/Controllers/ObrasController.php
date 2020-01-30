<?php

namespace App\Http\Controllers;

use App\Obra as Obra;
use App\Image as Image;
use App\Description as Description;
use App\ObraInfo as ObraInfo;
use App\Webdata as Webdata;
use Illuminate\Http\Request;

/*use App\Project as Project;
use App\Images as Images;
use App\Infoprojects as Infoprojects;*/

class ObrasController extends Controller {

    public function readAll(Request $req){
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

        $obras = Obra::all();
        $descripciones = Description::where('lang', '=', $lang)->get();

        $data = array(
          'obras' => $obras,
          'descripciones' => $descripciones,
          's0' => $s0->stuff,
          's1' => $s1->stuff,
          's2' => $s2->stuff,
          's3' => $s3->stuff,
          's7' => $s7->stuff,
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
        return view('obras', $data);
    }

    public function read($id, Request $req){
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

        $s15 = Webdata::where('id', '=', '15')->where('lang', '=', $lang)->first();
        $s16 = Webdata::where('id', '=', '16')->where('lang', '=', $lang)->first();
        $s17 = Webdata::where('id', '=', '17')->where('lang', '=', $lang)->first();
        $s18 = Webdata::where('id', '=', '18')->where('lang', '=', $lang)->first();
        $s19 = Webdata::where('id', '=', '19')->where('lang', '=', $lang)->first();
        $s22 = Webdata::where('id', '=', '22')->where('lang', '=', $lang)->first();
        $s23 = Webdata::where('id', '=', '23')->where('lang', '=', $lang)->first();

        $obra = Obra::where('id', '=', $id)->first();
        $imagenes = Image::where('obra', '=', $id)->get();
        $info = ObraInfo::where('obra', '=', $id)->where('lang', '=', $lang)->first();
        $descripcion = Description::where('obra', '=', $id)->where('lang', '=', $lang)->first();

        $data = array(
          'o' => $obra,
          'imagenes' => $imagenes,
          'info' => $info,
          'desc' => $descripcion,
          's0' => $s0->stuff,
          's1' => $s1->stuff,
          's2' => $s2->stuff,
          's3' => $s3->stuff,
          's7' => $s7->stuff,
          's8' => $s8->stuff,
          's9' => $s9->stuff,
          's10' => $s10->stuff,
          's11' => $s11->stuff,
          's12' => $s12->stuff,
          's13' => $s13->stuff,
          's14' => $s14->stuff,
          's15' => $s15->stuff,
          's16' => $s16->stuff,
          's17' => $s17->stuff,
          's18' => $s18->stuff,
          's19' => $s19->stuff,
          's21' => $s21->stuff,
          'lang' => $lang,
          's22' => $s22->stuff,
          's23' => $s23->stuff,
        );
        return view('obra', $data);
    }

}
