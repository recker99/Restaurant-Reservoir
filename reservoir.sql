-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2024 a las 00:35:49
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reservoir`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id` int(10) NOT NULL,
  `mesa` int(2) NOT NULL,
  `descripcion` varchar(128) NOT NULL,
  `estado` int(2) NOT NULL,
  `fechaHora` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id`, `mesa`, `descripcion`, `estado`, `fechaHora`) VALUES
(1, 1, 'Entrada ensalada Cesar', 0, '2024-09-26 03:40:34'),
(2, 2, 'Pizza Italiana Familiar Doble queso', 0, '2024-09-26 04:00:41'),
(4, 1, 'Bebida coca-cola ZERO lata', 0, '2024-09-26 04:18:37'),
(5, 1, 'botella vino tinto santa carolina 1 litro', 0, '2024-09-26 04:22:44'),
(6, 1, 'Chorrillana 4 personas', 0, '2024-09-26 04:26:11'),
(7, 3, 'Tablita especial mas 4 empanadas de queso', 0, '2024-09-26 04:29:33'),
(8, 1, 'sushi promo 1', 0, '2024-09-26 00:18:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `Id` int(10) NOT NULL,
  `Rut` varchar(10) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `FechaHora` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`Id`, `Rut`, `Nombre`, `FechaHora`) VALUES
(1, '12345678-9', 'Aylen Catalina', '2024-09-25 20:01:33'),
(2, '12345678-9', 'Aylen Catalina', '2024-09-25 20:02:23'),
(3, '12345678-9', 'Aylen Catalina', '2024-09-25 20:05:29'),
(4, '12000111-9', 'Ivan Bustos', '2024-09-25 20:53:46'),
(5, '12444555-9', 'Recker Van', '2024-09-26 01:18:15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
