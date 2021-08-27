CREATE TABLE usuarios (
  id_usuario int(11) NOT NULL AUTO_INCREMENT,
  usuario varchar(30),
  pass varchar(25),
  correo varchar(100),
  PRIMARY KEY(id_usuario)
) ENGINE=InnoDB;

CREATE TABLE administradores (
  id_admin int(11) NOT NULL AUTO_INCREMENT,
  usuario varchar(30),
  pass varchar(25),
  correo varchar(100),
  PRIMARY KEY(id_admin)
) ENGINE=InnoDB;

CREATE TABLE peliculas (
  id_pelicula int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(30),
  genero varchar(50),
  descripcion text,
  fecha date,
  trailer text,
  link_pelicula text,
  imagen text,
  imagen_bg text,
  PRIMARY KEY(id_pelicula)
) ENGINE=InnoDB;



INSERT INTO `administradores` (`id_admin`, `usuario`, `pass`, `correo`) VALUES
(1, 'admin', '12345', 'admin@admin.com'),
(3, 'admin1', '12346', 'admin1@admin1.com');

--
-- Dumping data for table `peliculas`
--

INSERT INTO `peliculas` (`id_pelicula`, `nombre`, `genero`, `descripcion`, `fecha`, `trailer`, `link_pelicula`, `imagen`, `imagen_bg`) VALUES
(9, 'Spiderman', 'Accion', 'Hombre Aracnido', NULL, 'https://www.youtube.com/watch?v=rl0EZCJcrGc', 'img/spider.jpg', 'spider.jpg', NULL),
(10, 'Fast and Furious', 'Accion', 'Pelicula de Carros', NULL, 'https://www.youtube.com/watch?v=rl0EZCJcrGc', 'img/fast-furious-9-fotogramas-1618418035.jpg', 'fast-furious-9-fotogramas-1618418035.jpg', NULL),
(11, 'Batman', 'Ciencia Ficcion', 'Ciudad Gotica', NULL, 'https://www.youtube.com/watch?v=YNl8yV8oPZM', 'img/batman.webp', 'batman.webp', NULL),
(12, 'John Wick', 'Accion ', 'Dangerous Man', NULL, 'https://www.youtube.com/watch?v=rPCzao7H6n8', 'img/John Wick.jpg', 'John Wick.jpg', NULL),
(13, 'Transformers', 'Ciencia Ficcion', 'Pelicula de Robots', NULL, 'https://www.youtube.com/watch?v=ET9SHYzMz_4&t=2s', 'img/transformers-830x483.jpg.jfif', 'transformers-830x483.jpg.jfif', NULL),
(14, 'Avengers', 'Ciencia Ficcion', 'Pelicula de Heroes', NULL, 'https://www.youtube.com/watch?v=eOrNdBpGMv8', 'img/The_Avengers_Poster.png', 'The_Avengers_Poster.png', NULL);

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `pass`, `correo`) VALUES
(2, 'cdim', '12345', 'cdim@cdim.com');
COMMIT;
