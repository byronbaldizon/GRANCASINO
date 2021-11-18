-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2021 a las 16:35:38
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gran-casino`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` int(4) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `rol` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='creada por byron';

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `nombre`, `apellido`, `telefono`, `email`, `password`, `rol`, `fecha`) VALUES
(17, 'juan', 'perez', '11 32659887', 'juan@gmail.com', 'juan', 'cajero', '2021-11-01'),
(18, 'pedro', 'lopez', '11 3265 6598', 'pedro@gmail.com', 'pedro', 'usuario', '2021-11-02'),
(19, 'maria', 'martínez', '11 6598 6598', 'maria@gmail.com', 'maria', 'admin', '2021-11-03'),
(20, 'byron', 'baldizon', '11 32659878/', 'byron@gmail.com', 'byron', 'usuario', '2021-11-13'),
(22, 'george', 'tsoukalos', '11 3265987', 'george@gmail.com', 'george', 'cajero', '2021-11-13'),
(23, 'david', 'parcerisa', '1165987865', 'david@gmail.com', 'david', 'usuario', '2021-11-13'),
(25, 'luis', 'alba', '11659878', 'luis@gmail.com', 'luis', 'cajero', '2021-11-13'),
(27, 'xerxes', 'abn Hazim', '11 659878', 'xerxes@gmail.com', 'xerxes', 'cajero', '2021-11-13'),
(28, 'dario', 'hazam', '1165978456', 'dario@gmail.com', 'dario', 'usuario', '2021-11-13'),
(29, 'guy', 'williams', '11 659878987', 'guy@gmail.com', 'guy', 'usuario', '2021-11-14'),
(31, 'bart', 'simpson', '1132659878', 'bart@gmail.com', 'bart', 'usuario', '2021-11-14'),
(69, 'elsy', 'palala', '1132659878', 'elsy@gmail.com', '123', 'cajero', '2021-11-17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
