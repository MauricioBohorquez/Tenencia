
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
        $idMascota = isset($_GET['idMascota']) ? $_GET['idMascota'] : '';
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
            background-image: url('https://i.pinimg.com/736x/91/6f/9b/916f9b24c874088bcb868a6563452760.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-attachment: fixed; 
            opacity: 1;
        }
        </style>
    
    
</head>

<body>
    <div class="col-md-4">
		<div><a href="Informacion.php"><img src="../imagenes/tenencia.png" style="position: absolute; top: 40px; left: 30px; width: 220px; height: 100px;"></a></div>
	</div>  
    <br><br><br><br><br><br><br><br><br><br>
    <div class="container">
        <h1 align="center" style="color:aliceblue">Información de la(s) mascota</h1>
    </div>
    
    <div class="container">
    <div class="table-responsive">
        <table class="table" style="color: #FFF">
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
                    <th scope="col">Usuario</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = $conexion->query("SELECT * FROM perfilmascota WHERE Usuario_Id = '" . $idUsuario . "'");

                while ($resultado = $query->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $resultado['idMascota'] ?></td>
                        <td><?php echo $resultado['Nombre'] ?></td>
                        <td><?php echo $resultado['Edad'] ?></td>
                        <td><?php echo $resultado['Raza'] ?></td>
                        <td><?php echo $resultado['Sexo'] ?></td>
                        <td><?php echo $resultado['Tipo'] ?></td>
                        <td><?php echo $resultado['Color'] ?></td>
                        <td><?php echo $resultado['Alimento'] ?></td>
                        <td><?php echo $resultado['Usuario_Id'] ?></td>
                        <td>
                            <a href="../user/editarMascota.php?idMascota=<?php echo $resultado['idMascota'] ?>" class="btn btn-warning">Editar</a>
                            <a href="../user/eliminarMascota.php?idMascota=<?php echo $resultado['idMascota'] ?>" class="btn btn-danger">Eliminar</a>
                        </td>
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