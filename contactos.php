<?php
  include 'db_ecommerce.php';
  $conectar =conn();

  if(isset($_REQUEST['idBorrar'])){
    $id = mysqli_real_escape_string($conectar, $_REQUEST['idBorrar']??'');
    $query="DELETE from contactos where id='" .$id."';";
    $res=mysqli_query($conectar, $query);
    if($res){
      ?>
      <div class="alert alert-warning float-right" role="alert">
          Contacto borrado con exito

      </div>
      <?php
    }else{
      ?>
      <div class="alert alert-danger float-right" role="alert">
        Error al borrar <?php echo mysqli_error($conectar); ?>

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
                      <h1>Contactos</h1>
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
                          <table id="example2" class="table table-bordered table-hover">
                              <thead>
                                  <tr>
                                      <th>Nombre</th>
                                      <th>Email</th>
                                      <th>Celular</th>
                                      <th>Asunto</th>
                                      <th>Descripcion</th>
                                      
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php
                                  include_once "db_ecommerce.php";
                                  $conectar=conn();
                                    $query = "SELECT * from contactos  ";
                                    $res = mysqli_query($conectar, $query);

                                    while ($row = mysqli_fetch_assoc($res)) {
                                    ?>
                                      <tr>
                                          <td><?php echo $row['nombre'] ?></td>
                                          <td><?php echo $row['email'] ?></td>
                                          <td><?php echo $row['celular'] ?></td>
                                          <td><?php echo $row['asunto'] ?></td>
                                          <td><?php echo $row['descripcion'] ?></td>
                                          <td>
                                              
                                              <a href="panel.php?modulo=contactos&idBorrar=<?php echo $row['id'] ?>"
                                               class="text-danger borrar"> <i class="fas fa-trash"></i> </a>
                                          </td>
                                      </tr>
                                  <?php
                                    }
                                    ?>
                              </tbody>
                          </table>
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