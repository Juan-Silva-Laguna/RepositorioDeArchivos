-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2020 a las 02:49:06
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_guide_sena`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ambiente`
--

CREATE TABLE `tbl_ambiente` (
  `id_ambiente` int(11) NOT NULL,
  `amb_nombre` varchar(25) NOT NULL DEFAULT '0',
  `amb_direccion_ambiente` varchar(45) NOT NULL DEFAULT '0',
  `amb_capacidad` varchar(25) NOT NULL DEFAULT '0',
  `amb_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_ambiente`
--

INSERT INTO `tbl_ambiente` (`id_ambiente`, `amb_nombre`, `amb_direccion_ambiente`, `amb_capacidad`, `amb_estado`) VALUES
(1, 'ADSI', '0', '35', 1),
(2, 'Administración ', '0', '35', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_aprendiz`
--

CREATE TABLE `tbl_aprendiz` (
  `id_aprendiz` int(11) NOT NULL,
  `fk_id_ficha` int(11) NOT NULL DEFAULT 0,
  `fk_id_persona` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_aprendiz`
--

INSERT INTO `tbl_aprendiz` (`id_aprendiz`, `fk_id_ficha`, `fk_id_persona`) VALUES
(1, 121212, 5),
(2, 121212, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_centro`
--

CREATE TABLE `tbl_centro` (
  `id_centro` int(11) NOT NULL,
  `cen_direccion` varchar(30) NOT NULL DEFAULT '0',
  `cen_telefono` varchar(10) NOT NULL DEFAULT '0',
  `cen_email` varchar(90) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_centro`
--

INSERT INTO `tbl_centro` (`id_centro`, `cen_direccion`, `cen_telefono`, `cen_email`) VALUES
(1, 'Carrera 9 N° 68-50 Neiva-Huila', '8764401', 'sena@sena.edu.co');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ficha`
--

CREATE TABLE `tbl_ficha` (
  `id_ficha` int(11) NOT NULL,
  `fic_fecha_inicio` date NOT NULL,
  `fic_fecha_fin_lectiva` date NOT NULL,
  `fic_fecha_fin_practica` date DEFAULT NULL,
  `fk_id_programa` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_ficha`
--

INSERT INTO `tbl_ficha` (`id_ficha`, `fic_fecha_inicio`, `fic_fecha_fin_lectiva`, `fic_fecha_fin_practica`, `fk_id_programa`) VALUES
(121212, '2019-07-22', '2021-01-19', '2021-07-20', 1),
(1937743, '2020-10-27', '2022-10-27', NULL, 1),
(1946655, '2020-10-27', '2022-10-27', NULL, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_horario`
--

CREATE TABLE `tbl_horario` (
  `id_horario` int(11) NOT NULL,
  `hor_hora_inicio` time NOT NULL,
  `hor_hora_fin` time NOT NULL,
  `fk_id_ficha` int(11) NOT NULL DEFAULT 0,
  `fk_id_instructor` int(11) NOT NULL,
  `fk_id_ambiente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_horario`
--

INSERT INTO `tbl_horario` (`id_horario`, `hor_hora_inicio`, `hor_hora_fin`, `fk_id_ficha`, `fk_id_instructor`, `fk_id_ambiente`) VALUES
(1, '06:00:00', '12:00:00', 1937743, 0, 0),
(2, '01:00:00', '06:00:00', 1946655, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_instructor`
--

CREATE TABLE `tbl_instructor` (
  `id_instructor` int(11) NOT NULL,
  `ins_profesion` varchar(20) NOT NULL DEFAULT '0',
  `ins_fechaInicio` date NOT NULL,
  `ins_fechaFin` date DEFAULT NULL,
  `fk_id_persona` int(11) NOT NULL DEFAULT 0,
  `ins_tipo_contrato` enum('indefinido','temporal') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_instructor`
--

INSERT INTO `tbl_instructor` (`id_instructor`, `ins_profesion`, `ins_fechaInicio`, `ins_fechaFin`, `fk_id_persona`, `ins_tipo_contrato`) VALUES
(1, 'Ingeniería de Sistem', '2020-10-27', '0000-00-00', 1, 'indefinido'),
(2, 'Ingeniería de Sistem', '2020-10-27', NULL, 2, 'indefinido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_persona`
--

CREATE TABLE `tbl_persona` (
  `id_persona` int(11) NOT NULL,
  `per_nombre` varchar(30) NOT NULL DEFAULT '0',
  `per_apellidos` varchar(30) NOT NULL DEFAULT '0',
  `per_tipo_identificacion` enum('CC','CE','NIT','Otro') NOT NULL,
  `per_identificacion` varchar(10) NOT NULL DEFAULT '0',
  `per_edad` varchar(20) NOT NULL DEFAULT '0',
  `per_email` varchar(90) NOT NULL DEFAULT '0',
  `per_contrasena` varchar(110) NOT NULL DEFAULT '0',
  `per_direccion` varchar(40) NOT NULL DEFAULT '0',
  `per_foto` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_persona`
--

INSERT INTO `tbl_persona` (`id_persona`, `per_nombre`, `per_apellidos`, `per_tipo_identificacion`, `per_identificacion`, `per_edad`, `per_email`, `per_contrasena`, `per_direccion`, `per_foto`) VALUES
(1, 'Carlos Fabian', 'Martinez Mora', 'CC', '123456798', '30', 'cafamar@misena.edu.co', 'cafamar123', 'calle 43 a 12', ''),
(2, 'JESUS ARIEL', ' GONZALEZ', 'CC', '987654322', '28', 'ariel5253@misena.edu.co', 'ariel123', 'carr 37 -12 a3', ''),
(3, 'ferey', 'rivas', 'CC', '10071', '23', 'ferney@rivas', 'hola', 'cll 2', 'kkk'),
(4, 'dayana', 'acuna', 'CC', '111', '19', 'acuna@dayana', 'hiyou', 'cr 2', 'uaoakja'),
(5, 'yerzin', 'perez', 'CC', '10', '22', 'yerzin@perez', '$2y$10$PMeCn1Cqj2HtbKE7OtgEZuf399J8AqK9mkq21cbHLBS8.mdCY3vHu', 'cr 4', 'Images/sinFoto.jpeg'),
(6, 'fercho', 'rivas', 'CC', '929', '23', 'fercho@rivas', '$2y$10$0/4qUTinyOQZmJcpu6UwtegNSzVvAE4CtMf3XDfZuAzGP/o37wxK6', 'cll2', 'Images/sinFoto.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_programa`
--

CREATE TABLE `tbl_programa` (
  `id_programa` int(11) NOT NULL,
  `pro_nombre` varchar(110) NOT NULL DEFAULT '0',
  `pro_tipo` enum('Tecnologo','Tecnico','Curso') NOT NULL,
  `pro_estado` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_programa`
--

INSERT INTO `tbl_programa` (`id_programa`, `pro_nombre`, `pro_tipo`, `pro_estado`, `created_at`, `updated_at`) VALUES
(1, 'Tecnología en Análisis y Programación de Sistemas de Información', 'Tecnologo', 1, '2020-11-05 19:23:44', '2020-11-12 19:23:44'),
(2, 'Arte, cultura, esparcimiento y deportes.', 'Tecnologo', 1, NULL, '2020-11-06 02:28:34'),
(3, 'Finanzas y administración.', 'Tecnologo', 1, NULL, '2020-11-06 02:28:42'),
(4, 'Operación de equipo industrial y transporte.', 'Tecnologo', 1, NULL, '2020-11-06 02:28:17'),
(5, 'Procesamiento, fabricación y ensamble.', 'Tecnologo', 0, NULL, NULL),
(6, 'Idiomas.', 'Tecnologo', 1, NULL, '2020-11-06 02:27:52'),
(7, 'Ciencias sociales, educativas y servicios gubernamentales.', 'Tecnologo', 0, NULL, NULL),
(8, 'Guianza en recorridos por la naturaleza', 'Tecnico', 1, NULL, '2020-11-06 02:27:24'),
(9, 'Turismo en espacios rurales', 'Tecnico', 1, NULL, '2020-11-06 02:27:44'),
(10, 'Gastronomía Colombiana', 'Curso', 1, NULL, '2020-11-06 02:27:33'),
(11, 'Programación de Software', 'Tecnico', 1, NULL, '2020-11-06 02:27:03'),
(12, 'Animaciones Multimedia', 'Tecnico', 1, '2020-11-06 01:24:55', '2020-11-06 02:26:26');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_ambiente`
--
ALTER TABLE `tbl_ambiente`
  ADD PRIMARY KEY (`id_ambiente`);

--
-- Indices de la tabla `tbl_aprendiz`
--
ALTER TABLE `tbl_aprendiz`
  ADD PRIMARY KEY (`id_aprendiz`),
  ADD KEY `fk_id_ficha` (`fk_id_ficha`),
  ADD KEY `fk_id_persona` (`fk_id_persona`);

--
-- Indices de la tabla `tbl_centro`
--
ALTER TABLE `tbl_centro`
  ADD PRIMARY KEY (`id_centro`);

--
-- Indices de la tabla `tbl_ficha`
--
ALTER TABLE `tbl_ficha`
  ADD PRIMARY KEY (`id_ficha`),
  ADD KEY `fk_id_programa` (`fk_id_programa`);

--
-- Indices de la tabla `tbl_horario`
--
ALTER TABLE `tbl_horario`
  ADD PRIMARY KEY (`id_horario`),
  ADD KEY `fk_id_ficha` (`fk_id_ficha`),
  ADD KEY `fk_id_instructor` (`fk_id_instructor`),
  ADD KEY `fk_id_ambiente` (`fk_id_ambiente`);

--
-- Indices de la tabla `tbl_instructor`
--
ALTER TABLE `tbl_instructor`
  ADD PRIMARY KEY (`id_instructor`),
  ADD KEY `fk_id_persona` (`fk_id_persona`);

--
-- Indices de la tabla `tbl_persona`
--
ALTER TABLE `tbl_persona`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `tbl_programa`
--
ALTER TABLE `tbl_programa`
  ADD PRIMARY KEY (`id_programa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_ambiente`
--
ALTER TABLE `tbl_ambiente`
  MODIFY `id_ambiente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_aprendiz`
--
ALTER TABLE `tbl_aprendiz`
  MODIFY `id_aprendiz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_centro`
--
ALTER TABLE `tbl_centro`
  MODIFY `id_centro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_ficha`
--
ALTER TABLE `tbl_ficha`
  MODIFY `id_ficha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1946656;

--
-- AUTO_INCREMENT de la tabla `tbl_horario`
--
ALTER TABLE `tbl_horario`
  MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_instructor`
--
ALTER TABLE `tbl_instructor`
  MODIFY `id_instructor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_persona`
--
ALTER TABLE `tbl_persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tbl_programa`
--
ALTER TABLE `tbl_programa`
  MODIFY `id_programa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_aprendiz`
--
ALTER TABLE `tbl_aprendiz`
  ADD CONSTRAINT `FK__tbl_ficha` FOREIGN KEY (`fk_id_ficha`) REFERENCES `tbl_ficha` (`id_ficha`),
  ADD CONSTRAINT `FK__tbl_persona` FOREIGN KEY (`fk_id_persona`) REFERENCES `tbl_persona` (`id_persona`);

--
-- Filtros para la tabla `tbl_ficha`
--
ALTER TABLE `tbl_ficha`
  ADD CONSTRAINT `FK_tbl_ficha_tbl_programa` FOREIGN KEY (`fk_id_programa`) REFERENCES `tbl_programa` (`id_programa`);

--
-- Filtros para la tabla `tbl_horario`
--
ALTER TABLE `tbl_horario`
  ADD CONSTRAINT `FK_tbl_horario_tbl_ficha` FOREIGN KEY (`fk_id_ficha`) REFERENCES `tbl_ficha` (`id_ficha`);

--
-- Filtros para la tabla `tbl_instructor`
--
ALTER TABLE `tbl_instructor`
  ADD CONSTRAINT `FK_tbl_instructor_tbl_persona` FOREIGN KEY (`fk_id_persona`) REFERENCES `tbl_persona` (`id_persona`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
