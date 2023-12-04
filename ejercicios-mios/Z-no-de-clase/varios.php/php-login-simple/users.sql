-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2023 a las 18:15:13
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_login_database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'luisferlie@gmil.com', '$2y$10$t/qR94xueYQCsDkhv9NAMeswXsVs9PFhxno7OlydsDppsAVzmoi0S'),
(2, 'marina@peco.es', '$2y$10$bIKNSvzX.QQGxhyXz/aKxOYTdxfSM63b2FLhKUEztKMqKGdHrjv9G'),
(3, 'marina@peco.es', '$2y$10$3m.pwMPwFRqy1IwbHxMesuyRXGGA5v18gInx1x9J3.b3YKrcUdgW2'),
(4, 'mngarcial1967@gmail.com', '$2y$10$Pu44eEuqE4wngX1iDjoyHO/JqGNob3A2Ls.5A6FKD.fudaTQe00m2'),
(5, 'mngarcial1967@gmail.com', '$2y$10$o8Ay1mvsbzG5wIn/I5VKweNLtTb.UuVIqclTYG2Lkx.AKwgk2VrX6');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
