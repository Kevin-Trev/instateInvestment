CREATE DATABASE INTEGRADOR;

USE INTEGRADOR;

CREATE TABLE Usuario
(
  ID_U INT PRIMARY KEY NOT NULL,
  Nombre NVARCHAR(45) NOT NULL,
  Apellido NVARCHAR(45) NOT NULL,
  Correo NVARCHAR(45) NOT NULL,
  Telefono VARCHAR(10) NOT NULL,
  Calificacion FLOAT NOT NULL
);

CREATE TABLE Suscripcion_VIP
(
   ID_S INT PRIMARY KEY NOT NULL,
   Costo DOUBLE NOT NULL,
   Fecha_Inicio DATE NOT NULL,
   Fecha_Fin DATE NOT NULL,
   Usuario_Id INT NOT NULL,
   CONSTRAINT FK_Usuario_Suscripcion FOREIGN KEY (Usuario_Id)
   REFERENCES Usuario (ID_U)
);

CREATE TABLE Verificacion
(
   ID_V INT PRIMARY KEY NOT NULL,
   Estado NVARCHAR(45) NOT NULL CHECK (Estado IN ('Verificado', 'Proceso', 'No Verificado'))
);

CREATE TABLE Tipo_Propiedad
(
   ID_T INT PRIMARY KEY NOT NULL,
   Tipo NVARCHAR(45) NOT NULL
);

CREATE TABLE Servicio
(
  ID_SERV INT PRIMARY KEY NOT NULL,
  Servicio NVARCHAR(60) NOT NULL CHECK (Servicio IN ('AGUA', 'LUZ', 'GAS'))
);

CREATE TABLE Propiedad
(
  ID_P INT PRIMARY KEY NOT NULL,
  Precio FLOAT,
  Recamaras NVARCHAR(100),
  Disponibilidad NVARCHAR(45),
  Direccion VARCHAR(45),
  Area VARCHAR(45),
  Frente VARCHAR(45),
  Fondo VARCHAR(45),
  Rentable BIT NOT NULL,
  Vendible BIT NOT NULL,
  Usuario_Id INT NOT NULL,
  CONSTRAINT FK_Usuario_Propiedad FOREIGN KEY (Usuario_Id)
  REFERENCES Usuario(ID_U),
  Tipo_Propiedad_id INT NOT NULL,
  CONSTRAINT FK_Tipo_Propiedad FOREIGN KEY (Tipo_Propiedad_id)
  REFERENCES Tipo_Propiedad (ID_T),
  Verificacion_id INT NOT NULL,
  CONSTRAINT FK_Verificacion FOREIGN KEY (Verificacion_id)
  REFERENCES Verificacion (ID_V)
);

CREATE TABLE Propiedad_Servicio
(
  ID_PS INT PRIMARY KEY NOT NULL,
  Propiedad_id INT NOT NULL,
  CONSTRAINT FK_Propiedad_Servicio FOREIGN KEY (Propiedad_id)
  REFERENCES Propiedad (ID_P),
  Servicio_id INT NOT NULL,
  CONSTRAINT FK_Servicio FOREIGN KEY (Servicio_id)
  REFERENCES Servicio(ID_SERV)
);

CREATE TABLE Comentario
(
  ID_COM INT PRIMARY KEY NOT NULL,
  Comentario NVARCHAR(100) NOT NULL,
  Fecha DATE NOT NULL,
  Usuario_id INT NOT NULL,
  CONSTRAINT FK_Usuario_Comentario FOREIGN KEY(Usuario_id)
  REFERENCES Usuario (ID_U),
  Propiedad_id INT NOT NULL,
  CONSTRAINT FK_Propiedad_Comentario FOREIGN KEY (Propiedad_id)
  REFERENCES Propiedad(ID_P)
);

CREATE TABLE Agenda_Visita
(
  ID_AV INT PRIMARY KEY NOT NULL,
  Fecha DATE NOT NULL,
  Hora DOUBLE NOT NULL,
  Usuario_id INT NOT NULL,
  CONSTRAINT FK_Usuario_Agenda FOREIGN KEY(Usuario_id)
  REFERENCES Usuario(ID_U),
  Propiedad_id INT NOT NULL,
  CONSTRAINT FK_Propiedad_Agenda FOREIGN KEY (Propiedad_id)
  REFERENCES Propiedad(ID_P)
);

CREATE TABLE Cotizacion
(
  ID_C INT PRIMARY KEY NOT NULL,
  Monto DOUBLE NOT NULL,
  Periodo NVARCHAR(45),
  Fecha_Inicio VARCHAR(45),
  MetodoPago NVARCHAR(50) NOT NULL CHECK (MetodoPago IN ('credito', 'credito INFONAVIT', 'contado', 'a plazos')),
  Usuario_id INT NOT NULL,
  CONSTRAINT FK_Usuario_Cotizacion FOREIGN KEY(Usuario_id)
  REFERENCES Usuario (ID_U),
  Propiedad_id INT NOT NULL,
  CONSTRAINT FK_Propiedad_Cotizacion FOREIGN KEY (Propiedad_id)
  REFERENCES Propiedad(ID_P)
);
