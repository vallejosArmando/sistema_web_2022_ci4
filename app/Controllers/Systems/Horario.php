<?php

namespace App\Controllers\Systems;

use App\Controllers\BaseController;

class Horario extends BaseController
{

 public function index()
  {
    helper('cookie');
    helper(['url', 'form']);
  $datos = [
   'titulo' => 'Agregar Orario '
  ];
  return view('systems/horario/inicio', $datos);
 }
 public function agregar(){
    helper('cookie');
    helper(['url', 'form']);
  if($this->request->getMethod() == 'post'){

$datos=[
 'empleado'=>$this->request->getPost('empleado'),
 'hora_entrada'=>$this->request->getPost('hora_entrada'),
 'hora_salida'=>$this->request->getPost('hora_salida'),
];
return view('systems/horario/index', $datos);
  }
 }
}
