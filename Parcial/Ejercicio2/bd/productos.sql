CREATE DATABASE IF NOT EXISTS `Productos` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `Productos`;


CREATE TABLE IF NOT EXISTS `Productos` (
  `idcodigo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombreproducto` varchar(25) NOT NULL,
  `categoria` varchar(25) NOT NULL,
  `precio` int(5) NOT NULL,
  `Existencia` int(5) NOT NULL,
  `FechaIngreso` Date NOT NULL,
  PRIMARY KEY (`idcodigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;
