-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-03-2021 a las 01:00:13
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: proyectofinal
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla conductores
--

CREATE TABLE conductores (
  documento int(11) NOT NULL,
  nombre varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  direccion varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  telefono varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  catlicencia varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  vencimiento date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla conductores
--

INSERT INTO conductores (documento, nombre, direccion, telefono, catlicencia, vencimiento) VALUES
(1, 'Carlos Ramiro', 'Cra 14 número 34-12', '321', 'C2', '2021-03-10'),
(2, 'Luisa Pérez', 'Calle 15 6 30', '322', 'C1', '2021-03-31'),
(3, 'Jairo Rendón Méndez', 'Calle 15 40', '32377', 'C2', '2021-03-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla ordenes
--

CREATE TABLE ordenes (
  id_orden int(10) NOT NULL,
  producto varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  fecha_cargue date NOT NULL,
  hora_cargue time NOT NULL,
  direccion varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  conductor int(11) NOT NULL,
  vehiculo varchar(10) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla ordenes
--

INSERT INTO ordenes (id_orden, producto, fecha_cargue, hora_cargue, direccion, conductor, vehiculo) VALUES
(1, 'Cafe', '2021-03-16', '23:51:00', 'Cra 14 número 34-12', 1, 'AAA333'),
(3, 'Panela', '2020-03-19', '21:00:00', 'Carrera 14', 1, 'BBB333'),
(4, 'Pasilla', '2020-03-19', '22:00:00', 'Cra 30', 2, 'AAA333'),
(5, 'Aviones', '2021-06-20', '10:00:00', 'Calle prueba larga', 2, 'BBB333'),
(6, 'Carne', '2021-03-18', '17:48:00', 'Calle 2', 3, 'WRD31A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla vehiculos
--

CREATE TABLE vehiculos (
  placa varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  marca varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  modelo int(15) NOT NULL,
  tipo varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  capacidad int(15) NOT NULL,
  foto varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla vehiculos
--

INSERT INTO vehiculos (placa, marca, modelo, tipo, capacidad, foto) VALUES
('AAA333', 'Kenworth', 2006, 'Turbo', 35, 'images/AAA333.jpg'),
('BBB333', 'International', 2008, 'Patineta', 30, 'images/BBB333.jpg'),
('WRD31A', 'Suzuki', 2008, 'Patineta', 35, 'images/WRD31A.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla conductores
--
ALTER TABLE conductores
  ADD PRIMARY KEY (documento);

--
-- Indices de la tabla ordenes
--
ALTER TABLE ordenes
  ADD PRIMARY KEY (id_orden),
  ADD KEY vehiculo (vehiculo),
  ADD KEY conductor (conductor);

--
-- Indices de la tabla vehiculos
--
ALTER TABLE vehiculos
  ADD PRIMARY KEY (placa);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla ordenes
--
ALTER TABLE ordenes
  MODIFY id_orden int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla ordenes
--
ALTER TABLE ordenes
  ADD CONSTRAINT ordenes_ibfk_1 FOREIGN KEY (conductor) REFERENCES conductores (documento),
  ADD CONSTRAINT ordenes_ibfk_2 FOREIGN KEY (vehiculo) REFERENCES vehiculos (placa);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
