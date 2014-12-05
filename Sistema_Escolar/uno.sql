/*
SQLyog Ultimate v8.61 
MySQL - 5.6.20 : Database - uno
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`uno` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `uno`;

/*Table structure for table `alumno` */

DROP TABLE IF EXISTS `alumno`;

CREATE TABLE `alumno` (
  `id_alumno` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido_p` varchar(30) DEFAULT NULL,
  `apellido_m` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_alumno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `alumno` */

/*Table structure for table `alumnogrupo` */

DROP TABLE IF EXISTS `alumnogrupo`;

CREATE TABLE `alumnogrupo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_alumno` int(11) DEFAULT NULL,
  `id_grupo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `alumnogrupo` */

/*Table structure for table `grupo` */

DROP TABLE IF EXISTS `grupo`;

CREATE TABLE `grupo` (
  `id_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_grupo` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `grupo` */

insert  into `grupo`(`id_grupo`,`nombre_grupo`) values (1,'TIC-71'),(2,'TIC-72'),(3,'TIC-73');

/*Table structure for table `maestro_materia` */

DROP TABLE IF EXISTS `maestro_materia`;

CREATE TABLE `maestro_materia` (
  `id` int(11) DEFAULT NULL,
  `id_maestro` int(11) DEFAULT NULL,
  `id_materia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `maestro_materia` */

/*Table structure for table `materia` */

DROP TABLE IF EXISTS `materia`;

CREATE TABLE `materia` (
  `id` int(11) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `avatar` varchar(30) DEFAULT NULL,
  `orden` varchar(30) DEFAULT NULL,
  `estatus` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `materia` */

insert  into `materia`(`id`,`nombre`,`avatar`,`orden`,`estatus`) values (1,'Programacion',NULL,NULL,'1'),(2,'Español',NULL,NULL,'2'),(3,'Matematicas',NULL,NULL,'3');

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `Id` int(11) DEFAULT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `ApellidoPaterno` varchar(30) DEFAULT NULL,
  `ApellidoMaterno` varchar(30) DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL,
  `Calle` varchar(30) DEFAULT NULL,
  `NumeroExterior` int(11) DEFAULT NULL,
  `NumeroInterior` int(11) DEFAULT NULL,
  `Colonia` varchar(30) DEFAULT NULL,
  `Domicilio` varchar(30) DEFAULT NULL,
  `Estado` varchar(30) DEFAULT NULL,
  `CP` int(11) DEFAULT NULL,
  `Correo` varchar(30) DEFAULT NULL,
  `Usuario` varchar(30) DEFAULT NULL,
  `Contrasena` varchar(30) DEFAULT NULL,
  `Nivel` varchar(30) DEFAULT NULL,
  `Estatus` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

insert  into `usuario`(`Id`,`Nombre`,`ApellidoPaterno`,`ApellidoMaterno`,`Telefono`,`Calle`,`NumeroExterior`,`NumeroInterior`,`Colonia`,`Domicilio`,`Estado`,`CP`,`Correo`,`Usuario`,`Contrasena`,`Nivel`,`Estatus`) values (1,'Andy','Rojas','Perez',789779,'HKLH',7,7,'HM,H','HM','MNH',0,'MH','abdy','1234','1','2'),(2,'Manuel','rojas','perez',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','1'),(3,'Marcos','Rojas','Oerez',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'3','1'),(4,'Rojas','Perez','Andy',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'3','1'),(5,'Perez','Marcos','Andy',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2','1'),(6,'Yo','Rojas','Perez',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2','1');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
