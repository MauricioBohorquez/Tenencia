
<?php
include('../config/conexion.php');
session_start();
if (!isset($_SESSION['idUsuario'])) {
    header('location: ../index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Perfil usuario</title>
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
<link rel="stylesheet" href="../css/owl.carousel.min.css">
<link rel="stylesheet" href="../css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

<style>
        .tarjeta1 {
            background-image: url('https://static.vecteezy.com/system/resources/previews/002/245/753/large_2x/cartoon-character-cute-cat-and-dog-vector.jpg');
            width: 200px;
            height: 200px;
            background-color: lightgray;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            cursor: pointer;
            margin: 50px 180px;
            background-size: cover; 
            background-position: center; 
            color: black; 
            padding: 20px; 
            text-align: center; 
  
        }

        .formulario {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
        }
        .dropdown {
            position: relative;
            display: inline-block;
         }

        .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        }

        .dropdown:hover .dropdown-content {
        display: block;
        }
        .dropdown-content a {
        display: block;
        padding: 10px;
        text-decoration: none;
        color: black;
        }
    </style>
</head>
<body>       
    <?php
    $idUsuario = isset($_GET['idUsuario']) ?  $_GET['idUsuario'] : '';
    $query1 = $conexion->query("SELECT * FROM perfilusuario WHERE idUsuario = '" . $idUsuario . "'");
    $numreg = $query1->num_rows; 
    //echo $idUsuario;
    if ($numreg >= 1) {
        $resultado = $query1->fetch_assoc();
    ?>
    <div class="header_section_perfil">
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
								<a class="" href="informacionUsuario.php?idUsuario=<?php echo $resultado['idUsuario']; ?>" style="font-size: 30px;">Perfil</a>
                                <a href="Informacion.php" style="font-size: 30px;">Información</a>
                                <?php
                                    $query2 = $conexion->query("SELECT * FROM perfilmascota");
                                    if ($resultado1 = $query2->fetch_assoc()) {
                                ?>
                                <a style="font-size: 30px;" href="../user/informacionMascota.php?idUsuario=<?php echo $resultado['idUsuario']; ?>">Perfil Mascotas</a>
                                <?php
                                }
                                ?>
                                <a style="font-size: 30px;" href="../cerrarSesion.php" class="btn btn-danger">Cerrar Sesión</a>
                            </div>
                            </div>
                             <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
							 
                             </li>
						</ul>
                        </div>
					</div>
			</div>
		</div>
        <div class="banner_main" align="center">
			<div class="container">
				<div class="ram">
					<div class="row">
					    <div class="col-sm-12">
						    <h1 class="taital">Perfil Del Usuario</h1>   
					    </div>
				    </div>
				</div>
			</div>
		</div>
        <br><br><br><br>
        <div class="tarjeta1" onclick="mostrarFormulario()">Agrega tu mascota</div>
        <div id="formulario" class="formulario"  style="background-color: #7dbec2; color: white;">
            <h2 align="center">Informacion del peludo</h2>
            <form method="POST" align="center" >
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
                <input type="submit" value="Guardar" class="btn btn-success">
                <div id="alerta" class="alert alert-danger" style="display: none;"></div>
            </form>
            <button onclick="ocultarFormulario()" >Cerrar</button>
        </div> 
    <?php
    }else{
        //
    }
    ?>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //traer los datos por post

        $nombre = $_POST['Nombre'];
        $edad = $_POST['Edad'];
        $Raza = $_POST['Raza'];
        $sexo = $_POST['Sexo'];
        $tipo = $_POST['Tipo'];
        $color = $_POST['Color'];
        $alimento = $_POST['Alimento'];
        $usuario = $resultado['idUsuario'];

        //insertar en la base de datos
        $sql = "INSERT INTO perfilmascota (Nombre, Edad, Raza, Sexo, Tipo, Color, Alimento, Usuario_Id) VALUES ('$nombre', '$edad', '$Raza', '$sexo', '$tipo', '$color', '$alimento', '$usuario')";
        $query = mysqli_query($conexion, $sql);
        if ($query) {
            echo "guardado"
    ?>
    <?php
        } else {

            echo "incorrecto";
        }
    }
    ?>  
    
</body>
        <script>
            function mostrarFormulario() {
                document.getElementById("formulario").style.display = "block";
            }

            function ocultarFormulario() {
                document.getElementById("formulario").style.display = "none";
            }
        </script>
        <script>
    function openNav() {
    document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
   document.getElementById("myNav").style.width = "0";
   }
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const formulario = document.querySelector('#formulario form');
    const alerta = document.getElementById('alerta');

    formulario.addEventListener('submit', function(event) {
        const campos = formulario.querySelectorAll('input[type="text"]');
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