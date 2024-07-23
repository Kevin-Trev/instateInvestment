CREATE DATABASE instate_investment;

USE instate_investment;

CREATE TABLE Persona
(
  ID_P INT PRIMARY KEY NOT NULL AUTO_INCREMENT, /* agregar autoincremento de PK para registro */
  user INT NOT NULL, /* LLAVE FORANEA DE Users (id) (TABLA DEFAULT DE LARAVEL)*/
  Nombre NVARCHAR(45) NOT NULL,
  Apellido NVARCHAR(45) NOT NULL,
  Telefono VARCHAR(10) NOT NULL,  /* removi Correo porque viene de la tabla User (de laravel) */
  Fecha_Nacimiento DATE NOT NULL,
  Calificacion FLOAT NOT NULL
  CONSTRAINT FK_User_Datos_Usuario FOREIGN KEY (users)
  REFERENCES User (id)                              
);

CREATE TABLE Suscripcion_VIP
(
   ID_S INT PRIMARY KEY NOT NULL AUTO_INCREMENT, /* agregar autoincremento de PK para registro */
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
  ID_P INT PRIMARY KEY NOT NULL AUTO_INCREMENT, /* agregar autoincremento de PK para registro */
  Precio FLOAT,
  Recamaras INT, /* de string a entero */
  Disponibilidad NVARCHAR(45),
  Direccion VARCHAR(45),
  Area VARCHAR(45),
  Frente FLOAT, /* de String a Double */
  Fondo FLOAT, /* de String a Double */
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

CREATE TABLE IMAGENES_PROPIEDAD  /* Agregue tabla de imagenes para la propiedad */
(
  reg INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  propiedad_id INT NOT NULL,
  src_image TEXT NULL,
  CONSTRAINT FK_IMAGENES_PROPIEDAD FOREIGN KEY (propiedad_id)
  REFERENCES Propiedad(ID_P)
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
  ID_COM INT PRIMARY KEY NOT NULL AUTO_INCREMENT, /* agregar autoincremento de PK para registro */
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
  ID_AV INT PRIMARY KEY NOT NULL AUTO_INCREMENT, /* agregar autoincremento de PK para registro */
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
  ID_C INT PRIMARY KEY NOT NULL AUTO_INCREMENT, /* agregar autoincremento de PK para registro */
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

/* Tablas que necesita Laravel para Funcionar */

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
