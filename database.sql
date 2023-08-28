-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.28-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para proyectophp
CREATE DATABASE IF NOT EXISTS `proyectophp` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `proyectophp`;

-- Volcando estructura para tabla proyectophp.perfilusuario
CREATE TABLE IF NOT EXISTS `perfilusuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Cedula` varchar(20) NOT NULL,
  `Sexo` varchar(30) NOT NULL,
  `CiudadResidencia` varchar(30) NOT NULL,
  `NumeroTelefono` varchar(20) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `clave` varchar(50) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla proyectophp.perfilusuario: ~3 rows (aproximadamente)
INSERT INTO `perfilusuario` (`idUsuario`, `name`, `age`, `FechaNacimiento`, `Cedula`, `Sexo`, `CiudadResidencia`, `NumeroTelefono`, `Email`, `clave`) VALUES
	(57, 'Mauricio', '20', '2003-03-03', '251564156', 'M', 'Bogota', '1548945', 'boot11@gmail.com', 'aa6e8c32a255d5d6c04fa83aa3eca1e5'),
	(59, 'cata', '10', '2023-08-25', '22599845', 'F', 'cali', '12459145641', 'cata@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
	(60, 'Super Administrador', '20', '2003-03-03', '1000007442', 'M', 'Bogotá', '3208548091', 'mboho2427@gmail.com', 'fc7735cafe2d78a4c924d662ce2f66f7');

-- Volcando estructura para tabla proyectophp.perfilmascota
CREATE TABLE IF NOT EXISTS `perfilmascota` (
  `idMascota` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Edad` varchar(50) NOT NULL,
  `Raza` varchar(50) NOT NULL,
  `Sexo` varchar(50) NOT NULL,
  `Tipo` varchar(50) NOT NULL,
  `Color` varchar(50) NOT NULL,
  `Alimento` varchar(50) NOT NULL,
  `Usuario_Id` int(11) DEFAULT NULL,
  PRIMARY KEY (`idMascota`),
  KEY `Usuario_Id` (`Usuario_Id`),
  CONSTRAINT `perfilmascota_ibfk_1` FOREIGN KEY (`Usuario_Id`) REFERENCES `perfilusuario` (`idUsuario`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla proyectophp.perfilmascota: ~0 rows (aproximadamente)
INSERT INTO `perfilmascota` (`idMascota`, `Nombre`, `Edad`, `Raza`, `Sexo`, `Tipo`, `Color`, `Alimento`, `Usuario_Id`) VALUES
	(123, 'luna', '3', 'pitbull', 'hembra', 'canino', 'blanco', 'nutrecan', 57);
/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
