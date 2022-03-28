<?php

namespace App\Controllers\Tools;

use App\Controllers\BaseController;

class Grupo extends BaseController
{

 public function index()
 {
  $datos = [
   'titulo' => 'Agregar Grupo '
  ];
  return view('tools/grupo/inicio', $datos);
 }
}
