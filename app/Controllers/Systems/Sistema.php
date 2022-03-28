<?php

namespace App\Controllers\Systems;

use App\Controllers\BaseController;

class Sistema extends BaseController
{


  public function index()
  {
    helper('cookie');
    helper(['url', 'form']);
    $datos = [
      'titulo' => 'Agregar Sistema'
    ];
    return view('systems/sistema/inicio', $datos);
  }
  public function agregar()
  {
    helper('cookie');
    helper(['url', 'form']);
    if ($this->request->getMethod() == 'post') {
   
        $datos = [
          'nombre' => $this->request->getVar('nombre'),
          'nombre_creador' => $this->request->getVar('nombre_creador'),
          'logo' => $this->request->getVar('icono'),
          'usuario' => 1,
          'estado' => 1
        ];
       
        return view('systems/sistema/index', $datos);
      }
    }
  
}
