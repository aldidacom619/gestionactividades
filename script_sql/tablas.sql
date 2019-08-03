CREATE TABLE usuarios.unidad
(
  codigo serial NOT NULL,
  descripcion_unidad character varying(150),
  sigla character varying(50),
  campo1 character varying(50),
  campo2 character varying(50),
  campo3 character varying(50),
  campo4 character varying(50),
  campo5 character varying(50),
  estado character varying(5),

  CONSTRAINT unidad_pkey PRIMARY KEY (codigo)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE usuarios.unidad
  OWNER TO postgres;


  CREATE TABLE usuarios.organizacion
(
  codigo serial NOT NULL,
  cod_unidad integer,
  denominacion character varying(50),
  descripcion_organizacion character varying(50),
  campo1 character varying(50),
  campo2 character varying(50),
  campo3 character varying(50),
  campo4 character varying(50),
  campo5 character varying(50),
  estado character varying(5),
  CONSTRAINT organizacion_pkey PRIMARY KEY (codigo),
  CONSTRAINT unidad_id_unidad_fkey FOREIGN KEY (cod_unidad)
      REFERENCES usuarios.unidad (codigo) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);
ALTER TABLE usuarios.organizacion
  OWNER TO postgres;



CREATE TABLE usuarios.tipousuario
(
  codigo serial NOT NULL,
  cod_organizacion integer,  
  descripcion_user character varying(50),
  campo1 character varying(50),
  campo2 character varying(50),
  campo3 character varying(50),
  campo4 character varying(50),
  campo5 character varying(50),
  estado character varying(5),
  CONSTRAINT tipousuario_pkey PRIMARY KEY (codigo),
  CONSTRAINT organizacion_usuarios_id_organizacion_fkey FOREIGN KEY (cod_organizacion)
  REFERENCES usuarios.organizacion (codigo) MATCH SIMPLE
  ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);
ALTER TABLE usuarios.tipousuario
  OWNER TO postgres;

  CREATE TABLE usuarios.usuarios
(
  id serial NOT NULL,
  cod_tipo_user integer,
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
  username character varying(200),
  contrasenia character varying(200),
  campo1 character varying(50),
  campo2 character varying(50),
  campo3 character varying(50),
  campo4 character varying(50),
  campo5 character varying(50),
  estado character varying(5),
  CONSTRAINT usuarios_pkey PRIMARY KEY (id),
  CONSTRAINT usuarios_cod_tipo_user_fkey FOREIGN KEY (cod_tipo_user)
      REFERENCES usuarios.tipousuario (codigo) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);
ALTER TABLE usuarios.usuarios
  OWNER TO postgres;



CREATE TABLE usuarios.organizacion_usuarios
(
  id serial NOT NULL,
  id_usuario integer,
  cod_organizacion integer,  
  fecha timestamp without time zone DEFAULT now(),
  campo1 character varying(50),
  campo2 character varying(50),
  campo3 character varying(50),
  campo4 character varying(50),
  campo5 character varying(50),
  estado character varying(5),
  CONSTRAINT organizacion_usuarios_pkey PRIMARY KEY (id),
  CONSTRAINT organizacion_usuarios_id_usuario_fkey FOREIGN KEY (id_usuario)
  REFERENCES usuarios.usuarios (id) MATCH SIMPLE
  ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT organizacion_usuarios_id_organizacion_fkey FOREIGN KEY (cod_organizacion)
  REFERENCES usuarios.organizacion (codigo) MATCH SIMPLE
  ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);
ALTER TABLE usuarios.organizacion_usuarios
  OWNER TO postgres;



CREATE TABLE usuarios.opciones
(
  codigo serial NOT NULL,
  cod_opcion integer,
  tipo_opcion integer,
  opcion character varying(100),
  link character varying(100),
  icono character varying(100),
  nivel integer,
  orden integer,
  campo1 character varying(50),
  campo2 character varying(50),
  campo3 character varying(50),
  campo4 character varying(50),
  campo5 character varying(50),
  estado character varying(5),

  CONSTRAINT opciones_pkey PRIMARY KEY (codigo)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE usuarios.opciones
  OWNER TO postgres;


CREATE TABLE usuarios.roles_opciones
(
  codigo serial NOT NULL,
  cod_opcion integer,
  cod_tipo_user integer,
  tipo_opcion integer,
  opcion character varying(100),
  link character varying(100),
  nivel integer,
  orden integer,
  campo1 character varying(50),
  campo2 character varying(50),
  campo3 character varying(50),
  campo4 character varying(50),
  campo5 character varying(50),
  estado character varying(5),

  CONSTRAINT roles_opciones_pkey PRIMARY KEY (codigo),
  CONSTRAINT roles_opciones_cod_opcion_fkey FOREIGN KEY (cod_opcion)
  REFERENCES usuarios.opciones (codigo) MATCH SIMPLE
  ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT roles_opciones_cod_tipo_user_fkey FOREIGN KEY (cod_tipo_user)
  REFERENCES usuarios.tipousuario (codigo) MATCH SIMPLE
  ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);
ALTER TABLE usuarios.roles_opciones
  OWNER TO postgres;




CREATE TABLE usuarios.opciones_usuarios
(
  id serial NOT NULL,
  cod_opcion integer,
  id_usuario integer,
  fecha timestamp without time zone DEFAULT now(),
  campo1 character varying(50),
  campo2 character varying(50),
  campo3 character varying(50),
  campo4 character varying(50),
  campo5 character varying(50),
  estado character varying(5),
  CONSTRAINT opciones_usuarios_pkey PRIMARY KEY (id),
  CONSTRAINT opciones_usuarios_cod_opcion_fkey FOREIGN KEY (cod_opcion)
  REFERENCES usuarios.opciones (codigo) MATCH SIMPLE
  ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT opciones_usuarios_id_usuario_fkey FOREIGN KEY (id_usuario)
  REFERENCES usuarios.usuarios (id) MATCH SIMPLE
  ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);
ALTER TABLE usuarios.opciones_usuarios
  OWNER TO postgres;