<?php
include('../config/conexion.php');
$idMascota = $_GET['idMascota'];
$sql = "SELECT * FROM perfilmascota WHERE idMascota = '" . $idMascota . "'  ";
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
<title>crear usuario</title>
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
    </head>

    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <h1 align="center ">Actualizar Datos De Mascota</h1>
        <form align="center" method="POST">
            <input type="hidden" name="masId" value="<?php echo $fila['idMascota'] ?>">
            <input type="text" name="Nombre" placeholder="Digite el nombre" value="<?php echo $fila['Nombre'] ?>">
            <br><br>
            <input type="text" name="Edad" placeholder="Digite la edad " value="<?php echo $fila['Edad'] ?>">
            <br><br>
            <input type="text" name="Raza" placeholder="Digite la raza" value="<?php echo $fila['Raza'] ?>">
            <br><br>
            <input type="text" name="Sexo" placeholder="Digite el sexo" value="<?php echo $fila['Sexo'] ?>">
            <br><br>
            <input type="text" name="Tipo" placeholder="Digite el tipo" value="<?php echo $fila['Tipo'] ?>">
            <br><br>
            <input type="text" name="Color" placeholder="Digite el color" value="<?php echo $fila['Color'] ?>">
            <br><br>
            <input type="text" name="Alimento" placeholder="digite el alimento" value="<?php echo $fila['Alimento'] ?>">
            <br><br>
            <input type="hidden" name="fkusu" value="<?php echo $fila['Usuario_Id'] ?>">
            <input type="submit" value="Actualizar" class="btn btn-success">
        </form>
    <?php } ?>
    </body>

    </html>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //traer los datos por post
        $nombre = isset($_POST['Nombre']) ? $_POST['Nombre'] : '';
        $edad = isset($_POST['Edad']) ? $_POST['Edad'] : '';
        $raza = isset($_POST['Raza']) ? $_POST['Raza'] : '';
        $sexo = isset($_POST['Sexo']) ? $_POST['Sexo'] : '';
        $tipo = isset($_POST['Tipo']) ? $_POST['Tipo'] : '';
        $color = isset($_POST['Color']) ? $_POST['Color'] : '';
        $alimento = isset($_POST['Alimento']) ? $_POST['Alimento'] : '';


        if ($nombre != null || $edad != null || $raza != null || $sexo != null || $tipo != null || $color != null || $alimento != null) {

            $sql2 = "UPDATE perfilmascota SET Nombre='" . $nombre . "', Edad='" . $edad . "', Raza='" . $raza . "', Sexo='" . $sexo . "',Tipo='" . $tipo . "', Color='" . $color . "', Alimento='" . $alimento . "' WHERE idMascota = '" . $idMascota . "' ";
            mysqli_query($conexion, $sql2);

            if ($sql2) {
                header("location:../admin/menuMascotas.php");
            } else {
                echo "error al actualizar";
            }
        }
    }




    ?>