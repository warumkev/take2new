--
-- PostgreSQL database dump
--

-- Dumped from database version 15.0
-- Dumped by pg_dump version 15.0

-- Started on 2023-01-29 17:35:22

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 215 (class 1259 OID 49186)
-- Name: items; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.items (
    id integer NOT NULL,
    itemname text NOT NULL,
    itemdescription text NOT NULL,
    itemviews integer DEFAULT 0 NOT NULL,
    itemprice integer NOT NULL,
    sellerid integer NOT NULL,
    itemsize text NOT NULL,
    picturename text NOT NULL,
    qty integer DEFAULT 1 NOT NULL
);


ALTER TABLE public.items OWNER TO postgres;

--
-- TOC entry 214 (class 1259 OID 49185)
-- Name: items_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.items_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.items_id_seq OWNER TO postgres;

--
-- TOC entry 3338 (class 0 OID 0)
-- Dependencies: 214
-- Name: items_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.items_id_seq OWNED BY public.items.id;


--
-- TOC entry 217 (class 1259 OID 49195)
-- Name: sellers; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.sellers (
    id integer NOT NULL,
    username text NOT NULL,
    userpassword text NOT NULL,
    admin bool NOT NULL
);


ALTER TABLE public.sellers OWNER TO postgres;

--
-- TOC entry 216 (class 1259 OID 49194)
-- Name: sellers_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.sellers_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sellers_id_seq OWNER TO postgres;

--
-- TOC entry 3339 (class 0 OID 0)
-- Dependencies: 216
-- Name: sellers_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.sellers_id_seq OWNED BY public.sellers.id;


--
-- TOC entry 3178 (class 2604 OID 49189)
-- Name: items id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.items ALTER COLUMN id SET DEFAULT nextval('public.items_id_seq'::regclass);


--
-- TOC entry 3181 (class 2604 OID 49198)
-- Name: sellers id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sellers ALTER COLUMN id SET DEFAULT nextval('public.sellers_id_seq'::regclass);

--
-- TOC entry 3331 (class 0 OID 49195)
-- Dependencies: 217
-- Data for Name: sellers; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.sellers VALUES (1, 'Elvis', '81dc9bdb52d04dc20036dbd8313ed055', true);
INSERT INTO public.sellers VALUES (2, 'Lara', '81dc9bdb52d04dc20036dbd8313ed055', true);
INSERT INTO public.sellers VALUES (3, 'Mika', '81dc9bdb52d04dc20036dbd8313ed055', true);
INSERT INTO public.sellers VALUES (4, 'Silas', '81dc9bdb52d04dc20036dbd8313ed055', true);


--
-- TOC entry 3340 (class 0 OID 0)
-- Dependencies: 214
-- Name: items_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.items_id_seq', 6, true);


--
-- TOC entry 3341 (class 0 OID 0)
-- Dependencies: 216
-- Name: sellers_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.sellers_id_seq', 4, true);


--
-- TOC entry 3183 (class 2606 OID 49193)
-- Name: items items_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.items
    ADD CONSTRAINT items_pkey PRIMARY KEY (id);


--
-- TOC entry 3185 (class 2606 OID 49202)
-- Name: sellers sellers_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sellers
    ADD CONSTRAINT sellers_pkey PRIMARY KEY (id);


-- Completed on 2023-01-29 17:35:22

--
-- PostgreSQL database dump complete
--

