-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 26-10-2022 a las 04:01:13
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(255) NOT NULL,
  `nombre` text NOT NULL,
  `edad` text NOT NULL,
  `sexo` text NOT NULL,
  `estatura` text NOT NULL,
  `peso` text NOT NULL,
  `msj` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `nombre`, `edad`, `sexo`, `estatura`, `peso`, `msj`) VALUES
(26, 'Carla', '15', 'F', '20', '80', 'Hola Carla eres una joven muy saludable,\r\nte recomiendo salir a jugar al aire libre durante 6765 minutos \r\ndiarios'),
(27, 'Jesus', '20', 'M', '15', '20', 'Hola Jesus eres un joven muy saludable,\r\nte recomiendo salir a jugar al aire libre durante 610 minutos \r\ndiarios'),
(33, 'Pedro', '30', 'M', '40', '50', 'Hola Pedro eres un persona muy saludable,te recomiendo comer mas y salir a correr 10 km diarios'),
(34, 'Jesus', '50', 'M', '45', '30', 'Hola Jesus eres una persona muy saludable,te recomiendo comer mas y salir a correr 8 km diarios'),
(35, 'Carlos Perez', '25', 'M', '80', '40', 'Hola Carlos Perez eres una persona muy saludable,te recomiendo comer mas y salir a correr 10 km diarios'),
(43, 'Jesus', '33', 'M', '44', '22', 'Hola Jesus eres una persona muy saludable,te recomiendo comer menos y salir a correr 9 km diarios'),
(44, 'Jesus', '33', 'M', '44', '22', 'Hola Jesus eres una persona muy saludable,te recomiendo comer menos y salir a correr 9 km diarios'),
(45, 'Roberto Jimenez', '50', 'M', '40', '50', 'Hola Roberto Jimenez eres una persona muy saludable,te recomiendo comer mas y salir a correr 8 km diarios'),
(46, 'Alberto Perez', '50', 'M', '40', '30', 'Hola Alberto Perez eres una persona muy saludable,te recomiendo comer mas y salir a correr 8 km diarios'),
(47, 'Roberto Gonzales', '40', 'M', '20', '20', 'Hola Roberto Gonzales eres una persona muy saludable,te recomiendo comer menos y salir a correr 9 km diarios'),
(63, 'Josefina Lopez', '15', 'F', '50', '40', 'Hola Josefina Lopez eres una joven muy saludable,\r\nte recomiendo salir a jugar al aire libre durante 12586269025 minutos \r\ndiarios'),
(64, 'Juan Colmenares', '35', 'M', '25', '15', 'Hola Juan Colmenares eres una persona muy saludable,te recomiendo comer menos y salir a correr 9 km diarios'),
(65, 'Ana Dellan', '25', 'F', '23', '14', 'Hola Ana Dellan eres una persona muy saludable,te recomiendo comer menos y salir a correr 10 km diarios'),
(66, 'Rosalba', '14', 'F', '16', '15', 'Hola Rosalba eres una joven muy saludable,\r\nte recomiendo salir a jugar al aire libre durante 987 minutos \r\ndiarios');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
