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
    				<h1 class="pet_taital" style="color: #000"> <strong>Proceso De Vacunación</strong></h1>
    				<p class="lorem_text" style="color: #000">
                    <strong>Vacunación perros:</strong><br/>
        Cuando el cachorro nace las primeras veinticuatro horas la madre les pasa por medio de la leche unos
        anticuerpos que lo protegen de enfermedades estomacales, pero estos anticuerpos solo se transmiten las primeras veinticuatro horas, 
        pasado este tiempo el cachorro queda desprotegido y es cuando empieza la madre por medio del proceso de lactancia a trasmitirle parásitos 
        por esto es importante que antes de iniciar con el proceso de vacunación se desparasite debidamente al cachorro. <br/><br/>
        La primera vacuna que debe de suministrársele es la de parvovirus la primera dosis esta debe aplicarse antes de los 45 días de nacido. <br/><br/>
        Cuando el cachorro tenga 9 semanas de edad es la segunda vacuna que se le aplica esta es para la protección contra el moquillo canino, 
        adenovirus tipo 2, Hepatitis infecciosa C y Leptospirosis, y es aquí donde se le aplica la segunda dosis de la vacuna contra el parvovirus, 
        también y si se quiere hay que aplicarle la vacuna contra el coronavirus. <br/><br/>
        En la semana 12 de vida se le aplica una segunda dosis de la vacuna que es contra el moquillo, y la tercera vacuna de parvovirus. <br/><br/>
        Al cuarto mes de vida se le aplica la vacuna de la rabia. <br/><br/>
        El plan que se debe seguir anualmente es: Parvovirus/ Moquillo/ Hepatitis / Para influenza / Leptospirosis y Rabia.
                </p>
    			</div>
    			<div class="col-sm-4">
    			<div class="col-sm-10">
    				<div class="footer-img"><img src="https://t1.ea.ltmcdn.com/es/posts/0/7/5/las_reacciones_postvacunales_en_perros_mas_frecuentes_22570_orig.jpg" style="width: 80%;"></div>
    				<div class="footer-img"><img src="https://i.pinimg.com/236x/7b/16/ff/7b16fff4d372760af19900baa15ff500.jpg" style="width: 100%;"></div>
					<div class="footer-img"><img src="https://www.webconsultas.com/sites/default/files/styles/wc_adaptive_noticia__small/public/noticias/mascotas-claves-bienestar-ninos.jpg" style="width: 80%;"></div>
    				<div class="footer-img"><img src="https://p1.pxfuel.com/preview/802/541/209/welsh-corgi-pembroke-sight-corgi-dog-puppy-pet.jpg" style="width: 100%;"></div>
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
    				<div class="footer-img"><img src="https://www.tiendanimal.es/articulos/wp-content/uploads/2017/10/vacunas-para-gatos-1200x900.jpg" style="width: 80%;"></div>
					<div class="footer-img"><img src="https://t1.ea.ltmcdn.com/es/posts/0/3/2/efectos_secundarios_de_las_vacunas_para_gatos_23230_orig.jpg" style="width: 100%;"></div>
					<div class="footer-img"><img src="https://www.hogarmania.com/archivos/201511/vacunacion-desparasitacion-gato-668x400x80xX.jpg" style="width: 100%;"></div>
					<div class="footer-img"><img src="https://www.65ymas.com/uploads/s1/11/92/26/calendario-vacunacion-gatos.jpeg" style="width: 100%;"></div>
					<div class="footer-img"><img src="https://fotografias.lasexta.com/clipping/cmsimages02/2022/03/21/3C792F21-D229-40E0-AB95-F2D3E53A620A/gato-atigrado_98.jpg?crop=1920,1080,x0,y102&width=1900&height=1069&optimize=high&format=webply" style="width: 100%;"></div>
				</div>
    			</div>
    			<div class="col-sm-7">
    				<p class="lorem_text" style="color: #000">
                    <strong>Vacunación gatos:</strong><br/>
        Al igual que hable anteriormente con los perros, antes de empezar con el plan de vacunación es primordial que el felino sea debidamente desparasitado, y hacerle un test de leucemia e inmunodeficiencia.<br/><br/>
        A los dos meses de edad hay que aplicarle la vacuna trivalente que actúa frente al pan leucopenia, el Calci virus y la rinotraqueitis.<br/><br/>
        A los dos meses y medio la de leucemia felina. <br/><br/>
        A los tres meses se le debe aplicar la segunda dosis de la vacuna trivalente. <br/><br/>
        A los tres meses y medio debe de aplicársele una segunda dosis de la leucemia. <br/><br/>
        A los cuatro meses se le debe aplicar la vacuna de la rabia. <br/><br/>
        Y anualmente repetir la trivalente y la rabia.
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