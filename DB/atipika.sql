-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-01-2021 a las 17:06:28
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
('1036424415', 'mauricio', 'castaño', '31424514', 'asdasda@gmail.com', '123', 1);

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
(4, 'joselo', '20201228092748icono.png'),
(5, 'joselo', '20201230101027policia.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbldiseñohechos`
--

CREATE TABLE `tbldiseñohechos` (
  `cod_diseño` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbldiseñohechos`
--

INSERT INTO `tbldiseñohechos` (`cod_diseño`, `nombre`, `imagen`) VALUES
(2, 'joselo', '20201228092423horda.jpg'),
(3, 'jose2', '20201230094548Captura.PNG'),
(4, 'Bloody stream', '20210104180422thumb-1920-1081458.jpg'),
(8, 'Vento Aureo', '20210104180527thumb-1920-1081458.jpg');

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
(3, 'asdas', '20201228091456horda.jpg'),
(4, 'empanada2', '20201230101929panada2.jpg');

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
(11, 'asdas', '20201228092439horda.jpg'),
(12, 'empanada', '20201230101539imaganes prueba.jpg');

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
(1, '1036424415', 3, 'XXL', '2020-12-30', 1, 4, 12, 'me gustan las empanadas', 4);

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
(3, 'joselo', '20201228092736horda.jpg'),
(4, 'asdas', '20201230100347icono.png');

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
  ADD PRIMARY KEY (`cod_diseño`);

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
-- AUTO_INCREMENT de la tabla `tbldiseño`
--
ALTER TABLE `tbldiseño`
  MODIFY `cod_diseño` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbldiseñohechos`
--
ALTER TABLE `tbldiseñohechos`
  MODIFY `cod_diseño` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tblestado`
--
ALTER TABLE `tblestado`
  MODIFY `cod_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tblflor`
--
ALTER TABLE `tblflor`
  MODIFY `cod_flor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tblfondo`
--
ALTER TABLE `tblfondo`
  MODIFY `cod_fondo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tblpedido`
--
ALTER TABLE `tblpedido`
  MODIFY `cod_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tblproducto`
--
ALTER TABLE `tblproducto`
  MODIFY `cod_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tblrol`
--
ALTER TABLE `tblrol`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
