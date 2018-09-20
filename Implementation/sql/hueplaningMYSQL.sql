-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-09-2018 a las 09:01:49
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hueplaning`
--
CREATE DATABASE IF NOT EXISTS `hueplaning` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hueplaning`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `in_tinpr`
--

DROP TABLE IF EXISTS `in_tinpr`;
CREATE TABLE `in_tinpr` (
  `INPR_INPR` int(22) NOT NULL,
  `INPR_CANT` int(22) NOT NULL,
  `TPHU_TPHU` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `le_tlote`
--

DROP TABLE IF EXISTS `le_tlote`;
CREATE TABLE `le_tlote` (
  `LOTE_LOTE` int(22) NOT NULL,
  `LOTE_NAME` varchar(50) NOT NULL,
  `LOTE_CNTG` int(22) NOT NULL,
  `LOTE_DTCR` date NOT NULL,
  `RGAL_RGAL` int(22) NOT NULL,
  `PROV_PROV` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `le_tlote`
--

INSERT INTO `le_tlote` (`LOTE_LOTE`, `LOTE_NAME`, `LOTE_CNTG`, `LOTE_DTCR`, `RGAL_RGAL`, `PROV_PROV`) VALUES
(1, 'Lote 1', 10, '2018-08-01', 2, 1),
(2, 'Lote 2', 20, '2018-09-01', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `le_tprov`
--

DROP TABLE IF EXISTS `le_tprov`;
CREATE TABLE `le_tprov` (
  `PROV_PROV` int(22) NOT NULL,
  `PROV_NIT` varchar(50) NOT NULL,
  `PROV_NAME` varchar(50) NOT NULL,
  `PROV_DIRC` varchar(50) NOT NULL,
  `PROV_TELF` varchar(50) NOT NULL,
  `PROV_EMAL` varchar(50) NOT NULL,
  `PROV_CTAC` varchar(50) NOT NULL,
  `PROV_STDO` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `le_tprov`
--

INSERT INTO `le_tprov` (`PROV_PROV`, `PROV_NIT`, `PROV_NAME`, `PROV_DIRC`, `PROV_TELF`, `PROV_EMAL`, `PROV_CTAC`, `PROV_STDO`) VALUES
(1, '88888888', 'Empresa Gal 1', 'cll 1 cr 2', '123456', 'prov1@gmail.com', 'jose', 'ACTIVO'),
(2, '99999999', 'Empresa Gal 2', 'cll 1 cr 2', '123456', 'prov2@gmail.com', 'luis', 'ACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `le_trgal`
--

DROP TABLE IF EXISTS `le_trgal`;
CREATE TABLE `le_trgal` (
  `RGAL_RGAL` int(22) NOT NULL,
  `RGAL_RAZA` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `le_trgal`
--

INSERT INTO `le_trgal` (`RGAL_RGAL`, `RGAL_RAZA`) VALUES
(1, 'Raza 1'),
(2, 'Raza 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ne_tclsf`
--

DROP TABLE IF EXISTS `ne_tclsf`;
CREATE TABLE `ne_tclsf` (
  `CLSF_CLSF` int(22) NOT NULL,
  `CLSF_CANT` varchar(50) NOT NULL,
  `CLSF_DATE` date NOT NULL,
  `TPHU_TPHU` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ne_tprcl`
--

DROP TABLE IF EXISTS `ne_tprcl`;
CREATE TABLE `ne_tprcl` (
  `PRCL_PRCL` int(22) NOT NULL,
  `PROD_PROD` int(22) NOT NULL,
  `CLSF_CLSF` int(22) NOT NULL,
  `USER_USER` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ne_tprod`
--

DROP TABLE IF EXISTS `ne_tprod`;
CREATE TABLE `ne_tprod` (
  `PROD_PROD` int(22) NOT NULL,
  `PROD_CANT` varchar(50) NOT NULL,
  `PROD_DATE` date NOT NULL,
  `PROD_JORN` varchar(50) NOT NULL,
  `LOTE_LOTE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ne_ttphu`
--

DROP TABLE IF EXISTS `ne_ttphu`;
CREATE TABLE `ne_ttphu` (
  `TTPHU_TTPHU` int(22) NOT NULL,
  `TTPHU_TNOM` varchar(50) NOT NULL,
  `TTPHU_DESC` varchar(50) NOT NULL,
  `TTPHU_PESO` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ne_ttphu`
--

INSERT INTO `ne_ttphu` (`TTPHU_TTPHU`, `TTPHU_TNOM`, `TTPHU_DESC`, `TTPHU_PESO`) VALUES
(1, 'AAA', 'Huevo medio', 200),
(2, 'AA', 'Huevo grande', 500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `us_ttprl`
--

DROP TABLE IF EXISTS `us_ttprl`;
CREATE TABLE `us_ttprl` (
  `TPRL_TPRL` int(22) NOT NULL,
  `TPRL_NAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `us_ttprl`
--

INSERT INTO `us_ttprl` (`TPRL_TPRL`, `TPRL_NAME`) VALUES
(1, 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `us_tuser`
--

DROP TABLE IF EXISTS `us_tuser`;
CREATE TABLE `us_tuser` (
  `USER_USER` int(22) NOT NULL,
  `USER_CEDU` varchar(50) NOT NULL,
  `USER_NAME` varchar(50) NOT NULL,
  `USER_APDO` varchar(50) NOT NULL,
  `USER_DIRC` varchar(50) NOT NULL,
  `USER_TELF` varchar(30) NOT NULL,
  `USER_EMAL` varchar(50) NOT NULL,
  `USER_PSWD` varchar(50) NOT NULL,
  `USER_STDO` varchar(50) NOT NULL,
  `TPRL_TPRL` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `us_tuser`
--

INSERT INTO `us_tuser` (`USER_USER`, `USER_CEDU`, `USER_NAME`, `USER_APDO`, `USER_DIRC`, `USER_TELF`, `USER_EMAL`, `USER_PSWD`, `USER_STDO`, `TPRL_TPRL`) VALUES
(32, '1019143966', 'Master', 'Zen', 'Cll 1000', '123456', 'dasd@gmail', '123', 'ACTIVO', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `in_tinpr`
--
ALTER TABLE `in_tinpr`
  ADD PRIMARY KEY (`INPR_INPR`),
  ADD KEY `TPHU_TPHU` (`TPHU_TPHU`);

--
-- Indices de la tabla `le_tlote`
--
ALTER TABLE `le_tlote`
  ADD PRIMARY KEY (`LOTE_LOTE`),
  ADD KEY `ne_tlote_ibfk_1` (`RGAL_RGAL`),
  ADD KEY `ne_tlote_ibfk_2` (`PROV_PROV`);

--
-- Indices de la tabla `le_tprov`
--
ALTER TABLE `le_tprov`
  ADD PRIMARY KEY (`PROV_PROV`),
  ADD UNIQUE KEY `PROV_NIT` (`PROV_NIT`);

--
-- Indices de la tabla `le_trgal`
--
ALTER TABLE `le_trgal`
  ADD PRIMARY KEY (`RGAL_RGAL`);

--
-- Indices de la tabla `ne_tclsf`
--
ALTER TABLE `ne_tclsf`
  ADD PRIMARY KEY (`CLSF_CLSF`),
  ADD KEY `ne_ttphu_ibfk_1` (`TPHU_TPHU`);

--
-- Indices de la tabla `ne_tprcl`
--
ALTER TABLE `ne_tprcl`
  ADD PRIMARY KEY (`PRCL_PRCL`),
  ADD KEY `ne_tprcl_ibfk_1` (`USER_USER`),
  ADD KEY `ne_tprcl_ibfk_2` (`CLSF_CLSF`),
  ADD KEY `ne_tprcl_ibfk_4` (`PROD_PROD`);

--
-- Indices de la tabla `ne_tprod`
--
ALTER TABLE `ne_tprod`
  ADD PRIMARY KEY (`PROD_PROD`),
  ADD KEY `LOTE_LOTE` (`LOTE_LOTE`);

--
-- Indices de la tabla `ne_ttphu`
--
ALTER TABLE `ne_ttphu`
  ADD PRIMARY KEY (`TTPHU_TTPHU`);

--
-- Indices de la tabla `us_ttprl`
--
ALTER TABLE `us_ttprl`
  ADD PRIMARY KEY (`TPRL_TPRL`);

--
-- Indices de la tabla `us_tuser`
--
ALTER TABLE `us_tuser`
  ADD PRIMARY KEY (`USER_USER`),
  ADD UNIQUE KEY `USER_CEDU` (`USER_CEDU`),
  ADD KEY `us_ttprl_ibfk_1` (`TPRL_TPRL`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `in_tinpr`
--
ALTER TABLE `in_tinpr`
  MODIFY `INPR_INPR` int(22) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `le_tlote`
--
ALTER TABLE `le_tlote`
  MODIFY `LOTE_LOTE` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `le_tprov`
--
ALTER TABLE `le_tprov`
  MODIFY `PROV_PROV` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `le_trgal`
--
ALTER TABLE `le_trgal`
  MODIFY `RGAL_RGAL` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ne_tclsf`
--
ALTER TABLE `ne_tclsf`
  MODIFY `CLSF_CLSF` int(22) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ne_tprcl`
--
ALTER TABLE `ne_tprcl`
  MODIFY `PRCL_PRCL` int(22) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ne_tprod`
--
ALTER TABLE `ne_tprod`
  MODIFY `PROD_PROD` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ne_ttphu`
--
ALTER TABLE `ne_ttphu`
  MODIFY `TTPHU_TTPHU` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `us_ttprl`
--
ALTER TABLE `us_ttprl`
  MODIFY `TPRL_TPRL` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `us_tuser`
--
ALTER TABLE `us_tuser`
  MODIFY `USER_USER` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `in_tinpr`
--
ALTER TABLE `in_tinpr`
  ADD CONSTRAINT `in_tinpr_ibfk_1` FOREIGN KEY (`TPHU_TPHU`) REFERENCES `ne_ttphu` (`TTPHU_TTPHU`);

--
-- Filtros para la tabla `le_tlote`
--
ALTER TABLE `le_tlote`
  ADD CONSTRAINT `ne_tlote_ibfk_1` FOREIGN KEY (`RGAL_RGAL`) REFERENCES `le_trgal` (`RGAL_RGAL`),
  ADD CONSTRAINT `ne_tlote_ibfk_2` FOREIGN KEY (`PROV_PROV`) REFERENCES `le_tprov` (`PROV_PROV`);

--
-- Filtros para la tabla `ne_tclsf`
--
ALTER TABLE `ne_tclsf`
  ADD CONSTRAINT `ne_ttphu_ibfk_1` FOREIGN KEY (`TPHU_TPHU`) REFERENCES `ne_ttphu` (`TTPHU_TTPHU`);

--
-- Filtros para la tabla `ne_tprcl`
--
ALTER TABLE `ne_tprcl`
  ADD CONSTRAINT `ne_tprcl_ibfk_1` FOREIGN KEY (`USER_USER`) REFERENCES `us_tuser` (`USER_USER`),
  ADD CONSTRAINT `ne_tprcl_ibfk_2` FOREIGN KEY (`CLSF_CLSF`) REFERENCES `ne_tclsf` (`CLSF_CLSF`),
  ADD CONSTRAINT `ne_tprcl_ibfk_4` FOREIGN KEY (`PROD_PROD`) REFERENCES `ne_tprod` (`PROD_PROD`);

--
-- Filtros para la tabla `ne_tprod`
--
ALTER TABLE `ne_tprod`
  ADD CONSTRAINT `ne_tprod_ibfk_1` FOREIGN KEY (`LOTE_LOTE`) REFERENCES `le_tlote` (`LOTE_LOTE`);

--
-- Filtros para la tabla `us_tuser`
--
ALTER TABLE `us_tuser`
  ADD CONSTRAINT `us_ttprl_ibfk_1` FOREIGN KEY (`TPRL_TPRL`) REFERENCES `us_ttprl` (`TPRL_TPRL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
