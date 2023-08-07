-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-08-2021 a las 20:10:25
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `ci` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(80) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE `configuracion` (
  `idConfiguracion` int(11) NOT NULL,
  `nit` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `logo` blob NOT NULL,
  `iva` decimal(18,2) NOT NULL,
  `usuarioid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE `detalle` (
  `iddetalle` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` decimal(18,2) NOT NULL,
  `productoid` int(11) NOT NULL,
  `facturaid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus`
--

CREATE TABLE `estatus` (
  `idestatus` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estatus`
--

INSERT INTO `estatus` (`idestatus`, `nombre`) VALUES
(1, 'Activo'),
(2, 'Denegado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `idfactura` int(11) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `clienteid` int(11) NOT NULL,
  `usuarioid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idproducto` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` blob NOT NULL,
  `precio` decimal(18,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `categoriaid` int(11) NOT NULL,
  `proveedorid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `idproveedor` int(11) NOT NULL,
  `nit` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(80) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Vendedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `ci` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `clave` text COLLATE utf8_spanish_ci NOT NULL,
  `rolid` int(11) NOT NULL,
  `estatusid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `ci`, `nombre`, `telefono`, `direccion`, `usuario`, `clave`, `rolid`, `estatusid`) VALUES
(1, '10780686', 'erwin apace fabricano', '73751692', 'Avenida Petrolera km4', 'erwin', '202cb962ac59075b964b07152d234b70', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`idConfiguracion`),
  ADD KEY `configuracion-usuario` (`usuarioid`);

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD PRIMARY KEY (`iddetalle`),
  ADD KEY `productoid` (`productoid`),
  ADD KEY `detalle-factura` (`facturaid`);

--
-- Indices de la tabla `estatus`
--
ALTER TABLE `estatus`
  ADD PRIMARY KEY (`idestatus`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`idfactura`),
  ADD KEY `factura-cliente` (`clienteid`),
  ADD KEY `usuario-factura` (`usuarioid`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idproducto`),
  ADD KEY `producto-categoria` (`categoriaid`),
  ADD KEY `proveedor-producto` (`proveedorid`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`idproveedor`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `usuario-rol` (`rolid`),
  ADD KEY `usuario-estatus` (`estatusid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  MODIFY `idConfiguracion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle`
--
ALTER TABLE `detalle`
  MODIFY `iddetalle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estatus`
--
ALTER TABLE `estatus`
  MODIFY `idestatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `idfactura` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `idproveedor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD CONSTRAINT `configuracion-usuario` FOREIGN KEY (`usuarioid`) REFERENCES `usuario` (`idusuario`);

--
-- Filtros para la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD CONSTRAINT `detalle-producto` FOREIGN KEY (`productoid`) REFERENCES `producto` (`idproducto`) ON UPDATE CASCADE,
  ADD CONSTRAINT `factura-detalle` FOREIGN KEY (`facturaid`) REFERENCES `factura` (`idfactura`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `cliente-factura` FOREIGN KEY (`clienteid`) REFERENCES `cliente` (`idcliente`) ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario-factura` FOREIGN KEY (`usuarioid`) REFERENCES `usuario` (`idusuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `categoria-producto` FOREIGN KEY (`categoriaid`) REFERENCES `categoria` (`idcategoria`) ON UPDATE CASCADE,
  ADD CONSTRAINT `proveedor-producto` FOREIGN KEY (`proveedorid`) REFERENCES `proveedor` (`idproveedor`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario-estatus` FOREIGN KEY (`estatusid`) REFERENCES `estatus` (`idestatus`) ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario-rol` FOREIGN KEY (`rolid`) REFERENCES `rol` (`idrol`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
