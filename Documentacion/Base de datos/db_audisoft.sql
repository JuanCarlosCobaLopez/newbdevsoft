-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-04-2017 a las 00:32:19
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_audisoft`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadistica`
--

CREATE TABLE `estadistica` (
  `ID_ESTADISTICA` int(11) NOT NULL,
  `CORREO` varchar(50) DEFAULT NULL,
  `FECHA_ESTADISTICA` varchar(25) NOT NULL,
  `DISPOSITIVO` varchar(50) NOT NULL,
  `PAGINA` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE `mensaje` (
  `ID_MENSAJE` int(11) NOT NULL,
  `CORREO` varchar(50) DEFAULT NULL,
  `FECHA_MENSAJE` varchar(25) DEFAULT NULL,
  `CONTENIDO_MENSAJE` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mensaje`
--

INSERT INTO `mensaje` (`ID_MENSAJE`, `CORREO`, `FECHA_MENSAJE`, `CONTENIDO_MENSAJE`) VALUES
(6, 'adrianSKN@gmail.com', '09/07/16 2:37pm', 'Buenos dias solicito ayuda'),
(8, 'adrianSKN@gmail.com', '09/07/16 2:39pm', 'Ya lo resolvi'),
(9, 'adrianSKN@gmail.com', '09/07/16 2:39pm', 'Tengo otro problema'),
(13, 'adrianSKN@gmail.com', '09/07/16 7:35pm', 'Hay alguien'),
(17, 'adrianSKN@gmail.com', '09/07/16 7:43pm', 'Necesito ayuda con la manera de crear un fixture'),
(18, 'administrador', '09/07/16 7:44pm', 'Si en concreto cual era su problema'),
(19, 'administrador', '09/07/16 10:02pm', 'Buenos dias por cierto'),
(20, 'administrador', '09/08/16 1:19pm', 'Diga su problema en concreto y se lo ayudara'),
(23, 'adrianSKN@gmail.com', '09/08/16 2:14pm', 'Acabo de leer la ayuda del sistema y lo resolvi gracias'),
(25, 'hola@gmail.com', '09/08/16 2:23pm', 'Buenos dias'),
(26, 'administrador', '09/14/16 7:06pm', 'No hay de que'),
(27, 'adrianSKN@gmail.com', '09/15/16 11:03am', 'Tengo una duda'),
(28, 'administrador', '04/02/17 1:07pm', 'sadfsdf'),
(29, 'administrador', '04/02/17 1:07pm', 'hhhh');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `CORREO` varchar(50) NOT NULL,
  `TELEFONO` int(11) NOT NULL,
  `CONTRASENA` varchar(50) NOT NULL,
  `estado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`CORREO`, `TELEFONO`, `CONTRASENA`, `estado`) VALUES
('administrador', 0, '', 'deshabilitado'),
('adrianSKN@gmail.com', 68984599, '123', 'habilitado'),
('erika03@gmail.com', 70700100, 'salmaria134', 'habilitado'),
('golo@gmail.com', 324234, '323ccc', 'habilitado'),
('hola@gmail.com', 1233, 'hagar', 'deshabilitado'),
('jorgeRivas_55@gmail.com', 70268144, 'patoaparato123', 'deshabilitado'),
('Juan@sda', 32423423, '453534', 'habilitado'),
('julianito1515@gmail.com', 75898481, 'barcopezxy5', 'habilitado'),
('migueltunez@gmail.com', 66985857, 'cocoga55N', 'habilitado'),
('palmira45@gmail.com', 71396960, 'palmiraFF4C', 'habilitado'),
('sdfsdf@gmail.com', 324534, 'sdfsdf', 'habilitado'),
('Stimpy@gmail.com', 6059584, 'susex', 'habilitado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estadistica`
--
ALTER TABLE `estadistica`
  ADD PRIMARY KEY (`ID_ESTADISTICA`),
  ADD UNIQUE KEY `ESTADISTICA_PK` (`ID_ESTADISTICA`),
  ADD KEY `CONTIENE_FK` (`CORREO`);

--
-- Indices de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD PRIMARY KEY (`ID_MENSAJE`),
  ADD UNIQUE KEY `MENSAJE_PK` (`ID_MENSAJE`),
  ADD KEY `PERTENECE_FK` (`CORREO`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`CORREO`),
  ADD UNIQUE KEY `USUARIO_PK` (`CORREO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estadistica`
--
ALTER TABLE `estadistica`
  MODIFY `ID_ESTADISTICA` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  MODIFY `ID_MENSAJE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estadistica`
--
ALTER TABLE `estadistica`
  ADD CONSTRAINT `FK_ESTADIST_CONTIENE_USUARIO` FOREIGN KEY (`CORREO`) REFERENCES `usuario` (`CORREO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD CONSTRAINT `FK_MENSAJE_PERTENECE_USUARIO` FOREIGN KEY (`CORREO`) REFERENCES `usuario` (`CORREO`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
