<?php
include('../../app/config/config.php');
include('../../app/config/conexion.php');

include('../../layout/admin/sesion.php');
include('../../layout/admin/datos_sesion_user.php');
?>

<?php include('../../layout/admin/parte1.php');

$id_get = $_GET['id'];
$query = $pdo->prepare("SELECT * FROM tb_usuarios WHERE id_usuario = '$id_get'");
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
foreach($usuarios as $usuario){
    $id = $usuario["id_usuario"];
    $nombres = $usuario["nombres"];
    $apellidos = $usuario["apellidos"];
    $cd = $usuario["cd"];
    $celu = $usuario["celu"];
    $email = $usuario["email"];
    $cargo = $usuario["cargo"];
}

?>

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
            <div class="card-header" style="background-color: Tomato">
                <h1 class="m-0">Eliminación de usuario</h1>
                ¿Deseas eliminar al usuario de la base de datos?
            </div>
          <div class="card">
          <div class="card-body">
                <form action="controller_borrar.php" method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Nombres</label>
                                <input type="text" name="nombres" value="<?php echo $nombres; ?>" class="form-control" placeholder="Escribe el nombre..." required disabled>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Apellidos</label>
                                <input type="text" name="apellidos" value="<?php echo $apellidos; ?>" class="form-control" placeholder="Escribe el apellido..." required disabled>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Cédula</label>
                                <input type="number" name="cd" value="<?php echo $cd; ?>" class="form-control" placeholder="Escriba la cédula..." required disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Número de celular</label>
                                <input type="number" name="celu" value="<?php echo $celu; ?>" class="form-control" placeholder="Escribe el número de teléfono..." disabled>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Cargo</label>
                                <select name="cargo" id="" class="form-control" disabled>
                                    <option value="<?php echo $cargo; ?>"><?php echo $cargo; ?></option>
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
                                <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" placeholder="Escriba el correo..." required disabled>
                            </div>
                        </div>

                        <div class="col-md-2">

                        </div>

                        <div class="col-md-1">
                            <div class="form-group">
                                <label for=""></label>
                                <input type="number" name="id_usuario" value="<?php echo $id_get; ?>" class="form-control" placeholder="..." required hidden>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <a href=<?php echo $url."/admin/usuarios/";?> class="btn btn-default btn-block">Cancelar</a>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" onclick="return confirm('¿Desea eliminar el usuario de la base de datos?')" class="btn btn-danger btn-block">Eliminar usuario</button>
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