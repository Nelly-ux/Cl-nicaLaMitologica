CREATE TABLE Rol (
  idRol INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Nombre VARCHAR(45) NULL,
  Descripción TEXT NULL,
  PRIMARY KEY(idRol)
);

CREATE TABLE Citas (
  idCitas INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Nombre VARCHAR(45) NULL,
  Fecha DATE NULL,
  Telefono INT NULL,
  Hora TIME NULL,
  Unidad Médica VARCHAR(45) NULL,
  PRIMARY KEY(idCitas)
);

CREATE TABLE Entrada y salida (
  idEntrada y salida INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Citas_idCitas INTEGER UNSIGNED NOT NULL,
  Fecha DATE NULL,
  Factura VARCHAR NULL,
  PRIMARY KEY(idEntrada y salida, Citas_idCitas),
  INDEX Entrada y salida_FKIndex1(Citas_idCitas)
);

CREATE TABLE Usuario (
  idUsuario INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Rol_idRol INTEGER UNSIGNED NOT NULL,
  Citas_idCitas INTEGER UNSIGNED NOT NULL,
  Entrada y salida_Citas_idCitas INTEGER UNSIGNED NOT NULL,
  Entrada y salida_idEntrada y salida INTEGER UNSIGNED NOT NULL,
  Nombre  VARCHAR(45) NULL,
  Apellido VARCHAR(45) NULL,
  Correo VARCHAR(45) NULL,
  Usuario VARCHAR(45) NULL,
  FechaNac: DATE NULL,
  Pass VARCHAR(45) NULL,
  PRIMARY KEY(idUsuario, Rol_idRol, Citas_idCitas),
  INDEX Usuario_FKIndex1(Rol_idRol),
  INDEX Usuario_FKIndex2(Citas_idCitas),
  INDEX Usuario_FKIndex3(Entrada y salida_idEntrada y salida, Entrada y salida_Citas_idCitas)
);

CREATE TABLE Movimiento (
  Entrada y salida_idEntrada y salida INTEGER UNSIGNED NOT NULL,
  Entrada y salida_Citas_idCitas INTEGER UNSIGNED NOT NULL,
  nombres VARCHAR NOT NULL,
  descripcion TEXT NULL,
  INDEX Table_05_FKIndex1(Entrada y salida_idEntrada y salida, Entrada y salida_Citas_idCitas)
);


