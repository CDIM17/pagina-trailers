CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL AUTO_INCREMENT,
  `id_pelicula` int(11),
  `comentario` varchar(100),
  `fecha` datetime,
  `nombre` varchar(30),
  `correo` varchar(100),
    PRIMARY KEY(id_comentario)
) ENGINE=InnoDB;

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