<?php

namespace App\Controllers\Tools;

use App\Controllers\BaseController;

class Opcion extends BaseController
{

 public function index()
 {
  $datos = [
   'titulo' => 'Agregar Opcion '
  ];
  return view('tools/opcion/inicio', $datos);
 }
}
