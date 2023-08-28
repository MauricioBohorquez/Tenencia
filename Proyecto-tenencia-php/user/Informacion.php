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
	
       

<!DOCTYPE html>
<html lang="es">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Tenencia Responsable</title>
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
<link rel="stylesheet" href="../../css/owl.carousel.min.css">
<link rel="stylesheet" href="../../css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>
<body> 
    
	<div class="header_section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4">
					<div><a href="../../index.html"><img src="../imagenes/tenencia.png"></a></div>
				</div>
				<div class="col-md-8">
					<div class="menu_text">
						<ul>	
							<li class="last">
							</li>
							<li class="active">
							 <div id="myNav" class="overlay">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                             <div class="overlay-content">
                                <a href="./Información/Respeto.php" style="font-size: 20px;">Respeto</a>
                                <a href="./Información/Responsabilidad.php" style="font-size: 20px;">Responsabilidad</a>
                                <a href="./Información/ProcesoDeVacunacion.php" style="font-size: 20px;">Proceso de vacunación</a>
                                <a href="./Información/ProcesoDeDesparacitacion.php" style="font-size: 20px;">Proceso de desparacitación</a>
                                <a href="./Información/Microchip.php" style="font-size: 20px;">Microchip</a>
                                <a href="./Información/Esterilizacion.php" style="font-size: 20px;">Esterilización</a>
								<?php if (isset($perfilLink)) { ?>
           						 <a href="<?php echo $perfilLink; ?>" style="font-size: 20px;">Perfil</a>
        						<?php } ?>
                            </div>
                            </div>
                             <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
							 
                             </li>
						</ul>
                        </div>
					</div>
			</div>
		</div>
		<div class="banner_main">
			<div class="container">
				<div class="ram">
					<div class="row">
					    <div class="col-sm-12">
							<br>
						    <h1 class="taital">Nuestros Mejores Amigos</h1>
						    <p class="consectetur_text">Cuida de ellos siempre</p>
						    
					    </div>
				    </div>
				</div>
				<div class="box">
					<h1 class="numbar_text">01</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="header_section_perfilTip">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-8">
    				<h1 class="about_taital_1"><strong><span style="color: #f7941d;">Tips</span></strong></h1>
					<br><br>
					<p class="consectetur_text2">Tienes que tener en cuenta que una mascota requiere tiempo y dinero.</p>
					<p class="consectetur_text2">Enseñar trucos es divertido y fortalece su obediencia. ¡Presta atención a sus logros y recompénsalos!.</p>
					<p class="consectetur_text2">Programa visitas regulares al veterinario y mantén sus vacunas al día. ¡Un cuerpo sano es una cola que siempre se menea!.</p>
					<p class="consectetur_text2">Considera un seguro de mascotas para situaciones médicas inesperadas. Tu tranquilidad vale la inversión.</p>
				</div>
    		</div>
    	</div>
    </div>
	<!-- section about end -->
	<!-- section gallery start -->
    <div class="gallery_main layout_padding">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-12">
    				<h1 class="about_taital"><strong><span style="color: #ffffff;">perros</span> gatos</strong></h1>
				    <p class="sed_text"> Aquí tienes algunos datos interesantes sobre perros y gatos </p>

    			</div>
    		</div>
    		<div class="gallery_images">
    			<div class="row">
    				<div class="col-sm-7">
						<div class="gallery_blog">
                           <img src="../../images/cat4.jpg" style="max-width: 100%; height: 300px; width: 100%;">
                        <div class="overlay">
                            <div class="text"><strong>PuppyDogPetAnimal</strong></div>
                        </div>
					    </div>
    				</div>
    				<div class="col-sm-5">
						<div class="gallery_blog">
                           <img src="../../images/gallery-img2.jpg" style="max-width: 100%; height: 300px; width: 100%;">
                        <div class="overlay">
                            <div class="text"><strong>PuppyDogPetAnimal</strong></div>
                        </div>
					    </div>
    				</div>
    			</div>
    		</div>
    		<div class="gallery_images">
    			<div class="row">
    				<div class="col-sm-5">
						<div class="gallery_blog">
                           <img src="../../images/gallery-img3.jpg" style="max-width: 100%; width: 100%;">
                        <div class="overlay">
                            <div class="text"><strong>PuppyDogPetAnimal</strong></div>
                        </div>
					    </div>
    				</div>
    				<div class="col-sm-7">
						<div class="gallery_blog">
                           <img src="../../images/cat1.jpg" style="max-width: 100%; height: 300px; width: 100%;">
                        <div class="overlay">
                            <div class="text"><strong>PuppyDogPetAnimal</strong></div>
                        </div>
					    </div>
						<div class="gallery_blog">
                           <img src="../../images/gallery-img5.jpg" style="max-width: 100%; height: 297px; width: 100%;">
                        <div class="overlay">
                            <div class="text"><strong>PuppyDogPetAnimal</strong></div>
                        </div>
					    </div>
    				</div>
    			</div>
    		</div>
			
    	</div>
    </div>
    <div class="gallery_section_2">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-8">
    				<h1 class="pet_taital"> <strong>Perros</strong></h1>
    				<p class="lorem_text">
						<strong> Enriquecimiento mental y físico: </strong>
						<br>
					    Los perros necesitan estimulación mental y física para estar saludables y felices. Proporciona juguetes interactivos, paseos regulares y oportunidades para explorar.
						<br>
						<strong>Socialización temprana:</strong>
						<br>
						La socialización es clave para evitar problemas de comportamiento. Exponer a los cachorros a diferentes personas, lugares y situaciones desde temprana edad ayuda a construir confianza.
						<br>
						<strong>Razas y necesidades:</strong>
						<br>
						Investiga sobre la raza antes de adoptar. Diferentes razas tienen diferentes necesidades de ejercicio, atención y cuidado. Asegúrate de que la raza se adapte a tu estilo de vida.
						<br>
						<strong>Entrenamiento positivo:</strong>
						<br>
						Utiliza métodos de entrenamiento positivos y recompensas en lugar de castigos. Esto fortalecerá el vínculo entre tú y tu perro y fomentará un buen comportamiento. </p>
    			
    			</div>
    			<div class="col-sm-4">
    				<div class="dog_img"><img src="../../images/dog-img.png" style="max-width: 100%;"></div>
    			</div>
    		</div>
    	</div>
    </div>
	<div class="gallery_section_3">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-8">
    				<h1 class="pet_taital"> <strong>Gatos</strong></h1>
    				<p class="lorem_text">
						<strong> Enriquecimiento ambiental: </strong>
						<br>
						Los gatos son cazadores por naturaleza. Proporciona juguetes que estimulen su instinto de caza y crea áreas de juego y escalada en tu hogar.
						<br>
						<strong>Rascadores:</strong>
						<br>
						Proporciona suficientes rascadores para tus gatos. Esto no solo ayuda a mantener sus uñas en buen estado, sino que también les proporciona una forma de marcar territorio y estirarse.
						<br>
						<strong>Cajas de arena limpias:</strong>
						<br>
						Asegúrate de tener suficientes cajas de arena limpias y accesibles para tus gatos. La regla general es una caja por gato más una extra, y limpia las cajas regularmente.
						<br>
						<strong>Estimulación mental:</strong>
						<br>
						Los gatos también necesitan estimulación mental. Usa juguetes interactivos, esconde golosinas en lugares para que las busquen y rota los juguetes para mantener su interés.</p> 
    			</div>
				<div class="col-sm-4">
    				<div class="dog_img"><img src="../../images/catlogos.png" style="max-width: 100%;"></div>
    			</div>
				</div>
    	</div>
    </div>
    <script>
    function openNav() {
    document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
   document.getElementById("myNav").style.width = "0";
   }
</script>
     
</body>
</html>
