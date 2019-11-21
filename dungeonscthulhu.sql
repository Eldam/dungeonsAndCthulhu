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


CREATE TABLE `characterpj` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `raze` varchar(255) NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
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
(1, 'Lilith Vermillion', 'Humana', 'Mujer', 13, 120, 33, 3, 21, 14, 16, 14, 16, 18, 12, 3, 'Nacida en new york en 1897.', '2019-11-17', '2019-11-17', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `characterskill`
--

CREATE TABLE `characterskill` (
  `idUser` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `typeSkill` enum('strength','dexterity','constitution','inteligence','wisdom','charisma') NOT NULL,
  `level` int(10) NOT NULL,
  `mark` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `characterskill`
--

INSERT INTO `characterskill` (`idUser`, `name`, `typeSkill`, `level`, `mark`) VALUES
(1, 'Alta sociedad', 'charisma', 6, 1),
(1, 'Buscar libros', 'inteligence', 11, 1),
(1, 'Ciencias Arcanas', 'inteligence', 18, 4),
(1, 'Descifrar', 'inteligence', 10, 0),
(1, 'Descubrir', 'inteligence', 11, 1),
(1, 'Egipcio Antiguo', 'inteligence', 10, 0),
(1, 'Historia', 'inteligence', 14, 1),
(1, 'Ocultar ki', 'dexterity', 18, 0),
(1, 'Ocultar maná', 'dexterity', 18, 0),
(1, 'Percepción', 'wisdom', 18, 2),
(1, 'Percibir Ki', 'wisdom', 20, 1),
(1, 'Percibir Maná', 'wisdom', 20, 2),
(1, 'Persuadir', 'charisma', 4, 1),
(1, 'Psicología', 'wisdom', 16, 0),
(1, 'Salvación Voluntad', 'wisdom', 4, 0),
(1, 'Sigilo', 'dexterity', 7, 0),
(1, 'Sociedad Vampirica', 'charisma', 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `charactersperk`
--

CREATE TABLE `charactersperk` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idPerk` int(11) NOT NULL,
  `type` enum('Atribute','Spell','Other','') NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `charactersperk`
--

INSERT INTO `charactersperk` (`id`, `idUser`, `idPerk`, `type`, `description`) VALUES
(1, 1, 12, 'Other', 'Cuerpo a cuerpo'),
(2, 1, 9, 'Other', 'Sabiduría'),
(3, 1, 9, 'Other', 'Sabiduría'),
(4, 1, 9, 'Other', 'Sabiduría'),
(5, 1, 9, 'Other', 'Sabiduría'),
(6, 1, 9, 'Other', 'Sabiduría'),
(7, 1, 9, 'Other', 'Sabiduría'),
(8, 1, 9, 'Other', 'Sabiduría'),
(9, 1, 9, 'Other', 'Sabiduría'),
(10, 1, 19, 'Other', 'Puño de hierro'),
(11, 1, 19, 'Other', 'Control'),
(12, 1, 19, 'Other', 'Tahtib'),
(13, 1, 19, 'Other', 'Modo sabio'),
(14, 1, 19, 'Other', 'Ultra instinto'),
(15, 1, 17, 'Atribute', 'Sabiduría'),
(16, 1, 17, 'Atribute', 'Sabiduría'),
(17, 1, 17, 'Atribute', 'Destreza'),
(18, 1, 17, 'Atribute', 'Destreza'),
(19, 1, 13, 'Other', 'Cuerpo a cuerpo'),
(20, 1, 13, 'Other', 'Cuerpo a cuerpo'),
(21, 1, 13, 'Other', 'Cuerpo a cuerpo'),
(22, 1, 1, 'Spell', 'Smash'),
(23, 1, 1, 'Spell', 'Speed'),
(24, 1, 1, 'Spell', 'Full cowl'),
(25, 1, 1, 'Spell', 'Smash'),
(26, 1, 1, 'Atribute', 'Feline vision'),
(27, 1, 1, 'Atribute', 'Smash');

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
-- Estructura de tabla para la tabla `perk`
--

CREATE TABLE `perk` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `greenCost` int(10) NOT NULL,
  `blueCost` int(10) NOT NULL,
  `Knowledge` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `perk`
--

INSERT INTO `perk` (`id`, `name`, `greenCost`, `blueCost`, `Knowledge`) VALUES
(1, 'Mejorar hechizo rango < IV', 1, 0, 0),
(2, 'Mejorar hechizo rango < VI', 2, 0, 0),
(3, 'Mejorar hechizo rango < IX', 3, 0, 0),
(4, 'Tirada Salvación +2', 1, 0, 0),
(5, 'Iniciativa +2', 1, 0, 0),
(6, 'Velocidad +0.5', 1, 0, 0),
(7, 'Energía de muerte', 0, 1, 12),
(8, 'Energía de vida', 0, 1, 12),
(9, 'Multiplicador ki +0.5 (sabiduría o poder)', 0, 1, 12),
(10, 'Multiplicador mana +0.5 (sabiduría o inteligencia)', 0, 1, 12),
(11, 'Rango curación', 1, 0, 12),
(12, 'Rango ataque (C.c, arma o distancia)', 0, 1, 16),
(13, 'Rango daño (C.c, arma o distancia)', 1, 0, 12),
(14, 'Rango ataque hechizo (Arcano,Vida,Muerte)', 0, 1, 16),
(15, 'Rango daño hechizo (Arcano,Vida,Muerte)', 1, 0, 12),
(16, 'Incremento atributo principal', 2, 1, 0),
(17, 'Incremento atributo principal entrenado', 1, 1, 0),
(18, 'Dote', 2, 2, 20),
(19, 'Dote entrenada', 1, 2, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `skill`
--

CREATE TABLE `skill` (
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `type` enum('strength','dexterity','constitution','inteligence','wisdom','charisma') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `skill`
--

INSERT INTO `skill` (`name`, `description`, `type`) VALUES
('Abrir cerraduras', 'Habilidad que permite abrir cerraduras de cofres, puertas, cajas fuertes...', 'dexterity'),
('Acrobacias', 'Habilidad que permite saltar de forma eficiente obstáculos', 'dexterity'),
('Actuar', 'Finges para obtener un resultado', 'charisma'),
('Alta sociedad', 'Eres reconocido en la alta sociedad y ellos están predispuestos a confiar en ti', 'charisma'),
('Atletismo', 'Habilidad que permite escalar,saltar, nadar...', 'strength'),
('Bestiario', 'Conocimiento sobre bestias magicas', 'inteligence'),
('Buscar libros', 'Habilidad que permite buscar libros de forma rápida y eficiente', 'inteligence'),
('Charlatanería', 'Usas tu labia para engatusar temporalmente a quien tu quieras', 'charisma'),
('Ciencias Arcanas', 'Conocimiento sobre el mundo mágico a través del estudio de libros y documentos', 'inteligence'),
('Concentración', 'Permite a los lanza-conjuros no perder la concentración al lanzar un hechizo si son atacados', 'constitution'),
('Conducir', 'Habilidad que permite conducir de forma eficiente', 'inteligence'),
('Crédito', 'Por tu aspecto,posición social o reconocimiento las personas están mas dispuestas a creerte', 'charisma'),
('Descifrar', 'Técnicas que permiten el descifrado de criptogramas y ayuda a la traducción de un idioma desconocido', 'inteligence'),
('Descubrir', 'Es mas fácil descubrir secretos o pistas ocultas', 'inteligence'),
('Egipcio Antiguo', 'Conocimiento sobre el idioma egipcio antiguo', 'inteligence'),
('Historia', 'Conocimiento de la historia del mundo', 'inteligence'),
('Historia magica', 'Conocimiento de la historia del mundo mágico', 'inteligence'),
('Intimidar', 'Técnicas de intimidación mediante el miedo', 'charisma'),
('Juego de manos', 'Habilidad que permite robar, o sustraer de forma habilidosa lo que uno desee', 'dexterity'),
('Mecánica', 'Habilidad que permite reparar y conocer los mecanismos de una maquina', 'inteligence'),
('Medicina', 'Conocimientos sobre medicina y la capacidad de aplicarlos en el campo', 'wisdom'),
('Montar', 'Permite montar criaturas', 'dexterity'),
('Ocultar ki', 'Capacidad para ocultar tu ki del resto del mundo', 'dexterity'),
('Ocultar maná', 'Capacidad para ocultar tu maná del resto del mundo', 'dexterity'),
('Ocultar muerte', 'Capacidad para ocultar tu muerte del resto del mundo', 'dexterity'),
('Ocultar vida', 'Capacidad para ocultar tu vida del resto del mundo', 'dexterity'),
('Percepción', 'Ve mas allá de lo normal, fijándose en detalles que normalmente pasaría desapercibido, sonidos olores y sensaciones te permiten ver cosas que normalmente no', 'wisdom'),
('Percibir Ki', 'Capacidad para analizar las fluctuaciones en el ambiente de la energía de ki', 'wisdom'),
('Percibir Maná', 'Capacidad para analizar las fluctuaciones en el ambiente de la energía de maná', 'wisdom'),
('Percibir Muerte', 'Capacidad para analizar las fluctuaciones en el ambiente de la energía de muerte', 'wisdom'),
('Percibir Vida', 'Capacidad para analizar las fluctuaciones en el ambiente de la energía de vida', 'wisdom'),
('Persuadir', 'Juegas con la mente del adversario consiguiendo hacer lo que tu quieras', 'charisma'),
('Pintura', 'Habilidad que permite el dibujo de gran calidad', 'inteligence'),
('Psicología', 'Capacidad de analizar la psique permitiendo detectar mentiras o el estado de animo del analizado', 'wisdom'),
('Psicoterapia', 'Capacidad de analizar la psique permitiendo sanarla', 'wisdom'),
('Regatear', 'Convences al adversario de fijar un precio que a ti te convenga mas', 'charisma'),
('Salvación de carisma', 'Salvación por carisma', 'charisma'),
('Salvación Destreza', 'Tirada de salvación de destreza.', 'dexterity'),
('Salvación fortaleza', 'Tirada de salvación de fortaleza', 'constitution'),
('Salvación fuerza', 'Tirada de salvación de fuerza', 'strength'),
('Salvación inteligencia', 'Tirada para la salvación de inteligencia', 'inteligence'),
('Salvación Voluntad', 'Tirada que permite la salvación por voluntad', 'wisdom'),
('Sigilo', 'Permite pasar desapercibido y sin llamar la atención', 'dexterity'),
('Sociedad Vampirica', 'Los vampiros te reconocen y confían en ti', 'charisma'),
('Supervivencia', 'Capacidad mejorada de sobrevivir en situaciones adversas y la capacidad de seguir rastros', 'wisdom'),
('Tasación', 'Permite conocer el valor de un objeto', 'inteligence'),
('Trato con animales', 'Ayuda a tratar con animales', 'wisdom');

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
-- Indices de la tabla `characterskill`
--
ALTER TABLE `characterskill`
  ADD PRIMARY KEY (`idUser`,`name`) USING BTREE,
  ADD KEY `name` (`name`),
  ADD KEY `idUser` (`idUser`) USING BTREE;

--
-- Indices de la tabla `charactersperk`
--
ALTER TABLE `charactersperk`
  ADD PRIMARY KEY (`id`,`idUser`,`idPerk`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idPerk` (`idPerk`);

--
-- Indices de la tabla `object`
--
ALTER TABLE `object`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `perk`
--
ALTER TABLE `perk`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`name`);

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
-- AUTO_INCREMENT de la tabla `charactersperk`
--
ALTER TABLE `charactersperk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `object`
--
ALTER TABLE `object`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `perk`
--
ALTER TABLE `perk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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

--
-- Filtros para la tabla `characterskill`
--
ALTER TABLE `characterskill`
  ADD CONSTRAINT `characterskill_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `characterpj` (`id`),
  ADD CONSTRAINT `characterskill_ibfk_2` FOREIGN KEY (`name`) REFERENCES `skill` (`name`),
  ADD CONSTRAINT `characterskill_ibfk_3` FOREIGN KEY (`idUser`) REFERENCES `characterpj` (`id`),
  ADD CONSTRAINT `characterskill_ibfk_4` FOREIGN KEY (`idUser`) REFERENCES `characterpj` (`id`);

--
-- Filtros para la tabla `charactersperk`
--
ALTER TABLE `charactersperk`
  ADD CONSTRAINT `charactersperk_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `characterpj` (`id`),
  ADD CONSTRAINT `charactersperk_ibfk_2` FOREIGN KEY (`idPerk`) REFERENCES `perk` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
