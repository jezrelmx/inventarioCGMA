--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: articulos; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE articulos (
    id_articulo integer NOT NULL,
    id_tipo_mueble integer,
    progresivo bigint,
    caracteristicas character varying(300),
    id_estatus integer
);


ALTER TABLE public.articulos OWNER TO postgres;

--
-- Name: articulos_id_articulo_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE articulos_id_articulo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.articulos_id_articulo_seq OWNER TO postgres;

--
-- Name: articulos_id_articulo_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE articulos_id_articulo_seq OWNED BY articulos.id_articulo;


--
-- Name: cat_direccion_ejecutiva; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE cat_direccion_ejecutiva (
    id_direccion_ejecutiva integer NOT NULL,
    nombre character varying(50)
);


ALTER TABLE public.cat_direccion_ejecutiva OWNER TO postgres;

--
-- Name: cat_direccion_ejecutiva_id_direccion_ejecutiva_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE cat_direccion_ejecutiva_id_direccion_ejecutiva_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.cat_direccion_ejecutiva_id_direccion_ejecutiva_seq OWNER TO postgres;

--
-- Name: cat_direccion_ejecutiva_id_direccion_ejecutiva_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE cat_direccion_ejecutiva_id_direccion_ejecutiva_seq OWNED BY cat_direccion_ejecutiva.id_direccion_ejecutiva;


--
-- Name: cat_estatus; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE cat_estatus (
    id_estatus integer NOT NULL,
    descripcion character varying(100)
);


ALTER TABLE public.cat_estatus OWNER TO postgres;

--
-- Name: cat_estatus_id_estatus_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE cat_estatus_id_estatus_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.cat_estatus_id_estatus_seq OWNER TO postgres;

--
-- Name: cat_estatus_id_estatus_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE cat_estatus_id_estatus_seq OWNED BY cat_estatus.id_estatus;


--
-- Name: cat_tipo_mueble; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE cat_tipo_mueble (
    id_tipo_mueble integer NOT NULL,
    descripcion character varying(400),
    clave character varying,
    estatus smallint DEFAULT 1
);


ALTER TABLE public.cat_tipo_mueble OWNER TO postgres;

--
-- Name: cat_tipo_mueble_id_tipo_mueble_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE cat_tipo_mueble_id_tipo_mueble_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.cat_tipo_mueble_id_tipo_mueble_seq OWNER TO postgres;

--
-- Name: cat_tipo_mueble_id_tipo_mueble_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE cat_tipo_mueble_id_tipo_mueble_seq OWNED BY cat_tipo_mueble.id_tipo_mueble;


--
-- Name: cat_tipo_usuario; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE cat_tipo_usuario (
    id_tipo_usuario integer NOT NULL,
    descripcion character varying(30)
);


ALTER TABLE public.cat_tipo_usuario OWNER TO postgres;

--
-- Name: cat_tipo_usuario_id_tipo_usuario_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE cat_tipo_usuario_id_tipo_usuario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.cat_tipo_usuario_id_tipo_usuario_seq OWNER TO postgres;

--
-- Name: cat_tipo_usuario_id_tipo_usuario_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE cat_tipo_usuario_id_tipo_usuario_seq OWNED BY cat_tipo_usuario.id_tipo_usuario;


--
-- Name: usuario_has_articulo; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE usuario_has_articulo (
    id_usuario_articulo integer NOT NULL,
    id_usuario integer,
    id_articulo integer
);


ALTER TABLE public.usuario_has_articulo OWNER TO postgres;

--
-- Name: usuario_has_articulo_id_usuario_articulo_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE usuario_has_articulo_id_usuario_articulo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.usuario_has_articulo_id_usuario_articulo_seq OWNER TO postgres;

--
-- Name: usuario_has_articulo_id_usuario_articulo_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE usuario_has_articulo_id_usuario_articulo_seq OWNED BY usuario_has_articulo.id_usuario_articulo;


--
-- Name: usuarios; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE usuarios (
    id_usuario integer NOT NULL,
    nombre character varying(50),
    ap_paterno character varying(50),
    ap_materno character varying(50),
    cargo character varying(50),
    num_empleado character varying,
    id_direccion_ejecutiva integer,
    id_tipo_usuario integer NOT NULL,
    email character varying(50),
    contrasenia character varying(20),
    estatus smallint
);


ALTER TABLE public.usuarios OWNER TO postgres;

--
-- Name: usuarios_id_tipo_usuario_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE usuarios_id_tipo_usuario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.usuarios_id_tipo_usuario_seq OWNER TO postgres;

--
-- Name: usuarios_id_tipo_usuario_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE usuarios_id_tipo_usuario_seq OWNED BY usuarios.id_tipo_usuario;


--
-- Name: usuarios_id_usuario_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE usuarios_id_usuario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.usuarios_id_usuario_seq OWNER TO postgres;

--
-- Name: usuarios_id_usuario_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE usuarios_id_usuario_seq OWNED BY usuarios.id_usuario;


--
-- Name: id_articulo; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY articulos ALTER COLUMN id_articulo SET DEFAULT nextval('articulos_id_articulo_seq'::regclass);


--
-- Name: id_direccion_ejecutiva; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cat_direccion_ejecutiva ALTER COLUMN id_direccion_ejecutiva SET DEFAULT nextval('cat_direccion_ejecutiva_id_direccion_ejecutiva_seq'::regclass);


--
-- Name: id_estatus; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cat_estatus ALTER COLUMN id_estatus SET DEFAULT nextval('cat_estatus_id_estatus_seq'::regclass);


--
-- Name: id_tipo_mueble; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cat_tipo_mueble ALTER COLUMN id_tipo_mueble SET DEFAULT nextval('cat_tipo_mueble_id_tipo_mueble_seq'::regclass);


--
-- Name: id_tipo_usuario; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cat_tipo_usuario ALTER COLUMN id_tipo_usuario SET DEFAULT nextval('cat_tipo_usuario_id_tipo_usuario_seq'::regclass);


--
-- Name: id_usuario_articulo; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuario_has_articulo ALTER COLUMN id_usuario_articulo SET DEFAULT nextval('usuario_has_articulo_id_usuario_articulo_seq'::regclass);


--
-- Name: id_usuario; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuarios ALTER COLUMN id_usuario SET DEFAULT nextval('usuarios_id_usuario_seq'::regclass);


--
-- Name: id_tipo_usuario; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuarios ALTER COLUMN id_tipo_usuario SET DEFAULT nextval('usuarios_id_tipo_usuario_seq'::regclass);


--
-- Data for Name: articulos; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY articulos (id_articulo, id_tipo_mueble, progresivo, caracteristicas, id_estatus) FROM stdin;
1	1	222	silla azul	1
2	1	223	silla verde	2
3	1	224	silla amarilla	1
5	1	0	jhgfds	2
10	1	0	Silla de metal	2
19	1	0	Silla de metal	2
20	1	0	Silla de metal	2
4	1	0	Silla de metal	2
9	1	0	Silla de metal	2
11	1	0	Silla de metal	2
6	1	6755	Silla de metal	1
7	17	9832	Pentium4	2
8	2	1	C	1
12	2	2	CV	1
13	3	2	c	1
17	15	333	Pentium4	2
18	2	3	8	1
21	1	909	Silla meseedora	1
22	2	999	Silla acojinada	2
23	2	9876	Escritorio de cristal	2
\.


--
-- Name: articulos_id_articulo_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('articulos_id_articulo_seq', 23, true);


--
-- Data for Name: cat_direccion_ejecutiva; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY cat_direccion_ejecutiva (id_direccion_ejecutiva, nombre) FROM stdin;
1	CGMA
\.


--
-- Name: cat_direccion_ejecutiva_id_direccion_ejecutiva_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('cat_direccion_ejecutiva_id_direccion_ejecutiva_seq', 1, true);


--
-- Data for Name: cat_estatus; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY cat_estatus (id_estatus, descripcion) FROM stdin;
1	Deteriorado
2	Optimo
3	Inactivo
\.


--
-- Name: cat_estatus_id_estatus_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('cat_estatus_id_estatus_seq', 3, true);


--
-- Data for Name: cat_tipo_mueble; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY cat_tipo_mueble (id_tipo_mueble, descripcion, clave, estatus) FROM stdin;
1	silla	100	1
2	escritorio	101	1
3	escritorio	1001	1
4	pc escritorio	1002	1
5	pc escritorio 2	1003	1
6	pc escritorio 2	1002	1
7	pc escritorio 3	1003	1
8	pc escritorio 4	1004	1
9	pc escritorio 5	1005	1
10	pc escritorio 6	1006	1
11	pc escritorio 7	1007	1
12	pc escritorio 8	1008	1
13	pc escritorio 9	1009	1
14	pc escritorio 10	1010	1
15	pc escritorio 11	1011	1
16	pc escritorio 12	1012	1
17	pc escritorio 13	1013	1
18	pc escritorio 14	1014	1
19	pc escritorio 15	1015	1
20	hyhiiuiu	1234	1
\.


--
-- Name: cat_tipo_mueble_id_tipo_mueble_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('cat_tipo_mueble_id_tipo_mueble_seq', 20, true);


--
-- Data for Name: cat_tipo_usuario; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY cat_tipo_usuario (id_tipo_usuario, descripcion) FROM stdin;
1	Administrador
2	Servidor público
\.


--
-- Name: cat_tipo_usuario_id_tipo_usuario_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('cat_tipo_usuario_id_tipo_usuario_seq', 2, true);


--
-- Data for Name: usuario_has_articulo; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY usuario_has_articulo (id_usuario_articulo, id_usuario, id_articulo) FROM stdin;
4	3	1
6	3	3
5	3	2
\.


--
-- Name: usuario_has_articulo_id_usuario_articulo_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('usuario_has_articulo_id_usuario_articulo_seq', 6, true);


--
-- Data for Name: usuarios; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY usuarios (id_usuario, nombre, ap_paterno, ap_materno, cargo, num_empleado, id_direccion_ejecutiva, id_tipo_usuario, email, contrasenia, estatus) FROM stdin;
6	grey	jacob	lara	cargo	123	1	1	correo	1234	1
5	NOMBRE	APP	APM	CARGO	12	1	1	EMAIL	12	1
7	nombre	ap_paterno	ap_materno	cargo	1234	1	1	email	contrasenia	1
8	nombre	ap_paterno	ap_materno	cargo	1234	1	1	email	contrasenia	1
9	nombre	ap_paterno	ap_materno	cargo	1234	1	1	email	contrasenia	1
10	nombre	ap_paterno	ap_materno	cargo	1234	1	1	email	contrasenia	1
11	nombre	ap_paterno	ap_materno	cargo	1234	1	1	email	contrasenia	1
3	Ernesto	Andrade	Luna	Director	210310108	1	1	n3to	123	1
1	nombre	apP	apM	cargo	0	1	2	nom	\N	1
4	usuario1	usuario	usuario	Director	11111	1	2	usuario	\N	1
12	Efren	Valdez	Jasso	JUB	35058	1	1	evaldezj@df.gob.mx	123456	1
\.


--
-- Name: usuarios_id_tipo_usuario_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('usuarios_id_tipo_usuario_seq', 1, false);


--
-- Name: usuarios_id_usuario_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('usuarios_id_usuario_seq', 12, true);


--
-- Name: id_articulo; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY articulos
    ADD CONSTRAINT id_articulo PRIMARY KEY (id_articulo);


--
-- Name: id_direccion_ejecutiva; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY cat_direccion_ejecutiva
    ADD CONSTRAINT id_direccion_ejecutiva PRIMARY KEY (id_direccion_ejecutiva);


--
-- Name: id_estatus; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY cat_estatus
    ADD CONSTRAINT id_estatus PRIMARY KEY (id_estatus);


--
-- Name: id_tipo_mueble; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY cat_tipo_mueble
    ADD CONSTRAINT id_tipo_mueble PRIMARY KEY (id_tipo_mueble);


--
-- Name: id_tipo_usuario; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY cat_tipo_usuario
    ADD CONSTRAINT id_tipo_usuario PRIMARY KEY (id_tipo_usuario);


--
-- Name: id_usuario; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT id_usuario PRIMARY KEY (id_usuario);


--
-- Name: id_usuario_articulo; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY usuario_has_articulo
    ADD CONSTRAINT id_usuario_articulo PRIMARY KEY (id_usuario_articulo);


--
-- Name: id_articulo; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuario_has_articulo
    ADD CONSTRAINT id_articulo FOREIGN KEY (id_articulo) REFERENCES articulos(id_articulo);


--
-- Name: id_direccion_ejecutiva; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT id_direccion_ejecutiva FOREIGN KEY (id_direccion_ejecutiva) REFERENCES cat_direccion_ejecutiva(id_direccion_ejecutiva);


--
-- Name: id_estatus; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY articulos
    ADD CONSTRAINT id_estatus FOREIGN KEY (id_estatus) REFERENCES cat_estatus(id_estatus);


--
-- Name: id_tipo_mueble; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY articulos
    ADD CONSTRAINT id_tipo_mueble FOREIGN KEY (id_tipo_mueble) REFERENCES cat_tipo_mueble(id_tipo_mueble);


--
-- Name: id_tipo_usuario; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT id_tipo_usuario FOREIGN KEY (id_tipo_usuario) REFERENCES cat_tipo_usuario(id_tipo_usuario);


--
-- Name: id_usuario; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuario_has_articulo
    ADD CONSTRAINT id_usuario FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

