

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
    <?php include('../config/conexion.php'); ?>
    </head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <h1 align="center ">Registrar nuevo usuario</h1>
    
    <form action="../views/enviarATabla.php" method="post" align="center">
        <input type="text" name="nombre" placeholder="Digite su nombre">
        <br><br>
        <input type="text" name="edad" placeholder="Digite su edad ">
        <br><br>
        <input type="date" name="fechaNacimiento" placeholder="Digite fecha nacimiento ">
        <br><br>
        <input type="text" name="cedula" id="cedula" placeholder="Digite su cedula">
        <br><br>
            <select name="sexo" align="center" >
                <option selected>Selecciona tu genero</option>
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
                <option value="Otro">otro</option>
            </select>
        <br><br>
        <input type="text" name="ciudadResidencia" placeholder="Ciudad de residencia">
        <br><br>
        <input type="text" name="telefono"  placeholder="Digite su telefono">
        <br><br>
        <input type="text" name="email" placeholder="Digite su correo">
        <br><br>
        <input type="password" name="clave" placeholder="Digite una contraseña">
        <br><br>
        <input type="submit" value="Registrar" class="btn btn-success">
        <div id="alerta" class="alert alert-danger" style="display: none;"></div>
    </form>
</body>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const formulario = document.querySelector('form');
    const alerta = document.getElementById('alerta');

    formulario.addEventListener('submit', function(event) {
        const campos = formulario.querySelectorAll('input[type="text"], input[type="date"], input[type="password"], select');
        let camposVacios = false;

        campos.forEach(function(campo) {
            if (!campo.value.trim()) {
                camposVacios = true;
            }
        });

        if (camposVacios) {
            alerta.style.display = 'block';
            alerta.textContent = 'Por favor, llena todos los campos.';
            event.preventDefault(); // Evita el envío del formulario
        } else {
            alerta.style.display = 'none';
        }
    });
});
</script>

</html>