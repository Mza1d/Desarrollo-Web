-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2021 a las 00:41:13
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_facturacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `Id` int(10) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Descripcion` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`Id`, `Nombre`, `Descripcion`) VALUES
(1, 'Bebiba', 'xxx'),
(2, 'Accesorios', 'Accesorios para todo de equipos'),
(3, 'Laptos', 'Computadoras portátiles de últimos modelos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Id` int(10) NOT NULL,
  `Ci` varchar(15) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Nombres` varchar(60) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Celular` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`Id`, `Ci`, `Apellidos`, `Nombres`, `Direccion`, `Celular`, `Email`) VALUES
(1, '858220', 'Lopez Ramos', 'Fernanda', 'Santa Cruz', '78781010', 'fer@gmail.com'),
(2, '888800', 'Rojas Mendez', 'Martha', 'Sucre', '65651010', 'm123@gmail.com'),
(3, '202120', 'Suares Lara', 'Emilena', 'Oruro', 'xxx', 'emi@gmail.com'),
(4, '101212', 'Cuellar Villa', 'Noemi', 'Sucre', 'xxx', 'noemi@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE `detalle` (
  `Id` int(10) NOT NULL,
  `Cantidad` int(10) DEFAULT NULL,
  `Precio` float DEFAULT NULL,
  `Id_Factura` int(10) DEFAULT NULL,
  `Id_Producto` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle`
--

INSERT INTO `detalle` (`Id`, `Cantidad`, `Precio`, `Id_Factura`, `Id_Producto`) VALUES
(1, 5, 25, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `Id` int(10) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Numero_pago` float DEFAULT NULL,
  `Id_cliente` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`Id`, `Fecha`, `Numero_pago`, `Id_cliente`) VALUES
(1, '2021-12-01', 1500, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modo_pago`
--

CREATE TABLE `modo_pago` (
  `Id` int(10) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Detalles` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `modo_pago`
--

INSERT INTO `modo_pago` (`Id`, `Nombre`, `Detalles`) VALUES
(1, 'Mensual', 'Los pagos se realizan mensualmente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `Id` int(10) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `stock` int(10) DEFAULT NULL,
  `Id_Categoria` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`Id`, `Nombre`, `precio`, `stock`, `Id_Categoria`) VALUES
(1, 'USB', 50, 10, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Factura` (`Id_Factura`),
  ADD KEY `Id_Producto` (`Id_Producto`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_cliente` (`Id_cliente`);

--
-- Indices de la tabla `modo_pago`
--
ALTER TABLE `modo_pago`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Categoria` (`Id_Categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `detalle`
--
ALTER TABLE `detalle`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `modo_pago`
--
ALTER TABLE `modo_pago`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD CONSTRAINT `detalle_ibfk_1` FOREIGN KEY (`Id_Factura`) REFERENCES `factura` (`Id`),
  ADD CONSTRAINT `detalle_ibfk_2` FOREIGN KEY (`Id_Producto`) REFERENCES `producto` (`Id`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`Id_cliente`) REFERENCES `cliente` (`Id`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`Id_Categoria`) REFERENCES `categoria` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
