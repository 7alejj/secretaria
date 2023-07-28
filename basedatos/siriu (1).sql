-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-08-2019 a las 21:58:47
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `siriu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `dni` bigint(9) NOT NULL,
  `apellido` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `localidad` int(11) NOT NULL,
  `codigo_postal` smallint(6) NOT NULL,
  `nacionalidad` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `lugar_nacimiento` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `e_mail` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(15) NOT NULL,
  `celular` int(20) NOT NULL,
  `curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `alumno`:
--   `localidad`
--       `localidad` -> `id_localidad`
--   `curso`
--       `curso` -> `id_curso`
--

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`dni`, `apellido`, `nombre`, `direccion`, `localidad`, `codigo_postal`, `nacionalidad`, `lugar_nacimiento`, `fecha_nacimiento`, `sexo`, `e_mail`, `telefono`, `celular`, `curso`) VALUES
(1234, 'molina', 'juana', 'asd', 1, 123, 'asd', 'asd', '5522-05-05', 'a', 'asd', 123, 123, 1),
(12345, 'Pintos', '123', 'asd', 2, 123, 'asd', 'asd', '2001-08-10', 'a', 'asd', 123, 123, 1),
(123456, 'cosme', 'fulanito', 'blabla', 2, 1759, 'argentino', 'bla', '0000-00-00', 'M', 'mail@mail.com', 15151515, 15151515, 1),
(1234567, 'qwe', 'sad', 'asd', 2, 123, 'asd', 'asd', '2001-08-10', 'a', 'asd', 123, 123, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id_asistencia` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `id_preceptor` int(11) NOT NULL,
  `archivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `asistencia`:
--   `id_curso`
--       `curso` -> `id_curso`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL,
  `curso_nom` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `especialidad` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `turno` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `ciclo_electivo` int(11) NOT NULL,
  `id_preceptor` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `curso`:
--

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id_curso`, `curso_nom`, `especialidad`, `turno`, `ciclo_electivo`, `id_preceptor`) VALUES
(1, 'espera', 'espera', 'e', 2019, 1),
(2, '1-1', 'basico', 'm', 2019, 1),
(3, '1-2', 'basico', 'm', 2019, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ensenia`
--

CREATE TABLE `ensenia` (
  `id_ensenia` int(11) NOT NULL,
  `docente` bigint(20) NOT NULL,
  `curso` int(11) NOT NULL,
  `grupo` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `materia` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_cese` date NOT NULL,
  `suplente_de` int(11) NOT NULL,
  `estado` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `horario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `ensenia`:
--   `docente`
--       `persona` -> `id_persona`
--   `materia`
--       `materia` -> `id_materia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `id_horario` int(11) NOT NULL,
  `horario` int(11) NOT NULL,
  `dia` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `hora_entrada` time NOT NULL,
  `hora_salida` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `horario`:
--   `horario`
--       `ensenia` -> `horario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `legajo`
--

CREATE TABLE `legajo` (
  `id_legajo` bigint(20) NOT NULL,
  `alumno` bigint(9) NOT NULL,
  `legajo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `libro` int(11) NOT NULL,
  `folio` int(11) NOT NULL,
  `tipo_libro` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `legajo`:
--   `alumno`
--       `alumno` -> `dni`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE `localidad` (
  `id_localidad` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `localidad`:
--

--
-- Volcado de datos para la tabla `localidad`
--

INSERT INTO `localidad` (`id_localidad`, `nombre`) VALUES
(1, 'laferrere'),
(2, 'gonzalez catan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `id_materia` int(11) NOT NULL,
  `materia` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `especialidad` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `clase` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  `plan_anio` smallint(4) NOT NULL,
  `equivalente_a` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `materia`:
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE `material` (
  `id_material` bigint(20) NOT NULL,
  `docente` bigint(20) NOT NULL,
  `materia` int(11) NOT NULL,
  `curso` int(11) NOT NULL,
  `grupo` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `link` text COLLATE utf8_spanish2_ci NOT NULL,
  `archivo` varchar(300) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- RELACIONES PARA LA TABLA `material`:
--   `docente`
--       `persona` -> `id_persona`
--   `curso`
--       `curso` -> `id_curso`
--   `materia`
--       `materia` -> `id_materia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesa`
--

CREATE TABLE `mesa` (
  `id_mesa` int(11) NOT NULL,
  `profesor1` bigint(20) NOT NULL,
  `profesor2` bigint(20) DEFAULT NULL,
  `profesor3` bigint(20) DEFAULT NULL,
  `materia` int(11) NOT NULL,
  `curso` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `mesa` varchar(3) COLLATE utf8_spanish2_ci NOT NULL,
  `libro` tinyint(3) UNSIGNED NOT NULL,
  `folio` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- RELACIONES PARA LA TABLA `mesa`:
--   `profesor2`
--       `persona` -> `id_persona`
--   `profesor3`
--       `persona` -> `id_persona`
--   `curso`
--       `curso` -> `id_curso`
--   `materia`
--       `materia` -> `id_materia`
--   `profesor1`
--       `persona` -> `id_persona`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel`
--

CREATE TABLE `nivel` (
  `id_nivel` int(11) NOT NULL,
  `tipo` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `nivel`:
--

--
-- Volcado de datos para la tabla `nivel`
--

INSERT INTO `nivel` (`id_nivel`, `tipo`) VALUES
(1, 'espera'),
(2, 'profesor'),
(3, 'preceptor'),
(4, 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_persona` bigint(20) NOT NULL,
  `apellido` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `dni` int(11) NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `localidad` int(11) NOT NULL,
  `codigo_postal` smallint(6) NOT NULL,
  `nacionalidad` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `lugar_nacimiento` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `e_mail` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(15) NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `persona`:
--   `localidad`
--       `localidad` -> `id_localidad`
--   `nivel`
--       `nivel` -> `id_nivel`
--

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `apellido`, `nombre`, `dni`, `direccion`, `localidad`, `codigo_postal`, `nacionalidad`, `lugar_nacimiento`, `fecha_nacimiento`, `sexo`, `e_mail`, `telefono`, `usuario`, `clave`, `nivel`) VALUES
(15, 'pintos', 'maxi', 12345, 'coraceros', 2, 1763, 'argentino', 'asdsad', '2005-08-10', 'M', 'elmasiatrg@gmail.com', 1122738810, 'elmasi', 'atr', 1),
(16, 'molina', 'juana', 1234, 'asd', 1, 1234, 'asd', 'asd', '2001-08-10', 'F', 'asd', 123, 'juana', '123', 2),
(17, 'molina', 'juana', 1234, 'asd', 1, 1234, 'asd', 'asd', '2001-08-10', 'F', 'asd', 123, 'luca', '123', 3),
(18, 'molina', 'juana', 1234, 'asd', 1, 1234, 'asd', 'asd', '2001-08-10', 'F', 'asd', 123, 'orne', '123', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regulares_previos`
--

CREATE TABLE `regulares_previos` (
  `id_reg_prev` bigint(20) NOT NULL,
  `alumno` bigint(9) NOT NULL,
  `oral` tinyint(4) NOT NULL,
  `escrito` tinyint(4) NOT NULL,
  `final` tinyint(4) NOT NULL,
  `mesa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `regulares_previos`:
--   `mesa`
--       `mesa` -> `id_mesa`
--   `alumno`
--       `alumno` -> `dni`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trimestre`
--

CREATE TABLE `trimestre` (
  `id_trimestre` bigint(20) NOT NULL,
  `alumno` bigint(9) NOT NULL,
  `enseniado` int(11) NOT NULL,
  `nota1` tinyint(4) NOT NULL,
  `nota2` tinyint(4) NOT NULL,
  `nota3` tinyint(4) NOT NULL,
  `nota4` tinyint(4) NOT NULL,
  `nota_final` tinyint(4) NOT NULL,
  `num_trimestre` tinyint(4) NOT NULL,
  `fecha_entrega` date NOT NULL,
  `validado` tinyint(1) DEFAULT '0',
  `revisado` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `trimestre`:
--   `enseniado`
--       `ensenia` -> `id_ensenia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutor`
--

CREATE TABLE `tutor` (
  `id_tutor` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `dni_alumno` bigint(9) NOT NULL,
  `parentezco` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `DNI_tutor` int(11) NOT NULL,
  `telefono` int(16) NOT NULL,
  `celular` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `tutor`:
--

--
-- Volcado de datos para la tabla `tutor`
--

INSERT INTO `tutor` (`id_tutor`, `nombre`, `apellido`, `dni_alumno`, `parentezco`, `DNI_tutor`, `telefono`, `celular`) VALUES
(2, '0', '0', 213, 'asd', 20000123, 1122738810, 123),
(3, 'maxi', 'pintos', 43506996, 'asd', 123, 1122738810, 123),
(4, 'maxi', 'pintso', 123, 'asd', 123, 123, 1234);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`dni`),
  ADD KEY `localidad` (`localidad`),
  ADD KEY `curso` (`curso`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id_asistencia`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`),
  ADD KEY `id_preceptor` (`id_preceptor`);

--
-- Indices de la tabla `ensenia`
--
ALTER TABLE `ensenia`
  ADD PRIMARY KEY (`id_ensenia`),
  ADD KEY `docente` (`docente`),
  ADD KEY `curso` (`curso`),
  ADD KEY `horario` (`horario`),
  ADD KEY `suplente_de` (`suplente_de`),
  ADD KEY `materia` (`materia`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id_horario`),
  ADD KEY `horario` (`horario`);

--
-- Indices de la tabla `legajo`
--
ALTER TABLE `legajo`
  ADD PRIMARY KEY (`id_legajo`),
  ADD KEY `alumno` (`alumno`);

--
-- Indices de la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD PRIMARY KEY (`id_localidad`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id_materia`),
  ADD KEY `equivalente_a` (`equivalente_a`);

--
-- Indices de la tabla `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id_material`),
  ADD KEY `docente` (`docente`,`materia`,`curso`),
  ADD KEY `curso` (`curso`),
  ADD KEY `materia` (`materia`);

--
-- Indices de la tabla `mesa`
--
ALTER TABLE `mesa`
  ADD PRIMARY KEY (`id_mesa`),
  ADD KEY `profesor1` (`profesor1`,`profesor2`,`profesor3`,`materia`,`curso`),
  ADD KEY `profesor2` (`profesor2`),
  ADD KEY `profesor3` (`profesor3`),
  ADD KEY `curso` (`curso`),
  ADD KEY `materia` (`materia`);

--
-- Indices de la tabla `nivel`
--
ALTER TABLE `nivel`
  ADD PRIMARY KEY (`id_nivel`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_persona`),
  ADD KEY `localidad` (`localidad`),
  ADD KEY `nivel` (`nivel`);

--
-- Indices de la tabla `regulares_previos`
--
ALTER TABLE `regulares_previos`
  ADD PRIMARY KEY (`id_reg_prev`),
  ADD KEY `alumno` (`alumno`),
  ADD KEY `mesa` (`mesa`);

--
-- Indices de la tabla `trimestre`
--
ALTER TABLE `trimestre`
  ADD PRIMARY KEY (`id_trimestre`),
  ADD KEY `alumno` (`alumno`),
  ADD KEY `enseniado` (`enseniado`),
  ADD KEY `revisado` (`revisado`),
  ADD KEY `alumno_2` (`alumno`),
  ADD KEY `alumno_3` (`alumno`);

--
-- Indices de la tabla `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`id_tutor`),
  ADD KEY `dni_alumno` (`dni_alumno`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ensenia`
--
ALTER TABLE `ensenia`
  MODIFY `id_ensenia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `legajo`
--
ALTER TABLE `legajo`
  MODIFY `id_legajo` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `localidad`
--
ALTER TABLE `localidad`
  MODIFY `id_localidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `material`
--
ALTER TABLE `material`
  MODIFY `id_material` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mesa`
--
ALTER TABLE `mesa`
  MODIFY `id_mesa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nivel`
--
ALTER TABLE `nivel`
  MODIFY `id_nivel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_persona` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `regulares_previos`
--
ALTER TABLE `regulares_previos`
  MODIFY `id_reg_prev` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `trimestre`
--
ALTER TABLE `trimestre`
  MODIFY `id_trimestre` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tutor`
--
ALTER TABLE `tutor`
  MODIFY `id_tutor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`localidad`) REFERENCES `localidad` (`id_localidad`),
  ADD CONSTRAINT `alumno_ibfk_2` FOREIGN KEY (`curso`) REFERENCES `curso` (`id_curso`);

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `asistencia_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`);

--
-- Filtros para la tabla `ensenia`
--
ALTER TABLE `ensenia`
  ADD CONSTRAINT `ensenia_ibfk_1` FOREIGN KEY (`docente`) REFERENCES `persona` (`id_persona`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ensenia_ibfk_2` FOREIGN KEY (`materia`) REFERENCES `materia` (`id_materia`);

--
-- Filtros para la tabla `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `horario_ibfk_1` FOREIGN KEY (`horario`) REFERENCES `ensenia` (`horario`);

--
-- Filtros para la tabla `legajo`
--
ALTER TABLE `legajo`
  ADD CONSTRAINT `legajo_ibfk_1` FOREIGN KEY (`alumno`) REFERENCES `alumno` (`dni`);

--
-- Filtros para la tabla `material`
--
ALTER TABLE `material`
  ADD CONSTRAINT `material_ibfk_1` FOREIGN KEY (`docente`) REFERENCES `persona` (`id_persona`),
  ADD CONSTRAINT `material_ibfk_2` FOREIGN KEY (`curso`) REFERENCES `curso` (`id_curso`),
  ADD CONSTRAINT `material_ibfk_3` FOREIGN KEY (`materia`) REFERENCES `materia` (`id_materia`);

--
-- Filtros para la tabla `mesa`
--
ALTER TABLE `mesa`
  ADD CONSTRAINT `mesa_ibfk_1` FOREIGN KEY (`profesor2`) REFERENCES `persona` (`id_persona`),
  ADD CONSTRAINT `mesa_ibfk_2` FOREIGN KEY (`profesor3`) REFERENCES `persona` (`id_persona`),
  ADD CONSTRAINT `mesa_ibfk_3` FOREIGN KEY (`curso`) REFERENCES `curso` (`id_curso`),
  ADD CONSTRAINT `mesa_ibfk_4` FOREIGN KEY (`materia`) REFERENCES `materia` (`id_materia`),
  ADD CONSTRAINT `mesa_ibfk_5` FOREIGN KEY (`profesor1`) REFERENCES `persona` (`id_persona`);

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_2` FOREIGN KEY (`localidad`) REFERENCES `localidad` (`id_localidad`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `persona_ibfk_3` FOREIGN KEY (`nivel`) REFERENCES `nivel` (`id_nivel`);

--
-- Filtros para la tabla `regulares_previos`
--
ALTER TABLE `regulares_previos`
  ADD CONSTRAINT `regulares_previos_ibfk_2` FOREIGN KEY (`mesa`) REFERENCES `mesa` (`id_mesa`),
  ADD CONSTRAINT `regulares_previos_ibfk_3` FOREIGN KEY (`alumno`) REFERENCES `alumno` (`dni`);

--
-- Filtros para la tabla `trimestre`
--
ALTER TABLE `trimestre`
  ADD CONSTRAINT `trimestre_ibfk_2` FOREIGN KEY (`enseniado`) REFERENCES `ensenia` (`id_ensenia`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
