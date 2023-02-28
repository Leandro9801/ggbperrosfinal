-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2023 at 12:41 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dogtraining`
--

-- --------------------------------------------------------

--
-- Table structure for table `cursos`
--

CREATE TABLE `cursos` (
  `id` int(3) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `ruta` varchar(200) DEFAULT NULL,
  `precio` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cursos`
--

INSERT INTO `cursos` (`id`, `nombre`, `descripcion`, `ruta`, `precio`) VALUES
(2, 'cachorros', 'Entrenamiento básico para cachorros.', 'cursos/2022-12-08-10-27-48-cachorro.jpg', '350.99'),
(3, 'Adultos', 'Entrenamiento para perros adultos.', 'cursos/2022-12-08-10-49-47-perrosentado.jpg', '500.00'),
(4, 'Guardia y protección', 'Tenemos Cursos de PROTECCION Básica y Avanzada para tu mascota', 'cursos/2022-12-08-11-48-11-dog-racing.jpg', '800');

-- --------------------------------------------------------

--
-- Table structure for table `entrenadores`
--

CREATE TABLE `entrenadores` (
  `id` int(3) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `contrasena` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `entrenadores`
--

INSERT INTO `entrenadores` (`id`, `nombre`, `correo`, `contrasena`) VALUES
(14, 'Cesar millan', 'cesarmillan@gmail.com', 'elcesar'),
(15, 'Carlos Rodriguez', 'carlosrodriguez@gmail.com', 'carlotes'),
(16, 'admin', 'santiagovidal@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entrenadores`
--
ALTER TABLE `entrenadores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `entrenadores`
--
ALTER TABLE `entrenadores`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
