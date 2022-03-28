<?php

namespace App\Controllers\Systems;

use App\Controllers\BaseController;

class Area extends BaseController
{

 public function index()
 {
  helper('cookie');
  helper(['url', 'form']);
  $datos = [
   'titulo' => 'Agregar Area '
  ];
  return view('systems/area/inicio', $datos);
 }
 public function agregar()
 {
  helper('cookie');
  helper(['url', 'form']);
  if ($this->request->getMethod() == 'post') {

   $datos = [
    'nombre' => $this->request->getPost('nombre'),
    'descripcion' => $this->request->getPost('descripcion'),
   ];
   return view('systems/area/index', $datos);
  }
 }
}
