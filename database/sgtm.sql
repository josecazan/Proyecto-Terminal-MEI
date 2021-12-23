-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2021 a las 18:58:43
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sgtm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus_mantenimientos`
--

CREATE TABLE `estatus_mantenimientos` (
  `id_estatus_mantenimiento-` int(11) NOT NULL,
  `estatus_mantenimiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus_tickets`
--

CREATE TABLE `estatus_tickets` (
  `id_estatus_ticket` int(11) NOT NULL,
  `estatus_ticket` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estatus_tickets`
--

INSERT INTO `estatus_tickets` (`id_estatus_ticket`, `estatus_ticket`) VALUES
(1, 'Sin Estatus'),
(2, 'En Progreso'),
(3, 'Rechazado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus_usuarios`
--

CREATE TABLE `estatus_usuarios` (
  `id_estatus_usuario` int(11) NOT NULL,
  `estatus_usuario` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estatus_usuarios`
--

INSERT INTO `estatus_usuarios` (`id_estatus_usuario`, `estatus_usuario`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventoscalendar`
--

CREATE TABLE `eventoscalendar` (
  `id_mantenimientos` int(11) NOT NULL,
  `evento` varchar(20) NOT NULL,
  `color_evento` varchar(20) NOT NULL,
  `fecha_inicio` varchar(20) NOT NULL,
  `fecha_fin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `eventoscalendar`
--

INSERT INTO `eventoscalendar` (`id_mantenimientos`, `evento`, `color_evento`, `fecha_inicio`, `fecha_fin`) VALUES
(1, 'Prueba', '#FF5722', '2021-11-01', '2021-11-02'),
(2, 'Prueba', '#FF5722', '2021-11-01', '2021-11-02'),
(3, 'Prueba 2', '#2196F3', '2021-11-01', '2021-11-02'),
(4, 'Prueba', '#FFC107', '2021-11-01', '2021-11-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorios`
--

CREATE TABLE `laboratorios` (
  `id_laboratorio` int(11) NOT NULL,
  `fecha_reg` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `laboratorio` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimientos`
--

CREATE TABLE `mantenimientos` (
  `id_mantenimiento` int(11) NOT NULL,
  `fecha_programada` date NOT NULL,
  `fecha_realizada` int(11) NOT NULL,
  `descripcion` int(11) NOT NULL,
  `id_laboratorio` int(11) NOT NULL,
  `id_tipo_mantenimiento` int(11) NOT NULL,
  `id_estatus_mantenimiento` int(11) NOT NULL,
  `id_usuario_genera` int(11) NOT NULL,
  `id_usuario_realiza` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE `materiales` (
  `id_material` int(11) NOT NULL,
  `material` varchar(32) NOT NULL,
  `existencia` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales_mantenimientos`
--

CREATE TABLE `materiales_mantenimientos` (
  `id_material` int(11) NOT NULL,
  `id_mantenimiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prioridades`
--

CREATE TABLE `prioridades` (
  `id_prioridad` int(11) NOT NULL,
  `prioridad` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tickets`
--

CREATE TABLE `tickets` (
  `id_ticket` int(11) NOT NULL,
  `asunto` varchar(32) NOT NULL,
  `fecha_creacion` varchar(8) NOT NULL,
  `nombre_solicitante` varchar(32) NOT NULL,
  `correo` varchar(32) NOT NULL,
  `id_prioridad` varchar(16) NOT NULL,
  `id_laboratorio` varchar(48) NOT NULL,
  `descripcion` text NOT NULL,
  `id_estatus_ticket` varchar(16) NOT NULL,
  `id_usuario_soporte` int(11) DEFAULT NULL,
  `archivo_adjunto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tickets`
--

INSERT INTO `tickets` (`id_ticket`, `asunto`, `fecha_creacion`, `nombre_solicitante`, `correo`, `id_prioridad`, `id_laboratorio`, `descripcion`, `id_estatus_ticket`, `id_usuario_soporte`, `archivo_adjunto`) VALUES
(17, 'Taladro no funciona', '19/10/20', 'eliazar may manrique', '150300124@ucaribe.edu.mx', 'Baja', 'Laboratorio de Mécanica', 'El taladro no funciona', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_de_usuarios`
--

CREATE TABLE `tipos_de_usuarios` (
  `id_tipo_de_usuario` int(11) NOT NULL,
  `tipo_de_usuario` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipos_de_usuarios`
--

INSERT INTO `tipos_de_usuarios` (`id_tipo_de_usuario`, `tipo_de_usuario`) VALUES
(1, 'Administrador'),
(2, 'Responsable'),
(3, 'Becario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_mantenimientos`
--

CREATE TABLE `tipos_mantenimientos` (
  `id_tipo_mantenimiento` int(11) NOT NULL,
  `tipo_mantenimiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(32) NOT NULL,
  `apellido` varchar(32) NOT NULL,
  `correo` varchar(32) NOT NULL,
  `password` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fecha_reg` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_tipo_de_usuario` int(11) NOT NULL,
  `id_estatus_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `correo`, `password`, `fecha_reg`, `id_tipo_de_usuario`, `id_estatus_usuario`) VALUES
(1, 'Eliazar', 'May Manrique', '150300124@ucaribe.edu.mx', 'password', '18/10/2021', 1, 1),
(4, 'Oscar Ricardo', 'Yama Martin', '150300804@ucaribe.edu.mx', 'Unicaribe', '19/10/2021', 1, 0),
(5, 'Giovanny', 'Gil Guzman', '150300123@ucaribe.edu.mx', 'Unicaribe', '02/11/2021', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_soportes`
--

CREATE TABLE `usuarios_soportes` (
  `id_usuario_soporte` int(11) NOT NULL,
  `nombre` varchar(32) NOT NULL,
  `correo` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estatus_mantenimientos`
--
ALTER TABLE `estatus_mantenimientos`
  ADD PRIMARY KEY (`id_estatus_mantenimiento-`);

--
-- Indices de la tabla `estatus_tickets`
--
ALTER TABLE `estatus_tickets`
  ADD PRIMARY KEY (`id_estatus_ticket`);

--
-- Indices de la tabla `estatus_usuarios`
--
ALTER TABLE `estatus_usuarios`
  ADD PRIMARY KEY (`id_estatus_usuario`);

--
-- Indices de la tabla `eventoscalendar`
--
ALTER TABLE `eventoscalendar`
  ADD PRIMARY KEY (`id_mantenimientos`);

--
-- Indices de la tabla `laboratorios`
--
ALTER TABLE `laboratorios`
  ADD PRIMARY KEY (`id_laboratorio`);

--
-- Indices de la tabla `mantenimientos`
--
ALTER TABLE `mantenimientos`
  ADD PRIMARY KEY (`id_mantenimiento`),
  ADD KEY `id_laboratorio` (`id_laboratorio`,`id_tipo_mantenimiento`),
  ADD KEY `id_tipo_mantenimiento` (`id_tipo_mantenimiento`),
  ADD KEY `id_estatus_mantenimiento` (`id_estatus_mantenimiento`,`id_usuario_genera`,`id_usuario_realiza`),
  ADD KEY `id_usuario_genera` (`id_usuario_genera`),
  ADD KEY `id_usuario_realiza` (`id_usuario_realiza`);

--
-- Indices de la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD PRIMARY KEY (`id_material`);

--
-- Indices de la tabla `materiales_mantenimientos`
--
ALTER TABLE `materiales_mantenimientos`
  ADD KEY `id_material` (`id_material`,`id_mantenimiento`),
  ADD KEY `id_mantenimiento` (`id_mantenimiento`);

--
-- Indices de la tabla `prioridades`
--
ALTER TABLE `prioridades`
  ADD PRIMARY KEY (`id_prioridad`);

--
-- Indices de la tabla `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id_ticket`),
  ADD KEY `id_estatus_ticket` (`id_estatus_ticket`),
  ADD KEY `id_laboratorio` (`id_laboratorio`),
  ADD KEY `id_usuario_soporte` (`id_usuario_soporte`);

--
-- Indices de la tabla `tipos_de_usuarios`
--
ALTER TABLE `tipos_de_usuarios`
  ADD PRIMARY KEY (`id_tipo_de_usuario`);

--
-- Indices de la tabla `tipos_mantenimientos`
--
ALTER TABLE `tipos_mantenimientos`
  ADD PRIMARY KEY (`id_tipo_mantenimiento`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_tipo_de_usuario` (`id_tipo_de_usuario`,`id_estatus_usuario`),
  ADD KEY `id_estatus_usuario` (`id_estatus_usuario`);

--
-- Indices de la tabla `usuarios_soportes`
--
ALTER TABLE `usuarios_soportes`
  ADD PRIMARY KEY (`id_usuario_soporte`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estatus_mantenimientos`
--
ALTER TABLE `estatus_mantenimientos`
  MODIFY `id_estatus_mantenimiento-` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estatus_tickets`
--
ALTER TABLE `estatus_tickets`
  MODIFY `id_estatus_ticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estatus_usuarios`
--
ALTER TABLE `estatus_usuarios`
  MODIFY `id_estatus_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `eventoscalendar`
--
ALTER TABLE `eventoscalendar`
  MODIFY `id_mantenimientos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `laboratorios`
--
ALTER TABLE `laboratorios`
  MODIFY `id_laboratorio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mantenimientos`
--
ALTER TABLE `mantenimientos`
  MODIFY `id_mantenimiento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materiales`
--
ALTER TABLE `materiales`
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `prioridades`
--
ALTER TABLE `prioridades`
  MODIFY `id_prioridad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `tipos_de_usuarios`
--
ALTER TABLE `tipos_de_usuarios`
  MODIFY `id_tipo_de_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios_soportes`
--
ALTER TABLE `usuarios_soportes`
  MODIFY `id_usuario_soporte` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mantenimientos`
--
ALTER TABLE `mantenimientos`
  ADD CONSTRAINT `mantenimientos_ibfk_1` FOREIGN KEY (`id_laboratorio`) REFERENCES `laboratorios` (`id_laboratorio`),
  ADD CONSTRAINT `mantenimientos_ibfk_2` FOREIGN KEY (`id_tipo_mantenimiento`) REFERENCES `tipos_mantenimientos` (`id_tipo_mantenimiento`),
  ADD CONSTRAINT `mantenimientos_ibfk_5` FOREIGN KEY (`id_estatus_mantenimiento`) REFERENCES `estatus_mantenimientos` (`id_estatus_mantenimiento-`);

--
-- Filtros para la tabla `materiales_mantenimientos`
--
ALTER TABLE `materiales_mantenimientos`
  ADD CONSTRAINT `materiales_mantenimientos_ibfk_1` FOREIGN KEY (`id_material`) REFERENCES `materiales` (`id_material`),
  ADD CONSTRAINT `materiales_mantenimientos_ibfk_2` FOREIGN KEY (`id_mantenimiento`) REFERENCES `mantenimientos` (`id_mantenimiento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
