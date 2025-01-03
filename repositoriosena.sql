-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2020 a las 20:53:12
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
-- Base de datos: `repositoriosena`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendices`
--

CREATE TABLE `aprendices` (
  `idAprendiz` int(11) NOT NULL,
  `idFicha` int(11) NOT NULL,
  `idPersona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `aprendices`
--

INSERT INTO `aprendices` (`idAprendiz`, `idFicha`, `idPersona`) VALUES
(99, 1829975, 1007273528),
(100, 1829975, 1192923675),
(101, 1829975, 1001289484),
(102, 1829975, 1003808242),
(103, 1829975, 1003865580),
(104, 1829975, 1003865697),
(105, 1829975, 1003951984),
(106, 1829975, 1004089380),
(107, 1829975, 1004493924),
(108, 1829975, 1004493970),
(109, 1829975, 1004494004),
(110, 1829975, 1004494023),
(111, 1829975, 1004494029),
(112, 1829975, 1004494032),
(113, 1829975, 1004494055),
(114, 1829975, 1004494077),
(115, 1829975, 1004494078),
(116, 1829975, 1004494079),
(117, 1829975, 1004494089),
(118, 1829975, 1004494093),
(119, 1829975, 1004494094),
(120, 1829975, 1004494096),
(121, 1829975, 1004494104),
(122, 1829975, 1007287163),
(123, 1829975, 1007287181),
(124, 1829975, 1007287184),
(125, 1829975, 1007287186),
(126, 1829975, 1007287188),
(127, 1829975, 1007287190),
(128, 1829975, 1084922004),
(129, 1829975, 1084922025),
(130, 1829975, 1084922037),
(131, 1829975, 1084922041),
(132, 1829975, 1084922098),
(133, 1829975, 1084922145),
(134, 1829975, 1084922417),
(135, 1829975, 1109184136),
(136, 1829975, 1193086163),
(137, 1829977, 1003806222),
(138, 1829977, 1003807161),
(139, 1829977, 1003950919),
(140, 1829977, 1003951899),
(141, 1829977, 1004344077),
(142, 1829977, 1193081385),
(143, 1829977, 1193134679),
(144, 1829977, 1001345229),
(145, 1829977, 1003809581),
(146, 1829977, 1003865613),
(147, 1829977, 1003916605),
(148, 1829977, 1003952303),
(149, 1829977, 1003953125),
(150, 1829977, 1003953306),
(151, 1829977, 1003953323),
(152, 1829977, 1004074643),
(153, 1829977, 1004250243),
(154, 1829977, 1004474938),
(155, 1829977, 1006351883),
(156, 1829977, 1007248896),
(157, 1829977, 1007248897),
(158, 1829977, 1022922486),
(159, 1829977, 1024460334),
(160, 1829977, 1044609017),
(161, 1829977, 1075211776),
(162, 1829977, 1076903335),
(163, 1829977, 1192757125),
(164, 1829977, 1193081401),
(165, 1829977, 1193123973),
(166, 1906725, 1003498659),
(167, 1906725, 1003805501),
(168, 1906725, 1003806728),
(169, 1906725, 1003807116),
(170, 1906725, 1003814878),
(171, 1906725, 1003814980),
(172, 1906725, 1003893610),
(173, 1906725, 1003893911),
(174, 1906725, 1003894715),
(175, 1906725, 1007423340),
(176, 1906725, 1018504634),
(177, 1906725, 1075223549),
(178, 1906725, 1075271591),
(179, 1906725, 1075273536),
(180, 1906725, 1075279303),
(181, 1906725, 1075294300),
(182, 1906725, 1075303106),
(183, 1906725, 1075303305),
(184, 1906725, 1075309880),
(185, 1906725, 1075311348),
(186, 1906725, 1075319330),
(187, 1906725, 1077840148),
(188, 1906725, 1079607780),
(189, 1906725, 1081160769),
(190, 1906725, 1081161102),
(191, 1906725, 1109418769),
(192, 1906725, 1149195921),
(193, 1906725, 1193096483),
(194, 1906725, 1193126216),
(195, 1906725, 55069673),
(196, 1906725, 7727966),
(197, 1906725, 1003806349),
(198, 1906725, 1003828436),
(199, 1906725, 1003894306),
(200, 1906725, 1004225026),
(201, 1906725, 1007674903),
(202, 1906781, 1003804256),
(203, 1906781, 1003816240),
(204, 1906781, 1003950740),
(205, 1906781, 1007423340),
(206, 1906781, 1007429232),
(207, 1906781, 1007675040),
(208, 1906781, 1030540016),
(209, 1906781, 1075225661),
(210, 1906781, 1075245112),
(211, 1906781, 1075261488),
(212, 1906781, 1075267144),
(213, 1906781, 1075273946),
(214, 1906781, 1075289463),
(215, 1906781, 1075290431),
(216, 1906781, 1075301423),
(217, 1906781, 1075301903),
(218, 1906781, 1075304522),
(219, 1906781, 1075307897),
(220, 1906781, 1075314699),
(221, 1906781, 1075541769),
(222, 1906781, 1079177258),
(223, 1906781, 1081155730),
(224, 1906781, 7730918),
(225, 1906781, 1003950931),
(226, 1906781, 1004225026),
(227, 1906781, 1004248167),
(228, 1937743, 1000616285),
(229, 1937743, 1000930476),
(230, 1937743, 1001201618),
(231, 1937743, 1003805602),
(232, 1937743, 1003813222),
(233, 1937743, 1003864327),
(234, 1937743, 1003864537),
(235, 1937743, 1003866404),
(236, 1937743, 1003916773),
(237, 1937743, 1004154329),
(238, 1937743, 1004305222),
(239, 1937743, 1005691780),
(240, 1937743, 1006131763),
(241, 1937743, 1007273350),
(242, 1937743, 1007273585),
(243, 1937743, 1007503094),
(244, 1937743, 1010149751),
(245, 1937743, 1075312840),
(246, 1937743, 1079186847),
(247, 1937743, 1079186983),
(248, 1937743, 1084869277),
(249, 1937743, 1115941578),
(250, 1937743, 1192716268),
(251, 1937743, 1003805540),
(252, 1937743, 1003807148),
(253, 1937743, 1004493867),
(254, 1937743, 1010150377),
(255, 1937743, 1010151843),
(256, 1937743, 1192728806);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendices_proyectos`
--

CREATE TABLE `aprendices_proyectos` (
  `idAprendizProyecto` int(11) NOT NULL,
  `idAprendiz` int(11) NOT NULL,
  `idProyecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `aprendices_proyectos`
--

INSERT INTO `aprendices_proyectos` (`idAprendizProyecto`, `idAprendiz`, `idProyecto`) VALUES
(20, 242, 31),
(21, 238, 31),
(22, 233, 31),
(23, 255, 31);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichas`
--

CREATE TABLE `fichas` (
  `id_ficha` int(11) NOT NULL,
  `id_programa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `fichas`
--

INSERT INTO `fichas` (`id_ficha`, `id_programa`) VALUES
(1906725, 228106),
(1906781, 228106),
(1937743, 228106),
(1829975, 228120),
(1829977, 228120);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichas_instructores`
--

CREATE TABLE `fichas_instructores` (
  `idFichaInstructor` int(11) NOT NULL,
  `id_ficha` int(11) NOT NULL,
  `id_instructor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `fichas_instructores`
--

INSERT INTO `fichas_instructores` (`idFichaInstructor`, `id_ficha`, `id_instructor`) VALUES
(5, 1937743, 10),
(6, 1906725, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructores`
--

CREATE TABLE `instructores` (
  `idInstructor` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `profesion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `instructores`
--

INSERT INTO `instructores` (`idInstructor`, `id_persona`, `profesion`, `descripcion`) VALUES
(8, 1, 'Ingeniero de Software', 'Especializado en front end'),
(9, 2, 'Analitica', 'especialista en analisis de software'),
(10, 3, 'ingeniero', 'dasjxnak');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `items`
--

CREATE TABLE `items` (
  `idItem` int(11) NOT NULL,
  `nombreItem` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `estadoItem` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `url` varchar(80) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `items`
--

INSERT INTO `items` (`idItem`, `nombreItem`, `estadoItem`, `url`) VALUES
(23, 'Documento SRS', 'Aprobado', '../Proyectos/consulta-tu-soat_20_11_2020.pdf'),
(24, 'Proyecto', 'Aprobado', '../Proyectos/jj.jpg'),
(25, 'Video', 'Aprobado', '../Proyectos/MicrosoftTeams-image.png'),
(26, 'Manual', 'Aprobado', '../Proyectos/yis.xls');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `tipo_identificacion` enum('CC','TI','CE','Otro') COLLATE utf8_spanish2_ci NOT NULL,
  `identificacion` int(11) NOT NULL,
  `nombres` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `apellidos` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `celular` bigint(20) NOT NULL,
  `correo` varchar(35) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `rol` enum('admin','instructor','aprendiz') COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`tipo_identificacion`, `identificacion`, `nombres`, `apellidos`, `celular`, `correo`, `password`, `rol`) VALUES
('CC', 1, 'Julanito de tal', 'Perez Aguilar', 172877, 'julanito@detal', '$argon2i$v=19$m=65536,t=4,p=1$ZTNLRVUwSFoxQ1c0UWouMQ$zvaMDsOvEHXtTthOuWLdcz+FGT4On8TWxtdr1rM5hvs', 'instructor'),
('CC', 2, 'maria', 'sinceleja', 123, 'maria@sinceleja', '$argon2i$v=19$m=65536,t=4,p=1$R21ISURYdUMxZkUwbDdUeA$q1UyEBr7eht3VzRlCZIJmU6wL7R+zDzqQIK8ICXsj9o', 'instructor'),
('CE', 3, 'jesus', 'ariel', 32, 'jesus@ariel', '$argon2i$v=19$m=65536,t=4,p=1$YkFzTDZpbXFIc0F5UG5RNg$fYO9Lt44NRjaZxBeLHlV8UkC4Cebso/P5yWF17vtTZQ', 'instructor'),
('CC', 7705410, 'DANIEL', 'LARA MURCIA', 3222426043, 'daniel.lar.mur@hotmail.com', '$argon2i$v=19$m=65536,t=4,p=1$aVRTUmkvQWFLVEdlMjRBeA$KJ3vW8yrsqwQ7UQLYK6ZCRWQ3z1Cob01/eb2k93uouE', 'aprendiz'),
('CC', 7727966, 'DIEGO ARMANDO', 'QUIZA FIERRO', 3106180635, 'diegokantiano@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$RUZRb21QMUExS3dQanZhSQ$9QyGUBctYA70IziYSpdE01urF7FZweoAG7NgcQymJCQ', 'aprendiz'),
('CC', 7730918, 'DIEGO ALEXANDER', 'MONTES PERDOMO', 3102390162, 'alexander.montes1091@correo.policia', '$argon2i$v=19$m=65536,t=4,p=1$eVZxdHRRNDVEakdzdGZZMQ$rJDNlwUiwM34XpC9WVmtrrfvz5BTCYOX+WBQvDRyJik', 'aprendiz'),
('CC', 55069673, 'CAROLINA', 'ZUÑIGA ALVARADO', 8331836, 'carolinazunig84@hotmail.com', '$argon2i$v=19$m=65536,t=4,p=1$YzRwdE9YdXhxWVhEdVJ1Lw$yPjyPL3tBG6EH8j7IFWtCvVB7BZdhXLZ+D4jv+seoXA', 'aprendiz'),
('CC', 55190751, 'SANDRA PATRICIA', 'AREVALO RAYO', 3174443220, 'arledraca26@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$UVd5ZmNoNzJkQmRGZFQ1Yw$N7Z3sk14VdFsbSRrhoU2m6znxrZ+RGv8YpVvyUyMwQY', 'aprendiz'),
('CC', 1000616285, 'LUIS SEBASTIAN', 'MUÑOZ MARTINEZ', 3229033031, 'sebaspepe0114@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$MUpoUmFGN24wY294c25ycg$bsSn0cVyy6s+1wOurHuRemcqAdl+1Iw8z5OjEyog7JU', 'aprendiz'),
('CC', 1000930476, 'JOSE JAIME', 'GULUMA GARCIA', 3172909094, 'www.jose.20marzo@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$a1R0Z3hQQ01SYmsvZnZVQw$Y2jKCLHLyVy8ERq2MACBNVpgrrBmRyLdLILq56Y71KQ', 'aprendiz'),
('CC', 1001201618, 'DANNA VALENTINA', 'RODRIGUEZ PUENTES', 3174484686, 'dvrodriguez816@misena.edu.co', '$argon2i$v=19$m=65536,t=4,p=1$RXBXRUY1UFUvMmRkWnlaaw$Nk2exiHsHhDC2X2RtzWplX6C7fQy4t80WlMpVOYmGDk', 'aprendiz'),
('TI', 1001289484, 'JOSE MIGUEL', 'SANCHEZ VARGAS', 3185452649, 'josemiguelsanchezvargas2015@gmail.c', '$argon2i$v=19$m=65536,t=4,p=1$RlJKeEJFTWFoTDFJelZaWQ$Bq+n2I8Tzy7TI+Pda9WloyG4byWuMdLYmXTCNhkc2MI', 'aprendiz'),
('TI', 1001345229, 'JERSON ANDRES', 'FACUNDO GARCIA', 3003074944, 'jersonfacundo07@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$LkF3eURPT0lDcWtOcVlqeA$6Zpwe3kodslbWWw3xYkH44BdpDHIEhmivuVsdIYrM6g', 'aprendiz'),
('CC', 1003498659, 'JOSE MIGUEL', 'VEGA LOPEZ', 3024499126, 'josemiguelvegalopez@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$VFlDV1g5eE1xMFAyaVd5QQ$a041g/gOQEQ1l/hqnTfl7/cdWmmu2f3Wch+bqDDL0Qs', 'aprendiz'),
('CC', 1003801713, 'VALERY KARINA', 'GOMEZ PERDOMO', 0, 'valerykarina2000@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$OTRPRDdqdEt2WG1EZVpEZg$c+MRu5vZ9FX7qPBh0K782AcvsIgO6sbbdeWqoFUNnoY', 'aprendiz'),
('CC', 1003802928, 'ROBINSON LEANDRO', 'VALENZUELA CARDONA', 3228551195, 'robinleandro2001@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$cnlHbXp0d2ZHejlvWTZYdg$IPL3kdAAvX8O2CX3aovtPHyWHZ7exqhndk6rwYlmEEU', 'aprendiz'),
('CC', 1003804256, 'JESUS ANTONIO', 'ROJAS BOCANEGRA', 3124320133, 'jarojas6524@misena.edu.co', '$argon2i$v=19$m=65536,t=4,p=1$YVYvd2pud3pwNG1ueU9pOQ$HefFItar7orwkZshogcoVIeJ+7YQshLIEv8NWVboi9I', 'aprendiz'),
('CC', 1003804881, 'MARIA PAULA', 'CLAVIJO PINZON', 3132719368, 'paulapinzon22_@outlook.com', '$argon2i$v=19$m=65536,t=4,p=1$ZnRiY01wMS9EcEs2dGxsdQ$Y/FyMTA+w7ySg4E89e1XrJ/YXC5aKk/4jSFbMNdgz2I', 'aprendiz'),
('CC', 1003805501, 'OSCAR STIVEN', 'ASTUDILLO REYES', 8767657, 'osastudillo@misena.edu.co', '$argon2i$v=19$m=65536,t=4,p=1$UEsuNTBSbnp6RFQ4YXBUTw$BqaDeVjJoFomDRX2G5BnfBKW8cMsTRpOqtc7SJoqnNE', 'aprendiz'),
('TI', 1003805540, 'ANGGY TATIANA', 'PANTOJA TORRES', 3024390449, 'Tatiianapantoja11@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$WFRyQ2V5Lk5Cd1IucWphMQ$bOHzsGUXwPMJC2mdcNZWsZPviNFaSGTgrWhIUkjI3rk', 'aprendiz'),
('CC', 1003805602, 'NICOLAS', 'ESCOBAR CONDE', 3114576268, 'ecnicolas123@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$bFRqOUhOb3ZzWG92dy9nRw$5pseDGtPLzuofOGe4ux1dbUUwa9Rqp+smB0MODBdPQk', 'aprendiz'),
('CC', 1003806222, 'DANIEL STIVEN', 'CADENA MONTERO', 3222156301, 'cadenadaniel931@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$ZUVWTjBDLlFYR2xXR1VGOQ$gsIsSWnNuhWp+OtoOVCBNMWuzmOCsrj9YaeaGfDHKBg', 'aprendiz'),
('TI', 1003806349, 'CRISTIAN CAMILO', 'GONZALEZ MOSQUERA', 3144088314, 'ccgonzalez94@misena.edu.co', '$argon2i$v=19$m=65536,t=4,p=1$UnJLdGxlYllITDVldzlJTQ$ADlV4jAGlmA7732B1Vw1u73E4Y8lrdBZ9W27tDByMWs', 'aprendiz'),
('CC', 1003806728, 'SELENA', 'RIVERA QUIROGA', 3144662732, 'selequi1231@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$b0t0dC5sWENBLy9zQUs4SQ$b/Wm8EhdYyvy9t4d1NJQEt87OZxLoZPhpgjnkHsTft0', 'aprendiz'),
('CC', 1003807116, 'JEFFERSON ESTIVEN', 'CARDENAS GARCIA', 0, 'cardenasjefferson629@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$NnFVV2pUUU82SXpnZE5CNg$QfQZqGmhZt8uK3xC+MZ+kcZQvuDFfhi741dNBq4C/RE', 'aprendiz'),
('TI', 1003807148, 'PAULA ANDREA', 'LADINO PASTRANA', 3212423157, 'andrea.ladino314@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$VW1kcXNoSjVKd3VTaWJtUw$XPu2tbnDXIK1/FUiSey1nTqtbpwZqwLDFVpP821RUJM', 'aprendiz'),
('CC', 1003807161, 'LOREN MICHELL', 'TOVAR MORENO', 0, 'tovarmichell8@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$aGRqWmdyR3hGeDY2bllRTA$CPSe5kHayE2UkdGqUaXGjaj7XKatErPRwZQHigORfmU', 'aprendiz'),
('CC', 1003807582, 'VALENTINA', 'AMAYA RAMIREZ', 3125959827, 'valentina.amaya2017@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$N2J5ZFFyajNNb2szZURpUg$kHBqtDjo9Mh5f9BkuAT7UulIQTOgI8DVHJgS96QgsE0', 'aprendiz'),
('TI', 1003808242, 'JARIN STIWAR', 'SALAZAR CALDERON', 3202810729, 'nuevostiwar@hotmail.com', '$argon2i$v=19$m=65536,t=4,p=1$aU1rZEh3MnhZdFRyUnRacQ$Ah/sZmC2ivF3FRDleqO6Ri61k7IQY/cW/6LWuTxeYhI', 'aprendiz'),
('TI', 1003809581, 'LAURA CAMILA', 'CANO ROJAS', 0, 'canolaura241@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$RjZpVnFPSWRaWFFsNUlrcw$s5AF02GjGD3uxayHd2iSqe/IH45UDiubzI92wF6vsTQ', 'aprendiz'),
('CC', 1003813222, 'SERGIO ANDRES', 'ZAMBRANO MORALES', 3158843108, 'sergio.zambrano878@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$cmkwekRraS9Pa0Q0dHlPcg$4ydQkgC5b8tge4P8rQAJbFMjWLkUN1JzjMqwbHJtPAo', 'aprendiz'),
('CC', 1003814464, 'JOSE ARMANDO', 'GUARIN CALDERON', 3336191278, 'jose25regge@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$dkdQSjhVSlVab2FSQ2cxcA$2AHOoEd4xE3aT7KVBclP6AYfJaH4R86PsLUIORrcJeQ', 'aprendiz'),
('CC', 1003814878, 'NEIDER FABIAN', 'WALLES GUTIERREZ', 3006355464, 'nfwalles@misena.edu.co', '$argon2i$v=19$m=65536,t=4,p=1$TVMxOXZnRjJRVDJGZXRnNA$kmpXM0tNDvO73/sAUGlroPbzeIjqL+D3kd7+hxhkMlA', 'aprendiz'),
('CC', 1003814980, 'HOLMAN', 'CAÑAS PAVA', 3173482212, 'holman1913@hotmail.com', '$argon2i$v=19$m=65536,t=4,p=1$ZWsvd3E4NnZDclUvSjlwbg$681ndQdhPj/F/9pkyBhVL+wZy0AJJ1kWs12OSekNU/I', 'aprendiz'),
('CC', 1003816240, 'EDUARDO', 'BARREIRO MONCALEANO', 3213824466, 'eduardmonca2000@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$Y0x1YWIzTUhSYUhSMy9wQg$f1Eo+TqHTqZxi3VzANzTnHNiBhhs9W9Xe5+nm/d2KEw', 'aprendiz'),
('TI', 1003828436, 'JULIAN CAMILO', 'SILVA SALAZAR', 3053104038, 'jcsilva63@misena.edu.co', '$argon2i$v=19$m=65536,t=4,p=1$amtHR2RCd2xNdy4xY1Y3ag$Lw60j42QJ/DWwD91+qKaDDcLyBiXC3+iggpDRE1feRs', 'aprendiz'),
('CC', 1003864327, 'JESSICA', 'SANTOFINIO LEAL', 3108774275, 'yesicasantofinio@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$d1VKVm01TG9hdDg1ZlRUNg$Xp440BPm5E0C1qpCN4US/4iekNChzOKWc6mQPHuU82E', 'aprendiz'),
('CC', 1003864537, 'JULIAN', 'MEDINA MONJE', 3222916031, 'julianmonj45@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$YlpEUVh1Y1dobGhEN3FIOA$2r3gG6DDG4gN7FaM7H2P6H7PNZxik9bfaH+JwCPWrvw', 'aprendiz'),
('TI', 1003865580, 'DANIELA', 'CAMACHO DIAZ', 3228343145, 'simadilo@hotmail.com', '$argon2i$v=19$m=65536,t=4,p=1$NlE0bEJoVlZDTWQzaG8ySA$WFDW53uqvf0HWmgCALKYtE8hdRHiJjSZPTVQU4gEcU0', 'aprendiz'),
('TI', 1003865613, 'JHON ALEXANDER', 'CASTAÑEDA LOSADA', 3229011665, 'jhonalcaslo94@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$ZURGbU1sUktsRkZiLzZEZA$jE5tDZXvpq3yC81v+agOrJQAbr31u00r2WCKx5S43WY', 'aprendiz'),
('TI', 1003865697, 'JAVIER EDUARDO', 'MEDINA PERDOMO', 3227350875, 'javiermediina1025@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$VzJlQTFXbFpQUUk1eFhlOA$c4Abel/GQrpEKVM/lx49dBOxOUJ3KYAheFCznCu88FU', 'aprendiz'),
('CC', 1003866404, 'MARIA PAULA', 'MORA CHILA', 3208099674, 'mpmora40@misena.edu.co', '$argon2i$v=19$m=65536,t=4,p=1$UERZalpjOUEzUy8yLlN4RA$EkPkxOZpyXCxOkgH1Kb5bOZW0bRSw7aRGm7pGp9jmoU', 'aprendiz'),
('CC', 1003893610, 'DAYANA KARINA', 'GORDO FARFAN', 0, 'dkgordo@misena.edu.co', '$argon2i$v=19$m=65536,t=4,p=1$dGNCZUxYWS5GZ3VVdjAveA$aq9t6pysyJfD6WhhGSEkslkBamncEB3LXpPNSflVDA0', 'aprendiz'),
('CC', 1003893911, 'KEVIN ESNEIDER', 'FLOREZ LLANOS', 3107610615, 'kevinflorez533@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$WnBPZE5tNEdURzJPb2pSeA$muZUqvAffTXhJPFU7bDMpMUQN0lUVhSU/j7pGgOPZi4', 'aprendiz'),
('TI', 1003894116, 'GERALDINE', 'ANDRADE VALENZUELA', 3144849504, 'geraldineandrade001@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$TEFkYzdJSzNsOGphVFJzbg$fIbocZ+AziYwP3qPegHJHrCbdu0yKZR+6ck7zLedJCc', 'aprendiz'),
('TI', 1003894306, 'LAURA ANDREA', 'CHAVARRO VALENZUELA', 3175301414, 'lachavarro60@misena.edu.co', '$argon2i$v=19$m=65536,t=4,p=1$TDJFdWdEQ1NIMExMaXdwMA$scFoRG7y5MFNDWTQ63/UVAesDTzpHViGiA16hFXjIys', 'aprendiz'),
('CC', 1003894715, 'FAIBER DANIEL', 'LARA SUAREZ', 3209814616, 'fdlara5@misena.edu.co', '$argon2i$v=19$m=65536,t=4,p=1$NlJPZkJBOENoSktCR05nVQ$pUDrJjzAyZGBkExDD9goL6UxTHjINrnObQug5yhuDbI', 'aprendiz'),
('TI', 1003916605, 'DAGNA NIKOL', 'DUARTE SANCHEZ', 3132963639, 'nikolduartesanchez@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$bzhEa0dMd2hxNmRSbGpFUQ$q7Ik4c8GMgHYV7zo0cvbtn3+itnKjR3UbnYbgkk3elk', 'aprendiz'),
('CC', 1003916773, 'YULIANA VANESSA', 'YAIMA GARCIA', 3188135577, 'yulianayaima0124@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$TkhKdU8zRjdqT2x0RkdUYw$82pSDNnjrVcEax2kxM/YRaenUCQw72I6WzKQJV/Q+ko', 'aprendiz'),
('CC', 1003950740, 'YULY ANDREA', 'HERRERA ROJAS', 3138586007, 'yuli_edu02@hotmail.com', '$argon2i$v=19$m=65536,t=4,p=1$amJCZVJkQldFemwvejdyag$RzkW0GYvQ5zpyOJXiaS7idqWeK+WGI6zipjWgWQjDn0', 'aprendiz'),
('CC', 1003950919, 'JUAN FERNANDO', 'PERDOMO TOLEDO', 0, 'tottomancho14@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$MjV3TEduRUE1QzZ1N1NrRg$cUS0XRW5A7pD5BoTa9YehQDmPfgNaRqE4xN79X4nomI', 'aprendiz'),
('TI', 1003950931, 'JUAN DIEGO', 'RODRIGUEZ LEIVA', 3202306273, 'juanrodriguez3103@hotmail.com', '$argon2i$v=19$m=65536,t=4,p=1$UHBtcjNYZy5uL1Q2TGlCQg$Eeki9kyY1IKp6qRyGOge7KgoWx6eDQov55B0OkI16Qg', 'aprendiz'),
('CC', 1003951899, 'VIVIAN CAMILA', 'TAMAYO CERON', 0, 'tamayo3048@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$VXI3TC9xYnJjRlBULjM1NA$pi5LunblgQh/tilhYhcpGABsMUaIjtnV/rw2bpDoQuA', 'aprendiz'),
('TI', 1003951984, 'ANA SOFIA', 'PEREZ MONJE', 0, 'sofi04pemo@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$YnZHZi5EaFRrUG9mWTFQag$T5nOtS4rRKeVjr9mduwafq9hGzrUaeB4AJTLgeIe4yY', 'aprendiz'),
('TI', 1003952303, 'CRISTIAN ALEXIS', 'MANCHOLA ABELLO', 3175832264, 'cristianmanchola7@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$N1F3akxmUGdPU3A1Z283Qg$2lZfOMlnWTRMonYQUYODSBIrpeb7jBx/Vr+ipIIjmHk', 'aprendiz'),
('TI', 1003953125, 'MARIA JOSE', 'AVILES GOMEZ', 0, 'majo212528@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$LkFjN2RqRURvZGhLWWhtUA$HTxWBI83Y2Kr71eUu8zbQgwsDC4wO8mlHhzzIAFy5Xs', 'aprendiz'),
('TI', 1003953306, 'JANNIES KATHERINE', 'USECHE GOMEZ', 8646465, 'katherine.06.gomez@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$UDc4aWZuNEtTWGxXY1MzUw$kMaI39L8VIjndhxKU0Tv3ekJn3qPQLKrm4xarFWoFWA', 'aprendiz'),
('TI', 1003953323, 'SANTIAGO ANDRES', 'CABRERA PALENCIA', 3112770227, 'santiagocapa2003@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$QkxzOWRTbUpIRlF1QkRxVw$HT9A+wFrONJ1OayhjjkwkcsENpqOLGcqO7FaeMBw+c4', 'aprendiz'),
('TI', 1004074643, 'RONALD ARBEY', 'MURCIA MORA', 3223728441, 'ronaldmora2002@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$MzVHaXh5LlRKYmpHSFFuWg$+CN090dU6F2TSJ5bNMUXPvs+W42sHHWbpknIPVlP7Uo', 'aprendiz'),
('TI', 1004089380, 'PAULA CAMILA', 'BARREIRO DUARTE', 3134049675, 'camilaDuarte1219@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$YXVGZXlzNFRERU1aZXVtOQ$WLfw8d1/ikHxw02PmRlGQzg20/Xb4XmV/tccJ7DLKo4', 'aprendiz'),
('CC', 1004154329, 'JAVIER', 'CAMPUZANO GOMEZ', 3013044522, 'javicampuzano11@hotmail.com', '$argon2i$v=19$m=65536,t=4,p=1$eURaeE14L1N5YVBXNHYwbw$JxUfSMHukaPVXhcxDxC0roqRIbYa/BlX3RGF3rlq9lA', 'aprendiz'),
('TI', 1004225026, 'YESSICA JULIETH', 'CRUZ NINCO', 3222699506, 'yesicacruz1590@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$dWJPbzJNaktxYXRTVld4Rw$SB8m2kNtpffEl+kBv84+L/vHmuYNfkUZEjqQvSjeroI', 'aprendiz'),
('TI', 1004248167, 'KARLA YULIETH', 'MEDINA FUENTES', 3209186380, 'karlitafuentes94@hotmail.com', '$argon2i$v=19$m=65536,t=4,p=1$TWlTc0oyL2lmWmtkVGk0bQ$N0W7h5vSj/MKmkYlQi/1wNWQFl0rCV6BtmyvM/qseMk', 'aprendiz'),
('TI', 1004250243, 'DIEGO FERNANDO', 'CANDELA CAMERO', 0, 'diegodfcandeladf05@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$enVDa3pNOG9FSUt1ZE9yTQ$Yn0JLeYitpdVvzHQdDtHaQEj9CM3aostIO40V5cEGho', 'aprendiz'),
('CC', 1004305222, 'DAYANA ALEJANDRA', 'ACUÑA CEDEÑO', 3024185854, 'acunacedenod@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$ZVp2WEo1Q1pncnl4dmU0Wg$dDCs3hiUWx58mzMN9YQt0RwZipQR0cluKdOfayQnHlc', 'aprendiz'),
('CC', 1004344077, 'ALDEMAR', 'PERDOMO ARTUNDUAGA', 3125168083, 'aldemar.perdomo.2002@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$VmN1TmRPZ1dVUUdyUkFiQw$b8oQgIiD1DZ7dwj7EO99VqcaA4iNRFPNAkFZo4zPFE4', 'aprendiz'),
('TI', 1004474938, 'ANDRES RICARDO', 'RODRIGUEZ FERNANDEZ', 3053124750, 'andresricardo1238@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$cGN5SnZzSFRaS1lxOHJBTw$RODfeQLTSXyeoPh3OmLNf2HXtAGk9g1fv7IURe2N/Fk', 'aprendiz'),
('TI', 1004493867, 'JOSE MIGUEL', 'TRUJILLO TRUJILLO', 3127697499, 'josemigueltrujillot@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$WndIS0tTUWJDb3JGby96ZA$C+lCraXjksTFOdmDnMACvN3PnH9UjqQBYAG7bc91Kxk', 'aprendiz'),
('TI', 1004493924, 'ANYI CAROLINA', 'CARVAJAL LAGUNA', 0, 'linamarcelaruizbonilla2003@gmail.co', '$argon2i$v=19$m=65536,t=4,p=1$QmhqVzgua0FVcDlWUkhnSA$DcJSU6y29a8DUoVUyB7u7vS8FDG+zqw9Ex3Zqu2Qp2w', 'aprendiz'),
('TI', 1004493970, 'LUIS FERNANDO', 'PIÑACUE HERRERA', 3212463832, 'luis2799hrre@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$OG4wTkYwZ3FBck9vb3QvYw$VZJNX+0SbuzjLnxpbw31w7qK3/Vo3ssFUaX7OZoajQs', 'aprendiz'),
('TI', 1004494004, 'SUSANA', 'POLANIA CARVAJAL', 3144619686, 'spolania701@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$N2pWaHB2V1dHYm9kN1R6aA$SFXKdx+6F5SDNPNcRstuwn3UbDqo6rlJeIU5h8JI/FE', 'aprendiz'),
('TI', 1004494023, 'YILBER GUSTAVO', 'ALVAREZ LEGUIZAMO', 3208586498, '3106258749yilber@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$d3VCLzRKL2lxRFBGMEdKcw$e1YJk/eYJxqIf2UyH6PYkShEqibym6DBiP815MFhNJo', 'aprendiz'),
('TI', 1004494029, 'NICOLE KATHERINE', 'LAGUNA BENITEZ', 3212631807, 'juli1746@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$Y29hcUdzMUlJb0c4SUhudg$bnypUYx0i2cfZlCfr2YRHZQrsoGCl1ySpeLEitIo1vw', 'aprendiz'),
('TI', 1004494032, 'WENDY KAROLINA', 'MONJE LAGUNA', 3223012499, 'karitomonje26@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$M3NFR3E4MkwzN1prdEpWRg$1akhlHfY4adiObfwdiJ08/pD63MBQO4uVBD+uVgwn3E', 'aprendiz'),
('TI', 1004494055, 'ANDREA', 'GALINDO VELASQUEZ', 3138470462, 'andreagalindo14062003@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$UE9ycW1LeFhFLnVCcDZtMA$2zhflzVUuJzmz3blnU5RTfY/j0TMwJOi1QmOA/f/y7E', 'aprendiz'),
('TI', 1004494077, 'YULIANA', 'TAMAYO BARRIOS', 3214432173, 'tamayobarriosyuli29@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$QkZMVlh5QW5Lb0VqV0hKSA$oGvMZBtl0Gz1Ogv/4II5IBcoKNuwGPCOPAoYbiAz6U8', 'aprendiz'),
('TI', 1004494078, 'LINA MARCELA', 'RUIZ BONILLA', 0, 'linamarcelaruizbonilla2003@gmail.co', '$argon2i$v=19$m=65536,t=4,p=1$dTkwa1l2aWlpb3ZuSU9LUg$jif73B5PqlThz7CAXjrAfRe7ByquWUv+bLhSQ12tigY', 'aprendiz'),
('TI', 1004494079, 'MARIA JOSE', 'POLANIA HERRERA', 3172783720, 'mariajo.4510@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$Y1VFa2taM08vd0ovakpIYw$BKwROepqGq4VerQ9wEzfN3ci4zmkC0/Rfpqb1fcPqYY', 'aprendiz'),
('TI', 1004494089, 'ANDRES FELIPE', 'BARRIOS PENAGOS', 3115533108, 'andresfelipebarriospenagos2003@gmai', '$argon2i$v=19$m=65536,t=4,p=1$MWtONkIuQnl4RnNYcC9LSQ$KoNmeKMGJVjBAEBbJXjj3Jw+NAr89+5DPyZboDi+noY', 'aprendiz'),
('TI', 1004494093, 'SOFIA', 'ORDOÑEZ ORTIZ', 3142752277, 'romerobrendayulieth@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$TTFCdU1JUVBNL1dsNlZMLg$ug7EGaFAuJyKSIP38rv6VxDRgk2AmK/62BJ8u4tj+Vw', 'aprendiz'),
('TI', 1004494094, 'LEONARDO', 'HERRERA GONGORA', 3224860470, 'karenlaguna2610@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$VEhsLzJKQ2dYTE9xR3V0Zw$1I6H5v0HxzqBQQV64Zk/CpcNDDdbt/v3Y0AXQUZ7qRE', 'aprendiz'),
('TI', 1004494096, 'ANDRES FABIAN', 'YUCUMA ROSERO', 0, 'andresfabian9999@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$NmF3b2NUQWtTaUdBOGYxcg$S16jMlQbKP5OEI+mEC8hr6EJ+oFgKL86mEEnaUjNZBE', 'aprendiz'),
('TI', 1004494104, 'HAROL STIVEN', 'NOSCUE CERQUERA', 3132192995, 'harolocerquera@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$QTZqY0EyVFBGemIybU9ITQ$NIZggMqIMtssPzVA6mjRIpZADmTKSmQEzTsIcPCWfII', 'aprendiz'),
('CC', 1005691780, 'MIGUEL ANGEL', 'CAÑON RIVERA', 8648793, 'miguelriveraw14@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$S1N5b3VVYktvejdhWERoUg$uDv93Ee7uHAFVhQCx/cGiOexp1vDSIUevdOfYP4xpSs', 'aprendiz'),
('CC', 1006131763, 'LUISA FERNANDA', 'MENDOZA PEÑA', 0, 'lfmendoza0416@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$bGdYR2c3YUpqc01BVS5Nbw$n7tnQD2L+cPtHCc1tD1fBI5Kdt+vxVfSsBDhmbZ+G2U', 'aprendiz'),
('TI', 1006351883, 'GIOVANNY', 'VALDERRAMA PERDOMO', 3118832615, 'TEEMOTEAMO@HOTMAIL.COM', '$argon2i$v=19$m=65536,t=4,p=1$b2tQTVZzWnRLbXl5OWxHUQ$X0zMwVlvAUK/Un8yhRU8PHY74pUBf4eCiep9rDAGI5A', 'aprendiz'),
('TI', 1007248896, 'MARIA CAMILA', 'ROJAS TUNJA', 0, 'rojastunjacamila825@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$MTljbU1nYWZNNUJTUGQueg$QJ+fa/39subD65ryCvcgz78w/LEteYd/qhAf4XFH+o8', 'aprendiz'),
('TI', 1007248897, 'MARIA DEL PILAR', 'ROJAS TINJA', 0, 'pilirojastunja963@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$ZE1YZk1HUi9ObHpuejg5Qw$BS6/B8sBs1WeTIrhleFsOLHelcSkA01mqxSE4rIYI+w', 'aprendiz'),
('CC', 1007273350, 'JHONATAN FELIPE', 'LAGUNA PERDOMO', 3112220266, 'jhonatanfelipebarriosperdomo@gmail.', '$argon2i$v=19$m=65536,t=4,p=1$QUlsSmlFanh5cnRFZy5HbQ$OnfgosMnDs6TOegMjQV44qeNs4QQloLTtfCmr0JEXiU', 'aprendiz'),
('CC', 1007273528, 'MARIA PAULA', 'GALINDO VELASQUEZ', 3138546319, 'mariapaulagalindovelasquez@gmail.co', '$argon2i$v=19$m=65536,t=4,p=1$TkhxR3BlT3N4TVlSQ2ZDZw$SzigQ40Q6WreZJGKcsI2QEovR/CJKOvEvnGROVfblzg', 'aprendiz'),
('CC', 1007273585, 'Juan Ignacio', 'Silva Laguna', 3112119638, 'juancho29silva@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$WWNHckh0Z3dPbkZsWEFXbQ$zr9uL45J6sgWtuwV0TW30TaN1f4/m3cRGHNSR0h41uU', 'admin'),
('TI', 1007287163, 'JUAN SEBASTIAN', 'RAMIREZ CASAS', 3224281030, 'julianpatio_@hotmail.com', '$argon2i$v=19$m=65536,t=4,p=1$cnZUaGIuem91ZmYyaXZKcg$rxlWdWr23Vxm9QtDgIZrxm17nIdeJgv+86ryOI1yhO4', 'aprendiz'),
('TI', 1007287181, 'KAREN DAYANA', 'LAGUNA LAGUNA', 3219279298, 'karenlaguna2610@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$UVdXRmF6NFFZQ20ycldHWg$diia25vmWHOBgVBg77rySJXgJiaX60mwXuu5tIUcMHY', 'aprendiz'),
('TI', 1007287184, 'FABIAN ESTIVEN', 'MARTINEZ CALDERON', 3106626924, 'estivenffa@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$WXhNaXNRNGp6L1docHVBZA$VDfVJuvVV6iyWABmo8rsh73rYLrJqVMgiSWbd3aFilw', 'aprendiz'),
('TI', 1007287186, 'LAURA YISETH', 'LEGUIZAMO MULCUE', 3214601632, 'karitomonje26@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$emdvbUpic1h0Mzk2YzZYRg$EZlEBs89StKWVUStxqrm3cFqYs1kIAZuWDbPPpH2yHM', 'aprendiz'),
('TI', 1007287188, 'JUAN DAVID', 'LEGUIZAMO CUCHIMBA', 3224515267, 'hennesseydavid6@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$UGlUaXRKZS5iNzNyV3E2QQ$bBk84AKK8UO+LBOnOGaFTSwKYP4Fd0Zq+yet+SwdPHI', 'aprendiz'),
('TI', 1007287190, 'YOHAN STIVEN', 'VARGAS PASTRANA', 3125518159, 'johangonzalez12@hotmail.com', '$argon2i$v=19$m=65536,t=4,p=1$Z1MuNDZJTjVaUUR5NFFtcA$vtZh0Tg6m8tMf0OuqR0Hw8+P2VZ+RhS+me7X00jUr0A', 'aprendiz'),
('CC', 1007423340, 'MIGUEL DAVID', 'LONDOÑO LAVAO', 3012979544, 'migueldavidlondonolavao92@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$bHBrZ0dyQzROYmhtdFRRLg$6j88xNJM+4VwUADU+nCNE/kXb1E/mhVkil1cukQl3T0', 'aprendiz'),
('CC', 1007429232, 'JUAN SEBASTIAN', 'MORALES ESPAÑA', 3108793876, 'noname1998auf@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$TVlRTC9HdjIyWUkwZnpTdg$ZnCCWhXhcXFizzkSf78ku2XGcwz79RFPOYXSbYX4xh0', 'aprendiz'),
('CC', 1007503094, 'ADAIMER ARLEY', 'GARCIA ROJAS', 3209785670, 'adaimerarley@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$WkFzYzFkaktock40OEpnMQ$wxuny0WW8b7hVf2IohzHVUGnxjWUSaL2tZ8UMcsRxFE', 'aprendiz'),
('TI', 1007674903, 'ELIAN ESTEBAN', 'LEGUIZAMON ZAMUDIO', 3204569871, 'eeleguizamon3@misena.edu.co', '$argon2i$v=19$m=65536,t=4,p=1$MVpYRzRGUzdhcnBUZGR3aQ$R/zPClmXEKg5MUk1Pw+MpxnDQu1nNBzDt0KJk+hvo+U', 'aprendiz'),
('CC', 1007675040, 'YENI ALEJANDRA', 'MEDINA ALMONACID', 3014875426, 'yamedina04@misena.edu.co', '$argon2i$v=19$m=65536,t=4,p=1$MEwxb250Zms4SExvNDNCeA$tyYlGwC5s2jj5j2kkGh6GmT4MgsuYcJBYp2SZsT21rI', 'aprendiz'),
('CC', 1007717110, 'MELISA', 'ROA HERNANDEZ', 3227122059, 'mroa011@misena.edu.co', '$argon2i$v=19$m=65536,t=4,p=1$aGNpRlo0NGpaNG0zRWxLUQ$pMlExowhB0NJr16Met25PcjgEgxitUPRfS41VkHc7lk', 'aprendiz'),
('CC', 1010149751, 'STEVEN ALEXANDER', 'IMBACHI JOVEN', 8677312, 'alexander.imbachi.joven@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$MUU4UUFZMDNGYmhCcHlqQQ$h/rdu9wAGoHiLpcfbC/+XzaOLkQO02KNHVMRsnFFs3M', 'aprendiz'),
('TI', 1010150377, 'DEIBY JHOAN', 'NARVAEZ ROJAS', 3125431841, 'jhoandeiby06@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$blk3TGhWemZacVF1WDZsZg$U8+tLcgt1QanXL0c7bsBpyo/Ov2rD6oMch+IpsJO6SY', 'aprendiz'),
('TI', 1010151843, 'JHONATHAN DAVID', 'CHARRY DURAN', 3106818003, 'jhonatandcharryd@outlook.com', '$argon2i$v=19$m=65536,t=4,p=1$LkcwUk5tRnpqUTlPZmRNVg$+cy+tt70kJj8A2f8U9F7ofClDKCGvU+5V7lJeLXtjQI', 'aprendiz'),
('CC', 1018504634, 'JUAN SEBASTIAN', 'MONTERO GORDILLO', 3046060224, 'juansebas2298@hotmail.com', '$argon2i$v=19$m=65536,t=4,p=1$ZG1rQXo0MWRBR3dEaTJuSw$uuiGRn/EwH9tgURq9ribTPumvygAA6aV8pSZh5rWihg', 'aprendiz'),
('TI', 1022922486, 'CARLOS ANTONIO', 'GONZALEZ LOMBANA', 0, 'carlosgonzalez09inf@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$YVovLzEyOE5EZ1REc3lmTw$3FtImc/Lm4Q5yWg7Mq9tXSbYAsUvQUGy4oXrm8RVK3w', 'aprendiz'),
('TI', 1024460334, 'SANTIAGO', 'MURCIA CANGREJO', 0, 'santyagomurciamc@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$VDZML2E5Vnl1NzJhaXRSZA$2YT0lvE2NbSlCg1R3jk5GeZZyw+8KBU6s0wm3n85OVI', 'aprendiz'),
('CC', 1030540016, 'ERICK LEANDRO', 'CARDOSO BUSTOS', 3022317385, 'leandro2587@misena.edu.co', '$argon2i$v=19$m=65536,t=4,p=1$WTRXOEtKeU9BZ01RQXY2Ng$HtRVhIum/c+pILS6hdrhFfcgAlaS+6IN3kLSr1xqGeg', 'aprendiz'),
('CC', 1033684307, 'JULIO ADRIAN', 'MOLINA ALVAREZ', 3186416777, 'julioadrianmolinaalvarez@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$dzM3QVdidmpBb3BlMnRzOQ$zskD1xjGHRlnRSpwhdiCjT8TV0giuPbjrLs0BU0UPxY', 'aprendiz'),
('TI', 1044609017, 'KATYA MILENA', 'RAMOS GOMEZ', 0, 'katyamilenaramosgomez@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$M1R6b2d5Y2tMdW41dmJncw$w4XazfJFiZo6fExqU8iMXHGTqVU1GS5Ev+BvNvl68Sk', 'aprendiz'),
('CC', 1069852821, 'CLAUDIA MILENA', 'SANCHEZ GAONA', 3214034650, 'snikkgirl90@hotmail.com', '$argon2i$v=19$m=65536,t=4,p=1$dkY4MDhINWZvdkZtUnNyVw$Lsq8Q34wgNNr1PGwNQwpika34uRq2my9V67YsoNPiA8', 'aprendiz'),
('CC', 1075208554, 'YANID ALEXI', 'ANDRADE ROJAS', 8731026, 'yanid.andrade@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$NjVuNWNPSkxObmxRYy9GVQ$SmyTSD/sEgLvYtjrIrFGckRl74Tw8KgvhwwuJWh9DMc', 'aprendiz'),
('TI', 1075211776, 'LUIS FERNANDO', 'VARGAS TRUJILLO', 3172397874, 'luisvar2109@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$UFFxZGRSNDVSSGxNNUtKWQ$E31t239QM7mUUrAbka3AMW0MdfEXteHLM8G+80iRa18', 'aprendiz'),
('CC', 1075219773, 'CAMILO EDUARDO', 'VALENCIA ', 3125226109, 'saratoga1075@hotmail.com', '$argon2i$v=19$m=65536,t=4,p=1$Ti9nLmdudUhDSDBncFV2OA$+O11AL8WW5oGC/DOzugOJDk/VkcYlWhgxgC1FEPHBxs', 'aprendiz'),
('CC', 1075223549, 'CRISTIAN IVAN', 'ALDANA GUZMAN', 0, 'cristian.guzman61@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$WnpUbGJRSG54VEJ2UGZuTw$HjAD8RhpYNaTB8TaGiKxoI0geFuQrk5OQ59QwWF/lW4', 'aprendiz'),
('CC', 1075225661, 'JAIR ADRIAN', 'QUIMBAYO LOPEZ', 0, 'jairadrianquimbayolopez@hotmail.com', '$argon2i$v=19$m=65536,t=4,p=1$WUQ1aHlGWFhzWUFBSW5ubw$LD08yobjb+6jzstQcklns+16DUdw3mj2/GIcQcEJqs4', 'aprendiz'),
('CC', 1075239402, 'EDWARD ALEXANDER', 'IZQUIERDO ARIZMENDI', 3162853298, 'edward4212@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$a2pQOTV0TGlvZno3bjI4cA$n2Q/q0c2uWs/L/QVjdbfhqrYobetPLYErdJDVFX7iDE', 'aprendiz'),
('CC', 1075245112, 'ANGELICA MARIA', 'MONTES PERDOMO', 0, 'kika_1101@hotmail.com', '$argon2i$v=19$m=65536,t=4,p=1$V2o4MDhSZm1xS0cwcUp6Lg$/EnqKSS0s8/r6mRLcuSp93X59JmYgNsuFzPIQrpus4A', 'aprendiz'),
('CC', 1075248218, 'LEYDI XIOMARA', 'CRUZ BONILLA', 3118166389, 'xiomy4466@hotmail.com', '$argon2i$v=19$m=65536,t=4,p=1$Zkd4YlBGbzdkRm44ZUUyMw$4N8ofr+mj/4s8mzcy72XEITRtfqS5/Kk7JWIskrzwoY', 'aprendiz'),
('CC', 1075261488, 'LUIS FELIPE', 'MORALES VALDERRAMA', 0, 'lufemova093@hotmail.com', '$argon2i$v=19$m=65536,t=4,p=1$RHZreVFxVDR4ck5BenVWcA$2+3LDhDz8CpRacqo30/f0005oGp1HpckCFD3swP5Sok', 'aprendiz'),
('CC', 1075267144, 'STHEFANI MILENA', 'HERNANDEZ MARIN', 3168361180, 'sthefani_9210@hotmail.com', '$argon2i$v=19$m=65536,t=4,p=1$UXNUV1VRTGxVSS5qR0c5UA$LnDb3WYpofe7yH0gjbe2KnQ7bBw1qA9D+V6SKWEMcic', 'aprendiz'),
('CC', 1075271591, 'ANDRES EDUARDO', 'CALDERON ORTIZ', 8641698, 'aecalderon1@misena.edu.co', '$argon2i$v=19$m=65536,t=4,p=1$d1dWemVhY0JON0RHLjFQdg$fERkffCpgoE5Urc017WmPmyiRy3DI+G6QrVpnMlZVeY', 'aprendiz'),
('CC', 1075273536, 'LEIDY JOHANA', 'MUÑOZ ALDANA', 3213103781, 'munozaldana12@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$c0pFQUFTTVpJMlNDcHdZNg$3kL7urOjZ8xir379h+WzdscEsSo55ij9Tzl7bgAQOKg', 'aprendiz'),
('CC', 1075273946, 'CRISTIAN LEONARDO', 'SOSA DUSAN', 0, 'cristiansosa0915@outlook.com', '$argon2i$v=19$m=65536,t=4,p=1$V0Jaeng2U2lXTEE4U2h6aw$7q6qhEEWTUdS1ReSFBJa0DZBR5bhbT9VTP3ZTI5EVGo', 'aprendiz'),
('CC', 1075279303, 'LINDA CATHERINE', 'LOAIZA HUEJE', 3214024526, 'elamaya5@hotmail.com', '$argon2i$v=19$m=65536,t=4,p=1$NEQuWmF1dUtwSUlXUGx2Yw$oJVDS7QMBZ5stmUeIb0fsTGiQMgn0e9t6666Lw4B7ps', 'aprendiz'),
('CC', 1075280068, 'LINA YICELA', 'OSORIO BURBANO', 3134971685, 'linaosorio066@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$Yk5XTVM1TGMvcUw3a0VqZw$9cpWt4i9VojO7fY7CtASjlAnzAHn6Ja/vx6jIj3G6GI', 'aprendiz'),
('CC', 1075289463, 'CARLOS ALBERTO', 'GONZALEZ ORTIZ', 3177697481, 'carlos.gonzalez923@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$VklCNzZKWS9Hd1J3TmhOUA$zNVDeydsxZ0WibPUJJZ7j/qebfcp/J+R+/MjLRofqfI', 'aprendiz'),
('CC', 1075290431, 'MELISA', 'MANIOS CUELLAR', 3153304583, 'melisamanioscuellar2041@hotmail.com', '$argon2i$v=19$m=65536,t=4,p=1$L0ZkRVdXdmZ5aW4vSE40aA$5tsxgd6S8ufjwPvd6B7pGSNQj5/QG9WqFblS2fgIFWU', 'aprendiz'),
('CC', 1075294300, 'MARIA ALEJANDRA', 'ROMERO MURCIA', 3123289814, 'laurendaniela2014@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$UFVybUdmL2dHdDFDb3Q1bw$eCk3WA20h3a/R+f27/ufT7CkiFP/1znhpabVsxUzliQ', 'aprendiz'),
('CC', 1075298223, 'JESUS DAVID', 'VICTORIA SILVA', 3182200902, 'jesus__victoria@hotmail.com', '$argon2i$v=19$m=65536,t=4,p=1$eU5TMWl0djBOZ0s0TEh3cg$1WwQB5gLNiZ7llfnJoti4jRdXXp0o3ItKhvTWAZMW2E', 'aprendiz'),
('CC', 1075301423, 'ESTEBAN', 'MARTINEZ QUIMBAYA', 3165804285, 'arcanjel_015@hotmail.com', '$argon2i$v=19$m=65536,t=4,p=1$MmhmVU51cFEyUUJDV0w5Tg$DZoGFvH9EKL5U07js3PUyFfh6Uahsq3GEjlZvdCxv7c', 'aprendiz'),
('CC', 1075301903, 'NICOLAS', 'RODRIGUEZ ROA', 3184890939, 'nico_koz@hotmail.com', '$argon2i$v=19$m=65536,t=4,p=1$UlZ5eWdaM0VBZ2UvUjBGRg$wjYghkyEEGIz/A0gU3hJ83/LQwZiV3NgbHTG4MblPAs', 'aprendiz'),
('CC', 1075303106, 'CAMILO ANDRES', 'LOSADA BERMUDEZ', 0, 'calosada60@misena.edu.co', '$argon2i$v=19$m=65536,t=4,p=1$V3NkOHF6TnlVUHcweml2NQ$DoHQJtiJLthPSaIpVpIX02N3zCoBV8K0pIM56K5mM08', 'aprendiz'),
('CC', 1075303305, 'JUAN DAVID', 'BOLAÑOS HERNANDEZ', 3125973964, 'jdbolanos50@misena.edu.co', '$argon2i$v=19$m=65536,t=4,p=1$U29FVlJnU2I4VmU5ZWptNQ$CwntsgqT0CEazIFBCnewaOAeZb12FLjWQ7BChM92u8I', 'aprendiz'),
('CC', 1075304522, 'JOSE RICARDO', 'GONZALES ROMERO', 3214363842, 'riverside.ro12@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$b1FYMFZJV0Nhd2tGdkdwZg$ir/OBLyfEmRZF+4va3oUPv+UEJsExyZA+kX37QSHteE', 'aprendiz'),
('CC', 1075305836, 'SEBASTIAN', 'RIVERA JOVEN', 3204058876, 'sebastianriverajoven1997@hotmail.co', '$argon2i$v=19$m=65536,t=4,p=1$YzBZd3A2RmtERzIyOWZ2aw$fsDu1xRe4bMUGH8T9V/XLZXxhZhYUkDfGoXkoX9bCIs', 'aprendiz'),
('CC', 1075307897, 'FRANCISCO JAVIER', 'RIVERA ARIAS', 3143196390, 'franciscojavierriveraarias17@hotmai', '$argon2i$v=19$m=65536,t=4,p=1$cENQSUxBaWJESHBwYnlHQg$vvi+DnRXfQD809X+rML9L+oju1HzD0VvQl6Ln2XMPzo', 'aprendiz'),
('CC', 1075309880, 'DANIELA', 'FAJARDO CAMPOS', 3103447123, 'dfajardo08@misena.edu.co', '$argon2i$v=19$m=65536,t=4,p=1$dXFtUm5LTXdDeG5CR3dpcg$t2n/KCCOfBUXWdjEIS5FtbpLKjjcbU5AAVDuq7GprHA', 'aprendiz'),
('CC', 1075311348, 'JUAN DIEGO', 'PASCUAS MEDINA', 0, 'jdpascuas84@misena.edu.co', '$argon2i$v=19$m=65536,t=4,p=1$TnRock15YmwzczZTSkNFMw$Ybz0XI4r3epNfRZ1aIBz6NxpmzwRbpbLsBlP59U3F50', 'aprendiz'),
('CC', 1075312840, 'JUSEPH ALEJANDRO', 'CRUZ TRUJILLO', 0, 'acruzjuseth@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$NTJGZmdISlkvMEZLZ2k1NQ$EJjUeHxPPIb6iPzSb0fLbNob1sCC0Ghf912mUM3C7fE', 'aprendiz'),
('CC', 1075314699, 'CRISTIAN ANDRES', 'BUSTOS MORA', 573227957016, 'andresbmas@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$VjVnV3d0ZHR1MGkzZ0haNg$lqR3fSeOwAtT08voPHmLN0Q58ifsNvzN64D0TG6r/Zw', 'aprendiz'),
('CC', 1075319330, 'ANDERSON CAMILO', 'CERQUERA ESQUIVEL', 0, 'acce1806@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$NFNBMHlBcVh0a2twUW5NVQ$qcYxIpwqxdScoufWxvKjGtziRAsE9X+5hXzOo4nMVZs', 'aprendiz'),
('CC', 1075541769, 'ARNOLDO', 'ANDRADE ARANGO', 8389764, 'aandrade96@misena.edu.co', '$argon2i$v=19$m=65536,t=4,p=1$eENKT0tnZGVWUXcxVGoxNg$EQtwS0II9ga9MVheMMOjMLtGbckj9xcdJH0zvDqznlw', 'aprendiz'),
('TI', 1076903335, 'DIANA MARCELA', 'FIERRO SUAREZ', 3106732969, 'dianafierro3003@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$eWRrd1FiOS9GUE52Sm5Mdw$2H9kxD5OkewBZqTFde+tFozRKFsdtSNK68FkHSz6fT0', 'aprendiz'),
('CC', 1077840148, 'RICARDO ANDRES', 'AVILA MOSQUERA', 3188494774, 'ricardo-si@hotmail.com', '$argon2i$v=19$m=65536,t=4,p=1$ZG1vZFd5ZDB4ZVd6dnpMRQ$+odkLb9b4GfyWgYtONEHLmFrO+4kRHDS17b7mlbQ4N4', 'aprendiz'),
('CC', 1079177258, 'DANIEL HERNANDO', 'PATIÑO CABRERA', 3166337424, 'danielpatino0205@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$TnppV0JoWVN0RkR4QVZ5Zw$ByB0T1GerHxtNriU3+0rIvnLHekYNihlV5H8BOHCQXo', 'aprendiz'),
('CC', 1079185139, 'KENDI TATIANA', 'SALGADO SANCHEZ', 3186527387, 'tatianita201809@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$SklucndpWGVHL3RETmdIbg$Dp8HtaCG9L7db/WXZ1MsDaXdUWQFnQF92Vwyg82ZBu8', 'aprendiz'),
('CC', 1079185998, 'LUZ MIREYA', 'PIÑA SOGAMOSO', 3142215102, 'mireyaps17@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$bkFaRVIzcGRBQi9zdDNxMw$lNTYMRHcaSnbNokkbh5Zz2Ozo3TTmsH7XBd0Idv7KSI', 'aprendiz'),
('CC', 1079186847, 'KEVIN ANDRES', 'JOVEN PARRA', 3005565614, 'andresjoven1617@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$SXp0UmRTcnpLbFM3UGpvbA$QI891WXaSC+DwlwntoQoMiBxQUaBN2FWfqpeuAMFEz0', 'aprendiz'),
('CC', 1079186983, 'JUAN DAVID', 'TRUJILLO ANDRADE', 3212661891, 'david990620@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$OGM1U0lidTk0anVuckNOWg$rYBdZ9GgJWYErmBXWJz9lzy7e3EZ7KFN41K0Z4yba0M', 'aprendiz'),
('CC', 1079607780, 'KARLA XIMENA', 'NINCO FONSECA', 3006999289, 'kxninco@misena.edu.co', '$argon2i$v=19$m=65536,t=4,p=1$R1dDUFJRR0RSd3VGRm5DWQ$IAMgPYM/pGK94Ax4XoDyDhde9LzW17w3hXJf6WqcuXM', 'aprendiz'),
('CC', 1081155730, 'MITCHEL STEVEN', 'OVIEDO ROJAS', 0, 'm-s-o-r_654@hotmail.com', '$argon2i$v=19$m=65536,t=4,p=1$SURzblA0eW51enN1dVJWSg$jvazMh+gl7w2C4ab6jXEslUPKtM/szsJRlUkcahb/hQ', 'aprendiz'),
('CC', 1081160769, 'EDINSON IVAN', 'TORRES LLANOS', 3183454805, 'ivan.1999torres@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$d2d4eFg0MmFqUmtxYndEZA$lQxm1TwV9fmY66dKZon5VqkV3cSHtenkD0D2wZVLgZs', 'aprendiz'),
('CC', 1081161102, 'CRISTIAN FABIAN', 'SERRATO ALVAREZ', 3166985690, 'SerratoCristian99@hotmail.com', '$argon2i$v=19$m=65536,t=4,p=1$RS5tcnB2dTE3aVZTR0c1Zw$pAqL5tPooyCfqXyiq3isILtp6EtMDxyMjoTUNx3J/HQ', 'aprendiz'),
('CC', 1082214880, 'VIVIANA ANDREA', 'GARCIA MONJE', 3157775136, 'viandregarcia@hotmail.com', '$argon2i$v=19$m=65536,t=4,p=1$eEwuajNyWXdwWU1vTllTUw$Rcb31l/i+6vG0rzIF4vzSZyZHlQrdHsNWElYZ2lkdx0', 'aprendiz'),
('CC', 1082215747, 'CARLOS EDUARDO', 'BRAN PERDOMO', 573142187763, 'carlosedbrand@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$TlZlNGxrZXBNY0w3MnIzMg$7QEEXWNGOkHlaAPXADTyBcPnGXeoYo3YHlrxYUIZDCg', 'aprendiz'),
('CC', 1082217057, 'LUISA MARIA', 'MONJE MEJIA', 3143903186, 'luisamariamonjemejia@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$amZucTNPemVuQkJIWDVUNA$YBTLxBArcI7IGYQaYw2OI2f6uVVZEsuSUuKF9bz9XOA', 'aprendiz'),
('CC', 1084869277, 'FERNEY', 'RIVAS GARCES', 3024237044, 'ferney1996rivas@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$V2dmL2xwVnpmODV4cS5GSg$UxUl79mbdJpm8iE7gAlU1fXoPgpaIidDycnZjBF9p0g', 'aprendiz'),
('TI', 1084922004, 'LUNA FERNANDA', 'PERDOMO ANDRADE', 3156339010, 'lperdomoandrade@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$dnZnZ2YvVEVOU3dZeGVsMw$fpV/wz8fak9CMtbRfqcgbdVx8vbqWsMhrtMr4XWFN4A', 'aprendiz'),
('TI', 1084922025, 'JUAN SEBASTIAN', 'MAJIN LADINO', 3182159998, 'juanmajin25@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$Lm1ESGhrTUo0b1F3TmlMMA$KMQ6d0Zd6qThdlt7W1DviIeQ9U+UB0qFC8W7+GahXSE', 'aprendiz'),
('TI', 1084922037, 'JULIAN MAURICIO', 'LEGUISAMO PATIO', 3203641967, 'arrayanesjuli_@hotmail.com', '$argon2i$v=19$m=65536,t=4,p=1$VnZqOERjWFBOMWVBQXk2Zw$3GK0MrcEuCeft9gEMXrCujokPocdCy4gFsSHeo+tywY', 'aprendiz'),
('TI', 1084922041, 'ANGELICA', 'SILVA GOMEZ', 3138319380, 'linamarcelaruizbonilla2003@gmail.co', '$argon2i$v=19$m=65536,t=4,p=1$YmlJVWdQSk5lR0IyLzRnRQ$sKxKT3VhxxX5Km1RtP41DxqpAAxVYcdcX4owzKLYPzA', 'aprendiz'),
('TI', 1084922098, 'LUIS FERNANDO', 'YUCUMA BOLAÑOS', 3204051887, 'luisyucuma628@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$U3dWZnVTclZQc2ZNMzJuSA$KBESEA9j+k4yu3sHC0uVDiaIWqEOz4Ctmu8e4UQC6+U', 'aprendiz'),
('TI', 1084922145, 'BRENDA YULIETH', 'ROMERO VARGAS', 3213849751, 'romerobrendayulieth@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$NWJlRVRxV3ZRNkc2bHVicQ$OR/RRuTh3yw2Ja73Jt/Z6PK1hp3LBRdLPRbxRD6uSsk', 'aprendiz'),
('TI', 1084922417, 'LAURA VANESSA', 'RENGIFO RODRIGUEZ', 3123763242, 'simadilo@hotmail.com', '$argon2i$v=19$m=65536,t=4,p=1$QTVlLkpCd3ZOb1Mvb1lCcg$gJPKX/N6A4M17IRkrx54Is6Vebx38JGL9SgrUfZHbRo', 'aprendiz'),
('TI', 1109184136, 'ANDER SNEYDER', 'CERQUERA PENAGOS', 3208893049, 'luzmarinapenagosgomez@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$cmwuM01jREcxd1pXaU1KSQ$FkvqBWOzbsZHik2j3LUhv2kW+4r1IATMvMriZIAGsp0', 'aprendiz'),
('CC', 1109418769, 'OSCAR EDUARDO', 'GONZALEZ ', 3132153418, 'lida.hernandez@cun.edu.co', '$argon2i$v=19$m=65536,t=4,p=1$RExsWldMLnN4Ly9ORy9WcA$4KqjpUhBTD1YOTDnrGSJuVX+6mHYpnGYDjaeA58KXEU', 'aprendiz'),
('CC', 1115941578, 'YERZIN JANEY', 'PEREZ BERNAL', 3115566807, 'yerzin24@hotmail.com', '$argon2i$v=19$m=65536,t=4,p=1$QkdiWWk0REFMYkdLZVYwVw$mwCGpXcXEtarfCmDr/QmzUj4gXAGezcWMsvTA4SDGdw', 'aprendiz'),
('CC', 1149195921, 'LORENZO', 'SANCHEZ RAMIREZ', 3143842360, 'lsanchez129@misena.edu.co', '$argon2i$v=19$m=65536,t=4,p=1$bUxJa1YycFB4Tnlqck5NNg$iNiJLyQ0+tTZjV5CadKZgnP1tQ8R1h73YffOy79IXUo', 'aprendiz'),
('CC', 1192716268, 'SHARICK DAYHANA', 'GOMEZ AVILEZ', 3132580996, 'dayhanita31@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$U29RLlNqUHRYcE45cndnVA$T9Q0z3omiHsdM4JdwKrGAQzKo/ykLcpMpHRwSqaasTs', 'aprendiz'),
('TI', 1192728806, 'SERGIO ANDRES', 'MONTEALEGRE PEREZ', 3103488499, 'sergioandresmontealegre002@gmail.co', '$argon2i$v=19$m=65536,t=4,p=1$eUhQZEVpMFUxdGRKNXM0cg$4pm0tAih8j1wWRZxtnY2ldGQnFSiRCSe03egCFIxu9g', 'aprendiz'),
('TI', 1192757125, 'ALVARO ANDRES', 'NUÑEZ PERDOMO', 0, 'andresnynez981@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$RTEzYUFjb29KTC80ZkxiWA$2uWRp5J+6BXDeCoP623XtaQ6eld5oo1AW/plk7OsPmY', 'aprendiz'),
('CC', 1192923675, 'JULIAN CAMILO', 'PEREZ MENDEZ', 0, 'juliancamiloperezmendez2@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$MThyUVQ4SDRPbVRZbG9sZQ$NnyMvOUW9Vdi+PbktCrp5zhsNxbM4QgbrwNZwPUYXag', 'aprendiz'),
('CC', 1193081385, 'JOSE DAVID', 'MORENO PERDOMO', 0, 'jdmoreno1004@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$eVJ3RFdUdk5EOGVYT1pnSg$WfiUYZrUbcbM/6EU9w36TagplRmMlxbSWnq1piqhfrw', 'aprendiz'),
('TI', 1193081401, 'KEVIN HERNAN', 'TOVAR TORRES', 0, 'tovark824@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$QXR5QzNqWDQxa21pNzNEUg$WrXXn0uwyXk5geBFAe8nn7YqGYwFaCLHKo8E6FkH+3w', 'aprendiz'),
('CC', 1193085963, 'YULIANA ANDREA', 'PERDOMO BURBANO', 3223733054, 'yulianaperdomo190901@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$WXVFRUNuMmxlTTdIWi9EYg$O6Xh6gQihXsEKxCgUNvnRY09EHGJ0hRs9uMcDpfB3OE', 'aprendiz'),
('TI', 1193086163, 'KAROL DANIELA', 'GAMA LEIVA', 3107552520, 'daniela8787275@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$MVQuUEVDNTdqLmJlbGtLaA$4WD4z6bcMa8wmMPfa/Kj+QXWYORGdgSRqmZRfVmxa9Y', 'aprendiz'),
('CC', 1193096483, 'LAURA MARIA', 'QUIROGA CAVIEDES', 3127532949, 'mariiacaviedes@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$RDB4ckMvU3hpLjRTUkhvNw$0N0yQWn8OIX5P+0+D3FRBs1mjbE/2UfF1aoMdjKRTaU', 'aprendiz'),
('TI', 1193123973, 'ALEX DAVID', 'ARAGON PEREZ', 0, 'alexdavidaragonperez@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$R1lHRFZLdnZRalRsRW1Wcg$d3AJg1IaKNrbbHmgUREIS4bE39y9KCJbpN1wGjI3wWk', 'aprendiz'),
('CC', 1193126216, 'MICHEL', 'TOVAR LOSADA', 3132393410, 'mtovar61@misena.edu.co', '$argon2i$v=19$m=65536,t=4,p=1$b084MUZ5SEhmLnA4UG9hbg$dVP0pDuzgGbsRqIYeuV+JYqjaZ1it5lg1p0ne9Egg9M', 'aprendiz'),
('CC', 1193134679, 'JHON FERNEY', 'CORTES MURCIA', 0, 'jhonferneycortes24@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$Y0hMYUkyNW9mTWRHcDVHNA$+yXFrCECVr8he62KPn0TWcpoCGN81G0KSw+BofXi6MI', 'aprendiz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas`
--

CREATE TABLE `programas` (
  `id_programa` int(11) NOT NULL,
  `nombrePrograma` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `tipoPrograma` enum('Tecnologo','Tecnico','Curso') COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `programas`
--

INSERT INTO `programas` (`id_programa`, `nombrePrograma`, `tipoPrograma`) VALUES
(228106, 'ADSI', 'Tecnologo'),
(228120, 'Software', 'Tecnico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `idProyecto` int(11) NOT NULL,
  `nombreProyecto` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcionProyecto` text COLLATE utf8_spanish2_ci NOT NULL,
  `estado` varchar(23) COLLATE utf8_spanish2_ci NOT NULL,
  `fechaPublicacion` date DEFAULT NULL,
  `idInstructor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`idProyecto`, `nombreProyecto`, `descripcionProyecto`, `estado`, `fechaPublicacion`, `idInstructor`) VALUES
(31, 'Proyecto 1', 'Prueba de proyecto', 'Publicado', '2020-11-23', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos_items`
--

CREATE TABLE `proyectos_items` (
  `idProyecto_item` int(11) NOT NULL,
  `idProyecto` int(11) NOT NULL,
  `idItems` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `proyectos_items`
--

INSERT INTO `proyectos_items` (`idProyecto_item`, `idProyecto`, `idItems`) VALUES
(23, 31, 23),
(24, 31, 24),
(25, 31, 25),
(26, 31, 26);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aprendices`
--
ALTER TABLE `aprendices`
  ADD PRIMARY KEY (`idAprendiz`),
  ADD KEY `idFicha` (`idFicha`),
  ADD KEY `idPersona` (`idPersona`);

--
-- Indices de la tabla `aprendices_proyectos`
--
ALTER TABLE `aprendices_proyectos`
  ADD PRIMARY KEY (`idAprendizProyecto`),
  ADD KEY `idAprendiz` (`idAprendiz`),
  ADD KEY `idProyecto` (`idProyecto`);

--
-- Indices de la tabla `fichas`
--
ALTER TABLE `fichas`
  ADD PRIMARY KEY (`id_ficha`),
  ADD KEY `id_programa` (`id_programa`);

--
-- Indices de la tabla `fichas_instructores`
--
ALTER TABLE `fichas_instructores`
  ADD PRIMARY KEY (`idFichaInstructor`),
  ADD KEY `id_ficha` (`id_ficha`),
  ADD KEY `id_instructor` (`id_instructor`);

--
-- Indices de la tabla `instructores`
--
ALTER TABLE `instructores`
  ADD PRIMARY KEY (`idInstructor`),
  ADD KEY `id_persona` (`id_persona`);

--
-- Indices de la tabla `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`idItem`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`identificacion`);

--
-- Indices de la tabla `programas`
--
ALTER TABLE `programas`
  ADD PRIMARY KEY (`id_programa`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`idProyecto`),
  ADD KEY `idInstructor` (`idInstructor`);

--
-- Indices de la tabla `proyectos_items`
--
ALTER TABLE `proyectos_items`
  ADD PRIMARY KEY (`idProyecto_item`),
  ADD KEY `idProyecto` (`idProyecto`),
  ADD KEY `idItems` (`idItems`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aprendices`
--
ALTER TABLE `aprendices`
  MODIFY `idAprendiz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=257;

--
-- AUTO_INCREMENT de la tabla `aprendices_proyectos`
--
ALTER TABLE `aprendices_proyectos`
  MODIFY `idAprendizProyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `fichas_instructores`
--
ALTER TABLE `fichas_instructores`
  MODIFY `idFichaInstructor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `instructores`
--
ALTER TABLE `instructores`
  MODIFY `idInstructor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `items`
--
ALTER TABLE `items`
  MODIFY `idItem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `idProyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `proyectos_items`
--
ALTER TABLE `proyectos_items`
  MODIFY `idProyecto_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `aprendices`
--
ALTER TABLE `aprendices`
  ADD CONSTRAINT `aprendices_ibfk_1` FOREIGN KEY (`idFicha`) REFERENCES `fichas` (`id_ficha`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `aprendices_ibfk_2` FOREIGN KEY (`idPersona`) REFERENCES `personas` (`identificacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `aprendices_proyectos`
--
ALTER TABLE `aprendices_proyectos`
  ADD CONSTRAINT `aprendices_proyectos_ibfk_1` FOREIGN KEY (`idAprendiz`) REFERENCES `aprendices` (`idAprendiz`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `aprendices_proyectos_ibfk_2` FOREIGN KEY (`idProyecto`) REFERENCES `proyectos` (`idProyecto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `fichas`
--
ALTER TABLE `fichas`
  ADD CONSTRAINT `fichas_ibfk_1` FOREIGN KEY (`id_programa`) REFERENCES `programas` (`id_programa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `fichas_instructores`
--
ALTER TABLE `fichas_instructores`
  ADD CONSTRAINT `fichas_instructores_ibfk_1` FOREIGN KEY (`id_instructor`) REFERENCES `instructores` (`idInstructor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fichas_instructores_ibfk_2` FOREIGN KEY (`id_ficha`) REFERENCES `fichas` (`id_ficha`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `instructores`
--
ALTER TABLE `instructores`
  ADD CONSTRAINT `instructores_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `personas` (`identificacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `proyectos_ibfk_1` FOREIGN KEY (`idInstructor`) REFERENCES `instructores` (`idInstructor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proyectos_items`
--
ALTER TABLE `proyectos_items`
  ADD CONSTRAINT `proyectos_items_ibfk_1` FOREIGN KEY (`idProyecto`) REFERENCES `proyectos` (`idProyecto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proyectos_items_ibfk_2` FOREIGN KEY (`idItems`) REFERENCES `items` (`idItem`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
