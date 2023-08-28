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

				<div class="col-md-6">
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
    				<h1 class="pet_taital" style="color: #000"> <strong>Respeto</strong></h1>
    				<p class="lorem_text" style="color: #000">
					Los animales están presentes en nuestras vidas, son seres que sienten, que luchan por sobrevivir en este mundo
        al igual que nosotros, merecen respeto, amor, merecen que les enseñemos a los niños a ser más comprensivos
        y cariñosos con los animales, tenemos que concientizarnos acerca del maltrato animal y es que en varios países
        hay cifras alarmantes de maltrato animal y abandono, hay un incremento muy grande en fundaciones y albergues, 
        dicen que cada día encuentran un promedio de cuatro perros, tres víctimas de maltrato y uno víctima de abandono. </p>
    			</div>
    			<div class="col-sm-4">
    				<div ><img src="https://img.freepik.com/foto-gratis/lindo-mascota-collage-aislado_23-2150007412.jpg?w=2000" style="max-width: 100%;"></div>
    			</div>
    		</div>
    	</div>
    </div>
		
	<div class="gallery_section_2">
    	<div class="container">
    		<div class="row">
				
			<div class="col-sm-6">
    				<div ><img src="https://estaticos-cdn.prensaiberica.es/clip/b84dc4c1-d4db-4bd4-896c-37986d62b6b4_16-9-discover-aspect-ratio_default_0.jpg" style="max-width: 100%;"></div>
    			</div>
    			<div class="col-sm-6">
    				<p class="lorem_text" style="color: #000">
		Es verdad que no podemos obligar a ninguna persona a que ame a los animales, eso sería imposible, pero podemos 
        por ejemplo concientizar a los niños para que le brinden el respeto necesario esto para que desde pequeños sepan que estos seres
        merecen tanto amor y aprecio como cualquier otro. </p>
    			</div>
    		</div>
    	</div>
    </div>

	<div class="gallery_section_2">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-8">
    				<p class="lorem_text" style="color: #000">
					Los animales que nosotros consideramos mascotas, se convierten en nuestros verdaderos amigos, compañeros, que nos ayudan a salir 
        un poco de la monotonía y nunca nos defraudan siempre están ahí para nosotros y lo estarán para toda la vida, 
        por esta razón es que nosotros de algún modo deberíamos recompensarlos, pagarles con calidad de vida la felicidad que nos brindan al
        existir y ayudarnos en nuestras etapas de vida, esto brindándole todos los cuidados y procesos que ayuden a su bienestar. </p>
    			</div>
    			<div class="col-sm-4">
    			<div class="col-sm-10">
    				<div class="footer-img"><img src="https://www.hogarmania.com/archivos/202102/animales-reducir-asma-ninos-3-668x400x80xX-1.jpg" style="width: 100%;"></div>
    				<div class="footer-img"><img src="https://images3.alphacoders.com/113/thumbbig-113909.webp" style="width: 100%;"></div>
    			</div>
    			</div>
    		</div>
    	</div>
    </div>
	<div class="gallery_section_2">
    	<div class="container">
    		<div class="row">
			<div class="col-sm-4">
    			<div class="col-sm-16">
                <div class="footer-img"><img src="https://www.webconsultas.com/sites/default/files/styles/wc_adaptive_noticia__small/public/noticias/mascotas-claves-bienestar-ninos.jpg" style="width: 80%;"></div>
                    <div class="footer-img"><img src="https://images3.alphacoders.com/205/thumbbig-205405.webp" style="width: 80%;"></div>
    			</div>
    			</div>
    			<div class="col-sm-7">
    				<p class="lorem_text" style="color: #000">
					Es importante que <strong>NO COMPRES UN ANIMAL</strong>, <strong>ADOPTALO</strong>, suena un poco autoritario, 
        			pero hay que adoptar un animal que este sufriendo, de maltrato, de abandono, estos animales de verdad si te necesitan, 
        			necesitan de un techo, agua, comida, amor, cuidados veterinarios básicos, etc. 
				<br><br>
				<strong style="color: #000">Algunas páginas por si estas interesado en adoptar </strong><br/>
        		<A href="https://huellitas.social/">Huellitas</A><br/>
        		<A href="http://fundacionmia.org/adopciones/">Fundación Mia</A><br/>
        		<A href="https://www.adoptanocompres.org/">Adopta No Compres</A>
			</p>
				</div>
    		</div>		
    	</div>
    </div>
	<div class="gallery_section_2">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-8">
    				<h1 class="pet_taital" style="color: #000"> <strong>Tips para volver a nuestros niños respetuosos con las mascotas</strong></h1>
    				<p class="lorem_text" style="color: #000">
					<strong>1. Poner el ejemplo. </strong><br/>
        Dar el ejemplo de cómo cuidas la vida animal, de cómo te encargas de cada detalle que necesiten, que ellos vean 
        como los cuidas, recuerda que ellos siguen el ejemplo de sus padres y hay que ser consistente con las reglas que pones,
        como por ejemplo si le dices que está prohibido empujar al gato, y luego no le echas comida.
		<br><br>
		<strong>2. Que conozca animales. </strong><br/>
        Hay personas citadinas, que por algún motivo no pueden tener una mascota en sus hogares, es importante que lo lleves al 
        zoológico alguna finca o granja para que aprender a amar y apreciar a los animales, podrán ver de cerca como es la manera 
        indicada para cuidar la vida animal.
		<br><br>
		<strong>3. leerle a cerca de animales. </strong><br/>
        La mayoría de los niños ama que les leas, se puede aprovechar esta oportunidad para leerles cuentos
        que se traten sobre animales, también puedes mostrarles programas de animales, esto para que ellos 
        se den cuenta que los animales tienen necesidades y momentos difíciles al igual que nosotros.
		<br><br>
		<strong>4. Enseñarle que hacer si su mascota se comporta mal. </strong><br/>
        Hay que enseñarles a los pequeños, que hay día en los que los animales no quieren ser molestados, 
        pueden reaccionar mal ya que no quiere y los estas obligando, hay que enseñarle al pequeño que no debe actuar con violencia,
        más bien esperar que el animal se tranquilice y dejarlo quieto cuando no quiere que lo molesten.
		<br><br>
		<strong>5. Ofrecerle un lugar seguro a tu mascota. </strong>
        Es muy importante que nuestra mascota tenga un lugar donde no sea molestado por los ruidos, ni las molestas 
        travesuras de nuestros pequeños, en donde pueda descansar y estar a gusto, hacer el lugar inaccesible para los niños, 
        así pueden estar tanto tu como tu mascota en paz; esto porque la relación entre tu hijo y tu mascota puede ser estresante.
				    </p>
    			</div>
    			<div class="col-sm-4">
    			<div class="col-sm-10">
    				<div class="footer-img"><img src="../../../images/gallery-img3.jpg" style="width: 80%;"></div>
    				<div class="footer-img"><img src="https://w0.peakpx.com/wallpaper/47/741/HD-wallpaper-brown-dog-near-pond-animals-no-people-nobody-vertical.jpg" style="width: 100%;"></div>
    				<div class="footer-img"><img src="https://p1.pxfuel.com/preview/712/389/130/grey-cat-sitting-vertical.jpg" style="width: 100%;"></div>
                    <div class="footer-img"><img src="https://p1.pxfuel.com/preview/118/424/64/dog-puppy-pet-animals-cute.jpg" style="width: 80%;"></div>
    				<div class="footer-img"><img src="https://p1.pxfuel.com/preview/943/681/275/dog-puppy-pet-outside.jpg" style="width: 100%;"></div>
                    <div class="footer-img"><img src="https://p1.pxfuel.com/preview/689/734/412/cat-kitten-animal-pet.jpg" style="width: 80%;"></div>
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