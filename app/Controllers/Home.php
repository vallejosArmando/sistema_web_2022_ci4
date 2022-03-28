<?php

namespace App\Controllers;
use App\Models\LoginModel;
class Home extends BaseController
{
    protected $sos_login;
    protected $valor;
public function __construct(){

        helper(['form', 'url']);
      ;       
            
}
    public function index()
    {
        return view('index');
    }
    public function login()
    {
        helper(['form', 'url']);
        return view('login');
    }
    public function menu()
    {
        helper(['form', 'url']);
        return redirect()->to(base_url('menu'));
    }
    public function validar()
    {
    }}
