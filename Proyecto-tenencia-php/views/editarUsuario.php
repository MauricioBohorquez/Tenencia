<?php
include('../config/conexion.php');
$idUsuario = isset($_GET['idUsuario']) ? $_GET['idUsuario'] : '';
$sql = "SELECT * FROM perfilusuario WHERE idUsuario = '" . $idUsuario . "'  ";
$resultado = mysqli_query($conexion, $sql);
while ($fila = mysqli_fetch_assoc($resultado)) {

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Actualizar Uusario</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="../../css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="../../css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="../../images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="../../css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="../css/owl.carousel.min.css">
<link rel="stylesheet" href="../css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <style>
    form {
            display: flex;
            flex-direction: column;
            align-items: center;
        } 
        .select-center {
            display: flex;
            justify-content: center;
            width: 200px; /* Define el ancho deseado */
        }
    </style>

    </head>

    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <h1 align="center ">Actualizar Datos De Usuario</h1>
        <form align="center" method="POST">
            <input type="hidden" name="idUsuario" value="<?php echo $fila['idUsuario'] ?>">
            <input type="text" name="name" placeholder="Digite su nombre" value="<?php echo $fila['name'] ?>">
            <br><br>
            <input type="text" name="age" placeholder="Digite su edad " value="<?php echo $fila['age'] ?>">
            <br><br>
            <input type="text" name="FechaNacimiento" placeholder="Digite fecha nacimiento " value="<?php echo $fila['FechaNacimiento'] ?>">
            <br><br>
            <input type="text" name="Cedula" placeholder="Digite su cedula" value="<?php echo $fila['Cedula'] ?>">
            <br><br>
            <select name="Sexo" class="select-center">
            <option value="M" <?php if ($fila['Sexo'] === 'M') echo 'selected'; ?>>Masculino</option>
            <option value="F" <?php if ($fila['Sexo'] === 'F') echo 'selected'; ?>>Femenino</option>
            <option value="Otro" <?php if ($fila['Sexo'] === 'Otro') echo 'selected'; ?>>Otro</option>
            </select>
            <br><br>
            <input type="text" name="CiudadResidencia" placeholder="Ciudad de residencia" value="<?php echo $fila['CiudadResidencia'] ?>">
            <br><br>
            <input type="text" name="NumeroTelefono" placeholder="Digite su telefono" value="<?php echo $fila['NumeroTelefono'] ?>">
            <br><br>
            <input type="text" name="Email" placeholder="Digite su correo" value="<?php echo $fila['Email'] ?>">
            <br><br>
            <input type="password" name="clave" placeholder="Digite una contraseña" value="<?php echo $fila['clave'] ?>">
            <br><br>
            <input type="submit" value="Actualizar" class="btn btn-success">
        </form>

        

    
    </body>

    </html>

    <?php

    $idUsuario = isset($_GET['idUsuario']) ? $_GET['idUsuario'] : '';
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $age = isset($_POST['age']) ? $_POST['age'] : '';
    $FechaNacimiento = isset($_POST['FechaNacimiento']) ? $_POST['FechaNacimiento'] : '';
    $Cedula = isset($_POST['Cedula']) ? $_POST['Cedula'] : '';
    $Sexo = isset($_POST['Sexo']) ? $_POST['Sexo'] : '';
    $CiudadResidencia = isset($_POST['CiudadResidencia']) ? $_POST['CiudadResidencia'] : '';
    $NumeroTelefono = isset($_POST['NumeroTelefono']) ? $_POST['NumeroTelefono'] : '';
    $Email = isset($_POST['Email']) ? $_POST['Email'] : '';
    $clave = isset($_POST['clave']) ? $_POST['clave'] : '';
    if ($name != null || $age != null || $FechaNacimiento != null || $Cedula != null || $Sexo != null || $CiudadResidencia != null || $NumeroTelefono != null || $Email != null || $clave != null) {

        $sql2 = "UPDATE perfilusuario SET name='" . $name . "', age='" . $age . "', FechaNacimiento='" . $FechaNacimiento . "', Cedula='" . $Cedula . "', Sexo='" . $Sexo . "', CiudadResidencia='" . $CiudadResidencia . "', NumeroTelefono='" . $NumeroTelefono . "', Email='" . $Email . "', clave='" . $clave . "' WHERE idUsuario = '" . $idUsuario . "' ";
        mysqli_query($conexion, $sql2);

        if ($sql2) {
            header("location:../admin/menuUsuarios.php");
        } else {
            echo "error al actualizar";
        }
    }


    ?>
    <?php } ?>