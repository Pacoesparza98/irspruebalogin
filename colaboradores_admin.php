<?php
require 'tb_colaboradores.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Menú Principal | IRS</title>
        <link rel="stylesheet" href="css/colaboradores.css"> 
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
<body>
    <!--COLABORADORES-->
<section>
<label>COLABORADORES</label>
<!--TABLA COLABORADORES CON PHP-->
<table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <th scope="col">Rol</th>
          </tr>
        </thead>
        <tbody id="datos">
        <?php
         foreach ($query as $row){ ?>
          <tr>
           <td><?php echo $row['nombre']; ?> </td>
           <td><?php echo $row['correo']; ?> </td>
           <td><?php echo $row['rol']; ?> </td>
          <tr>  
        </tbody>
        <?php
         }
         ?>
      </table>


</section>
<!--COLABORADORES-->

</body>
</html>