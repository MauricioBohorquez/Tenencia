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
<title>Mascotas</title>
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
        <br><br>
    <div class="container">
        <h1 align="center" style="background-color: black; color:aliceblue">Listado de Mascotas</h1>
    </div>
    <br>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">idMascota</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Raza</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Color</th>
                    <th scope="col">Alimento</th>
                    <th scope="col">Usuario_id</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php

                include ('../config/conexion.php');
                $idUsuario = isset($_GET['idUsuario']) ? $_GET['idUsuario'] : '';

                $query = $conexion->query("SELECT * FROM perfilmascota WHERE Usuario_Id = '" . $idUsuario . "'");

                while ($resultado = $query->fetch_assoc()) {
                ?>
                    <tr>
                        <th scope="row"> <?php echo $resultado['idMascota'] ?> </th>
                        <th scope="row"> <?php echo $resultado['Nombre'] ?> </th>
                        <th scope="row"> <?php echo $resultado['Edad'] ?> </th>
                        <th scope="row"> <?php echo $resultado['Raza'] ?> </th>
                        <th scope="row"> <?php echo $resultado['Sexo'] ?> </th>
                        <th scope="row"> <?php echo $resultado['Tipo'] ?> </th>
                        <th scope="row"> <?php echo $resultado['Color'] ?> </th>
                        <th scope="row"> <?php echo $resultado['Alimento'] ?> </th>
                        <th scope="row"> <?php echo $resultado['Usuario_Id']?> </th>
                        <th>
                            <a href="../views/editarMascota.php?idMascota=<?php echo $resultado['idMascota'] ?>" class="btn btn-warning">Editar</a>
                            <a href="../views/eliminarMascota.php?idMascota=<?php echo $resultado['idMascota'] ?>" class="btn btn-danger">Eliminar</a>
                        </th>

                    </tr>
                <?php
                }
                ?>




            </tbody>
        </table>
    </div>


    <br>
    <div class="container">
    <center>
        <a href="../views/crearMascota.php" class="btn btn-success">Nueva Mascota</a>
    </center>
    </div>
    <script>
        function(){}
    </script>

</body>

</html>
