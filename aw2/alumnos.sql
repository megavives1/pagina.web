-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2017 a las 13:54:37
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alumnos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `smx2a`
--

CREATE TABLE `smx2a` (
  `Nombre` text COLLATE utf32_spanish2_ci NOT NULL,
  `Apellido1` text COLLATE utf32_spanish2_ci NOT NULL,
  `Apellido2` text COLLATE utf32_spanish2_ci NOT NULL,
  `Fechanac` date NOT NULL,
  `E-mail` varchar(50) COLLATE utf32_spanish2_ci NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `smx2a`
--

INSERT INTO `smx2a` (`Nombre`, `Apellido1`, `Apellido2`, `Fechanac`, `E-mail`, `ID`) VALUES
('Alejandro', 'Vives', 'Martorell', '1998-01-28', 'latinosalex@hotmail.com', 1),
('Daniel', 'Vargas', 'Fernandez', '1998-05-08', 'danielvargas@gmail.com', 2),
('Jose', 'Santiago', 'Lester', '1998-05-05', 'josesantiago@hotmail.com', 3),
('Javier', 'Tercero', 'Cuarto', '2000-05-06', 'javiertercero@gmail.com', 4),
('Guillem', 'Roig', 'Ramis', '1998-03-19', 'roigramis@gmail.com', 5),
('Isabel', 'Pascual', 'Amengual', '1987-06-08', 'IPascual@gmail.com', 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `smx2a`
--
ALTER TABLE `smx2a`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `smx2a`
--
ALTER TABLE `smx2a`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
