<?php
    session_start();
    include ('../../config/conexion.php') ;
    
    // Verifica si el usuario está autenticado
    if (isset($_SESSION['idUsuario'])) {
        // Obtén el idUsuario de la sesión
        $idUsuario = $_SESSION['idUsuario'];
        
        // Crea un enlace al perfil del usuario con su ID
        $perfilLink = "../perfilUsuario.php?idUsuario=$idUsuario";
    }
    ?>
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

</head>
<body>
    
<!-- section banner start -->
<div class="container">
	<div class="header_section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4">
					<div><a href="inicio"><img src="../../../images/tenencia.png"></a></div>
				</div>

				<div class="col-md-8">
					<div class="menu_text">
					<li class="active">
							 <div id="myNav" class="overlay">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                             <div class="overlay-content">
                             <a href="./Respeto.php" style="font-size: 20px;">Respeto</a>
                                <a href="./Responsabilidad.php" style="font-size: 20px;">Responsabilidad</a>
                                <a href="./ProcesoDeVacunacion.php" style="font-size: 20px;">Proceso de vacunación</a>
                                <a href="./ProcesoDeDesparacitacion.php" style="font-size: 20px;">Proceso de desparacitación</a>
                                <a href="./Microchip.php" style="font-size: 20px;">Microchip</a>
                                <a href="./Esterilizacion.php" style="font-size: 20px;">Esterilización</a>
								<?php if (isset($perfilLink)) { ?>
           						 <a href="<?php echo $perfilLink; ?>" style="font-size: 20px;">Perfil</a>
        						<?php } ?>
                            </div>
                            </div>
                             <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
							 
                             </li>
							 
				    </div>
				</div>
				
			</div>
		</div>
		<div class="gallery_section_2">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-8">
    				<h1 class="pet_taital" style="color: #000"> <strong>Proceso De Desparasitación</strong></h1>
    				<p class="lorem_text" style="color: #000">
                    Al igual que el proceso de vacunación el proceso de desparasitación es de vital importancia, 
        al comienzo de su ida ya que su madre le pasa parásitos por medio de la leche luego de las 24 horas
        desde su nacimiento y es clave realizar este proceso para comenzar con el proceso de vacunación, la desparasitación ayudara 
        a prevenir algunas enfermedades en perros y gatos ya que elimina los parásitos intestinales y externos, para esto es clave
        asistir al veterinario, para que elimine tanto los parásitos eteriores como (pulgas y garrapatas) y parásitos intestinales como 
        (nematodos, cestodos, planos, redondos y otros tipos) en el caso de que no lo desparasites y tu mascota se llene de estos parásitos 
        puede causarle mucho daño, pueden que se generen episodios de vomito diarrea, un pelaje delgado y feo 
        alergias o problemas más graves como los cardiacos y neurológicos.
                </p>
    			</div>
    			<div class="col-sm-4">
    			<div class="col-sm-10">
    				<div class="footer-img"><img src="data:image/jpeg;base64,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" style="width: 80%;"></div>
    				<div class="footer-img"><img src="data:image/jpeg;base64,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" style="width: 100%;"></div>
					<div class="footer-img"><img src="https://p1.pxfuel.com/preview/985/901/172/dog-chihuahua-a-doll-tee-cup-little.jpg" style="width: 100%;"></div>
				
				</div>
    			</div>
    		</div>
    	</div>
    </div>
		
	<div class="gallery_section_2">
    	<div class="container">
    		<div class="row">
			<div class="col-sm-4">
    			<div class="col-sm-10">
    				<div class="footer-img"><img src="data:image/jpeg;base64,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" style="width: 80%;"></div>
					<div class="footer-img"><img src="https://blog.agrocampo.com.co/wp-content/uploads/2020/02/desparasitante-para-gato.jpg" style="width: 100%;"></div>
					<div class="footer-img"><img src="https://p1.pxfuel.com/preview/974/911/617/animals-pet-cat-cute-majestic-furry.jpg" style="width: 100%;"></div>
    			</div>
    			</div>
    			<div class="col-sm-7">
    				<p class="lorem_text" style="color: #000">
                    Es recomendable que este procedimiento se haga cada 3 a 6 meses, dependiendo de factores como si son 
        internos o externos y su tipo en específico. <br/>
        <strong>Desparasitación interna</strong> <br/>
        Algunos son nemátodos, cestodos, tenias, protozoos, estos afectan a diferentes órganos. <br/>
        <strong>Desparasitación externa</strong> <br/>
        Esta desparasitación es la que realizamos para eliminar pulgas, piojos, garrapatas, moscas, ácaros, estos podemos verlos, en altas cantidades 
        Estos parásitos afectan seriamente a nuestras mascotas. <br/> 
        la desparasitación de los perros y gatos es importante a las mascotas se le hace una desparasitación más seguido que a los 
        humanos u otras especies ya que están constantemente expuestos a ambientes en los que pueden contraer estos parásitos. <br/>
        para todos estos parásitos hay productos específicos, por eso es importante que no le des cualquiera,
        siempre ve al veterinario para que trate específicamente el parasito que está afectando al animal.
    			</div>
    		</div>
    	</div>
    </div>

	
    </div>
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/jquery-3.0.0.min.js"></script>
	<script src="js/plugin.js"></script>
	<!-- sidebar -->
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="js/custom.js"></script>
	<!-- javascript --> 
	<script src="js/owl.carousel.js"></script>
	<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
	<script>
		
		$(document).ready(function(){
		$(".fancybox").fancybox({
			openEffect: "none",
			closeEffect: "none"
			});
			
			$(".zoom").hover(function(){
			
			$(this).addClass('transition');
			}, function(){
			
			$(this).removeClass('transition');
			});
			});
			function openNav()
			{
				document.getElementById("myNav").style.width = "100%";
			}

			function closeNav() 
			{
				document.getElementById("myNav").style.width = "0";
			}
			
	</script> 

</body>
</html>