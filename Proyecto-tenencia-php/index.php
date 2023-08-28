<?php
session_start();

include('config/conexion.php');
$alertaLogin = false;
$correoExiste = false;

// Verificar si el formulario de inicio de sesión ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['form2_submit'])) {
    $Email = $_POST['email'];
    $clave = md5(stripslashes(strip_tags(htmlspecialchars(trim($_POST['clave'])))));
    
    // Consulta para verificar si el correo existe
    $verificarCorreo = "SELECT COUNT(*) AS existe FROM perfilusuario WHERE Email = '$Email'";
    $resultadoVerificacion = $conexion->query($verificarCorreo);
    $row = $resultadoVerificacion->fetch_assoc();
    if ($row['existe'] > 0) {
        $correoExiste = true;

        // Verificar credenciales si el correo existe
        $consulta = "SELECT * FROM perfilusuario WHERE Email = '$Email' AND clave = '$clave'";
        $resultado1 = $conexion->query($consulta);
        $numreg = $resultado1->num_rows;

        if ($numreg == 1) {
            $resultado = $resultado1->fetch_assoc();
            $_SESSION['idUsuario'] = $resultado['idUsuario'];

            if ($_SESSION['idUsuario'] == 60) {
                header("location:admin/menuUsuarios.php");
            } else {
                header("location:user/perfilUsuario.php?idUsuario=" . $_SESSION['idUsuario']);
            }
        } else {
            $alertaLogin = "Correo y/o contraseña incorrectos.";
        }
    } else {
        $alertaLogin = "El correo no está registrado.";
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['form1_submit'])) {
    
    // Traer los datos por POST
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $cedula = $_POST['cedula'];
    $sexo = $_POST['sexo'];
    $ciudadResidencia = $_POST['ciudadResidencia'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $clave = md5($_POST['clave']);
        
    // Verificar si el correo existe
    $verificarCorreo = "SELECT COUNT(*) AS existe FROM perfilusuario WHERE Email = '$email'";
    $resultadoVerificacion = $conexion->query($verificarCorreo);
    $row = $resultadoVerificacion->fetch_assoc();
    if ($row['existe'] > 0) {
        $correoExiste = true;
         
    } else {
        // Continuar con la inserción en la base de datos
        $clave = md5($_POST['clave']);

        // Insertar en la base de datos 
        $sql = "INSERT INTO perfilusuario (name, age, FechaNacimiento, Cedula, Sexo, CiudadResidencia, NumeroTelefono, Email, clave) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("sssssssss", $nombre, $edad, $fechaNacimiento, $cedula, $sexo, $ciudadResidencia, $telefono, $email, $clave);
    
        // Ejecutar la sentencia de inserción
        if ($stmt->execute() === TRUE) {
            // Obtener el último ID insertado
            $idInsertado = $conexion->insert_id;

            echo "ID del usuario insertado: " . $idInsertado;
            header("location:user/perfilUsuario.php?idUsuario=$idInsertado");
        } else {
            echo "Error al insertar el registro: " . $stmt->error;
        }
    }
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
<title>Tenencia Responsable</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<style>
         body {
            background-image: url('./imagenes/cat.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-attachment: fixed; /* Esto ayuda a mantener la imagen de fondo en su lugar al hacer scroll */
            opacity: 1;
        }
        .h1{
            color: orange;
        }
        .tarjeta1 {
            background-image: url('https://img.freepik.com/vector-premium/personaje-dibujos-animados-dueno-perro-feliz-acariciando-cachorro-ilustracion-plana-hombre-lindo-perrito_74855-20604.jpg');
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
            background-size: center; 
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
            align-items: center;
        }
        .contenedor {
            display: flex;
            justify-content: center; /* Centra horizontalmente */
            align-items: center; /* Centra verticalmente si es necesario */
            height: 20vh; /* Ajusta la altura del contenedor según tus necesidades */
        }
        </style>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>   
    <div class="col-md-4">
        <div><a href="../index.html"><img src="./imagenes/tenencia.png"></a></div>
    </div>
    <div class="contenedor">
        <div class="tarjeta1" onclick="mostrarFormulario()">Registrate</div>
    </div>
    <div id="formulario" class="formulario"  style="background-color: #7dbec2; color: white;">
        <h2 align="center">Tus datos</h2>
    
        <form  method="post" align="center">
                <input type="text" name="nombre" placeholder="Digite su nombre">
                <br><br>
                <input type="text" name="edad" placeholder="Digite su edad ">
                <br>
                <label for="fechaNacimiento" name="fechaNacimiento" id="fechaNacimientoLabel" style="color: #FFF" style="width: 220px; height: 20px;">Fecha de nacimiento <br> <input type="date" id="fechaNacimiento" name="fechaNacimiento"></label>
                <br><br>
                <input type="text" name="cedula" id="cedula" placeholder="Digite su cedula">
                <br><br>
                    <select name="sexo" align="center" style="width: 180px; height: 25px;">
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
                <br>
                
                <input type="submit" value="Registrar" class="btn btn-success" name="form1_submit">
                <input type="reset" value="limpiar" class="btn btn-warning" >
                <div id="alerta" class="alert alert-danger" style="display: none;"></div>
                <div id="alerta1" class="alert alert-danger" style="display: none;">Correo Registrado</div>
            </form>
            <button class="btn btn-warning" onclick="ocultarFormulario()" >Cerrar</button>
        </div>
        <br><br>
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
            function mostrarAlerta(elemento, mensaje) {
                elemento.style.display = 'block';
                elemento.textContent = mensaje;
            }

            function ocultarAlerta(elemento) {
                elemento.style.display = 'none';
            }
            
        document.addEventListener('DOMContentLoaded', function() {
            const formulario = document.querySelector('#formulario form');
            const alerta = document.getElementById('alerta');
            const alerta1 = document.getElementById('alerta1');
    
    <?php
        if ($correoExiste) {
            echo "alerta1.style.display = 'block';";
            echo "alerta1.textContent = 'Correo Registrado.';";
            echo "formulario.addEventListener('submit', function(event) {";
            echo "event.preventDefault();";
            echo "});";
        }
    ?>

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
        <div id="login" class="login"  style="">
        <h1 align="center" class="h1">Login</h1>   
            <form method="POST" align="center" style="padding: 20px;">
                <input type="text" name="email" id="Email" placeholder="correo electronico">
                <br><br>
                <input type="password" name="clave" id="clave" placeholder="contraseña" >
                <br><br>
                <input type="submit" value="ingreso" class="btn btn-success" name="form2_submit">
                <input type="reset" value="limpiar" class="btn btn-warning">
                <div align="center" id="alertalogin" class="alert alert-danger" style="display: none;">Correo y/o contraseña incorrectos</div>
            </form>
        </div>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const login = document.querySelector('#login form');
            const alertalogin = document.getElementById('alertalogin');

            <?php
                if ($alertaLogin) {
                echo "alertalogin.style.display = 'block';";
                echo "alertalogin.textContent = '$alertaLogin';";
                }
            ?>

            login.addEventListener('submit', function(event) {
            const campos2 = login.querySelectorAll('input[type="text"], input[type="password"]');
            let camposVacios = false;

                campos2.forEach(function(campo) {
                    if (!campo.value.trim()) {
                        camposVacios = true;
                    }
                });

                if (camposVacios) {
                    alertalogin.style.display = 'block';
                    alertalogin.textContent = 'Por favor, llena todos los campos.';
                    event.preventDefault(); // Evita el envío del formulario
                } else {
                    alertalogin.style.display = 'none';
                }
            });
        });
        </script>
</body>
</html>
