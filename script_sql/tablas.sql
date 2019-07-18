-- Table: tipousuario

-- DROP TABLE tipousuario;

CREATE TABLE usuarios.tipousuario
(
  id serial NOT NULL,
  descripcion_user character varying(50),
  estado character varying(5),
  CONSTRAINT tipousuario_pkey PRIMARY KEY (id)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE usuarios.tipousuario
  OWNER TO postgres;


CREATE TABLE usuarios.usuarios
(
  id serial NOT NULL,
  ci character varying(15),
  nombres character varying(100),
  primer_apellido character varying(100),
  segundo_apellido character varying(100),
  sexo character varying(15),
  fecha_nacimiento date,
  telefono character varying(100),
  correo character varying(100),
  direccion character varying(100),
  cargo character varying(100),
  id_tipo_user integer,
  username character varying(200),
  contrasenia character varying(200),
  estado character varying(5),
  CONSTRAINT usuarios_pkey PRIMARY KEY (id),
  CONSTRAINT usuarios_tipouser_fkey FOREIGN KEY (id_tipo_user)
      REFERENCES usuarios.tipousuario (id) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);
ALTER TABLE usuarios.usuarios
  OWNER TO postgres;


CREATE TABLE usuarios.unidad
(
  id serial NOT NULL,
  descripcion_unidad character varying(150),
  sigla character varying(50),
  estado character varying(5),
  CONSTRAINT unidad_pkey PRIMARY KEY (id)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE usuarios.unidad
  OWNER TO postgres;

CREATE TABLE usuarios.organizacion
(
  id serial NOT NULL,
  id_unidad integer,
  denominacion character varying(50),
  descripcion_organizacion character varying(50),  
  estado character varying(5),
  CONSTRAINT organizacion_pkey PRIMARY KEY (id),
  CONSTRAINT unidad_id_unidad_fkey FOREIGN KEY (id_unidad)
  REFERENCES usuarios.unidad (id) MATCH SIMPLE
  ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);
ALTER TABLE usuarios.organizacion
  OWNER TO postgres;


CREATE TABLE usuarios.organizacion_usuarios
(
  id serial NOT NULL,
  id_usuario integer,
  id_organizacion integer,  
  fecha timestamp without time zone DEFAULT now(),
  estado character varying(5),
  CONSTRAINT organizacion_usuarios_pkey PRIMARY KEY (id),
  CONSTRAINT organizacion_usuarios_id_usuario_fkey FOREIGN KEY (id_usuario)
  REFERENCES usuarios.usuarios (id) MATCH SIMPLE
  ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT organizacion_usuarios_id_organizacion_fkey FOREIGN KEY (id_organizacion)
  REFERENCES usuarios.organizacion (id) MATCH SIMPLE
  ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);
ALTER TABLE usuarios.organizacion_usuarios
  OWNER TO postgres;


insert into usuarios.usuarios (nombres,primer_apellido,segundo_apellido,sexo,cargo,id_tipo_user,username,contrasenia,estado)values ()


