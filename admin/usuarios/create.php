<?php
include('../../app/config/config.php');
include('../../app/config/conexion.php');

include('../../layout/admin/sesion.php');
include('../../layout/admin/datos_sesion_user.php');
?>

<?php include('../../layout/admin/parte1.php');?>

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
            <div class="card-header" style="background-color: DodgerBlue">
                <h1 class="m-0">Creación de usuario</h1>
            </div>
          <div class="card">
          <div class="card-body">
                <form action="controller_create.php" method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Nombres</label>
                                <input type="text" name="nombres" class="form-control" placeholder="Escribe el nombre..." required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Apellidos</label>
                                <input type="text" name="apellidos" class="form-control" placeholder="Escribe el apellido..." required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Cédula</label>
                                <input type="number" name="cd" class="form-control" placeholder="Escriba la cédula..." required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Número de celular</label>
                                <input type="number" name="celu" class="form-control" placeholder="Escribe el número de teléfono...">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Cargo</label>
                                <select name="cargo" id="" class="form-control">
                                    <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                                    <option value="DOCENTE">DOCENTE</option>
                                    <option value="ESTUDIANTE">ESTUDIANTE</option>
                                    <option value="PUBLICO">PUBLICO</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Correo electrónico</label>
                                <input type="email" name="email" class="form-control" placeholder="Escriba el correo..." required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Contraseña</label>
                                <input type="text" name="password" class="form-control" placeholder="Escriba la contraseña..." required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Confirmar contraseña</label>
                                <input type="text" name="verificar_password" class="form-control" placeholder="Confirma la contraseña..." required>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <a href="../" class="btn btn-danger btn-block">Cancelar</a>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" onclick="return confirm('¿Los campos están correctos?')" class="btn btn-default btn-block">Registrar usuario</button>
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<?php include('../../layout/admin/parte2.php');?>