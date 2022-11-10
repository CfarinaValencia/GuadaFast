

<?php
function conn(){
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "ecommerce";

    $conectar = mysqli_connect($host, $user, $pass, $db);
    return $conectar;

    if(!$conectar){
        die("conexion fallida");
    }
}

    ?>