-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2021 a las 23:27:14
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_pcmarket`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `categoria` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `categoria`) VALUES
(8, 'GPU'),
(10, 'GABINETE'),
(11, 'Memoria Ram'),
(12, 'Perifericos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `puntuacion` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `descripcion`, `puntuacion`, `id_producto`, `id_usuario`) VALUES
(1, 'Muy buen teclado', 0, 70, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_product` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `puntuacion` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_product`, `nombre`, `marca`, `modelo`, `id_categoria`, `precio`, `puntuacion`) VALUES
(61, 'Asus', 'Nvidia', 'GTX 1060ti 6GB', 8, 120000, 0),
(62, 'Zotac', 'Nvidia', 'Rtx 3060 12GB', 8, 150000, 0),
(65, 'Inspire', 'Kolink', 'ARGB K7', 10, 9000, 0),
(66, 'Tailgate', 'Redragon', 'Gc-702 Rgb', 10, 12000, 0),
(67, 'Vengeance', 'Corsair', '8GB 2400MHz', 11, 6200, 0),
(68, 'Fury', 'HyperX', '8GB 2666 MHz', 11, 5900, 0),
(69, 'Blue  ', 'Logitech ', 'Snowball', 12, 6500, 0),
(70, 'Indrah', 'Red dragon', 'k555', 12, 10000, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `email`, `password`, `admin`) VALUES
(2, 'juanmaleagueoflegends@gmail.com', '$2y$10$oYCps5vZgwsfCvbsX1mze.ZUgBViyl26UxrRNFCZVMMrQn2iTwb2e', 1),
(6, 'juanmacanovas13@gmail.com', '$2y$10$vU9Y/QAI/JUmGsjLwc8WluhG/yedltcZvKYAe3qag1e3ad800ni62', 1),
(8, 'juanma0077@hotmail.com', '$2y$10$LV85WDcW6VPf0U3qYXVC/OJBJLLCLn/cx81xcYPlePkxlWs7DWgPS', 0),
(10, 'm.ines.marconato@hotmail.com', '$2y$10$lZnxHzDC1eGdGE3dKD6Bl.MGTSGB/DCvhdXwvDGl1JvrXUPt8FVky', 0),
(11, 'facundo.e.arias@gmail.com', '$2y$10$MEewk55xCMeJwK3o4/mBUuJyi04VAKjmW/NJ6sjNDXxUr2XO9TRaG', 0),
(13, '123123@gmail.com', '$2y$10$uZMOAPHQNpd.SBIULvhwIue3VOFdlz9DELKZLDxOw9Es7buA38pkW', 0),
(14, '123123123@gmail.com', '$2y$10$tM5EMnOQEVwS.yS8m6d8G.k5ViADz/Cr6uT0DxBWV7rc1cpOFvHuS', 0),
(15, 'asdasdasd@gmail.com', '$2y$10$t8KPgofKivkg91prsb90uux4CBtRxGkwH0v9413a3k1PdAKP.7hCu', 0),
(16, '123123123@ghmail.com', '$2y$10$hr6RMdZDgvy78ehFymzXIucMK4mnk2Zyq1IeX3vrELg5LWs6haene', 0),
(17, 'asdasd@gmail.com', '$2y$10$lBUdUtZFlKFD1khwMu4.GeY3O43gsC7FECqBMX.YbDs.6p7/qiFqe', 0),
(18, 'asdasd@gmail.com', '$2y$10$LE/PCUNeYVLfz8rcXYZiIeR.DFMVR1DxuUfOdko3SgIT22D8hS1QO', 0),
(19, 'asdasdasdasd@gmail.com', '$2y$10$Of0CSK.GQiPjC6XxrOMnguUxEDI1kE6iEMi/sZpU.ZFlN4BwIIZ/m', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_producto` (`id_producto`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`),
  ADD UNIQUE KEY `puntuacion` (`puntuacion`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `categoria` (`id_categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_product`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
