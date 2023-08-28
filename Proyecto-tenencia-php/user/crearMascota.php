<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"">


<link rel="stylesheet" href="../../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../../bower_components/Ionicons/css/ionicons.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="../../../css/AdminLTE.css">
  
  <!-- AdminLTE Skins -->
  <link rel="stylesheet" href="../../../css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

   <!-- DataTables -->
  <link rel="stylesheet" href="../../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../../../bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../..css/all.css">

   <!-- Daterange picker -->
  <link rel="stylesheet" href="../../../bower_components/bootstrap-daterangepicker/daterangepicker.css">

  <!-- Morris chart -->
  <link rel="stylesheet" href="../../../bower_components/morris.js/morris.css">
  <!-- owl stylesheets --> 
  <link rel="stylesheet" href="../../../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../../../css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

    
<link rel="stylesheet" type="text/css" href="../../../css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="../../../css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="../../../css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="../../../images/tenencia.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="../../../css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="../../../css/owl.carousel.min.css">
<link rel="stylesheet" href="../../../css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    
    <?php include ('../config/conexion.php'); ?>
   </head>
<body>

    
    <h1 align="center ">Registrar nueva mascota</h1>
    <form  method="post" align="center">
        <input type="text" name="Nombre" id="nombre" placeholder="Digite el nombre">
        <br><br>
        <input type="text" name="Edad" id="edad" placeholder="Digite la edad ">
        <br><br>
        <input type="text" name="Raza" id="Raza" placeholder="Digite la raza ">
        <br><br>
        <input type="text" name="Sexo" id="sexo" placeholder="Digite el genero">
        <br><br>
        <input type="text" name="Tipo" id="tipo" placeholder="Digite el tipo">
        <br><br>
        <input type="text" name="Color" id="color" placeholder="digite el color">
        <br><br>
        <input type="text" name="Alimento" id="alimento" placeholder="Digite el alimento">
        <br><br>
        <input type="text" name="email" id="email" placeholder="Digite el correo de usuario">
        <br><br>
        <input type="submit" value="Registrar" class="btn btn-success">
    </form>
    <?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    //traer los datos por post

$nombre = $_POST['Nombre']; 
$edad = $_POST['Edad']; 
$Raza = $_POST['Raza'];
$sexo = $_POST['Sexo'];
$tipo = $_POST['Tipo'];
$color = $_POST['Color'];
$alimento = $_POST['Alimento'];
$Email = $_POST['email'];
 
//insertar en la base de datos 
$sql = "INSERT INTO perfilmascota (Nombre, Edad, Raza, Sexo, Tipo, Color, Alimento, Usuario_Id) VALUES ('$nombre', '$edad', '$Raza', '$sexo', '$tipo', '$color', '$alimento', (SELECT idUsuario FROM perfilusuario where Email = '$Email' ))";
$query = mysqli_query($conexion, $sql);
if($query){

    echo "correcto";
    header("location:perfilUsuario.php");
   
   }else{
   
       echo "incorrecto";
   }

}
?>
</body>
</html>