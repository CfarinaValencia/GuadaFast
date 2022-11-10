<?php

    if (isset($_REQUEST['login'])) {
        session_start();
        $email = $_REQUEST['email'] ?? '';
        $pasword = $_REQUEST['pass'] ?? '';
        $pasword = md5($pasword);
        include_once "db_ecommerce.php";
        $conectar=conn();
        $query = "SELECT id,email,nombre from clientes where email='" . $email . "' and pass='" . $pasword . "';  ";
        $res = mysqli_query($conectar, $query);
        $row = mysqli_fetch_assoc($res);
        if ($row) {
          $_SESSION['idCliente'] = $row['id'];
          $_SESSION['emailCliente'] = $row['email'];
          $_SESSION['nombreCliente'] = $row['nombre'];
          header("location: cliente.php");
        } else {
      ?>
          <div class="alert alert-danger" role="alert">
            Error de login <img src="admin/images/haha.jpg" width="200">
          </div>
      <?php
        }
      }
      ?>
