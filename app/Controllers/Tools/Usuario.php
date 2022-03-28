<?php

namespace App\Controllers\Tools;

use App\Controllers\BaseController;

class Usuario extends BaseController
{

 public function index()
 {
  $datos = [
   'titulo' => 'Agregar Usuario '
  ];
  return view('tools/usuario/inicio', $datos);
 }
}
