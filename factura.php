<?php

    $total=$_REQUEST['total']??'';
    include_once "stripe/init.php";

    \Stripe\Stripe::setApiKey("sk_test_51M1FFtD9cSHhFduCYbQ1pwgarOspgi3XsOp2XNYHYxSpBLHQC3anh18PdQdMSdP17Y4hgoQSogxUfSBGlxUtBdus00BYAFsmy8");
    $toke=$_POST['stripeToken'];

    $charge=\Stripe\Charge::create([
        'amount'=>10000,
        'currency'=>'usd',
        'description'=>'Pago de ecommerce',
        'source'=>$toke
    ]);
    if($charge['captured']){
        $conectar=conn();
        $queryVenta="INSERT INTO ventas 
        (idCli                       ,idPago             ,fecha) values
        ('".$_SESSION['idCliente']."','".$charge['id']."',now());
        ";
        $resVenta=mysqli_query($conectar,$queryVenta);
        $id=mysqli_insert_id($conectar);
        if($resVenta){
            echo "La venta fue exitosa con el id=".$id;
        }
    }
        ?>
