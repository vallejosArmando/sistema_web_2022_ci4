<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Menu extends BaseController
{
    protected $sos_login;
    protected $valor;
    public function __construct()
    {

        helper(['form', 'url']);;
    }
    public function index()
    {
        if(isset($this->session->id_usuario)){
            $data=[
                'mensaje'=>'Datos correctos ...Bienvenido Usuario:'
            ];
        }else{
            $data = [
                'mensaje2' => 'Tiene que iniciar session ... Usuario:'
            ];   
        }
        return view('nav',$data);
      

    }
    public function validar1()
    {
        return view('formul1');
    }
    public function validar2()
    {
        return view('formul2');
    }
    public function validar3()
    {
        return view('formul3');
    }
    public function validar4()
    {
        return view('formul4');
    }
    public function validar5()
    {
        return view('formul5');
    }
    public function validar6()
    {
        return view('formul6');
    }
    public function validar7()
    {
        return view('formul7');
    }
}
