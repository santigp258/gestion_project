-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-01-2021 a las 13:10:23
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestion`
--
CREATE DATABASE IF NOT EXISTS `gestion` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `gestion`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `afiliaciones`
--

CREATE TABLE `afiliaciones` (
  `id` int(20) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `ciudad` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `f_afiliacion` date NOT NULL,
  `accion` varchar(30) NOT NULL,
  `id_users` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `afiliaciones`
--

INSERT INTO `afiliaciones` (`id`, `nombre`, `cedula`, `telefono`, `ciudad`, `email`, `f_afiliacion`, `accion`, `id_users`) VALUES
(1, 'Emanuel perez xd', '0000000', '31030303', 'Obando', 'santiago@gmail.com', '2021-01-18', 'xdd', 1),
(2, 'clark kan emanjuel', '23233223', '31034949', 'santiago', 'samsmsm@gmail.com', '2021-01-26', 'xdd', 2),
(3, 'Sara Valentina', '10002929', '3218825708', 'obando', 'santiaog@mail.ocm', '2021-01-20', 'lol', 1),
(4, 'Sara Valentina', '10002929', '3218825708', 'obando', 'santiaog@mail.ocm', '2021-01-20', 'lol', 1),
(5, 'daniel villad', '1212012020', '312929', 'manizales', 'manizales@gmail.com', '2021-01-20', 'nose', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_At` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_At` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `email`, `created_At`, `updated_At`) VALUES
(1, 'santigp258', 'e8eb3645182a31ff8494fc1005a31f61c6e31063e582d128c13f6b8ad35cf15a', 'santigp258@gmail.com', '2020-12-30 23:09:19', '2020-12-30 23:09:19'),
(2, 'santigp', 'e8eb3645182a31ff8494fc1005a31f61c6e31063e582d128c13f6b8ad35cf15a', 'santiago@gmil.com', '2021-01-02 05:49:56', '2021-01-02 05:49:56');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `afiliaciones`
--
ALTER TABLE `afiliaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`id_users`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `afiliaciones`
--
ALTER TABLE `afiliaciones`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `afiliaciones`
--
ALTER TABLE `afiliaciones`
  ADD CONSTRAINT `afiliaciones_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
