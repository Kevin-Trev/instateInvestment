CREATE DATABASE instateInvestment;

USE instateInvestment;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL UNIQUE,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL UNIQUE,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  `Nombre` NVARCHAR(45) NOT NULL,
  `Apellido` NVARCHAR(45) NOT NULL,
  `Telefono` VARCHAR(10) NOT NULL UNIQUE, 
  `Fecha_Nacimiento` DATE NOT NULL,
  `Calificacion` ENUM('1', '2', '3', '4', '5'),
  `Foto` TEXT,
  `administrador` bit,
  `activo` bit
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE Tipo_Propiedad
(
   ID_T INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
   Tipo ENUM('CASA', 'DEPARTAMENTO', 'QUINTA','TERRENO','BODEGA')
);

CREATE TABLE Servicio
(
  ID_SERV INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  Servicio ENUM ('AGUA', 'LUZ', 'GAS', 'INTERNET', 'CABLE')
);

CREATE TABLE Propiedades
(
  ID_P INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  Titulo NVARCHAR(60) NOT NULL, 
  Precio FLOAT NOT NULL,
  Recamaras INT ,
  Baños INT, 
  Disponibilidad BIT NOT NULL,
  Codigo_Postal CHAR(5) NOT NULL,
  num_exterior char(5) DEFAULT 'S/N',
  num_interior char(5) DEFAULT 'S/N',
  Colonia NVARCHAR(45) NOT NULL,
  Calle NVARCHAR(45) NOT NULL, 
  Ciudad NVARCHAR(45) NOT NULL,
  Estado NVARCHAR(45) NOT NULL,
  Area VARCHAR(45) ,
  Frente FLOAT, 
  Fondo FLOAT, 
  Verificacion BIT NOT NULL,
  Rentable BIT NOT NULL,
  Vendible BIT NOT NULL,
  users_Id bigint unsigned NOT NULL,
  CONSTRAINT FK_users_Propiedad FOREIGN KEY (users_Id)
  REFERENCES users(id),
  Tipo_Propiedad_id INT NOT NULL,
  CONSTRAINT FK_Tipo_Propiedad FOREIGN KEY (Tipo_Propiedad_id)
  REFERENCES Tipo_Propiedad (ID_T)
 
);

CREATE TABLE IMAGENES_PROPIEDAD 
(
  reg INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  propiedad_id INT NOT NULL,
  src_image TEXT NULL,
  CONSTRAINT FK_IMAGENES_PROPIEDAD FOREIGN KEY (propiedad_id)
  REFERENCES Propiedades (ID_P)
);

CREATE TABLE Propiedad_Servicio
(
  ID_PS INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  Propiedad_id INT NOT NULL,
  CONSTRAINT FK_Propiedad_Servicio FOREIGN KEY (Propiedad_id)
  REFERENCES Propiedades (ID_P),
  Servicio_id INT NOT NULL,
  CONSTRAINT FK_Servicio FOREIGN KEY (Servicio_id)
  REFERENCES Servicio(ID_SERV)
);

CREATE TABLE Comentario
(
  ID_COM INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  Comentario TEXT NOT NULL,
  Fecha DATE NOT NULL,
  users_id bigint unsigned NOT NULL,
  CONSTRAINT FK_users_Comentario FOREIGN KEY(users_id)
  REFERENCES users (id),
  Propiedad_id INT NOT NULL,
  CONSTRAINT FK_Propiedad_Comentario FOREIGN KEY (Propiedad_id)
  REFERENCES Propiedades(ID_P)
);


CREATE TABLE Cotizacion
(
  ID_C INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
  Monto DOUBLE NOT NULL,
  Fecha DATE NOT NULL,
  MetodoPago ENUM ('CREDITO', 'CREDITO INFONAVIT', 'CONTADO', 'A PLAZOS'),
  users_id bigint unsigned NOT NULL,
  CONSTRAINT FK_users_Cotizacion FOREIGN KEY(users_id)
  REFERENCES users (id),
  Propiedad_id INT NOT NULL,
  CONSTRAINT FK_Propiedad_Cotizacion FOREIGN KEY (Propiedad_id)
  REFERENCES Propiedades(ID_P)
);

CREATE TABLE reportes(
id_r INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
 users_id bigint unsigned NOT NULL,
 comentarios text,
  CONSTRAINT FK_users_reportes FOREIGN KEY(users_id)
  REFERENCES users (id),
  Propiedad_id INT NOT NULL,
  CONSTRAINT FK_Propiedad_reportes FOREIGN KEY (Propiedad_id)
  REFERENCES Propiedades(ID_P)
);

CREATE TABLE notificacion(
id_noti INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
users_id bigint unsigned NOT NULL,
  CONSTRAINT FK_users_not FOREIGN KEY(users_id)
  REFERENCES users (id),
  mensaje TEXT,
  fecha_creacion DATE NOT NULL,
  reportes_id int  NOT NULL,
  CONSTRAINT FK_reportes_not FOREIGN KEY(reportes_id)
  REFERENCES reportes (id_r)
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
  UNIQUE KEY `failed_jobs_uuidnique` (`uuid`)
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
