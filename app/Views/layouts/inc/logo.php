 <?php
 $db = \Config\DataBase::connect();
 $query = "SELECT *FROM sistema_reclamo WHERE id=? ";
 $datos = $db->query($query, [1]);
 foreach ($datos->getResultArray() as $row) {?>
  <div class="logo"><img class="my_img" src="<?= base_url() ?>/public/foto/<?= $row['logo'] ?>">
  </div>
  <h1><?= $row['nombre'] ?></h1>
 <?php } ?>