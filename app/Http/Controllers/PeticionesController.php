<?php

namespace App\Http\Controllers;

use App\Ciudad;
use App\Evento;
use App\User;
use App\Tipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeticionesController extends Controller
{


    function ciudades(){
        $json = json_encode( Ciudad::all());
        header('Content-disposition: attachment; filename=jsonFile.json');
        header('Content-type: application/json');
        echo $json;
    }
    function tipos($id){
        $json = json_encode( Tipo::where('id_ciudad',$id)->get());
        //header('Content-disposition: attachment; filename=jsonFile.json');
        // header('Content-type: application/json');
        return $json;
    }
    function eventos($id){
        $json = json_encode(  Evento::where('id_tipo',$id)->get());
       // header('Content-disposition: attachment; filename=jsonFile.json');
        //header('Content-type: application/json');
        return $json;
    }
    function eventosFecha($id,$fecha){
        $json = json_encode( Evento::where('id_tipos',$id)->where('fecha',$fecha)->get());
        //header('Content-disposition: attachment; filename=jsonFile.json');
        // header('Content-type: application/json');
        return $json;
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if(User::where('id',Auth::id())->value('admin')){
                return response('admin', 200);
            }
           return response('user', 200);
        }
        return response('false -'.$credentials['email'].'- -'.$credentials['password'].'-', 203); //403 pertenece a codigo de error de crecendiales
    }
    public function getUser($email){
        return(User::where('email',Auth::id())->value('user'));
    }


    public function codigo(){
        return csrf_token();
    }
    public function json(){

/*
//Make sure that it is a POST request.
        if (strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') != 0) {
            throw new Exception('Request method must be POST!');
        }

//Make sure that the content type of the POST request has been set to application/json
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
        if (strcasecmp($contentType, 'application/json') != 0) {
            throw new Exception('Content type must be: application/json');
        }*/

//Receive the RAW post data.     $content = file_get_contents("php://input");

        $content = trim(file_get_contents("php://input"));

//Attempt to decode the incoming RAW post data from JSON.
        $decoded = json_decode($content, true);

//If json_decode failed, the JSON is invalid.
        if (!is_array($decoded)) {
            throw new Exception('Received content contained invalid JSON!');
        }

//Process the JSON.
    }


}
