<?php

namespace App\Controllers\Systems;

use App\Controllers\BaseController;

class Tipo extends BaseController
{

 public function index()
 {
  helper('cookie');
  helper(['url', 'form']);
  $datos = [
   'titulo' => 'Agregar Tipo '
  ];
  return view('systems/tipo/inicio', $datos);
 }
 public function agregar()
 {
  helper('cookie');
  helper(['url', 'form']);
  if ($this->request->getMethod() == 'post') {

   $datos = [
    'tipo' => $this->request->getPost('tipo'),
    'descripcion' => $this->request->getPost('descripcion'),
   ];
   return view('systems/tipo/index', $datos);
  }
 }
}
