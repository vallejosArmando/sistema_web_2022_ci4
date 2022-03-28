<?php
function logo()
{
 $db = \Config\DataBase::connect();
 $query = "SELECT *FROM sistema_reclamo WHERE id=? ";
 $datos = $db->query($query, [1]);
 foreach ($datos->getResultArray() as $row) {
  $data = [
   'logo' => $row['logo'],
   'nombre' => $row['nombre'],
  ];
 }
 return $data;
}



if (!function_exists('changedateFormat')) {
 function changedateFormat($format = 'd-m-Y', $originalDate)
 {
  return date($format, strtotime($originalDate));
 }
}
