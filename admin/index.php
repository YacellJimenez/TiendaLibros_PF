<?php 
include('../app/config/config.php');
include('../app/config/conexion.php');

include('../layout/admin/sesion.php');
include('../layout/admin/datos_sesion_user.php');

?>

<?php include('../layout/admin/parte1.php');?>

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Bienvenid@</h1>
        </div><!-- /.col -->
          
      </div><!-- /.row -->
      <div class="row">
        <div class="col-md-5">
        <table class="table table-hover table-bordered table-striped" style="background-color: #ffffff">
  <thead>
    <tr>
      <td scope="col"><b>Nombres</b></td>
      <td><?php echo $sesion_nombres; ?></td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><b>Apellidos</b></th>
      <td><?php echo $sesion_apellidos; ?></td>
    </tr>
    <tr>
      <th scope="row"><b>Cedula</b></th>
      <td><?php echo $sesion_cd; ?></td>
    </tr>
    <tr>
      <th scope="row"><b>Celular</b></th>
      <td><?php echo $sesion_celular; ?></td>
    </tr>
    <tr>
      <th scope="row"><b>Cargo</b></th>
      <td><?php echo $sesion_cargo; ?></td>
    </tr>
    <tr>
      <th scope="row"><b>E-mail</b></th>
      <td><?php echo $email_sesion; ?></td>
    </tr>
  </tbody>
</table>
        </div>
        <div class="col-md-6"></div>
      </div>
    </div><!-- /.container-fluid -->
  </div>
</div>

<?php include('../layout/admin/parte2.php');?>