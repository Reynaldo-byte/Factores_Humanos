-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2021 a las 00:01:10
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `spa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Telefono_Celular` varchar(10) NOT NULL,
  `Telefono_Fijo` varchar(7) NOT NULL,
  `Ciudad` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Tipo_Id` varchar(2) NOT NULL,
  `Num_Id` varchar(10) NOT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  `Id_Usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`Nombre`, `Apellido`, `Direccion`, `Telefono_Celular`, `Telefono_Fijo`, `Ciudad`, `Email`, `Tipo_Id`, `Num_Id`, `Fecha_Nacimiento`, `Id_Usuario`) VALUES
('Reinaldo', 'Espinel', 'Calle 47 sur # 72p-09', '3222554777', '', 'Bogota', 'Espinelreynaldo@gmail.com', 'CC', '1000163099', '2001-09-12', 1),
('daemon', 'daemond', 'ca', '', '', 'bogota', 'root@d', 'CC', '112312', '1111-02-12', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

CREATE TABLE `agenda` (
  `Id_Agenda` int(11) NOT NULL,
  `Id_Servicio` int(11) NOT NULL,
  `Id_Paciente` varchar(10) NOT NULL,
  `Id_Trabajador` varchar(10) NOT NULL,
  `Hora_Inicio` datetime NOT NULL,
  `Hora_Fin` datetime NOT NULL,
  `Valor` decimal(8,2) NOT NULL,
  `Fecha` date NOT NULL,
  `Pagado` varchar(2) NOT NULL,
  `Estado` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `agenda`
--

INSERT INTO `agenda` (`Id_Agenda`, `Id_Servicio`, `Id_Paciente`, `Id_Trabajador`, `Hora_Inicio`, `Hora_Fin`, `Valor`, `Fecha`, `Pagado`, `Estado`) VALUES
(3, 1, '852963', '8529641', '1970-01-01 01:00:02', '1970-01-01 01:00:01', '15000.00', '0000-00-00', 'SI', 'Pendiente'),
(4, 1, '852963', '8529641', '1970-01-01 01:00:02', '1970-01-01 01:00:01', '15000.00', '0000-00-00', 'SI', 'Pendiente'),
(5, 1, '1254', '774152', '1970-01-01 01:00:12', '1970-01-01 01:00:12', '15000.00', '0000-00-00', 'SI', 'Pendiente'),
(6, 1, '1254', '774152', '1970-01-01 01:00:12', '1970-01-01 01:00:00', '15000.00', '0000-00-00', 'SI', 'Pendiente'),
(7, 1, '1254', '774152', '1970-01-01 01:00:12', '1970-01-01 01:00:00', '15000.00', '0000-00-00', 'SI', 'Pendiente'),
(8, 1, '1254', '774152', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '15000.00', '0000-00-00', 'SI', 'Pendiente'),
(9, 1, '1254', '774152', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '15000.00', '0000-00-00', 'SI', 'Pendiente'),
(10, 1, '1254', '774152', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '15000.00', '0000-00-00', 'SI', 'Pendiente'),
(11, 1, '1254', '774152', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '15000.00', '2020-12-12', 'SI', 'Pendiente'),
(12, 1, '1254', '774152', '2020-12-12 01:00:00', '2020-12-12 01:00:00', '15000.00', '2020-12-12', 'SI', 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Telefono_Celular` varchar(10) NOT NULL,
  `Telefono_Fijo` varchar(7) NOT NULL,
  `Ciudad` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Tipo_Id` varchar(2) NOT NULL,
  `Num_id` varchar(10) NOT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  `Id_Usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`Nombre`, `Apellido`, `Direccion`, `Telefono_Celular`, `Telefono_Fijo`, `Ciudad`, `Email`, `Tipo_Id`, `Num_id`, `Fecha_Nacimiento`, `Id_Usuario`) VALUES
('Magnus', 'Roi', 'calle 47 sur #72p-09', '322254777', '', 'Bogota', 'respinelt@xn--s-rga', 'CC', '1254', '2001-12-12', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `Id_Servicio` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` text NOT NULL,
  `Valor` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`Id_Servicio`, `Nombre`, `Descripcion`, `Valor`) VALUES
(1, 'Manicure', 'Arreglo de las uñas de las manos', '15000.00'),
(3, 'Pedicure', 'Arreglo de las uñas de los pies', '15000.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Telefono_Celular` varchar(10) NOT NULL,
  `Telefono_Fijo` varchar(7) NOT NULL,
  `Ciudad` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Tipo_Id` varchar(2) NOT NULL,
  `Num_Id` varchar(10) NOT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  `Id_Usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`Nombre`, `Apellido`, `Direccion`, `Telefono_Celular`, `Telefono_Fijo`, `Ciudad`, `Email`, `Tipo_Id`, `Num_Id`, `Fecha_Nacimiento`, `Id_Usuario`) VALUES
('daemon', 'daemond', 'ca', '', '', 'bogota', 'root@k', 'CC', '774152', '1221-12-12', 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Email` varchar(50) NOT NULL,
  `Clave` varchar(50) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `Rol` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Email`, `Clave`, `Id_Usuario`, `Rol`) VALUES
('Espinelreynaldo@gmail.com', '20182020015', 1, 'Administrador'),
('respinelt@xn--s-rga', '12092001', 19, 'Paciente'),
('root@d', '20182020015Rey', 20, 'Administrador'),
('root@k', '20182020015Rey', 21, 'Trabajador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`Num_Id`),
  ADD KEY `id_Admin` (`Id_Usuario`);

--
-- Indices de la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`Id_Agenda`),
  ADD KEY `Id_Pac_Agenda` (`Id_Paciente`),
  ADD KEY `Id_Serv_Agenda` (`Id_Servicio`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`Num_id`),
  ADD KEY `Id_Pac` (`Id_Usuario`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`Id_Servicio`);

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`Num_Id`),
  ADD KEY `Id_Trab` (`Id_Usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agenda`
--
ALTER TABLE `agenda`
  MODIFY `Id_Agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `Id_Servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `id_Admin` FOREIGN KEY (`Id_Usuario`) REFERENCES `usuarios` (`Id_Usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `Id_Pac` FOREIGN KEY (`Id_Usuario`) REFERENCES `usuarios` (`Id_Usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD CONSTRAINT `Id_Trab` FOREIGN KEY (`Id_Usuario`) REFERENCES `usuarios` (`Id_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
