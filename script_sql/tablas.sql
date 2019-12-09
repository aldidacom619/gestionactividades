CREATE TABLE usuarios.p_unidad
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

  CONSTRAINT p_unidad_pkey PRIMARY KEY (codigo)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE usuarios.p_unidad
  OWNER TO postgres;


  CREATE TABLE usuarios.p_organizacion
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
      REFERENCES usuarios.p_unidad (codigo) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);
ALTER TABLE usuarios.p_organizacion
  OWNER TO postgres;



CREATE TABLE usuarios.p_tipousuario
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
  REFERENCES usuarios.p_organizacion (codigo) MATCH SIMPLE
  ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);
ALTER TABLE usuarios.p_tipousuario
  OWNER TO postgres;



CREATE TABLE usuarios.t_usuarios
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
      REFERENCES usuarios.p_tipousuario (codigo) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);
ALTER TABLE usuarios.t_usuarios
  OWNER TO postgres;



CREATE TABLE usuarios.t_organizacion_usuarios
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
  REFERENCES usuarios.t_usuarios (id) MATCH SIMPLE
  ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT organizacion_usuarios_id_organizacion_fkey FOREIGN KEY (cod_organizacion)
  REFERENCES usuarios.p_organizacion (codigo) MATCH SIMPLE
  ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);
ALTER TABLE usuarios.t_organizacion_usuarios
  OWNER TO postgres;


CREATE TABLE usuarios.p_aplicaciones
(
  codigo serial NOT NULL,
  descripcion character varying(60),
  abreviatura integer,
  nombre_aplicacion character varying(100),
  campo1 character varying(100),
  campo2 character varying(100),
  estado character varying(5),
  CONSTRAINT p_aplicaciones_pkey PRIMARY KEY (codigo)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE usuarios.p_aplicaciones
  OWNER TO postgres;



CREATE TABLE usuarios.p_modulos
(
  codigo serial NOT NULL,
  cod_aplicacion integer,
  descripcion character varying(200),
  abreviatura character varying(5),
  nombre character varying(50),
  estado character varying(5),
  CONSTRAINT p_modulos_pkey PRIMARY KEY (codigo),
  CONSTRAINT p_modulos_cod_aplicacion_fkey FOREIGN KEY (cod_aplicacion)
  REFERENCES usuarios.p_aplicaciones (codigo) MATCH SIMPLE
  ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);
ALTER TABLE usuarios.p_modulos
  OWNER TO postgres;



CREATE TABLE usuarios.p_opciones
(
  codigo serial NOT NULL,
  cod_modulo integer,
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
  CONSTRAINT p_opciones_pkey PRIMARY KEY (codigo),
  CONSTRAINT p_opciones_cod_modulo_fkey FOREIGN KEY (cod_modulo)
  REFERENCES usuarios.p_modulos (codigo) MATCH SIMPLE
  ON UPDATE NO ACTION ON DELETE NO ACTION

)
WITH (
  OIDS=FALSE
);
ALTER TABLE usuarios.p_opciones
  OWNER TO postgres;


CREATE TABLE transacciones.p_transaccion
(
  codigo serial NOT NULL,
  descripcion character varying(150),
  abreviatura character varying(50),
  fecha timestamp without time zone DEFAULT now(),
  campo1 character varying(50),
  campo2 character varying(50),
  campo3 character varying(50),
  campo4 character varying(50),
  campo5 character varying(50),
  estado character varying(5),
  CONSTRAINT p_transaccion_pkey PRIMARY KEY (codigo)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE transacciones.p_transaccion
  OWNER TO postgres;

CREATE TABLE transacciones.t_logs
(
  id serial NOT NULL,
  cod_transaccion integer,
  id_usuario integer,
  fecha timestamp without time zone DEFAULT now(),
  campo1 character varying(50),
  campo2 character varying(50),
  campo3 character varying(50),
  campo4 character varying(50),
  campo5 character varying(50),
  estado character varying(5),
  CONSTRAINT t_logs_usuarios_pkey PRIMARY KEY (id),
  CONSTRAINT t_logs_usuarios_cod_transaccion_fkey FOREIGN KEY (cod_transaccion)
  REFERENCES transacciones.p_transaccion (codigo) MATCH SIMPLE
  ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);
ALTER TABLE transacciones.t_logs
  OWNER TO postgres;

CREATE TABLE usuarios.p_opciones_usuarios
(
  id serial NOT NULL,
  cod_opcion integer,
  id_usuario integer,
  id_transaccion integer,
  campo1 character varying(50),
  campo2 character varying(50),
  campo3 character varying(50),
  campo4 character varying(50),
  campo5 character varying(50),
  estado character varying(5),
  CONSTRAINT p_opciones_usuarios_pkey PRIMARY KEY (id),
  CONSTRAINT p_opciones_usuarios_cod_opcion_fkey FOREIGN KEY (cod_opcion)
  REFERENCES usuarios.p_opciones (codigo) MATCH SIMPLE
  ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT p_opciones_usuarios_id_usuario_fkey FOREIGN KEY (id_usuario)
  REFERENCES usuarios.t_usuarios (id) MATCH SIMPLE
  ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT p_opciones_usuarios_id_transaccion_fkey FOREIGN KEY (id_transaccion)
  REFERENCES transacciones.t_logs (id) MATCH SIMPLE
  ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);
ALTER TABLE usuarios.p_opciones_usuarios
  OWNER TO postgres;


  CREATE TABLE usuarios.p_oficinas
(
  codigo serial NOT NULL,
  descripcion character varying(150),
  abreviatura character varying(50),
  fecha timestamp without time zone DEFAULT now(),
  campo1 character varying(50),
  campo2 character varying(50),
  campo3 character varying(50),
  campo4 character varying(50),
  campo5 character varying(50),
  estado character varying(5),
  CONSTRAINT p_oficinas_pkey PRIMARY KEY (codigo)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE usuarios.p_oficinas
  OWNER TO postgres;



CREATE TABLE usuarios.p_cargos
(
  codigo serial NOT NULL,
  cod_oficina integer NOT NULL,
  descripcion character varying(200),
  abreviatura character varying(5),
  nombre character varying(50),
  estado character varying(5),
  CONSTRAINT p_cargos_pkey PRIMARY KEY (codigo),
  CONSTRAINT p_cargos_cod_oficina_fkey FOREIGN KEY (cod_oficina)
  REFERENCES usuarios.p_oficinas (codigo) MATCH SIMPLE
  ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);
ALTER TABLE usuarios.p_cargos
  OWNER TO postgres;
