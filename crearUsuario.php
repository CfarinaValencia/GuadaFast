<?php
if (isset($_REQUEST['guardar'])) {
    include_once "db_ecommerce.php";
    $conectar=conn();

    $email = mysqli_real_escape_string($conectar, $_REQUEST['email'] ?? '');
    $pass = md5(mysqli_real_escape_string($conectar, $_REQUEST['pass'] ?? ''));
    $nombre = mysqli_real_escape_string($conectar, $_REQUEST['nombre'] ?? '');

    $query = "INSERT INTO usuarios 
        (email       ,pass       ,nombre) VALUES
        ('" . $email . "','" . $pass . "','" . $nombre . "');
        ";
    $res = mysqli_query($conectar, $query);
    if ($res) {
        echo '<meta http-equiv="refresh" content="0; url=panel.php?modulo=usuarios&mensaje=Usuario creado exitosamente" />  ';
    } else {
?>
        <div class="alert alert-danger" role="alert">
            Error al crear usuario <?php echo mysqli_error($conectar); ?>
        </div>
<?php
    }
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Crear usuario</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="panel.php?modulo=crearUsuario" method="post">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control"  required="required" >
                            </div>
                            <div class="form-group">
                                <label>Pass</label>
                                <input type="password" name="pass" class="form-control"  required="required" >
                            </div>
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" name="nombre" class="form-control"  required="required" >
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="guardar">Guardar</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>