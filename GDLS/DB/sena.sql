-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2019 a las 01:39:59
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sena`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id_cargo` int(11) NOT NULL,
  `nombre_cargo` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id_cargo`, `nombre_cargo`) VALUES
(1, 'Coordinador'),
(2, 'Instructor'),
(3, 'Supervisor de Recursos Humanos'),
(4, 'Auxiliar de recursos humanos'),
(5, 'Secretaria'),
(6, 'Tecnico de mantenimiento de equipos'),
(7, 'Auxiliar de mantenimiento de equipos'),
(8, 'Plomero'),
(9, 'Albañil'),
(10, 'Celador'),
(11, 'Jefe de Bodega'),
(12, 'Auxliar de Bodega'),
(13, 'Analista de salarios'),
(14, 'Analista estudio del trabajo'),
(15, 'Analista gestión humana'),
(16, 'Coordinador capacitación'),
(17, 'Consultor recursos humanos'),
(18, 'Coordinador bienestar social'),
(19, 'Coordinador personal'),
(20, 'Analista administrativo'),
(21, 'Asesor, organización y métodos'),
(22, 'Asesor, publicidad '),
(23, 'Asesor, empresas'),
(24, 'Analista ocupacional '),
(25, 'Analista organizacional '),
(26, 'Consultor organizacional'),
(27, 'Analista, organización y métodos '),
(28, 'Jefe,captaciones '),
(29, 'Jefe Atención al Cliente'),
(30, ' Ejecutivo Cuenta'),
(31, 'Gestor Interno'),
(32, ' Gerente de Cuenta '),
(33, ' Coordinador, información y estadística'),
(34, ' Coordinador, call center '),
(35, 'Coordinador, servicio al cliente'),
(36, ' Coordinador, encuestadores '),
(37, ' Supervisor, empleados de información'),
(38, ' Supervisor, call center'),
(39, 'Administrador, bodega '),
(40, 'Coordinador, distribución '),
(41, 'Almacenista '),
(42, ' Jefe, despachos'),
(43, 'Jefe, recepción de mercancías '),
(44, 'Jefe, control de inventarios '),
(45, ' Coordinador, bodega '),
(46, ' Coordinador, rampa'),
(47, ' Supervisor, programadores - rutas y tripulac'),
(48, ' Supervisor, control de tráfico '),
(49, 'Supervisor, almacenamiento'),
(50, 'Supervisor, logística'),
(51, 'Supervisor, servicio de rampa - aeropuerto'),
(52, 'Asistentes de Operaciones '),
(53, 'Auditores de Servicio de Vigilancia '),
(54, 'Auxiliar Centro de Operaciones '),
(55, 'Auxiliar de Investigación '),
(56, 'Auxiliar ambientación '),
(57, 'Auxiliar control de operaciones'),
(58, 'Auxiliar de farmacos'),
(59, 'Ingeniero, análisis y diseño de sistemas'),
(60, 'Ingeniero, sistemas programación'),
(61, 'Ingeniero, sistemas redes y comunicación de d'),
(62, 'Ingeniero, sistemas análisis y diseño Auditor'),
(63, 'Ingeniero, sistemas y computación'),
(64, 'Ingeniero, sistemas e informática'),
(65, 'Ingeniero, desarrollo software'),
(66, 'Ingeniero de sistemas'),
(67, ' Coordinador, proyecto, informático '),
(68, ' Ingeniero, soporte computación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_empleados` int(11) NOT NULL,
  `Fk_usuario` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora_entrada` time DEFAULT NULL,
  `hora_salida` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleados`, `Fk_usuario`, `fecha`, `hora_entrada`, `hora_salida`) VALUES
(21, 1, '2019-11-01', '18:27:32', '18:45:14'),
(22, 7, '2019-11-01', '18:33:35', '18:42:25'),
(23, 1, '2019-11-01', '18:45:09', '18:45:14'),
(24, 5, '2019-11-01', '19:33:44', '21:37:27'),
(25, 5, '2019-11-01', '21:37:21', '21:37:27'),
(26, 1, '2019-11-02', '19:19:21', '19:19:26'),
(27, 5, '2019-11-02', '19:38:24', '19:38:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id_genero` int(11) NOT NULL,
  `nombre_genero` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id_genero`, `nombre_genero`) VALUES
(1, 'Masculino'),
(2, 'Femenino'),
(3, 'Helicoptero De Combate');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `nombre_rol` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nombre_rol`) VALUES
(1, 'Administrador'),
(2, 'Empleado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id_documento` int(11) NOT NULL,
  `nombre_documento` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`id_documento`, `nombre_documento`) VALUES
(1, 'Cédula de ciudadanía (C.C)'),
(2, 'Cédula de extranjería (CE)'),
(3, 'Tarjeta de identidad (TI)'),
(4, 'Tarjeta pasaporte (TP)'),
(5, 'Registro civil (RC)'),
(6, 'Carné de identidad (CI)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `Fk_rol` int(11) DEFAULT NULL,
  `nombres` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellidos` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `correo` varchar(75) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Fk_genero` int(11) DEFAULT NULL,
  `Fk_documento` int(11) DEFAULT NULL,
  `Fk_cargo` int(11) DEFAULT NULL,
  `documento` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contraseña` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `Fk_rol`, `nombres`, `apellidos`, `correo`, `Fk_genero`, `Fk_documento`, `Fk_cargo`, `documento`, `contraseña`) VALUES
(1, 1, 'David', 'Hernandez', 'davidjuajinoy@gmail.com', 1, 3, 1, '1000323929', '12345'),
(4, 1, 'fabian', 'aldana', 'fabian@gmail.com', 3, 5, 18, '11111111', '12345'),
(5, 2, 'david', 'andres', 'empleado@gmail.com', 3, 1, 17, '52335345', '123456'),
(6, 2, 'david', 'dass', 'sanda@dsad', 1, 6, 19, '1111111', '11111'),
(7, 1, 'nicol', 'dlasl', 'nicol@gmail.com', 2, 1, 11, '123456789', '12345'),
(8, 2, 'DASD', 'DAD', 'DASD@AASD', 1, 1, 14, '123456', '12345'),
(10, 2, 'DASD', 'DAD', 'DASD@AASDs', 1, 1, 14, '123456', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleados`),
  ADD KEY `Fk_usuario` (`Fk_usuario`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id_documento`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD KEY `Fk_cargo` (`Fk_cargo`),
  ADD KEY `Fk_genero` (`Fk_genero`),
  ADD KEY `Fk_documento` (`Fk_documento`),
  ADD KEY `Fk_rol` (`Fk_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleados` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id_documento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`Fk_usuario`) REFERENCES `usuarios` (`id_usuarios`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`Fk_cargo`) REFERENCES `cargo` (`id_cargo`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`Fk_genero`) REFERENCES `genero` (`id_genero`),
  ADD CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`Fk_documento`) REFERENCES `tipo_documento` (`id_documento`),
  ADD CONSTRAINT `usuarios_ibfk_4` FOREIGN KEY (`Fk_rol`) REFERENCES `roles` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
