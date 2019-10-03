CREATE TABLE IF NOT EXISTS `clientes` (
  `id`  INT AUTO_INCREMENT PRIMARY KEY,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `telefono` varchar(17) NOT NULL,
  `direccion` varchar(200) NOT NULL
) ENGINE=InnoDB ;

INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `telefono`, `direccion`) VALUES
(1, 'Jose', 'Garcia', '09737483', 'Peru 1978'),
(2, 'Maria', 'Gonzales', '09987624', 'Peru 1978'),
(3, 'Jose', 'Garcia', '09737483', 'Peru 1978'),
(4, 'Maria', 'Gonzales', '09987624', 'Peru 1978'),
(5, 'Marcos', 'Aloicio', '090584152', 'Ansina 901'),
(6, 'Lorenzo', 'Esquer', '09987633', 'Ansina 901');

