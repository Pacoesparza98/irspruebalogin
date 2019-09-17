<!DOCTYPE html>
<html>
<head>
    <title>Login | IRS</title>
    <link rel="stylesheet" href="css/master.css">  
</head>

<body>
require("conexion.php");
    <div class="login-box">
        <img class="avatar" src="img/irs.png" alt="Logo de IRS">
        <h1>Ingresar</h1>

        <form method="POST" action="login.php" autocomplete="off">
            <!--Usuario-->
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario"  required placeholder="Ingresa el usuario" autocomplete="ÑÖcompletes">

            <!--Contraseña-->
            <label for="password">Clave</label>
            <input type="password" name="contraseña"  required placeholder="Ingresa la clave" autocomplete="ÑÖcompletes">

            <input type="submit" value="Entrar"/>

            <a href="#">Olvidaste tu clave?</a>
        </form>
    </div>
    
</body>

</html>