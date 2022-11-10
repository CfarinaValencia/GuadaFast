<?php
if (isset($_REQUEST['registrar'])) {
    include_once "db_ecommerce.php";
    $conectar=conn();
    $mensaje="";
    $correo = mysqli_real_escape_string($conectar, $_REQUEST['email'] ?? '');
    $contra = md5(mysqli_real_escape_string($conectar, $_REQUEST['pass'] ?? ''));
    $name = mysqli_real_escape_string($conectar, $_REQUEST['nombre'] ?? '');

    

    $query = "INSERT INTO clientes 
        (email       ,pass       ,nombre) VALUES
        ('" . $correo . "','" . $contra . "','" . $name . "');
        ";
    $res = mysqli_query($conectar, $query);
    if ($res) {
        echo'
        <script>
            alert("PERFECTO");
            window.location = "login.php";
        </script>
    ';
    $validar =mysqli_query($conectar, "SELECT * FROM clientes WHERE email = '$correo || nombre='$name'");
    if(mysqli_num_rows($validar) > 0){
        $mensaje.="<h5 class='text-danger text-center'>El Nombre y/o Correo Electronico
        ya se encuentran registrados</h5";
        exit();
    }

    
    } else {

        echo'
        <script>
            alert("ERROR EN EL REGISTRO");
            window.location = "login.php";
        </script>
    ';

    }
}
?>