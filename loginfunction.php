<?php
$alert = '';
session_start();
if(!empty($_SESSION['active']))
{
    header('location: panel.php');
}else{
    if(!empty($_POST))
    {
        if(empty($_POST['email']) || empty($_POST['pass']))
        {
        $alert ='Ingrese su usuario y su clave';
    }else{
        require_once "db_ecommerce.php";
        $conectar =conn();
        $email = mysqli_real_escape_string($conectar,$_POST['email']);
        $pass = md5(mysqli_real_escape_string($conectar, $_POST['pass']));

        $query = mysqli_query($conectar, "SELECT * FROM usuarios WHERE email = '$email' AND pass = '$pass'");
        $result = mysqli_num_rows($query);

        if($result > 0)
        {
            $data = mysqli_fetch_array($query);
            $_SESSION['active'] = true;
            $_SESSION['id'] = $data['idusuario'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['pass'] = $data['pass'];
            $_SESSION['nombre'] = $data['nombre'];
            

            header('location: panel.php');
        }else{
            $alert = 'El usuario o la clave son incorrectos';
            session_destroy();
            }
        }
    }  

}
    
    //$conectar =conn();
    // $validar_login = mysqli_query($conectar, "SELECT * FROM usuarios 
    // WHERE email='$email' and 
    // pass='$pass'");
  

   /// $filas=mysqli_fetch_array($validar_login);

   // if($filas['id']>1){
       // $_SESSION['pass'] = $email;
      //  header("location: panel.php");
     //  exit;
    //}else
    //if($filas['id']>1){
       // $_SESSION['nombre'] = $email;
       // header("location: panel.php");
       // exit;
    //}else
    //{
       // echo'
       // <script>
           // alert("Usuario no exite, por favor verifique los datos introducidos");
           // window.location = "login.php";
       // </script>
       // ';

       // exit;
    //}



?>