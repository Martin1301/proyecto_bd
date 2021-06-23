-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2021 a las 21:01:30
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clasificatoria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadisticas`
--

CREATE TABLE `estadisticas` (
  `id_estadisticas` int(11) NOT NULL,
  `pais_nombre` varchar(45) NOT NULL,
  `jugador_nombre_jugador` varchar(45) NOT NULL,
  `amarilla` int(11) DEFAULT NULL,
  `roja` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estadisticas`
--

INSERT INTO `estadisticas` (`id_estadisticas`, `pais_nombre`, `jugador_nombre_jugador`, `amarilla`, `roja`) VALUES
(1, 'Chile', 'Paolo Guerrero', 3, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fecha_encuentro`
--

CREATE TABLE `fecha_encuentro` (
  `idfecha_encuentro` int(11) NOT NULL,
  `fecha_encuentro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fecha_encuentro`
--

INSERT INTO `fecha_encuentro` (`idfecha_encuentro`, `fecha_encuentro`) VALUES
(1, '2021-04-30'),
(2, '2021-05-01'),
(3, '2021-05-02'),
(4, '2021-05-03'),
(5, '2021-05-04'),
(6, '2021-05-05'),
(7, '2021-05-06'),
(8, '2021-05-07'),
(9, '2021-05-08'),
(10, '2021-05-09'),
(11, '2021-05-10'),
(12, '2021-05-11'),
(13, '2021-05-12'),
(14, '2021-05-13'),
(15, '2021-05-14'),
(16, '2021-05-15'),
(17, '2021-05-16'),
(18, '2021-05-17'),
(19, '2021-05-18'),
(20, '2021-05-19'),
(21, '2021-05-20'),
(22, '2021-05-21'),
(23, '2021-05-22'),
(24, '2021-05-23'),
(25, '2021-05-24'),
(26, '2021-05-25'),
(27, '2021-05-26'),
(28, '2021-05-27'),
(29, '2021-05-28'),
(30, '2021-05-29'),
(31, '2021-05-30'),
(32, '2021-05-31'),
(26, '2021-06-01'),
(27, '2021-06-02'),
(28, '2021-06-03'),
(29, '2021-06-04'),
(30, '2021-06-05'),
(31, '2021-06-06'),
(32, '2021-06-07'),
(33, '2021-06-08'),
(34, '2021-06-09'),
(35, '2021-06-10'),
(36, '2021-06-11'),
(37, '2021-06-12'),
(38, '2021-06-13'),
(39, '2021-06-14'),
(40, '2021-06-15'),
(41, '2021-06-16'),
(42, '2021-06-17'),
(43, '2021-06-18'),
(44, '2021-06-19'),
(45, '2021-06-20'),
(46, '2021-06-21'),
(47, '2021-06-22'),
(48, '2021-06-23'),
(49, '2021-06-24'),
(50, '2021-06-25'),
(51, '2021-06-26'),
(52, '2021-06-27'),
(53, '2021-06-28'),
(54, '2021-06-29'),
(55, '2021-06-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fecha_encuentro_pais`
--

CREATE TABLE `fecha_encuentro_pais` (
  `idencuentro_paises` int(11) NOT NULL,
  `fecha_encuentro_paises` date NOT NULL,
  `pais_nombre_a` varchar(45) NOT NULL,
  `pais_nombre_b` varchar(45) NOT NULL,
  `sede_nombre` varchar(45) NOT NULL,
  `gol_a` int(11) DEFAULT NULL,
  `gol_b` int(11) DEFAULT NULL,
  `bandera_a` blob NOT NULL,
  `bandera_b` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fecha_encuentro_pais`
--

INSERT INTO `fecha_encuentro_pais` (`idencuentro_paises`, `fecha_encuentro_paises`, `pais_nombre_a`, `pais_nombre_b`, `sede_nombre`, `gol_a`, `gol_b`, `bandera_a`, `bandera_b`) VALUES
(1, '2021-05-01', 'Perú', 'Chile', 'Estadio nacional', 2, 3, 0x636f6c6f6d6269612e706e67, 0x76656e657a75656c612e706e67),
(2, '2021-05-07', 'Ecuador', 'Chile', 'Estadio nacional', 122, 1777, 0x65637561646f722e706e67, 0x6368696c652e706e67),
(3, '2021-05-08', 'Chile', 'Argentina', 'Estadio nacional', 1, 1, 0x6368696c652e706e67, 0x617267656e74696e612e706e67),
(5, '2021-05-21', 'Chile', 'Colombia', 'Estadio nacional', 1, 0, 0x6368696c652e706e67, 0x636f6c6f6d6269612e706e67);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `goleadores`
--

CREATE TABLE `goleadores` (
  `id_goleadores` int(11) NOT NULL,
  `jugador_nombre_jugador` varchar(45) NOT NULL,
  `goles` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador`
--

CREATE TABLE `jugador` (
  `id_jugador` int(11) NOT NULL,
  `nombre_jugador` varchar(45) NOT NULL,
  `pais_nombre` varchar(45) NOT NULL,
  `edad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `jugador`
--

INSERT INTO `jugador` (`id_jugador`, `nombre_jugador`, `pais_nombre`, `edad`) VALUES
(2003, 'Alexis Sanchez', 'Chile', 32),
(6010, 'Alfredo Morelos', 'Colombia', 25),
(4004, 'Alisson', 'Brasil', 28),
(3011, 'Angel Correa', 'Argentina', 26),
(3008, 'Angel Di Maria', 'Argentina', 33),
(2011, 'Arturo Vidal', 'Chile', 34),
(2007, 'Ben Brereton', 'Chile', 22),
(6011, 'Carlos Cuesta', 'Colombia', 22),
(4003, 'Casemiro', 'Brasil', 29),
(2004, 'Charles Aranguiz', 'Chile', 32),
(7, 'Christian Cueva', 'Perú', 29),
(2009, 'Claudio Baeza', 'Chile', 27),
(2013, 'Claudio Bravo', 'Chile', 38),
(5, 'Cristhian Ramos', 'Perú', 37),
(3013, 'Cristian Romero', 'Argentina', 23),
(6002, 'Davinson Sanchez', 'Colombia', 25),
(6012, 'Diego Ospina', 'Colombia', 32),
(4013, 'Douglas Luiz', 'Brasil', 23),
(6001, 'Duvan Zapata', 'Colombia', 30),
(4009, 'Ederson', 'Brasil', 27),
(4, 'Edison Flores', 'Perú', 31),
(2012, 'Enzo Rocco', 'Chile', 28),
(2002, 'Erick Pulgar', 'Chile', 27),
(4005, 'Fabinho', 'Brasil', 27),
(4012, 'Felipe', 'Brasil', 32),
(2008, 'Felipe Mora', 'Chile', 27),
(3010, 'Franco Armani', 'Argentina', 33),
(6014, 'Frank Fabra', 'Colombia', 30),
(2010, 'Gabriel Arias', 'Chile', 33),
(4014, 'Gabriel Barbosa', 'Brasil', 24),
(4006, 'Gabriel Jesus', 'Brasil', 24),
(2014, 'Gary Medel', 'Chile', 33),
(2, 'Gianluca Lapadula', 'Perú', 22),
(3012, 'Giovani Lo Ceso', 'Argentina', 25),
(3014, 'Guido Rodriguez', 'Argentina', 27),
(2001, 'Guillermo Maripan', 'Chile', 27),
(6013, 'Jaminton Campaz', 'Colombia', 21),
(2006, 'Jean Meneses', 'Chile', 28),
(8, 'Jefferson Farfan', 'Perú', 36),
(6007, 'Juan Cuadrado', 'Colombia', 33),
(3005, 'Juan Musso', 'Argentina', 27),
(3003, 'Lautaro Martinez', 'Argentina', 23),
(3001, 'Lionel Messi', 'Argentina', 33),
(6005, 'Luis Diaz', 'Colombia', 24),
(6003, 'Luis Muriel', 'Colombia', 30),
(4002, 'Marquinhos', 'Brasil', 27),
(6008, 'Mateus Uribe', 'Colombia', 30),
(3009, 'Nahuel Molina', 'Argentina', 33),
(4001, 'Neymar Jr.', 'Brasil', 29),
(3004, 'Nicolas Gonzales', 'Argentina', 23),
(1, 'Paolo Guerrero', 'Perú', 12),
(3002, 'Paulo Dybala', 'Argentina', 27),
(3, 'Pedro Gallese', 'Perú', 31),
(6, 'Renato Tapia', 'Perú', 25),
(4007, 'Richardlison', 'Brasil', 24),
(4008, 'Roberto Firmino', 'Brasil', 29),
(3006, 'Rodrigo de Paul', 'Argentina', 27),
(9, 'Santiago Ormeño', 'Perú', 27),
(6006, 'Santos Borre', 'Colombia', 25),
(2005, 'Sebastian Vegas', 'Chile', 24),
(3007, 'Sergio Agüero', 'Argentina', 33),
(4011, 'Thiago Silva', 'Brasil', 36),
(4010, 'Vinicius Junior', 'Brasil', 20),
(6009, 'Wilmar Barrios', 'Colombia', 27),
(6004, 'Yerry Mina', 'Colombia', 26);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_18_174414_cre-ate_table_pais_extranjero', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id_pais` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id_pais`, `nombre`) VALUES
(3, 'Argentina'),
(10, 'Bolivia'),
(4, 'Brasil'),
(2, 'Chile'),
(6, 'Colombia'),
(5, 'Ecuador'),
(8, 'Paraguay'),
(1, 'Perú'),
(7, 'Uruguay'),
(9, 'Venezuela');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais_extranjero`
--

CREATE TABLE `pais_extranjero` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posicion`
--

CREATE TABLE `posicion` (
  `id_posicion` int(11) NOT NULL,
  `pais_nombre` varchar(45) NOT NULL,
  `ganado` int(11) DEFAULT NULL,
  `perdido` int(11) DEFAULT NULL,
  `empatado` int(11) DEFAULT NULL,
  `puntos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `posicion`
--

INSERT INTO `posicion` (`id_posicion`, `pais_nombre`, `ganado`, `perdido`, `empatado`, `puntos`) VALUES
(1, 'Perú', 1, 1, 1, 15),
(5, 'Chile', 5, 2, 1, 17),
(17, 'Argentina', 1, 3, 1, 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

CREATE TABLE `sede` (
  `id_sede` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `ubicacion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sede`
--

INSERT INTO `sede` (`id_sede`, `nombre`, `ubicacion`) VALUES
(16, 'Centenario', 'Uruguay'),
(15, 'Ciudad de La Plata', 'Argentina'),
(6, 'Defensores del Chaco', 'Paraguay'),
(13, 'Deportivo Cali', 'Colombia'),
(3, 'Estadio Nacional', 'Lima'),
(4, 'Garcilaso de la Vega', 'Perú'),
(8, 'General Pablo Rojas', 'Paraguay'),
(12, 'José Amalfitani', 'Argentina'),
(7, 'Malvinas Argentinas', 'Argentina'),
(17, 'Mane Garrincha', 'Brasil'),
(1, 'Maracana', 'Rio'),
(5, 'Metropolitano de Merida', 'Venezuela'),
(9, 'Monumental de Chile', 'Chile'),
(14, 'Monumental de Maturin', 'Venezuela'),
(11, 'Nacional de Chile', 'Chile'),
(10, 'Pedro Bidegain', 'Argentina'),
(2, 'Rio', 'Rio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `tipo`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Martin Romani', 'martin@gmail.com', NULL, NULL, '$2y$10$TJ3LxOZGbtcp6VieTzf.iuxxQMiVw1PzvNkOB4IKvx1EXnzNGjJFa', 'yOAwEnVxuAfk4CIVuURwCAerlwr4V8YAf9KZeix8SKi4M8oKK4PbkLsJgWHT', '2021-06-23 12:19:37', '2021-06-23 12:19:37');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estadisticas`
--
ALTER TABLE `estadisticas`
  ADD PRIMARY KEY (`id_estadisticas`),
  ADD KEY `fk_estadisticas_pais1_idx` (`pais_nombre`),
  ADD KEY `fk_estadisticas_jugador1_idx` (`jugador_nombre_jugador`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fecha_encuentro`
--
ALTER TABLE `fecha_encuentro`
  ADD PRIMARY KEY (`fecha_encuentro`);

--
-- Indices de la tabla `fecha_encuentro_pais`
--
ALTER TABLE `fecha_encuentro_pais`
  ADD PRIMARY KEY (`fecha_encuentro_paises`,`pais_nombre_a`,`sede_nombre`),
  ADD KEY `fk_fecha_encuetro_has_pais_fecha_encuetro1_idx` (`fecha_encuentro_paises`),
  ADD KEY `fk_fecha_encuetro_pais_sede1_idx` (`sede_nombre`),
  ADD KEY `fk_fecha_encuetro_has_pais_pais1_idx` (`pais_nombre_a`) USING BTREE,
  ADD KEY `fk_fecha_encuetro_has_pais_pais2` (`pais_nombre_b`);

--
-- Indices de la tabla `goleadores`
--
ALTER TABLE `goleadores`
  ADD PRIMARY KEY (`id_goleadores`,`jugador_nombre_jugador`),
  ADD KEY `fk_goleadores_jugador1_idx` (`jugador_nombre_jugador`);

--
-- Indices de la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD PRIMARY KEY (`nombre_jugador`),
  ADD KEY `fk_jugador_pais_idx` (`pais_nombre`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `pais_extranjero`
--
ALTER TABLE `pais_extranjero`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `posicion`
--
ALTER TABLE `posicion`
  ADD PRIMARY KEY (`id_posicion`),
  ADD UNIQUE KEY `id_posicion` (`id_posicion`),
  ADD KEY `fk_posicion_pais1_idx` (`pais_nombre`);

--
-- Indices de la tabla `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pais_extranjero`
--
ALTER TABLE `pais_extranjero`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estadisticas`
--
ALTER TABLE `estadisticas`
  ADD CONSTRAINT `fk_estadisticas_jugador1` FOREIGN KEY (`jugador_nombre_jugador`) REFERENCES `jugador` (`nombre_jugador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estadisticas_pais1` FOREIGN KEY (`pais_nombre`) REFERENCES `pais` (`nombre`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `fecha_encuentro_pais`
--
ALTER TABLE `fecha_encuentro_pais`
  ADD CONSTRAINT `fk_fecha_encuetro_has_pais_fecha_encuetro1` FOREIGN KEY (`fecha_encuentro_paises`) REFERENCES `fecha_encuentro` (`fecha_encuentro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_fecha_encuetro_has_pais_pais1` FOREIGN KEY (`pais_nombre_a`) REFERENCES `pais` (`nombre`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_fecha_encuetro_has_pais_pais2` FOREIGN KEY (`pais_nombre_b`) REFERENCES `pais` (`nombre`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_fecha_encuetro_pais_sede1` FOREIGN KEY (`sede_nombre`) REFERENCES `sede` (`nombre`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `goleadores`
--
ALTER TABLE `goleadores`
  ADD CONSTRAINT `fk_goleadores_jugador1` FOREIGN KEY (`jugador_nombre_jugador`) REFERENCES `jugador` (`nombre_jugador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD CONSTRAINT `fk_jugador_pais` FOREIGN KEY (`pais_nombre`) REFERENCES `pais` (`nombre`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `posicion`
--
ALTER TABLE `posicion`
  ADD CONSTRAINT `fk_posicion_pais1` FOREIGN KEY (`pais_nombre`) REFERENCES `pais` (`nombre`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
