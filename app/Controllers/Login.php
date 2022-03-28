<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Login extends BaseController
{
 protected $sos_login;
 public function __construct()
 {
  $this->sos_login = new LoginModel();
  helper(['form', 'url', 'cookie']);
 }
 public function Index()
 {
  if (isset($this->session->usuario)) {

   return redirect()->to(base_url('menu'));
  } else {
   return view('login');
  }
 }
 public function validar_usuario()
 {
  helper(['form', 'url', 'cookie']);

  $nom_usuario = $this->request->getPost('nom_usuario');
  $clave = $this->request->getPost('clave');
  if ($nom_usuario ) {
   $carga = $this->sos_login->check_user($nom_usuario);
   if ($carga) {
    if (password_verify($clave, $carga->clave)) {
     $ini_session=[
      'usuario'=>$carga->nom_usuario,
      'id_usuario'=>$carga->id_usuario,
      'rol'=>$carga->rol,
      'id_rol'=>$carga->id_rol,
     ];
     $this->session->start();
     $this->session->set($ini_session);
                   
return redirect()->to(base_url('/menu'));

    } else {
     $msg=[
      'error_clave'=>'Password  incorrecto',
     ];
    }
   } else {
    $msg=[
     'error_nombre'=>'El usario no existe'
    ];
   }
  } else {
   $msg=[
    'error'=>'No hay datos ---'
   ];
  }
  return view('login',$msg);
 }
 public function logout()
 {
  $this->session->start();
  if (empty($this->session->destroy())) {
   return redirect()->to(base_url('login'));
  }
 }
}
