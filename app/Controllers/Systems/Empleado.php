<?php

namespace App\Controllers\Systems;

use App\Controllers\BaseController;

class Empleado extends BaseController
{

 public function index()
 {
  helper('cookie');
  helper(['url', 'form']);
  $datos = [
   'titulo' => 'Agregar Empleado '
  ];
  return view('systems/empleado/inicio', $datos);
 }
 public function agregar()
 {
  helper('cookie');
  helper(['url', 'form']);
  if ($this->request->getMethod() == 'post') {

   $datos = [
    'nombre' => $this->request->getPost('nombres'),
    'ap' => $this->request->getPost('ap'),
    'area' => $this->request->getPost('id_area'),
    'tipo' => $this->request->getPost('id_tipo'),
    'am' => $this->request->getPost('am'),
    'tel_cel' => $this->request->getPost('tel_cel'),
    'tel_fijo' => $this->request->getPost('tel_fijo'),
    'direccion' => $this->request->getPost('direccion'),
    'ci' => $this->request->getPost('ci'),
   ];
   return view('systems/empleado/index', $datos);
  }
 }
 
}
