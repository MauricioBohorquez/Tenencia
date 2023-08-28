<?php
    session_start();
    include ('../config/conexion.php') ;
    
    // Verifica si el usuario está autenticado
    if (isset($_SESSION['idUsuario'])) {
        // Obtén el idUsuario de la sesión
        $idUsuario = $_SESSION['idUsuario'];
        
        // Crea un enlace al perfil del usuario con su ID
        $perfilLink = "perfilUsuario.php?idUsuario=$idUsuario";
    }
    ?>
    <?php include ('../config/conexion.php'); 
        $idUsuario = isset($_GET['idUsuario']) ? $_GET['idUsuario'] : '';
    ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"">


<link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="../../css/AdminLTE.css">
  
  <!-- AdminLTE Skins -->
  <link rel="stylesheet" href="../../css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

   <!-- DataTables -->
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../..css/all.css">

   <!-- Daterange picker -->
  <link rel="stylesheet" href="../../bower_components/bootstrap-daterangepicker/daterangepicker.css">

  <!-- Morris chart -->
  <link rel="stylesheet" href="../../bower_components/morris.js/morris.css">
  <!-- owl stylesheets --> 
  <link rel="stylesheet" href="../../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../../css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

    
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="../../css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="../../css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="../../images/tenencia.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="../../css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="../../css/owl.carousel.min.css">
<link rel="stylesheet" href="../../css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <style>
         body {
            background-image: url('https://images4.alphacoders.com/713/71366.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-attachment: fixed; /* Esto ayuda a mantener la imagen de fondo en su lugar al hacer scroll */
            opacity: 1;
        }
        </style>

<body>
<div class="col-md-4">
		<div><a href="Informacion.php"><img src="../imagenes/tenencia.png" style="position: absolute; top: 40px; left: 30px; width: 220px; height: 100px;"></a></div>
	</div>
    

    <br><br><br><br><br><br><br><br><br><br>
    
    <div class="container">
        <h1 align="center" style="color:aliceblue">Información del usuario</h1>
    </div>
   
    <div class="container">
    <div class="table-responsive">
        <table class="table" style="color: #FFF">
            <thead>
                <tr>
                    <th scope="col">idUsuario</th>
                    <th scope="col">name</th>
                    <th scope="col">age</th>
                    <th scope="col">FechaNacimiento</th>
                    <th scope="col">Cedula</th>
                    <th scope="col">Genero</th>
                    <th scope="col">CiudadResidencia</th>
                    <th scope="col">NumeroTelefono</th>
                    <th scope="col">correo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = $conexion->query("SELECT * FROM perfilusuario WHERE idUsuario = '" . $idUsuario . "'");

                while ($resultado = $query->fetch_assoc()) {
                ?>
                    <tr>
                        <th scope="row"> <?php echo $resultado['idUsuario'] ?> </th>
                        <th scope="row"> <?php echo $resultado['name'] ?> </th>
                        <th scope="row"> <?php echo $resultado['age'] ?> </th>
                        <th scope="row"> <?php echo $resultado['FechaNacimiento'] ?> </th>
                        <th scope="row"> <?php echo $resultado['Cedula'] ?> </th>
                        <th scope="row"> <?php echo $resultado['Sexo'] ?> </th>
                        <th scope="row"> <?php echo $resultado['CiudadResidencia'] ?> </th>
                        <th scope="row"> <?php echo $resultado['NumeroTelefono'] ?> </th>
                        <th scope="row"> <?php echo $resultado['Email'] ?> </th>
                        <th>
                            <a href="../user/editarUsuario.php?idUsuario=<?php echo $resultado['idUsuario'] ?>" class="btn btn-warning">Editar</a>
                        </th>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </div>
</div>
<div align="center">
    <?php if (isset($perfilLink)) { ?>
        <a href="<?php echo $perfilLink; ?>" style="font-size: 20px;" class="btn btn-success">Volver</a>
    <?php } ?>
</div>           

</body>

</html>