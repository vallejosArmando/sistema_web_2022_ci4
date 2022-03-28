<?php

namespace App\Controllers\Tools;

use App\Controllers\BaseController;

class Persona extends BaseController
{
 public function index(){
  return view('tools/persona/inicio');
 }
}
