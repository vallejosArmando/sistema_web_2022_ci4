<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{

 /*  protected $table='usurol';
 protected $primaryKey='id';
 protected $allowedFields=['id_usuario','id_rol','usuario','estado']; */
 public function __construct()
 {
  $this->db = \Config\Database::connect();
 }
 public function check_user($nom_usuario)
 {
  $query = "SELECT u.nom_usuario ,u.clave ,r.rol,urs.id_usuario,urs.id_rol FROM usurol urs INNER JOIN usuario u ON u.id=urs.id_usuario INNER JOIN rol r ON r.id=urs.id_rol WHERE u.nom_usuario=?";
  $carga = $this->db->query($query, [$nom_usuario]);
   return $carga->getRow();
  }
 
}
