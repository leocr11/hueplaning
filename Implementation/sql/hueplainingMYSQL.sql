-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-08-2018 a las 18:16:50
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

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

DROP DATABASE IF EXISTS hueplaning;
CREATE DATABASE hueplaning;

USE hueplaning;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `in_tinpr`
--

CREATE TABLE `in_tinpr` (
  `INPR_INPR` int(22) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `INPR_CANT` int(22) NOT NULL,
  `TPHU_TPHU` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `le_tlote`
--

CREATE TABLE `le_tlote` (
  `LOTE_LOTE` int(22) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `LOTE_CNTG` int(22) NOT NULL,
  `LOTE_DTCR` varchar(50) NOT NULL,
  `RGAL_RGAL` int(22) NOT NULL,
  `LOTE_NAME` varchar(50) NOT NULL,
  `PROV_PROV` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `le_tprov`
--

CREATE TABLE `le_tprov` (
  `PROV_PROV` int(22) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `PROV_NIT`  varchar(50) NOT NULL UNIQUE,
  `PROV_NAME` varchar(50) NOT NULL,
  `PROV_APDO` varchar(50) NOT NULL,
  `PROV_DIRC` varchar(50) NOT NULL,
  `PROV_TELF` varchar(50) NOT NULL,
  `PROV_EMAL` varchar(50) NOT NULL,
  `PROV_CTAC` varchar(50) NOT NULL,
  `PROV_STDO` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `le_trgal`
--

CREATE TABLE `le_trgal` (
  `RGAL_RGAL` int(22) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `RGAL_RAZA` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ne_tclsf`
--

CREATE TABLE `ne_tclsf` (
  `CLSF_CLSF` int(22) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `CLSF_CANT` varchar(50) NOT NULL,
  `CLSF_DATE` date NOT NULL,
  `TPHU_TPHU` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ne_tprcl`
--

CREATE TABLE `ne_tprcl` (
  `PRCL_PRCL` int(22) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `PROD_PROD` int(22) NOT NULL,
  `CLSF_CLSF` int(22) NOT NULL,
  `USER_USER` int(22) NOT NULL,
  `LOTE_LOTE` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ne_tprod`
--

CREATE TABLE `ne_tprod` (
  `PROD_PROD` int(22) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `PROD_CANT` varchar(50) NOT NULL,
  `PROD_DATE` varchar(50) NOT NULL,
  `PROD_JORN` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ne_ttphu`
--

CREATE TABLE `ne_ttphu` (
  `TTPHU_TTPHU` int(22) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `TTPHU_TNOM` varchar(50) NOT NULL,
  `TTPHU_DESC` varchar(50) NOT NULL,
  `TTPHU_PESO` int(3) NOT NULL,
  `INPR_INPR` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `us_ttprl`
--

CREATE TABLE `us_ttprl` (
  `TPRL_TPRL` int(22) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `TPRL_NAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `us_tuser`
--

CREATE TABLE `us_tuser` (
  `USER_USER` int(22) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `USER_CEDU` varchar(50) NOT NULL UNIQUE,
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
  ADD CONSTRAINT `ne_tprcl_ibfk_3` FOREIGN KEY (`LOTE_LOTE`) REFERENCES `le_tlote` (`LOTE_LOTE`),
  ADD CONSTRAINT `ne_tprcl_ibfk_4` FOREIGN KEY (`PROD_PROD`) REFERENCES `ne_tprod` (`PROD_PROD`);

--
-- Filtros para la tabla `ne_ttphu`
--
ALTER TABLE `ne_ttphu`
  ADD CONSTRAINT `in_tinpr_ibfk_1` FOREIGN KEY (`INPR_INPR`) REFERENCES `in_tinpr` (`INPR_INPR`);

--
-- Filtros para la tabla `us_tuser`
--
ALTER TABLE `us_tuser`
  ADD CONSTRAINT `us_ttprl_ibfk_1` FOREIGN KEY (`TPRL_TPRL`) REFERENCES `us_ttprl` (`TPRL_TPRL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
