-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 20-02-2021 a las 18:38:46
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mvc_services`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_no` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_no`, `first_name`, `last_name`, `email`, `password`, `phone`, `address`, `city`, `state`) VALUES
(1, 'Roberto', 'Marin', 'exampleemail@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 654390219, 'Carrer de Tamarit 117', 'Barcelona', 'Spain'),
(2, 'Pepa', 'Ruiz', 'exampleemail@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 654390219, 'Carrer de Tamarit 117', 'Barcelona', 'Spain'),
(3, 'Victor', 'Marin', 'exampleemail@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 654390219, 'Carrer de Tamarit 117', 'Barcelona', 'Spain'),
(4, 'Miguel', 'Garcia', 'exampleemail@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 654390219, 'Carrer de Tamarit 117', 'Barcelona', 'Spain'),
(5, 'Raul', 'Catedra', 'exampleemail@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 654390219, 'Carrer de Tamarit 117', 'Barcelona', 'Spain'),
(6, 'Irati', 'Arrieta', 'exampleemail@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 654390219, 'Carrer de Tamarit 117', 'Barcelona', 'Spain'),
(7, 'Raul', 'Huelamo', 'exampleemail@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 654390219, 'Carrer de Tamarit 117', 'Barcelona', 'Spain'),
(8, 'Veronica', 'Velazquez', 'exampleemail@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 654390219, 'Carrer de Tamarit 117', 'Barcelona', 'Spain'),
(9, 'Jose', 'Serralvo', 'exampleemail@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 654390219, 'Carrer de Tamarit 117', 'Barcelona', 'Spain'),
(10, 'Maria', 'Velazquez', 'exampleemail@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 654390219, 'Carrer de Tamarit 117', 'Barcelona', 'Spain'),
(11, 'Manolo', 'Martin', 'exampleemail@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 654390219, 'Carrer de Tamarit 117', 'Barcelona', 'Spain'),
(12, 'Jorge', 'Gomez', 'exampleemail@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 654390219, 'Carrer de Tamarit 117', 'Barcelona', 'Spain'),
(13, 'Juana', 'Floricienta', 'exampleemail@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 654390219, 'Carrer de Tamarit 117', 'Barcelona', 'Spain'),
(14, 'Manuel', 'Portu', 'exampleemail@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 654390219, 'Carrer de Tamarit 117', 'Barcelona', 'Spain');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
