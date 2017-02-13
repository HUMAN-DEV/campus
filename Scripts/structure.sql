
-- ----------------------------
--  Table structure for acudiente
-- ----------------------------
DROP TABLE IF EXISTS acudiente;
CREATE TABLE acudiente (
  id int(11) NOT NULL,
  ocupacion_id int(11) DEFAULT NULL,
  PRIMARY KEY (id),
  KEY IDX_725849D3D8999C67 (ocupacion_id),
  CONSTRAINT FK_725849D3BF396750 FOREIGN KEY (id) REFERENCES persona (id) ON DELETE CASCADE,
  CONSTRAINT FK_725849D3D8999C67 FOREIGN KEY (ocupacion_id) REFERENCES ocupacion (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for administrativo
-- ----------------------------
DROP TABLE IF EXISTS administrativo;
CREATE TABLE administrativo (
  id int(11) NOT NULL,
  cargo_id int(11) DEFAULT NULL,
  PRIMARY KEY (id),
  KEY IDX_73DA9496813AC380 (cargo_id),
  CONSTRAINT FK_73DA9496813AC380 FOREIGN KEY (cargo_id) REFERENCES cargo (id),
  CONSTRAINT FK_73DA9496BF396750 FOREIGN KEY (id) REFERENCES persona (id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for area
-- ----------------------------
DROP TABLE IF EXISTS area;
CREATE TABLE area (
  id int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for asignacion
-- ----------------------------
DROP TABLE IF EXISTS asignacion;
CREATE TABLE asignacion (
  id int(11) NOT NULL AUTO_INCREMENT,
  id_director int(11) NOT NULL,
  id_estudiante int(11) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for asignatura
-- ----------------------------
DROP TABLE IF EXISTS asignatura;
CREATE TABLE asignatura (
  id int(11) NOT NULL AUTO_INCREMENT,
  area_id int(11) DEFAULT NULL,
  nombre varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  intesidad_horaria double DEFAULT NULL,
  PRIMARY KEY (id),
  KEY IDX_9243D6CED7943D68 (area_id),
  CONSTRAINT FK_9243D6CEBD0F409C FOREIGN KEY (area_id) REFERENCES area (id)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for aula
-- ----------------------------
DROP TABLE IF EXISTS aula;
CREATE TABLE aula (
  id int(11) NOT NULL AUTO_INCREMENT,
  sede_id int(11) DEFAULT NULL,
  nombre varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  tamanio varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  estado varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  capacidad int(11) NOT NULL,
  PRIMARY KEY (id),
  KEY IDX_31990A42A9BE2D1 (sede_id),
  CONSTRAINT FK_31990A4E19F41BF FOREIGN KEY (sede_id) REFERENCES sede (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for barrio
-- ----------------------------
DROP TABLE IF EXISTS barrio;
CREATE TABLE barrio (
  id int(11) NOT NULL AUTO_INCREMENT,
  ciudad_id int(11) DEFAULT NULL,
  nombre varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (id),
  KEY IDX_AFDD2901E8608214 (ciudad_id),
  CONSTRAINT FK_AFDD2901E8608214 FOREIGN KEY (ciudad_id) REFERENCES town (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for bitacora
-- ----------------------------
DROP TABLE IF EXISTS bitacora;
CREATE TABLE bitacora (
  id int(11) NOT NULL AUTO_INCREMENT,
  modulo_id int(11) DEFAULT NULL,
  fecha date NOT NULL,
  hora time NOT NULL,
  usuario int(11) NOT NULL,
  ip varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  accion varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (id),
  KEY IDX_9087FEF9ECF1CF36 (modulo_id),
  CONSTRAINT FK_9087FEF9C07F55F5 FOREIGN KEY (modulo_id) REFERENCES modulo (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for calificativos
-- ----------------------------
DROP TABLE IF EXISTS calificativos;
CREATE TABLE calificativos (
  id int(11) NOT NULL AUTO_INCREMENT,
  desempenio varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  nota_minima double NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for cargo
-- ----------------------------
DROP TABLE IF EXISTS cargo;
CREATE TABLE cargo (
  id int(11) NOT NULL AUTO_INCREMENT,
  cargo varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  descripcion varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for discapacidad
-- ----------------------------
DROP TABLE IF EXISTS discapacidad;
CREATE TABLE discapacidad (
  id int(11) NOT NULL AUTO_INCREMENT,
  discapacidad varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for docente
-- ----------------------------
DROP TABLE IF EXISTS docente;
CREATE TABLE docente (
  id int(11) NOT NULL,
  estado_civil_id int(11) DEFAULT NULL,
  grado_escalafon varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  fecha_nombramiento date NOT NULL DEFAULT '1700-01-01',
  fecha_ingreso date NOT NULL DEFAULT '1700-01-01',
  tiempo_experiencia varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No Definido',
  decreto_nombramiento varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No Definido',
  resolucion_nombramiento varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No Definido',
  normalista_superior tinyint(1) DEFAULT NULL,
  desc_normalista varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  licenciado tinyint(1) DEFAULT NULL,
  desc_licenciado varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  especializacion tinyint(1) DEFAULT NULL,
  desc_especializacion varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  maestria tinyint(1) DEFAULT NULL,
  desc_maestria varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  phd tinyint(1) DEFAULT NULL,
  desc_phd varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  ingeniero tinyint(1) DEFAULT NULL,
  desc_ingeniero varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  otro tinyint(1) DEFAULT NULL,
  desc_otro varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  eps varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (id),
  KEY IDX_FD9FCFA475376D93 (estado_civil_id),
  CONSTRAINT FK_FD9FCFA475376D93 FOREIGN KEY (estado_civil_id) REFERENCES estado_civil (id),
  CONSTRAINT FK_FD9FCFA4BF396750 FOREIGN KEY (id) REFERENCES persona (id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for eps
-- ----------------------------
DROP TABLE IF EXISTS eps;
CREATE TABLE eps (
  id int(11) NOT NULL AUTO_INCREMENT,
  eps varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for estado
-- ----------------------------
DROP TABLE IF EXISTS estado;
CREATE TABLE estado (
  id int(11) NOT NULL AUTO_INCREMENT,
  estado varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for estado_civil
-- ----------------------------
DROP TABLE IF EXISTS estado_civil;
CREATE TABLE estado_civil (
  id int(11) NOT NULL AUTO_INCREMENT,
  estado_civil varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for estudiante
-- ----------------------------
DROP TABLE IF EXISTS estudiante;
CREATE TABLE estudiante (
  id int(11) NOT NULL,
  acudiente_id int(11) DEFAULT NULL,
  infReferencial_id int(11) DEFAULT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY UNIQ_3B3F3FAD69C07CF5 (infReferencial_id),
  KEY IDX_3B3F3FADAD8563A1 (acudiente_id),
  CONSTRAINT FK_3B3F3FAD69C07CF5 FOREIGN KEY (infReferencial_id) REFERENCES inf_referencial_estudiante (id),
  CONSTRAINT FK_3B3F3FADAD8563A1 FOREIGN KEY (acudiente_id) REFERENCES acudiente (id),
  CONSTRAINT FK_3B3F3FADBF396750 FOREIGN KEY (id) REFERENCES persona (id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for etnia
-- ----------------------------
DROP TABLE IF EXISTS etnia;
CREATE TABLE etnia (
  id int(11) NOT NULL AUTO_INCREMENT,
  codigo varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  etnia varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for fos_user_group
-- ----------------------------
DROP TABLE IF EXISTS fos_user_group;
CREATE TABLE fos_user_group (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  roles longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (id),
  UNIQUE KEY UNIQ_583D1F3E5E237E06 (name)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for fos_user_user
-- ----------------------------
DROP TABLE IF EXISTS fos_user_user;
CREATE TABLE fos_user_user (
  id int(11) NOT NULL AUTO_INCREMENT,
  username varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  username_canonical varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  email varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  email_canonical varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  enabled tinyint(1) NOT NULL,
  salt varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  password varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  last_login datetime DEFAULT NULL,
  locked tinyint(1) NOT NULL,
  expired tinyint(1) NOT NULL,
  expires_at datetime DEFAULT NULL,
  confirmation_token varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  password_requested_at datetime DEFAULT NULL,
  roles longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  credentials_expired tinyint(1) NOT NULL,
  credentials_expire_at datetime DEFAULT NULL,
  created_at datetime NOT NULL,
  updated_at datetime NOT NULL,
  date_of_birth datetime DEFAULT NULL,
  firstname varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  lastname varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  website varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  biography varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  gender varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  locale varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  timezone varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  phone varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  facebook_uid varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  facebook_name varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  facebook_data longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  twitter_uid varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  twitter_name varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  twitter_data longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  gplus_uid varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  gplus_name varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  gplus_data longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  token varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  two_step_code varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY UNIQ_C560D76192FC23A8 (username_canonical),
  UNIQUE KEY UNIQ_C560D761A0D96FBF (email_canonical)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for fos_user_user_group
-- ----------------------------
DROP TABLE IF EXISTS fos_user_user_group;
CREATE TABLE fos_user_user_group (
  user_id int(11) NOT NULL,
  group_id int(11) NOT NULL,
  PRIMARY KEY (user_id,group_id),
  KEY IDX_B3C77447A76ED395 (user_id),
  KEY IDX_B3C77447FE54D947 (group_id),
  CONSTRAINT FK_B3C77447A76ED395 FOREIGN KEY (user_id) REFERENCES fos_user_user (id) ON DELETE CASCADE,
  CONSTRAINT FK_B3C77447FE54D947 FOREIGN KEY (group_id) REFERENCES fos_user_group (id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for genero
-- ----------------------------
DROP TABLE IF EXISTS genero;
CREATE TABLE genero (
  id int(11) NOT NULL AUTO_INCREMENT,
  genero varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for grado
-- ----------------------------
DROP TABLE IF EXISTS grado;
CREATE TABLE grado (
  id int(11) NOT NULL AUTO_INCREMENT,
  grado int(11) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY UNIQ_B98F472AB98F472A (grado)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for grupo
-- ----------------------------
DROP TABLE IF EXISTS grupo;
CREATE TABLE grupo (
  id int(11) NOT NULL AUTO_INCREMENT,
  grado_id int(11) DEFAULT NULL,
  director_id int(11) DEFAULT NULL,
  aula_id int(11) DEFAULT NULL,
  abreviacion varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  nombre varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY UNIQ_8C0E9BD34B7A1FDE (abreviacion),
  UNIQUE KEY UNIQ_8C0E9BD3899FB366 (director_id),
  UNIQUE KEY UNIQ_8C0E9BD3AD1A1255 (aula_id),
  KEY IDX_8C0E9BD391A441CC (grado_id),
  CONSTRAINT FK_8C0E9BD3899FB366 FOREIGN KEY (director_id) REFERENCES docente (id),
  CONSTRAINT FK_8C0E9BD391A441CC FOREIGN KEY (grado_id) REFERENCES grado (id),
  CONSTRAINT FK_8C0E9BD3AD1A1255 FOREIGN KEY (aula_id) REFERENCES aula (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for grupo_estudiante
-- ----------------------------
DROP TABLE IF EXISTS grupo_estudiante;
CREATE TABLE grupo_estudiante (
  grupo_id int(11) NOT NULL,
  estudiante_id int(11) NOT NULL,
  PRIMARY KEY (grupo_id,estudiante_id),
  KEY IDX_3BD479769C833003 (grupo_id),
  KEY IDX_3BD4797659590C39 (estudiante_id),
  CONSTRAINT FK_3BD4797659590C39 FOREIGN KEY (estudiante_id) REFERENCES estudiante (id) ON DELETE CASCADE,
  CONSTRAINT FK_3BD479769C833003 FOREIGN KEY (grupo_id) REFERENCES grupo (id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for horario
-- ----------------------------
DROP TABLE IF EXISTS horario;
CREATE TABLE horario (
  id int(11) NOT NULL AUTO_INCREMENT,
  aula_id int(11) DEFAULT NULL,
  asignatura_id int(11) DEFAULT NULL,
  grupo_id int(11) DEFAULT NULL,
  docente_id int(11) DEFAULT NULL,
  dia varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  hora time NOT NULL,
  PRIMARY KEY (id),
  KEY IDX_E25853A3AD1A1255 (aula_id),
  KEY IDX_E25853A3C5C70C5B (asignatura_id),
  KEY IDX_E25853A39C833003 (grupo_id),
  KEY IDX_E25853A394E27525 (docente_id),
  CONSTRAINT FK_E25853A394E27525 FOREIGN KEY (docente_id) REFERENCES docente (id),
  CONSTRAINT FK_E25853A39C833003 FOREIGN KEY (grupo_id) REFERENCES grupo (id),
  CONSTRAINT FK_E25853A3AD1A1255 FOREIGN KEY (aula_id) REFERENCES aula (id),
  CONSTRAINT FK_E25853A3C5C70C5B FOREIGN KEY (asignatura_id) REFERENCES asignatura (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for inasistencia
-- ----------------------------
DROP TABLE IF EXISTS inasistencia;
CREATE TABLE inasistencia (
  id int(11) NOT NULL AUTO_INCREMENT,
  estudiante_id int(11) DEFAULT NULL,
  asignatura_id int(11) DEFAULT NULL,
  inasistencia int(11) NOT NULL,
  fecha date NOT NULL,
  observaciones longtext COLLATE utf8_unicode_ci,
  excusa tinyint(1) DEFAULT NULL,
  PRIMARY KEY (id),
  KEY IDX_F7200F3359590C39 (estudiante_id),
  KEY IDX_F7200F33C5C70C5B (asignatura_id),
  CONSTRAINT FK_F7200F3359590C39 FOREIGN KEY (estudiante_id) REFERENCES estudiante (id),
  CONSTRAINT FK_F7200F33C5C70C5B FOREIGN KEY (asignatura_id) REFERENCES asignatura (id)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for infAcademico
-- ----------------------------
DROP TABLE IF EXISTS infAcademico;
CREATE TABLE infAcademico (
  id int(11) NOT NULL AUTO_INCREMENT,
  estudiante_id int(11) DEFAULT NULL,
  periodo_id int(11) DEFAULT NULL,
  logro_id int(11) DEFAULT NULL,
  asignatura_id int(11) DEFAULT NULL,
  nota double NOT NULL,
  PRIMARY KEY (id),
  KEY IDX_7519801F9243D6CE (asignatura_id),
  KEY IDX_7519801F3B3F3FAD (estudiante_id),
  KEY IDX_7519801F7439301C (logro_id),
  KEY IDX_7519801F7316C4ED (periodo_id),
  CONSTRAINT FK_7519801F59590C39 FOREIGN KEY (estudiante_id) REFERENCES estudiante (id),
  CONSTRAINT FK_7519801F9C3921AB FOREIGN KEY (periodo_id) REFERENCES periodo (id),
  CONSTRAINT FK_7519801FC5C70C5B FOREIGN KEY (asignatura_id) REFERENCES asignatura (id),
  CONSTRAINT FK_7519801FF33E21AB FOREIGN KEY (logro_id) REFERENCES logro (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for inf_referencial_estudiante
-- ----------------------------
DROP TABLE IF EXISTS inf_referencial_estudiante;
CREATE TABLE inf_referencial_estudiante (
  id int(11) NOT NULL AUTO_INCREMENT,
  eps_id int(11) DEFAULT NULL,
  resguardo_id int(11) DEFAULT NULL,
  etnia_id int(11) DEFAULT NULL,
  victima_conflicto tinyint(1) NOT NULL,
  pertenece_etnia tinyint(1) NOT NULL,
  familias_accion tinyint(1) NOT NULL,
  padre_vive tinyint(1) NOT NULL,
  madre_vive tinyint(1) NOT NULL,
  ips varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  ars varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  tipo_sangre varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  numero_carnet_sisben varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  nivel_sisben varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  estrato varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  fuente_recursos varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  madre_cabeza_familia tinyint(1) DEFAULT NULL,
  hijo_madre_cabeza_familia tinyint(1) DEFAULT NULL,
  beneficiario_veterano_militar tinyint(1) DEFAULT NULL,
  beneficiario_heroe_nacional tinyint(1) DEFAULT NULL,
  poblacion_victima_conflicto tinyint(1) DEFAULT NULL,
  fecha_expulsion date DEFAULT NULL,
  viveCon_id int(11) DEFAULT NULL,
  tipoInsProv_id int(11) DEFAULT NULL,
  tipoDiscapacidad_id int(11) DEFAULT NULL,
  estadoCivilPadres_id int(11) DEFAULT NULL,
  lugarExpulsion_id int(11) DEFAULT NULL,
  PRIMARY KEY (id),
  KEY IDX_3BE441AE8BFB554F (viveCon_id),
  KEY IDX_3BE441AE31A0D089 (tipoInsProv_id),
  KEY IDX_3BE441AECBB5C923 (tipoDiscapacidad_id),
  KEY IDX_3BE441AE6455A0A4 (estadoCivilPadres_id),
  KEY IDX_3BE441AEF0A3CCD5 (eps_id),
  KEY IDX_3BE441AE1490608E (lugarExpulsion_id),
  KEY IDX_3BE441AEAE376F1D (resguardo_id),
  KEY IDX_3BE441AE594872DC (etnia_id),
  CONSTRAINT FK_3BE441AE1490608E FOREIGN KEY (lugarExpulsion_id) REFERENCES town (id),
  CONSTRAINT FK_3BE441AE31A0D089 FOREIGN KEY (tipoInsProv_id) REFERENCES tipo_institucion (id),
  CONSTRAINT FK_3BE441AE594872DC FOREIGN KEY (etnia_id) REFERENCES etnia (id),
  CONSTRAINT FK_3BE441AE6455A0A4 FOREIGN KEY (estadoCivilPadres_id) REFERENCES estado_civil (id),
  CONSTRAINT FK_3BE441AE8BFB554F FOREIGN KEY (viveCon_id) REFERENCES parentezco (id),
  CONSTRAINT FK_3BE441AEAE376F1D FOREIGN KEY (resguardo_id) REFERENCES resguardo (id),
  CONSTRAINT FK_3BE441AECBB5C923 FOREIGN KEY (tipoDiscapacidad_id) REFERENCES discapacidad (id),
  CONSTRAINT FK_3BE441AEF0A3CCD5 FOREIGN KEY (eps_id) REFERENCES eps (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for logro
-- ----------------------------
DROP TABLE IF EXISTS logro;
CREATE TABLE logro (
  id int(11) NOT NULL AUTO_INCREMENT,
  calificativo_id int(11) DEFAULT NULL,
  asignatura_id int(11) DEFAULT NULL,
  nombre varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  descripcion longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (id),
  KEY IDX_7439301CE3C75D29 (calificativo_id),
  KEY IDX_7439301C9243D6CE (asignatura_id),
  CONSTRAINT FK_7439301CC5C70C5B FOREIGN KEY (asignatura_id) REFERENCES asignatura (id),
  CONSTRAINT FK_7439301CE3C75D29 FOREIGN KEY (calificativo_id) REFERENCES calificativos (id)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for matricula
-- ----------------------------
DROP TABLE IF EXISTS matricula;
CREATE TABLE matricula (
  id int(11) NOT NULL AUTO_INCREMENT,
  estado_id int(11) DEFAULT NULL,
  estudiante_id int(11) DEFAULT NULL,
  sede_id int(11) DEFAULT NULL,
  grado_id int(11) DEFAULT NULL,
  fecha_matricula datetime NOT NULL,
  observaciones_matricula longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (id),
  UNIQUE KEY UNIQ_15DF188559590C39 (estudiante_id),
  KEY IDX_15DF18859F5A440B (estado_id),
  KEY IDX_15DF1885E19F41BF (sede_id),
  KEY IDX_15DF188591A441CC (grado_id),
  CONSTRAINT FK_15DF188559590C39 FOREIGN KEY (estudiante_id) REFERENCES estudiante (id),
  CONSTRAINT FK_15DF188591A441CC FOREIGN KEY (grado_id) REFERENCES grado (id),
  CONSTRAINT FK_15DF18859F5A440B FOREIGN KEY (estado_id) REFERENCES estado (id),
  CONSTRAINT FK_15DF1885E19F41BF FOREIGN KEY (sede_id) REFERENCES sede (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for modulo
-- ----------------------------
DROP TABLE IF EXISTS modulo;
CREATE TABLE modulo (
  id int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  descripcion varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for notas
-- ----------------------------
DROP TABLE IF EXISTS notas;
CREATE TABLE notas (
  id int(11) NOT NULL AUTO_INCREMENT,
  asignatura_id int(11) DEFAULT NULL,
  estudiante_id int(11) DEFAULT NULL,
  docente_id int(11) DEFAULT NULL,
  fecha date NOT NULL,
  actividad varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  nota double NOT NULL,
  PRIMARY KEY (id),
  KEY IDX_65776388C5C70C5B (asignatura_id),
  KEY IDX_6577638859590C39 (estudiante_id),
  KEY IDX_6577638894E27525 (docente_id),
  CONSTRAINT FK_6577638859590C39 FOREIGN KEY (estudiante_id) REFERENCES estudiante (id),
  CONSTRAINT FK_6577638894E27525 FOREIGN KEY (docente_id) REFERENCES docente (id),
  CONSTRAINT FK_65776388C5C70C5B FOREIGN KEY (asignatura_id) REFERENCES asignatura (id)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for noticia
-- ----------------------------
DROP TABLE IF EXISTS noticia;
CREATE TABLE noticia (
  id int(11) NOT NULL AUTO_INCREMENT,
  titulo varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  descripcion longtext COLLATE utf8_unicode_ci NOT NULL,
  imagen varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  fecha date NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for ocupacion
-- ----------------------------
DROP TABLE IF EXISTS ocupacion;
CREATE TABLE ocupacion (
  id int(11) NOT NULL AUTO_INCREMENT,
  ciuo int(11) NOT NULL,
  ocupacion varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for parentezco
-- ----------------------------
DROP TABLE IF EXISTS parentezco;
CREATE TABLE parentezco (
  id int(11) NOT NULL AUTO_INCREMENT,
  descripcion varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for periodo
-- ----------------------------
DROP TABLE IF EXISTS periodo;
CREATE TABLE periodo (
  id int(11) NOT NULL AUTO_INCREMENT,
  periodo varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  desde date DEFAULT NULL,
  hasta date DEFAULT NULL,
  descripcion varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY UNIQ_7316C4ED7316C4ED (periodo)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for persona
-- ----------------------------
DROP TABLE IF EXISTS persona;
CREATE TABLE persona (
  id int(11) NOT NULL AUTO_INCREMENT,
  genero_id int(11) DEFAULT NULL,
  tipo_documento_id int(11) DEFAULT NULL,
  lugar_nacimiento_id int(11) DEFAULT NULL,
  lugar_residencia_id int(11) DEFAULT NULL,
  lugar_exp_documento_id int(11) DEFAULT NULL,
  nombre1 varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  nombre2 varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  apellido1 varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  apellido2 varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  documento varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  fecha_nacimiento date NOT NULL,
  dir_residencia varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  correo varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  telefono varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  movil varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  skype varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  facebook varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  discr varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY UNIQ_51E5B69BB6B12EC7 (documento),
  KEY IDX_51E5B69BBCE7B795 (genero_id),
  KEY IDX_51E5B69BF6939175 (tipo_documento_id),
  KEY IDX_51E5B69BBB0DD1E7 (lugar_nacimiento_id),
  KEY IDX_51E5B69B57AF142 (lugar_residencia_id),
  KEY IDX_51E5B69BE8BE2AD8 (lugar_exp_documento_id),
  CONSTRAINT FK_51E5B69B57AF142 FOREIGN KEY (lugar_residencia_id) REFERENCES town (id),
  CONSTRAINT FK_51E5B69BBB0DD1E7 FOREIGN KEY (lugar_nacimiento_id) REFERENCES town (id),
  CONSTRAINT FK_51E5B69BBCE7B795 FOREIGN KEY (genero_id) REFERENCES genero (id),
  CONSTRAINT FK_51E5B69BE8BE2AD8 FOREIGN KEY (lugar_exp_documento_id) REFERENCES town (id),
  CONSTRAINT FK_51E5B69BF6939175 FOREIGN KEY (tipo_documento_id) REFERENCES tipo_documento (id)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for resguardo
-- ----------------------------
DROP TABLE IF EXISTS resguardo;
CREATE TABLE resguardo (
  id int(11) NOT NULL AUTO_INCREMENT,
  codigo varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  resguardo varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS role;
CREATE TABLE role (
  id int(11) NOT NULL AUTO_INCREMENT,
  valor int(11) NOT NULL,
  role varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for sede
-- ----------------------------
DROP TABLE IF EXISTS sede;
CREATE TABLE sede (
  id int(11) NOT NULL AUTO_INCREMENT,
  ciudad_id int(11) DEFAULT NULL,
  zona_id int(11) DEFAULT NULL,
  barrio_id int(11) DEFAULT NULL,
  vereda_id int(11) DEFAULT NULL,
  codigo_dane int(11) DEFAULT NULL,
  nombre varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  representante_legal varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  direccion varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  telefono varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  fax varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  correo varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY UNIQ_2A9BE2D17A71F053 (codigo_dane),
  KEY IDX_2A9BE2D1E8608214 (ciudad_id),
  KEY IDX_2A9BE2D1104EA8FC (zona_id),
  KEY IDX_2A9BE2D1DBA79E2A (barrio_id),
  KEY IDX_2A9BE2D1A85D020C (vereda_id),
  CONSTRAINT FK_2A9BE2D1104EA8FC FOREIGN KEY (zona_id) REFERENCES zona (id),
  CONSTRAINT FK_2A9BE2D1A85D020C FOREIGN KEY (vereda_id) REFERENCES vereda (id),
  CONSTRAINT FK_2A9BE2D1DBA79E2A FOREIGN KEY (barrio_id) REFERENCES barrio (id),
  CONSTRAINT FK_2A9BE2D1E8608214 FOREIGN KEY (ciudad_id) REFERENCES town (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for tipo_documento
-- ----------------------------
DROP TABLE IF EXISTS tipo_documento;
CREATE TABLE tipo_documento (
  id int(11) NOT NULL AUTO_INCREMENT,
  tipo varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  abreviacion varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for tipo_institucion
-- ----------------------------
DROP TABLE IF EXISTS tipo_institucion;
CREATE TABLE tipo_institucion (
  id int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for town
-- ----------------------------
DROP TABLE IF EXISTS town;
CREATE TABLE town (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  longitude double DEFAULT NULL,
  latitude double DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=99773028 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for valoracion
-- ----------------------------
DROP TABLE IF EXISTS valoracion;
CREATE TABLE valoracion (
  id int(11) NOT NULL AUTO_INCREMENT,
  abbr varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  nombre varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY UNIQ_6D3DE0F44D4901 (abbr)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for vereda
-- ----------------------------
DROP TABLE IF EXISTS vereda;
CREATE TABLE vereda (
  id int(11) NOT NULL AUTO_INCREMENT,
  ciudad_id int(11) DEFAULT NULL,
  vereda varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (id),
  KEY IDX_896529F3A8B1B073 (ciudad_id),
  CONSTRAINT FK_896529F3E8608214 FOREIGN KEY (ciudad_id) REFERENCES town (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for zona
-- ----------------------------
DROP TABLE IF EXISTS zona;
CREATE TABLE zona (
  id int(11) NOT NULL AUTO_INCREMENT,
  nombre_zona varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

SET FOREIGN_KEY_CHECKS = 1;
