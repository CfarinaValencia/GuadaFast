<?php
if (isset($_REQUEST['contact'])) {
    include_once "db_ecommerce.php";
    $conectar=conn();
    $mensaje="";
    $na = mysqli_real_escape_string($conectar, $_REQUEST['nombre'] ?? '');
    $co = mysqli_real_escape_string($conectar, $_REQUEST['email'] ?? '');
    $celular = mysqli_real_escape_string($conectar, $_REQUEST['celular'] ?? '');
    $asunto = mysqli_real_escape_string($conectar, $_REQUEST['asunto'] ?? '');
    $descripcion = mysqli_real_escape_string($conectar, $_REQUEST['descripcion'] ?? '');

    

    

    $query = "INSERT INTO contactos
        (nombre,      email       , celular,  asunto       ,descripcion) VALUES
        ('" . $na . "','" . $co . "','" . $celular . "', '" . $asunto . "','" . $descripcion . "');
        ";
    $res = mysqli_query($conectar, $query);
    if ($res) {
        echo'
        <script>
            alert("Tu registro de contacto se realizo con exito");
            window.location = "entrada.php";
        </script>
    ';
    

    
    } else {

        echo'
        <script>
            alert("ERROR EN EL REGISTRO");
            window.location = "entrada.php";
        </script>
    ';

    }
}
?>