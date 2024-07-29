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
        <div class="col-sm-10">
            <!-- DataTables -->
            <link rel="stylesheet" href="https://cdn.datatables.net/2.1.2/css/dataTables.dataTables.css" />
            <script src="https://cdn.datatables.net/2.1.2/js/dataTables.js"></script>

            <!-- jQuery -->
            <script src="<?php echo $url;?>/public/plugins/jquery/jquery.min.js"></script>
            <h1 class="m-0">Listado de Usuarios</h1>
            <?php 
                if(isset($_SESSION['msj'])){
                $respuesta = $_SESSION['msj'];?>
                <script>
                    Swal.fire({
                        title: "¡Buen trabajo!",
                        text: "<?php echo $respuesta;?>",
                        icon: "success"
                    });
                </script>
                <?php 
                    unset($_SESSION['msj']);
                }
                ?>
            <hr>
            <br>
                <div class="card card-blue">
                    <h5 class="card-header">Listado</h5>
                    <div class="card-body">
                    <script>
                        new DataTable('#tabla-1');
                    </script>

                    <table id="tabla-1" class="table table-striped table-hover table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>Nro</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Cedula</th>
                            <th>Celular</th>
                            <th>Cargo</th>
                            <th>Correo Electronico</th>
                            <th><center>Acciones</center></th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php 
                        $contador = 0;
                        $query = $pdo->prepare("SELECT * FROM tb_usuarios WHERE estado = '1'");
                        $query->execute();
                        $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
                        foreach($usuarios as $usuario){
                            $id = $usuario["id_usuario"];
                            $nombres = $usuario["nombres"];
                            $apellidos = $usuario["apellidos"];
                            $cd = $usuario["cd"];
                            $celu = $usuario["celu"];
                            $cargo = $usuario["cargo"];
                            $email = $usuario["email"];
                            $contador++;
                            ?>
                        <tr>
                            <td><?php echo $contador;?></td>
                            <td><?php echo $nombres;?></td>
                            <td><?php echo $apellidos;?></td>
                            <td><?php echo $cd;?></td>
                            <td><?php echo $celu;?></td>
                            <td><?php echo $cargo;?></td>
                            <td><?php echo $email;?></td>
                            <td>
                                <center>
                                    <a href="edit.php?id=<?php echo $id;?>" class="btn-success btn-sm"> Editar <i class="fas fa-pen"></i></a>
                                    <a href="borrar.php?id=<?php echo $id;?>" class="btn-danger btn-sm"> Eliminar <i class="fas fa-trash"></i></a>
                                </center>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                        
                    </tbody>
                    </table>
                    </div>
                </div>

                
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </div>
</div>

<?php include('../../layout/admin/parte2.php');?>