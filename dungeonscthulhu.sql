-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2019 a las 23:39:09
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


-- Base de datos: `dungeonscthulhu`
--
DROP DATABASE IF EXISTS `dungeonscthulhu`;
CREATE DATABASE `dungeonscthulhu` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
--
-- SELECCIONAMOS PARA USAR
--
USE `dungeonscthulhu`;
-- --------------------------------------------------------

GRANT USAGE ON * . * TO `userDNC`@`localhost`;
	DROP USER `userDNC`@`localhost`;
--
-- CREAMOS EL USUARIO Y LE DAMOS PASSWORD,DAMOS PERMISO DE USO Y DAMOS PERMISOS SOBRE LA BASE DE DATOS.
--
CREATE USER IF NOT EXISTS `userDNC`@`localhost` IDENTIFIED BY 'userDNC';
GRANT USAGE ON *.* TO `userDNC`@`localhost` REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;
GRANT ALL PRIVILEGES ON `dungeonscthulhu`.* TO `userDNC`@`localhost` WITH GRANT OPTION;
--


--
-- Estructura de tabla para la tabla `characterpj`
--

CREATE TABLE `characterpj` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `raze` varchar(255) NOT NULL,
  `gender` varchar(255) NULL,
  `level` int(10) NOT NULL,
  `actualExperience` int(20) NOT NULL,
  `cthulhuKnowledge` int(10) NOT NULL,
  `inspiration` int(10) NOT NULL,
  `actualStress` int(10) NOT NULL,
  `strengthBase` int(10) NOT NULL,
  `dexterityBase` int(10) NOT NULL,
  `constitutionBase` int(10) NOT NULL,
  `inteligenceBase` int(10) NOT NULL,
  `wisdomBase` int(10) NOT NULL,
  `charismaBase` int(10) NOT NULL,
  `velocityBase` int(10) NOT NULL,
  `biography` text DEFAULT NULL,
  `createDate` date DEFAULT NULL,
  `updateDate` date DEFAULT NULL,
  `deleteDate` date DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `characterpj`
--

INSERT INTO `characterpj` (`id`, `name`, `raze`, `gender`, `level`, `actualExperience`, `cthulhuKnowledge`, `inspiration`, `actualStress`, `strengthBase`, `dexterityBase`, `constitutionBase`, `inteligenceBase`, `wisdomBase`, `charismaBase`, `velocityBase`, `biography`, `createDate`, `updateDate`, `deleteDate`, `idUser`) VALUES
(1, 'Lilith Vermillion', 'Humana', 'Mujer',13, 120, 33, 3, 21, 14, 16, 14, 16, 18, 12, 3, 'Nacida en new york en 1897.', '2019-11-17', '2019-11-17', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `object`
--

CREATE TABLE `object` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `cost` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `createDate` date DEFAULT NULL,
  `updateDate` date DEFAULT NULL,
  `deleteDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `createDate`, `updateDate`, `deleteDate`) VALUES
(1, 'Eldam', '4486d3c4678aa2be330c2424d4fd2673', '2019-11-17', '2019-11-17', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `characterpj`
--
ALTER TABLE `characterpj`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`);

--
-- Indices de la tabla `object`
--
ALTER TABLE `object`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `characterpj`
--
ALTER TABLE `characterpj`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `object`
--
ALTER TABLE `object`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `characterpj`
--
ALTER TABLE `characterpj`
  ADD CONSTRAINT `characterpj_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
