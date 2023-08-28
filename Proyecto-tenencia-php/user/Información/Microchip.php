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
					<div><a href=""><img src="../../../images/tenencia.png"></a></div>
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
    				<h1 class="pet_taital" style="color: #000"> <strong>Micro chip</strong></h1>
    				<p class="lorem_text" style="color: #000">
					El microchip es una herramienta muy eficaz e importante en la vida de nuestros peludos, nos ayuda a tenerlos más controlaos y saber dónde se encuentran en todo momento, esto nos beneficia un montón en caso de que se pierda, se lo roben, o pertenezca a personas que lo hayan abandonado y tengan que responder con asuntos legales. </p>
    			</div>
    			<div class="col-sm-4">
    			<div class="col-sm-10">
    				<div class="footer-img"><img src="http://www.mpitrufquen.cl/Intranet/Noticias/DidecoMICROCHIPgrande.jpg" style="width: 80%;"></div>
					<div class="footer-img"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzycff2dY9MBn3MRLy395B9iMXyJIxzdWIjw&usqp=CAU" style="width: 100%;"></div>
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
    				<div class="footer-img"><img src="https://img.freepik.com/vector-premium/microchip-perros-gatos-otros-animales-aislados-sobre-fondo-blanco-mascotas-microchip-identificacion-permanente-dni-tecnologia-rfid-ilustracion-vectorial_254622-61.jpg" style="width: 80%;"></div>
    			</div>
    			</div>
    			<div class="col-sm-10">
                <h1 class="pet_taital" style="color: #000"> <strong>¿Qué es el Microchip?</strong></h1>
    				<p class="lorem_text" style="color: #000">
                    El microchip es un sistema electrónico de identificador de animales, es tan pequeño como un grano de arroz y está conformado por dos partes uno es el sistema electrónico la parte con la que podemos rastrarlo y la segunda es la cobertura que es de un vidrio biocompatible suave que no genera alergias. </p>
    			</div>
    		</div>
    	</div>
    </div>

	<div class="gallery_section_2">
    	<div class="container">
    		<div class="row">
			
    			<div class="col-sm-10">
                <h1 class="pet_taital" style="color: #000"> <strong>Implantación del Microchip.</strong></h1>
    				<p class="lorem_text" style="color: #000">
                    Este proceso tiene que ser llevado a cabo por un veterinario profesional, este tiene que introducir la capsula en el cuerpo del animal en la nuca ayudado de un inyector para traspasar la piel, este dispositivo contiene unos códigos únicos.<br/> Este procedimiento solo debe realizarse una vez en la vida, la información del perro o gato queda registrada en la base de datos del censo canino que tiene la comunidad autónoma, en esta se almacena información como: teléfono de contacto, dirección, nombre del propietario.<br/> Se recomienda implantarlo después de los dos meses de vida del animal en adelante.
                </p>
    			</div>
    			<div class="col-sm-6">
    			<div class="col-sm-6">
    				<div class="footer-img"><img src="data:image/jpeg;base64,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" style="width: 100%;"></div>
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
    				<div class="footer-img"><img src="https://p1.pxfuel.com/preview/848/10/435/dog-puppy-animal-cute-pet.jpg" style="width: 80%;"></div>
					<div class="footer-img"><img src="https://conexioncapital.co/wp-content/uploads/2018/11/WhatsApp-Image-2018-11-22-at-10.18.01-AM.jpeg" style="width: 100%;"></div>
					<div class="footer-img"><img src="https://t2.ea.ltmcdn.com/es/posts/2/3/7/microchip_para_perros_precio_y_para_que_sirve_24732_600_square.jpg" style="width: 100%;"></div>
    			</div>
    			</div>
    			<div class="col-sm-7">
                <h1 class="pet_taital" style="color: #000"> <strong>Utilidad.</strong></h1>
    				<p class="lorem_text" style="color: #000">
                    Nos aporta muchas ventajas como:<br/>Esto nos da un soporte legal de que somos los propietarios de nuestras mascotas, nos hace legalmente responsable de ellas. <br/>Si el animal se pierde o es abandonado los veterinarios las protectoras y autoridades que tengan el lector pueden acceder a todos nuestros datos. <br/>Las sanciones para las personas que abandonen un animal que tenga el microchip son fuertemente sancionadas también para los que los maltratan el microchip ayuda a saber quién es el dueño y responsable legal del animal que está siendo maltratado o abandonado. <br/>En caso de que se lo roben también se podrá ayudar a localizarlo y dar con el paradero de las personas que hacen estas cosas y poder desmantelar sus redes.
					 </p>
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