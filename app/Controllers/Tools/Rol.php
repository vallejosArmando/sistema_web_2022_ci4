<?php

namespace App\Controllers\Tools;

use App\Controllers\BaseController;

class Rol extends BaseController
{

 public function index()
 {
  $datos = [
   'titulo' => 'Agregar Rol '
  ];
  return view('tools/rol/inicio', $datos);
 }
}
