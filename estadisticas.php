<?php
include_once "db_ecommerce.php";
$conectar=conn();

$queryNumVentas="SELECT COUNT(id) AS num from ventas 
where fecha BETWEEN DATE( DATE_SUB(NOW(),INTERVAL 7 DAY) ) AND NOW(); ";
$resNumVentas=mysqli_query($conectar,$queryNumVentas);
$rowNumVentas=mysqli_fetch_assoc($resNumVentas);

$queryNumClientes="SELECT COUNT(id) AS num from clientes; ";
$resNumClientes=mysqli_query($conectar,$queryNumClientes);
$rowNumClientes=mysqli_fetch_assoc($resNumClientes);


?>    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">¿Como van las ventas?</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3><?php echo $rowNumVentas['num']; ?></h3>
                  <p>Ventas en los ultimos 7 dias</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">Mas información <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3><?php echo $rowNumClientes['num'] ?></h3>
                  <p>Clientes</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">Mas información <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- Main row -->
          
              <!-- /.card -->

              <!-- DIRECT CHAT -->
            
                <!-- /.card-header -->
                
                <!-- /.card-header -->
                <div class="card-body pt-0">
                  <!--The calendar -->
                  <div id="calendar" style="width: 100%"></div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </section>
            <!-- right col -->
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
