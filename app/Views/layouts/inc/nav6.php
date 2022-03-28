<?php


$this->db = \Config\Database::connect();
$this->session = \Config\Services::session();
$this->session->start();

if (isset($this->session->id_rol)) {

      $id_rol = $this->session->id_rol;
      $user = $this->session->usuario;
      $id_usuario = $this->session->id_usuario;


      $this->db = \Config\Database::connect();

      $datos = $this->db->table('grupo')
        ->where('estado', 1)->get();
      foreach ($datos->getResultArray() as $grupodata) {

        $id_grupo = $grupodata['id'];
        $builder = $this->db->table('permiso');
        $builder = $builder->select('grupo.grupo as grupo,permiso.id_opcion as id_opcion,permiso.id_usuario as id_usuario, permiso.*');

        $accessrow = $builder->join('opcion', 'permiso.id_opcion = opcion.id');
        $accessrow = $builder->join('usuario', 'permiso.id_usuario = usuario.id');
        $accessrow = $builder->join('grupo', 'opcion.id_grupo = grupo.id');
        $accessrow = $builder->where('opcion.id_grupo', $id_grupo);
        $accessrow = $builder->where('permiso.id_usuario', $id_usuario);
        $accessrow = $builder->get()->getRow();

        if ($accessrow) { ?>

          <li>
            <a href=" #" class=" activar">
              <i class=" icono_grupo fa fa-solid<?php echo $grupodata['icono'] ?>"></i>
              <?php echo $grupodata['grupo'] ?>
              <span class="fas fa-caret-down iconito"></span>
            </a>
            <ul class="sub_menu">
              <?php
              $builder = $this->db->table('permiso');
              $builder = $builder->select('*');
              $builder = $builder->join('opcion', 'permiso.id_opcion = opcion.id');
              $builder = $builder->join('usuario', 'permiso.id_usuario = usuario.id');
              $builder = $builder->join('grupo', 'opcion.id_grupo = grupo.id');
              $builder = $builder->where('opcion.id_grupo', $id_grupo);
              $builder = $builder->where('permiso.id_usuario', $id_usuario);
              $builder = $builder->where('permiso.acceso', 1);
              $builder = $builder->get()->getResultArray();
              foreach ($builder as $op) { ?>

                <li><a href="<?php echo $op['op_url']; ?>"><?php echo $op['nombre'] ?></a>
                </li>

              <?php
              } ?>
            </ul>
          </li>
    <?php }
      }
    }
    ?>




 