# Host: www.stypgua.com  (Version 5.5.5-10.3.27-MariaDB-log)
# Date: 2021-10-29 22:58:27
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "amigos"
#

DROP TABLE IF EXISTS `amigos`;
CREATE TABLE `amigos` (
  `id_Amigos` int(11) NOT NULL AUTO_INCREMENT,
  `id_miAmigo` int(11) NOT NULL DEFAULT 0,
  `miPropio_id` int(11) NOT NULL,
  PRIMARY KEY (`id_Amigos`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

#
# Data for table "amigos"
#

INSERT INTO `amigos` VALUES (8,3,1),(9,1,4),(10,2,1),(11,6,1),(13,4,7),(14,1,8),(15,10,2),(16,4,2),(17,1,9),(18,10,11);

#
# Structure for table "fotos"
#

DROP TABLE IF EXISTS `fotos`;
CREATE TABLE `fotos` (
  `id_fotos` int(11) NOT NULL AUTO_INCREMENT,
  `rutaUbicacion` varchar(100) NOT NULL,
  `id_miembros` int(11) NOT NULL,
  PRIMARY KEY (`id_fotos`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

#
# Data for table "fotos"
#

INSERT INTO `fotos` VALUES (1,'upload/candado.png',1),(6,'upload/flash.jpg',1);

#
# Structure for table "mensaje"
#

DROP TABLE IF EXISTS `mensaje`;
CREATE TABLE `mensaje` (
  `id_mensaje` int(11) NOT NULL AUTO_INCREMENT,
  `id_emisor` int(11) NOT NULL,
  `id_receptor` int(11) NOT NULL,
  `contenido` varchar(100) NOT NULL,
  `fechaEnvio` varchar(100) NOT NULL,
  PRIMARY KEY (`id_mensaje`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

#
# Data for table "mensaje"
#

INSERT INTO `mensaje` VALUES (2,1,3,'Que paso papaÃ­to ','2021-10-29 12:00:29'),(3,4,1,'Que tal JosÃ© como te va? ','2021-10-29 12:04:23'),(4,1,4,'Hola Andy , todo bien y vos ?','2021-10-29 12:20:40'),(5,4,1,'Calidad, ya listo para finalizar el semestre ','2021-10-29 12:23:02'),(6,2,1,'Que onda','2021-10-29 12:27:14'),(8,7,4,'Hola','2021-10-29 13:58:22'),(9,8,1,'Holaaaa â£ï¸','2021-10-29 18:59:21'),(10,1,8,'Hola ','2021-10-29 19:02:54'),(11,1,8,'CÃ³mo estÃ¡s ','2021-10-29 19:16:54'),(12,8,1,'a','2021-10-29 19:22:54'),(13,9,1,'Jenejdnfbfdbkdkke','2021-10-29 22:45:14'),(14,9,1,'Jenejdnfbfdbkdkke','2021-10-29 22:45:14'),(15,11,10,'Pinche hacker\r\n','2021-10-29 22:45:20'),(16,1,9,'Hola como estas\r\n','2021-10-29 22:46:58');

#
# Structure for table "miembros"
#

DROP TABLE IF EXISTS `miembros`;
CREATE TABLE `miembros` (
  `id_miembros` int(11) NOT NULL AUTO_INCREMENT,
  `primerNombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `segundoNombre` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `no_contacto` varchar(100) NOT NULL,
  `edad` int(11) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `nombreUsuario` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL DEFAULT '',
  `imgPerfil` varchar(100) NOT NULL,
  `cumpleanos` varchar(100) NOT NULL DEFAULT '',
  `no_celular` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `trabajo` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  PRIMARY KEY (`id_miembros`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

#
# Data for table "miembros"
#

INSERT INTO `miembros` VALUES (1,'Jose','Lopez','','Ciudad','','',0,'Hombre','jelopezrv','jose','images/flash.jpg','19/11/1998','12345678','Guatemala','Informatica',''),(2,'Israel','Santizo','','Guatemala ','','',0,'Hombre','jsantizo','jsantizo','images/760447.jpg','01-12-1998','01234567789','','',''),(3,'carlos','Quintana','','','','',0,'Hombre','carlosjq','hola123','images/No_Photo_Available.jpg','','','','',''),(4,'Steven','PÃ©rez ','','','','',0,'Hombre','SP98','123abc..','images/Giant Panda Eating Bamboo Art Print by Gerry Ellis.jpeg','','','','',''),(5,'Esteban','Quito','','','','',0,'Hombre','Esteban Perez','jairogay','images/399CC84C-C4E6-4390-88CF-26654FB3A8EA.jpeg','20/20/1995','3030-5555','','',''),(6,'Mario','Claudio','','6 AV. 0-60, CENTRO COMERCIAL ZONA 4','','',0,'Hombre','mario','1234','images/shutterstock_1498591895.jpg','11/11/1998','46446549','Guatemala','Allied','CatÃ³lico'),(7,'caninsa','lopez','','','','',0,'Mujer','caninsa','1234','images/No_Photo_Available.jpg','','','','',''),(8,'Alexia','','','','','',0,'Mujer','Alex','robbybebe','images/20211020_123956.jpg','','','','',''),(9,'Melisa','Tavico ','','','','',0,'Mujer','melisagarcia','megustalapizza','images/18A1251E-13CA-4408-AAB2-39AC04D0C75C.jpeg','','','','',''),(10,'carlos','quintana','','','','',0,'Hombre','carlosjq','abc123','images/descarga.jpg','06/04/1996','35266938','Glorioso','',''),(11,'AnonymousGT','Ya tu sabe','','','','',0,'Mujer','Anonymous ','contraseÃ±a','images/1591619131_634844_1591619268_noticia_normal_recorte1.jpg','','','','','');

#
# Structure for table "nota"
#

DROP TABLE IF EXISTS `nota`;
CREATE TABLE `nota` (
  `id_nota` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` varchar(100) NOT NULL,
  `mensaje` varchar(200) NOT NULL,
  PRIMARY KEY (`id_nota`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

#
# Data for table "nota"
#

INSERT INTO `nota` VALUES (6,'','Doc terry will be  out on august 3 2013');

#
# Structure for table "publicacion"
#

DROP TABLE IF EXISTS `publicacion`;
CREATE TABLE `publicacion` (
  `id_publicacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_miembros` int(11) NOT NULL,
  `contenido` varchar(1000) NOT NULL,
  `fecha_publicacion` varchar(100) NOT NULL,
  PRIMARY KEY (`id_publicacion`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

#
# Data for table "publicacion"
#

INSERT INTO `publicacion` VALUES (3,1,'Hola como estan','2021-10-29 11:31:57'),(4,4,'Que tal comunidad de la IngenierÃ­a, este es un espacio para solucionar y automatizar problemas. ','2021-10-29 12:02:22'),(5,5,'Que tal a todos ','2021-10-29 12:22:04'),(8,6,'Hola Caninsa','2021-10-29 13:34:45'),(12,8,'En ti ','2021-10-29 18:58:23'),(13,9,'Jelou ','2021-10-29 22:36:38'),(14,10,'Buenas aqui Carlos777 con un directo de planeta ','2021-10-29 22:38:08'),(15,11,'Que genial esta cuenta','2021-10-29 22:44:52');

#
# Structure for table "registro"
#

DROP TABLE IF EXISTS `registro`;
CREATE TABLE `registro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_miembros` int(11) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `estado` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

#
# Data for table "registro"
#

INSERT INTO `registro` VALUES (76,1,'11/09/2013',1,1,'Done'),(77,1,'11/09/2013',1,1,'Pending'),(78,1,'10/09/2013',1,1,'Done');

#
# Structure for table "servicio"
#

DROP TABLE IF EXISTS `servicio`;
CREATE TABLE `servicio` (
  `id_servicio` int(11) NOT NULL AUTO_INCREMENT,
  `ofertaServicio` varchar(100) NOT NULL,
  `precio` decimal(11,2) NOT NULL,
  PRIMARY KEY (`id_servicio`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "servicio"
#

INSERT INTO `servicio` VALUES (1,'Cleaning',700.00),(2,'q',100.00);

#
# Structure for table "usuarios"
#

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombreUsuario` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

#
# Data for table "usuarios"
#

INSERT INTO `usuarios` VALUES (5,'UMG','admin2021');
