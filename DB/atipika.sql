-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-01-2021 a las 10:53:17
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
-- Base de datos: `atipika`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cart_item`
--

CREATE TABLE `cart_item` (
  `id_carrito` int(11) NOT NULL,
  `cod_diseño_hecho` int(11) NOT NULL,
  `quantity` double NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `id` varchar(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cart_item`
--

INSERT INTO `cart_item` (`id_carrito`, `cod_diseño_hecho`, `quantity`, `imagen`, `id`, `created`, `modified`) VALUES
(11, 11, 1, '', '1036424415', '2021-01-14 09:43:42', '2021-01-14 09:43:42'),
(13, 12, 1, '', '1036424415', '2021-01-15 09:34:09', '2021-01-15 09:34:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcliente`
--

CREATE TABLE `tblcliente` (
  `id` varchar(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblcliente`
--

INSERT INTO `tblcliente` (`id`, `nombre`, `apellidos`, `celular`, `correo`, `contrasena`, `rol`) VALUES
('1036424415', 'mauricio', 'castaño', '31424514', 'maurox952@gmail.com', '123', 1),
('5550123', 'jose', 'castaño', '3146244922', 'maurox9522@gmail.com', '123', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbldiseño`
--

CREATE TABLE `tbldiseño` (
  `cod_diseño` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbldiseño`
--

INSERT INTO `tbldiseño` (`cod_diseño`, `nombre`, `imagen`) VALUES
(1, 'Ninguno', 'ninguno.jpg'),
(6, 'dibujo 1', '202101060909461.jpg'),
(7, 'dibujo 2', '20210106091006dd2.jpg'),
(8, 'dibujo 3', '20210106091021dd3.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbldiseñohechos`
--

CREATE TABLE `tbldiseñohechos` (
  `cod_diseño_hecho` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `valor` decimal(8,2) NOT NULL,
  `imagen` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbldiseñohechos`
--

INSERT INTO `tbldiseñohechos` (`cod_diseño_hecho`, `nombre`, `valor`, `imagen`) VALUES
(9, 'diseño 1', '10000.00', '202101060907311.jpg'),
(10, 'diseño 2', '10000.00', '202101060907402.jpg'),
(11, 'diseño 3', '10000.00', '202101060907503.jpg'),
(12, 'diseño 4', '10000.00', '202101060908054.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblestado`
--

CREATE TABLE `tblestado` (
  `cod_estado` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblestado`
--

INSERT INTO `tblestado` (`cod_estado`, `nombre`) VALUES
(1, 'pedido'),
(2, 'aceptado'),
(3, 'rechazado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblflor`
--

CREATE TABLE `tblflor` (
  `cod_flor` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblflor`
--

INSERT INTO `tblflor` (`cod_flor`, `nombre`, `imagen`) VALUES
(1, 'Ninguno', 'ninguno.jpg'),
(5, 'flor 1', '20210106091053flor 1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblfondo`
--

CREATE TABLE `tblfondo` (
  `cod_fondo` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblfondo`
--

INSERT INTO `tblfondo` (`cod_fondo`, `nombre`, `imagen`) VALUES
(1, 'Ninguno', 'ninguno.jpg'),
(13, 'fondo 1', '20210106091115fondo 1.jpg'),
(14, 'fondo 2', '20210106091200fondo 2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblpedido`
--

CREATE TABLE `tblpedido` (
  `cod_pedido` int(11) NOT NULL,
  `id` varchar(20) DEFAULT NULL,
  `cod_producto` int(11) NOT NULL,
  `talla` varchar(10) DEFAULT NULL,
  `fecha` date NOT NULL,
  `cod_estado` int(11) DEFAULT NULL,
  `cod_diseño` int(11) DEFAULT NULL,
  `cod_fondo` int(11) DEFAULT NULL,
  `frase` varchar(500) DEFAULT NULL,
  `cod_flor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblpedido`
--

INSERT INTO `tblpedido` (`cod_pedido`, `id`, `cod_producto`, `talla`, `fecha`, `cod_estado`, `cod_diseño`, `cod_fondo`, `frase`, `cod_flor`) VALUES
(3, '1036424415', 5, 'L', '2021-01-06', 1, 7, 13, 'me gustan las empanadas', 5),
(6, '1036424415', 5, 'S', '2021-01-06', 1, 7, 14, 'me gustan las empanadas x2', 5),
(8, '1036424415', 5, 'S', '2021-01-06', 1, 1, 1, 'me gustan las empanadas x4', 1),
(9, '1036424415', 6, 'XXXL', '2021-01-06', 1, 6, 1, 'me gustan las empanadas x5', 1),
(10, '1036424415', 5, 'S', '2021-01-06', 1, 6, 13, 'me gustan las empanadasqwq', 5),
(11, '1036424415', 5, 'M', '2021-01-06', 1, 7, 1, 'me gustan las empanadasqwq', 1),
(15, '1036424415', 6, 'M', '2021-01-07', 1, 1, 1, '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblpedido_diseño_hecho`
--

CREATE TABLE `tblpedido_diseño_hecho` (
  `id_pedido` int(11) NOT NULL,
  `id_cliente` varchar(20) NOT NULL,
  `cod_diseño_hecho` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblpedido_diseño_hecho`
--

INSERT INTO `tblpedido_diseño_hecho` (`id_pedido`, `id_cliente`, `cod_diseño_hecho`, `fecha`) VALUES
(5, '1036424415', 9, '2021-01-06'),
(9, '1036424415', 9, '2021-01-07'),
(10, '1036424415', 9, '2021-01-07'),
(11, '1036424415', 9, '2021-01-07'),
(13, '5550123', 9, '2021-01-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblproducto`
--

CREATE TABLE `tblproducto` (
  `cod_producto` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblproducto`
--

INSERT INTO `tblproducto` (`cod_producto`, `nombre`, `imagen`) VALUES
(5, 'prenda 1', '202101060908247.jpg'),
(6, 'prenda 2', '202101060908356.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblrol`
--

CREATE TABLE `tblrol` (
  `cod` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblrol`
--

INSERT INTO `tblrol` (`cod`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'cliente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`id_carrito`),
  ADD KEY `cod_diseño_hecho` (`cod_diseño_hecho`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `tblcliente`
--
ALTER TABLE `tblcliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_tblcliente_tblrol1_idx` (`rol`);

--
-- Indices de la tabla `tbldiseño`
--
ALTER TABLE `tbldiseño`
  ADD PRIMARY KEY (`cod_diseño`);

--
-- Indices de la tabla `tbldiseñohechos`
--
ALTER TABLE `tbldiseñohechos`
  ADD PRIMARY KEY (`cod_diseño_hecho`);

--
-- Indices de la tabla `tblestado`
--
ALTER TABLE `tblestado`
  ADD PRIMARY KEY (`cod_estado`);

--
-- Indices de la tabla `tblflor`
--
ALTER TABLE `tblflor`
  ADD PRIMARY KEY (`cod_flor`);

--
-- Indices de la tabla `tblfondo`
--
ALTER TABLE `tblfondo`
  ADD PRIMARY KEY (`cod_fondo`);

--
-- Indices de la tabla `tblpedido`
--
ALTER TABLE `tblpedido`
  ADD PRIMARY KEY (`cod_pedido`),
  ADD KEY `fk_tblpedido_tblcliente1_idx` (`id`),
  ADD KEY `fk_tblpedido_tblproducto1_idx` (`cod_producto`),
  ADD KEY `fk_tblpedido_tblestado1_idx` (`cod_estado`),
  ADD KEY `fk_tblpedido_tbldiseño1_idx` (`cod_diseño`),
  ADD KEY `fk_tblpedido_tblfondo1_idx` (`cod_fondo`),
  ADD KEY `fk_tblpedido_tblflor1_idx` (`cod_flor`);

--
-- Indices de la tabla `tblpedido_diseño_hecho`
--
ALTER TABLE `tblpedido_diseño_hecho`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `cod_diseño_hecho` (`cod_diseño_hecho`);

--
-- Indices de la tabla `tblproducto`
--
ALTER TABLE `tblproducto`
  ADD PRIMARY KEY (`cod_producto`);

--
-- Indices de la tabla `tblrol`
--
ALTER TABLE `tblrol`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `id_carrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `tbldiseño`
--
ALTER TABLE `tbldiseño`
  MODIFY `cod_diseño` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tbldiseñohechos`
--
ALTER TABLE `tbldiseñohechos`
  MODIFY `cod_diseño_hecho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tblestado`
--
ALTER TABLE `tblestado`
  MODIFY `cod_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tblflor`
--
ALTER TABLE `tblflor`
  MODIFY `cod_flor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tblfondo`
--
ALTER TABLE `tblfondo`
  MODIFY `cod_fondo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `tblpedido`
--
ALTER TABLE `tblpedido`
  MODIFY `cod_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tblpedido_diseño_hecho`
--
ALTER TABLE `tblpedido_diseño_hecho`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tblproducto`
--
ALTER TABLE `tblproducto`
  MODIFY `cod_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tblrol`
--
ALTER TABLE `tblrol`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cart_item`
--
ALTER TABLE `cart_item`
  ADD CONSTRAINT `cart_item_ibfk_1` FOREIGN KEY (`cod_diseño_hecho`) REFERENCES `tbldiseñohechos` (`cod_diseño_hecho`),
  ADD CONSTRAINT `cart_item_ibfk_2` FOREIGN KEY (`id`) REFERENCES `tblcliente` (`id`);

--
-- Filtros para la tabla `tblcliente`
--
ALTER TABLE `tblcliente`
  ADD CONSTRAINT `fk_tblcliente_tblrol1` FOREIGN KEY (`rol`) REFERENCES `tblrol` (`cod`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tblpedido`
--
ALTER TABLE `tblpedido`
  ADD CONSTRAINT `fk_tblpedido_tblcliente1` FOREIGN KEY (`id`) REFERENCES `tblcliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tblpedido_tbldiseño1` FOREIGN KEY (`cod_diseño`) REFERENCES `tbldiseño` (`cod_diseño`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tblpedido_tblestado1` FOREIGN KEY (`cod_estado`) REFERENCES `tblestado` (`cod_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tblpedido_tblflor1` FOREIGN KEY (`cod_flor`) REFERENCES `tblflor` (`cod_flor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tblpedido_tblfondo1` FOREIGN KEY (`cod_fondo`) REFERENCES `tblfondo` (`cod_fondo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tblpedido_tblproducto1` FOREIGN KEY (`cod_producto`) REFERENCES `tblproducto` (`cod_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tblpedido_diseño_hecho`
--
ALTER TABLE `tblpedido_diseño_hecho`
  ADD CONSTRAINT `tblpedido_diseño_hecho_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `tblcliente` (`id`),
  ADD CONSTRAINT `tblpedido_diseño_hecho_ibfk_2` FOREIGN KEY (`cod_diseño_hecho`) REFERENCES `tbldiseñohechos` (`cod_diseño_hecho`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
