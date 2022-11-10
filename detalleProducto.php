<?php
include_once "db_ecommerce.php";
$conectar=conn();
$id = mysqli_real_escape_string($conectar, $_REQUEST['id'] ?? '');
$queryProducto = "SELECT id,nombre,precio,existencia, descripcion FROM productos where id='$id';  ";
$resProducto = mysqli_query($conectar, $queryProducto);
$rowProducto = mysqli_fetch_assoc($resProducto);
?>
<!-- Default box -->
<div class="card card-solid">
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-sm-6">
                <h3 class="d-inline-block d-sm-none"><?php echo $rowProducto['nombre'] ?></h3>
                <?php
                    include_once "db_ecommerce.php";
                    $conectar = conn();
                    $query = "SELECT  foto from productos WHERE id='$id';
                        ";
                    $res = mysqli_query($conectar, $query);
                    while ($row = mysqli_fetch_assoc($res)) {
                        if($row['foto'] !='img_producto.png'){
                            $foto = 'images/uploads/' .$row['foto'];
                        }else{
                            $foto= 'images/'.$row['foto'];
                        }
                    
                    ?>
                <div class="col-12">
                    <img src="<?php echo $foto
                    ?>" class="product-image">
                    <?php
                    }
                    ?>
                </div>
                <div class="col-12 product-image-thumbs">
                    

                        
                 
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <h1 class="my-3"><?php echo $rowProducto['nombre'] ?></h1>
                <h3>Descripcion</h3>
                <h5 class="my-3"><?php echo $rowProducto['descripcion'] ?></h5>
                

                <hr>
                <h4>Existencias: <?php echo $rowProducto['existencia'] ?></h4>



                <div class="bg-gray py-2 px-3 mt-4">
                    <h2 class="mb-0">

                        $<?php
                         echo  $rowProducto['precio'] ?>
                    </h2>
                </div>
            
                <div class="mt-4">
                    <button class="btn btn-primary btn-lg btn-flat" id="agregarCarrito"
                        data-id ="<?php echo $_REQUEST['id'] ?>"
                        data-nombre="<?php echo $rowProducto['nombre'] ?>"
                        data-foto="<?php echo $foto?>"
                        data-precio="<?php echo $rowProducto['precio'] ?>"
                        >
                        <i class="fas fa-cart-plus fa-lg mr-2"></i>
                        Agregar al carrito
                    </button>
                </div>
                
                <div class="mt-4">
                    Cantidad
                <input type="number" class="form-control" id="cantidadProducto" value="1">
                </div>
                
                <div class="mt-4 product-share">
                    <a href="#" class="text-gray">
                        <i class="fab fa-facebook-square fa-2x"></i>
                    </a>
                    <a href="#" class="text-gray">
                        <i class="fab fa-twitter-square fa-2x"></i>
                    </a>
                    <a href="#" class="text-gray">
                        <i class="fas fa-envelope-square fa-2x"></i>
                    </a>
                    <a href="#" class="text-gray">
                        <i class="fas fa-rss-square fa-2x"></i>
                    </a>
                </div>

            
        </div>
        <div class="row mt-4">
            <nav class="w-100">
                <div class="nav nav-tabs" id="product-tab" role="tablist">
                    <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Descripcion</a>
                    <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comments</a>
                    <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Rating</a>
                </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
                <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"><h3 class="my-3"><?php echo $rowProducto['descripcion'] ?></h3> </div>
                <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"> Vivamus rhoncus nisl sed venenatis luctus. Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum, venenatis odio. Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna. Duis gravida ex pulvinar mauris ornare, eget porttitor enim vulputate. Mauris hendrerit, massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl dui sit amet eros. Nulla turpis lorem, dignissim a sapien eget, ultrices venenatis dolor. Curabitur vel turpis at magna elementum hendrerit vel id dui. Curabitur a ex ullamcorper, ornare velit vel, tincidunt ipsum. </div>
                <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et erat. Etiam dignissim aliquam ligula, aliquet feugiat nibh rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac molestie lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at, consectetur nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum a. Proin dictum, urna ut varius consectetur, sapien justo porta lectus, at mollis nisi orci et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper. Donec varius massa at semper posuere. Integer finibus orci vitae vehicula placerat. </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->

</div>
<!-- /.card -->