<?php

   session_start();
   require("conexion.php");
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña']; 
    $errors = array();

$query = "SELECT * FROM usuarios where nombre = '$usuario' and clave = '$contraseña' ";

$results = mysqli_query($con,$query);

if(mysqli_num_rows($results)>0){
   $logged_user = mysqli_fetch_assoc($results);

   if($logged_user['rol']=='Director'){

    $_SESSION['user'] = $logged_user;
    $_SESSION['success']  = "You are now logged in";


    header('Location:ordenes_servicio.php');


}elseif($logged_user['rol']=='Gerente'){

   $_SESSION['user'] = $logged_user;
   $_SESSION['success']  = "You are now logged in";

 header('Location:colaboradoresadmin.php');

}elseif($logged_user['rol']=='Inspector'){

   $_SESSION['user'] = $logged_user;
   $_SESSION['success']  = "You are now logged in";

 header('Location:menuadmin.php');
   
}else{
$_SESSION['user'] = $logged_USER;
$_SESSION['success']  = "You are now logged in";

header('location: login-view.php');
}
}else{
 
   header('location: login-view.php');
}
?>