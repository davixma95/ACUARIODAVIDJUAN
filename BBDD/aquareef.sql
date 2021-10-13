-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-08-2021 a las 16:21:03
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aquareef`
--
CREATE DATABASE IF NOT EXISTS `aquareef` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `aquareef`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corals`
--

DROP TABLE IF EXISTS `corals`;
CREATE TABLE `corals` (
  `cor_id` varchar(6) COLLATE utf8mb4_spanish_ci NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `origin` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `price` float NOT NULL,
  `img` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fishes`
--

DROP TABLE IF EXISTS `fishes`;
CREATE TABLE `fishes` (
  `fis_id` varchar(6) COLLATE utf8mb4_spanish_ci NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `origin` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `price` float NOT NULL,
  `img` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invertebrates`
--

DROP TABLE IF EXISTS `invertebrates`;
CREATE TABLE `invertebrates` (
  `inv_id` varchar(6) COLLATE utf8mb4_spanish_ci NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `origin` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `price` float NOT NULL,
  `img` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `pro_id` varchar(6) COLLATE utf8mb4_spanish_ci NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `origin` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `price` float NOT NULL,
  `img` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `use_id` varchar(6) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nif` varchar(9) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nie` varchar(9) COLLATE utf8mb4_spanish_ci NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `surname` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `birth_date` int(10) NOT NULL,
  `phone` int(9) NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `img` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `user` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`use_id`, `nif`, `nie`, `name`, `surname`, `birth_date`, `phone`, `email`, `img`, `user`, `password`, `type`) VALUES
('US-001', '00000000A', 'A0000000A', 'ADMINISTRADOR', 'DE LA PAGINA', 2001, 666554433, 'administrador@outlook.es', NULL, 'admin', 'admin', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `corals`
--
ALTER TABLE `corals`
  ADD PRIMARY KEY (`cor_id`);

--
-- Indices de la tabla `fishes`
--
ALTER TABLE `fishes`
  ADD PRIMARY KEY (`fis_id`);

--
-- Indices de la tabla `invertebrates`
--
ALTER TABLE `invertebrates`
  ADD PRIMARY KEY (`inv_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`use_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
