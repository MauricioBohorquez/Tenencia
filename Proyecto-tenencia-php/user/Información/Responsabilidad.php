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
    				<h1 class="pet_taital" style="color: #000"> <strong>Responsabilidad</strong></h1>
    				<p class="lorem_text" style="color: #000">
                    Tienes que tener en cuenta Para ser el propietario de una mascota tendrás que ser demasiado responsable, 
        			no es el echo solo tener una mascota porque tu hijo la quería, ahora que decidiste tenerla, empieza la verdadera responsabilidad.
        			Una mascota requiere tiempo, si más del que imaginas, también requiere dinero, aproximadamente de un millón y medio anual en el caso de un gato
        			y entre tres y cinco millones anuales en el caso de un perro, oye lo más importante, nunca te olvides de él. <br/>
					No porque le tengas lujos, alguien que lo cuide, un hogar donde no pase frio, comida y juguetes, quiere decir que ya seas un propietario responsable 
					los animales de compañía son seres sintientes, necesitan de nuestros cuidados de nuestro tiempo, afecto y comprensión. </p>
    			</div>
    			</div>
                <div class="col-sm-6">
    				<div class="footer-img"><img src="../../../images/cat2.jpg" style="width: 170%;"></div>
    			</div>
    	</div>
    </div>
		
	<div class="gallery_section_2">
    	<div class="container">
    		<div class="row">
				<div class="col-sm-4">
    			<div class="col-sm-10">
    				<div class="footer-img"><img src="https://p0.pxfuel.com/preview/427/899/584/animals-dog-dogs-pet.jpg" style="width: 80%;"></div>
    				<div class="footer-img"><img src="https://cdn.pixabay.com/photo/2013/05/30/18/17/bernese-mountain-dog-114780_960_720.jpg" style="width: 100%;"></div>
    			</div>
    			</div>
    			<div class="col-sm-6">
    				<p class="lorem_text" style="color: #000">
                    Lo primero que debes hacer es asegurarte de que lo éstes alimentando bien, darle una comida que sea 
                    acorde a su especie, que no contenga tantas grasas, que sea croquetas, no darle de nuestras sobras, esto para no dañar su 
                    flora intestinal, también cambiarle el agua constantemente para evitar enfermedades parasitarias.
                </p>
    			</div>
    			
    		</div>
    	</div>
    </div>

	<div class="gallery_section_2">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-8">
    				<p class="lorem_text" style="color: #000">
		Que tenga su propio espacio, al igual que tu necesita su propio espacio, que pueda tener la libertad 
        de deambular por todo el hogar. <br/>
        Sacarlo constantemente para su recreación, Esta fase es un poco difícil ya que las personas propietarias de perros estudian o trabajan,
        sus horarios son muy estrechos, los podrían sacar escasamente en la noche cuando lleguen a sus casas, es recomendable dejarlo cuidando 
        con alguien que le pueda suplir sus necesidades a lo largo del día. <br/>
        Un tema muy importante que es en el que la mayoría de las personas fallan es en llevarlos periódicamente al veterinario
        esto es algo primordial si queremos tener una mascota debemos tener en cuenta la asistencia al veterinario, y esto no es únicamente cuando está enfermo
        ya que deben asistir para que los bañen y queden libres de pulgas y garrapatas, estas son muy peligrosas, no solo para ellos sino también para nosotros 
        o los niños.<br><br>
        El otro asunto por el que hay que llevarlos es para la limpieza de glándulas de los oídos y las glándulas del recto, esto debe hacerlo siempre un profesional
        para evitar infeccionas, recomendación, por lo menos una vez al mes llevarlo al veterinario para un chequeo general y limpieza. <br/>
        Todo procedimiento que se le tenga que realizar a la mascota, <strong>llévalo con un profesional</strong> no experimentes remedios en tu mascota, lo que veas en internet 
        puede que sirva, pero si no sirve estas perdiendo tiempo que puede ser crucial para eliminar eficazmente o diagnosticar problemas serios, que sean más graves de lo que piensas
        recuerda lo que te dije anteriormente <strong>Una mascota requiere tiempo y dinero</strong>, no sea que por ahorrarte un dinero, arriesgues la salud de tu mascota </p>
    			</div>
    			<div class="col-sm-4">
    			<div class="col-sm-10">
    				<div class="footer-img"><img src="https://p1.pxfuel.com/preview/458/559/599/kitten-animal-pet-paws-scaredy-cat-couch.jpg" style="width: 80%;"></div>
    				<div class="footer-img"><img src="https://p0.pxfuel.com/preview/685/39/744/dachshund-dog-animal-pet.jpg" style="width: 100%;"></div>
    			    <div class="footer-img"><img src="https://p1.pxfuel.com/preview/267/406/436/dogs-grass-meadow-pitbull.jpg" style="width: 80%;"></div>
    				<div class="footer-img"><img src="https://p1.pxfuel.com/preview/283/282/476/golden-retriever-puppy-dog-puppy-cute-puppy.jpg" style="width: 100%;"></div>
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
    				<div class="footer-img"><img src="https://p0.pxfuel.com/preview/363/520/42/boxer-dog-portrait-photo-animal.jpg" style="width: 80%;"></div>
    				<div class="footer-img"><img src="https://p1.pxfuel.com/preview/734/476/42/siberian-husky-husky-dog-canine-pet-animal.jpg" style="width: 100%;"></div>
    			</div>
    			</div>
    			<div class="col-sm-6">
    				<p class="lorem_text" style="color: #000">
                    No dejar a los animales en la calle ya que esto hace que se les prendan infecciones y pulgas, además de que las pueden traer a la casa y contagiarnos 
        hay enfermedades que necesitan de un tratamiento que cada sesión esta entre 200 y 600 mil pesos por sesión 
        así que es mejor prevenir estas enfermedades poniéndoles atención y no dejándolos salir a deambular solos. <br/>
        cuando lo saques para que haga sus necesidades, por favor recoge los desechos, se un poco más consiente. </p>
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