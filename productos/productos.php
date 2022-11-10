<div class="row mt-1">
    <?php
    $conectar =conn();
    $where = " where 1=1 ";
    $nombre = mysqli_real_escape_string($conectar, $_REQUEST['nombre'] ?? '');
    if (empty($nombre) == false) {
        $where = "and nombre like '%" . $nombre . "%'";
    }
    $queryCuenta = "SELECT COUNT(*) as cuenta FROM productos  ;";
    $resCuenta = mysqli_query($conectar, $queryCuenta);
    $rowCuenta = mysqli_fetch_assoc($resCuenta);
    $totalRegistros = $rowCuenta['cuenta'];

    $elementosPorPagina = 6;

    $totalPaginas = ceil($totalRegistros / $elementosPorPagina);

    $paginaSel = $_REQUEST['pagina'] ?? false;

    if ($paginaSel == false) {
        $inicioLimite = 0;
        $paginaSel = 1;
    } else {
        $inicioLimite = ($paginaSel - 1) * $elementosPorPagina;
    }
    $limite = " limit $inicioLimite,$elementosPorPagina ";
    $query = "SELECT * from productos";
    $res = mysqli_query($conectar, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        if($row['foto'] !='img_producto.png'){
            $foto = 'images/uploads/' .$row['foto'];
        }else{
            $foto= 'images/'.$row['foto'];
        }
    ?>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card border-primary">
              <img class="card-img-top img-thumbnail" src="<?php echo $row['web_path'] ?>" alt="">
              <div class="card-body">
                <h2 class="card-title"><strong><?php echo $row['nombre'] ?></strong></h2>
                <p class="card-text"><strong>Precio:</strong><?php echo $row['precio'] ?></p>
                <p class="card-text"><strong>Existencia:</strong><?php echo $row['existencia'] ?></p>
                <p class="card-text"><strong>Imagen:</strong><img class="img_cliente" src="<?php echo $foto; ?>"></p>
                <a href="cliente.php?modulo=detalleproducto&id=<?php echo $row['id'] ?>" class="btn btn-primary">Ver</a>
                
                
              </div>
            </div>
        </div>
    <?php
    }

    ?>
</div>
<?php
if ($totalPaginas > 0) {
?>
    <nav aria-label="Page navigation">
        <ul class="pagination">
            <?php
            if ($paginaSel != 1) {
            ?>
                <li class="page-item">
                    <a class="page-link" href="cliente.php?modulo=productos&pagina=<?php echo ($paginaSel - 1); ?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
            <?php
            }
            ?>

            <?php
            for ($i = 1; $i <= $totalPaginas; $i++) {
            ?>
                <li class="page-item <?php echo ($paginaSel == $i) ? " active " : " "; ?>">
                    <a class="page-link" href="cliente.php?modulo=productos&pagina=<?php echo $i; ?>"><?php echo $i; ?></a>
                </li>
            <?php
            }
            ?>
            <?php
            if ($paginaSel != $totalPaginas) {
            ?>
                <li class="page-item">
                    <a class="page-link" href="cliente.php?modulo=productos&pagina=<?php echo ($paginaSel + 1); ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            <?php
            }
            ?>
        </ul>
    </nav>
<?php
}
?>