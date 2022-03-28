<?php

namespace App\Controllers\Systems;

use App\Controllers\BaseController;

class Reclamo extends BaseController
{

 public function index()
  {
    helper('cookie');
    helper(['url', 'form']);
  $datos = [
   'titulo' => 'Agregar Reclamo '
  ];
  return view('systems/reclamo/inicio', $datos);
 }
 public function agregar()
 {
    helper('cookie');
    helper(['url', 'form']);


  
    $datos = [
     'reg' => $this->request->getPost('reg'),
     'nombres' => $this->request->getPost('nombres'),
     'ap' => $this->request->getPost('ap'),
     'am' => $this->request->getPost('am'),
     'telefono' => $this->request->getPost('telefono'),
     'correo' => $this->request->getPost('correo'),
     'codigo_usuario' => $this->request->getPost('codigo_usuario'),
     'barrio' => $this->request->getPost('barrio'),
     'calle_avenida' => $this->request->getPost('calle_avenida'),
     'entre_que_calles' => $this->request->getPost('entre_que_calles'),
     'numero_de_casa' => $this->request->getPost('numero_de_casa'),
     'referencias' => $this->request->getPost('referencias'),
     'descripcion_del_reclamo' => $this->request->getPost('descripcion_del_reclamo'),
     'map' => $this->request->getPost('map'),
     'otro_recurrente' => $this->request->getPost('otro_recurrente'),
     'telefono_del_recurrente' => $this->request->getPost('telefono_del_recurrente'),
     'tipo_de_calzada' => $this->request->getPost('tipo_de_calzada'),

     'usuario' => 1,
     'estado' => 1


    ];
    return view('systems/reclamo/index', $datos);
   }
  
 }

