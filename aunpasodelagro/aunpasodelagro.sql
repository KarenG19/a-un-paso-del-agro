-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-03-2023 a las 03:22:39
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aunpasodelagro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productores`
--

CREATE TABLE `productores` (
  `id_productor` bigint(11) NOT NULL,
  `nombre_p` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `ubicacion` varchar(40) COLLATE latin1_spanish_ci NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `correo` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `visible` char(1) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `productores`
--

INSERT INTO `productores` (`id_productor`, `nombre_p`, `apellido`, `ubicacion`, `telefono`, `correo`, `visible`) VALUES
(4530597, 'Jose', 'Grajales', 'Guatica, Risaralda', 3206189722, 'josegrajales19@gmail.com', 'T'),
(23786086, 'Maria', 'Gallego', 'Anserma, Caldas', 3147672089, 'mariag06@gmail.com', 'T'),
(24686876, 'Hernan', 'Rodas', 'Salento, Quindio', 3247682345, 'hrodas@gmail.com', 'T'),
(24686885, 'Francy', 'Grajales', 'Guatica, Risaralda', 3134671287, 'fran.cy@gmail.com', 'F'),
(1004383188, 'Nicole', 'Lopez', 'Anserma, Caldas', 3226459702, 'nicole22@gmail.com', 'T'),
(1006773425, 'Camilo', 'Rios', 'Quinchia, Risaralda', 3145672343, 'camilo3@gmail.com', 'T'),
(1007346123, 'Esteban', 'Ortiz', 'Bello, Antioquia', 3256783421, 'ortizesteban27@gmail.com', 'T'),
(1805341245, 'Jose', 'Muñoz', 'Quinchia, Risaralda', 3256781293, 'josecampesino@gmail.com', 'T');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` bigint(20) NOT NULL,
  `nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `precio` int(30) NOT NULL,
  `unidad` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `descripcion` varchar(300) COLLATE latin1_spanish_ci NOT NULL,
  `foto` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `id_productor` bigint(11) NOT NULL,
  `visible` char(1) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `precio`, `unidad`, `descripcion`, `foto`, `id_productor`, `visible`) VALUES
(16, 'Mango Tommy', 1200, 'una unidad', 'Producto de buena calidad en cuanto a sabor, color y textura.', 'fotos/mango.jpg', 1805341245, 'F'),
(19, 'Platano Dominico Harton', 1500, 'un kilo', 'Platano de excelente calidad y manejado con produccion limpia.', 'fotos/platano.jpg', 4430586, 'T'),
(20, 'Manzana Anna', 1500, 'una unidad', 'Esta manzana tiene corteza brillante, textura crujiente y es muy jugosa.', 'fotos/manzana anna.jpg', 1007346123, 'T'),
(30, 'Aguacate Hass', 6500, 'un kilo', 'Produccion de aguacate hass para que tu alimentacion sea sana y a un precio comodo.', 'fotos/aguacate.jpg', 24686886, 'T'),
(41, 'Fresa', 2000, 'una libra', 'El producto es rojo, tiene sabor dulce y presenta un aroma caracterÃ­stico.', 'fotos/fresa2.jpg', 1004683198, 'T'),
(44, 'Papa', 1600, 'una libra', 'Papa criolla', 'fotos/papa.jpg', 1004683198, 'T'),
(45, 'Frijol', 5500, 'un kilo', 'Frijol cargamanto', 'fotos/frijol.jpg', 1006773425, 'T'),
(46, 'Cebolla larga', 3000, 'una libra', 'Cebolla larga variedad kiyotaky', 'fotos/cebolla.jpg', 4430586, 'T'),
(47, 'Banano Gros Michel', 100, 'una unidad', 'Banano criollo de alta calidad.', 'fotos/banano gros michel.jpg', 24686876, 'T');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `id_reporte` bigint(100) NOT NULL,
  `id_producto` bigint(100) NOT NULL,
  `estrellas` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `reportes`
--

INSERT INTO `reportes` (`id_reporte`, `id_producto`, `estrellas`) VALUES
(1, 16, 4),
(2, 20, 3),
(3, 30, 2),
(4, 16, 5),
(5, 20, 4),
(6, 30, 3),
(39, 30, 5),
(40, 31, 4),
(42, 30, 4),
(43, 41, 4),
(44, 33, 3),
(46, 30, 3),
(48, 41, 4),
(49, 41, 5),
(50, 44, 5),
(51, 44, 2),
(52, 46, 3),
(53, 47, 4),
(55, 45, 4),
(56, 45, 3),
(57, 41, 5),
(58, 44, 4),
(59, 44, 4),
(60, 47, 2),
(61, 46, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `rol` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `pass`, `email`, `rol`) VALUES
(31, 'Admin', '13579', 'admin@gmail.com', 'Administrador'),
(32, 'User1', '02468', 'user1@gmail.com', 'Usuario'),
(36, 'User2', '12345', 'user2@gmail.com', 'Usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productores`
--
ALTER TABLE `productores`
  ADD PRIMARY KEY (`id_productor`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`id_reporte`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`pass`,`email`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `id_reporte` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
