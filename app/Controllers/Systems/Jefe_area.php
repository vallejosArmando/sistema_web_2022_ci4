<?php

namespace App\Controllers\Systems;

use App\Controllers\BaseController;

class Jefe_area extends BaseController
{

 public function index()
 {
  helper('cookie');
  helper(['url', 'form']);
  $datos = [
   'titulo' => 'Agregar Jefe_de_area '
  ];
  return view('systems/jefe_area/inicio', $datos);
 }

 public function agregar()
 {
  helper('cookie');
  helper(['url', 'form']);
  if ($this->request->getMethod() == 'post') {
   $datos = [
    'area' => $this->request->getPost('area'),
    'nombres' => $this->request->getPost('nombres'),
    'ap' => $this->request->getPost('ap'),
    'am' => $this->request->getPost('am'),
    'ci' => $this->request->getPost('ci'),
    'telefono' => $this->request->getPost('telefono'),
    'correo' => $this->request->getPost('correo'),
    'fec_inicio' => $this->request->getPost('fec_inicio'),
    'fec_fin' => $this->request->getPost('fec_fin'),

    'usuario' => 1,
    'estado' => 1

   ];
   return view('systems/jefe_area/index', $datos);
  }
 }
}
