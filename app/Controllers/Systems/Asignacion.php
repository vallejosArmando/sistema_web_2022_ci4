<?php

namespace App\Controllers\Systems;

use App\Controllers\BaseController;

class Asignacion extends BaseController
{

 public function index()
 {
  $datos = [
   'titulo' => 'Agregar Asignacion '
  ];
  return view('systems/tipo/inicio', $datos);
 }
}
