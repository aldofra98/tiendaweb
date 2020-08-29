-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2019 at 08:07 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tienda`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblproductos`
--

CREATE TABLE `tblproductos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Precio` decimal(20,2) NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproductos`
--

INSERT INTO `tblproductos` (`ID`, `Nombre`, `Precio`, `Descripcion`, `Imagen`) VALUES
(1, 'Evening, Paris', '8000.00', 'Óleo sobre lienzo pintado 100% a mano por Dmitry Spiros - Recreación de una pintura anterior.\r\nFirmado por Dmitry Spiros.\r\nSe entrega Certificado de Autenticidad.', 'https://http2.mlstatic.com/evening-paris-cuadros-pinturas-al-oleo-de-dmitry-spiros-D_NQ_NP_15674-MLM20105629759_062014-F.webp'),
(2, 'London. Autumn', '7950.00', 'Los colores de esta pintura llene de principios de otoño, el estado de ánimo, saturados de textura y color le dará la sensación de presencia.\r\nEsta pintura de decorar cualquier habitación de su casa. \r\nRecreación de una pintura anterior.\r\nNuevo y en perfecto estado.', 'https://http2.mlstatic.com/london-autumn-cuadros-pinturas-al-oleo-de-dmitry-spiros-D_NQ_NP_16081-MLM20114039249_062014-F.webp'),
(3, 'Alone Sailboat', '6000.00', 'Esta pintura de decorar cualquier habitación de su casa.\r\nRecreación de una pintura anterior.\r\nNuevo y en perfecto estado.\r\n\r\nOleo, acr. el lienzo\r\nEl Lienzo: 0.75 Galería,\r\nFinal de recubrimiento de alta calidad del barniz usado para proteger la superficie de los de esta obra de arte.', 'https://http2.mlstatic.com/alone-sailboat-cuadros-pinturas-al-oleo-de-dmitry-spiros-D_NQ_NP_11569-MLM20045393500_022014-F.webp'),
(4, 'Old Yard - Cuadros', '9000.00', 'Óleo sobre lienzo pintado 100% a mano por Dmitry Spiros - Recreación de una pintura anterior.\r\nFirmado por Dmitry Spiros.\r\nSe entrega Certificado de Autenticidad.\r\n\r\n', 'https://http2.mlstatic.com/old-yard-cuadros-pinturas-al-oleo-de-dmitry-spiros-D_NQ_NP_10162-MLM20025358087_122013-F.webp'),
(5, 'Night Merida', '6000.00', 'Saturados de textura y color le dará la sensación de presencia.\r\nEsta pintura de decorar cualquier habitación de su casa.\r\nRecreación de una pintura anterior.\r\nNuevo y en perfecto estado.', 'https://http2.mlstatic.com/night-merida-cuadros-pinturas-al-oleo-de-dmitry-spiros-D_NQ_NP_10396-MLM20027664961_012014-F.webp'),
(6, 'Arbol Rojo', '6000.00', 'Técnica: Óleo sobre lienzo pintado 100% a mano por Dmitry Spiros - Recreación de una pintura anterior.\r\nFirmado por Dmitry Spiros.\r\nSe entrega Certificado de Autenticidad.', 'https://http2.mlstatic.com/arbol-rojo-cuadros-pinturas-al-oleo-de-dmitry-spiros-D_NQ_NP_17466-MLM20138998845_082014-F.webp'),
(7, 'Caribbean Noon', '7000.00', 'Técnica: Óleo sobre lienzo pintado 100% a mano por Dmitry Spiros - Recreación de una pintura anterior.\r\nFirmado por Dmitry Spiros.\r\nSe entrega Certificado de Autenticidad.', 'https://http2.mlstatic.com/caribbean-noon-cuadros-pinturas-al-oleo-de-dmitry-spiros-D_NQ_NP_15574-MLM20105430468_052014-F.webp'),
(8, 'Restaurante En Isla Mujeres', '8000.00', 'El mar Caribbean. Isla mujeres, Cancun', 'https://http2.mlstatic.com/restaurante-en-isla-mujeres-pinturas-oleo-de-dmitry-spiros-D_NQ_NP_10365-MLM20027615894_012014-F.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblproductos`
--
ALTER TABLE `tblproductos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblproductos`
--
ALTER TABLE `tblproductos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
