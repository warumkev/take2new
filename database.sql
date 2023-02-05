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

CREATE TABLE public.items (
    id text NOT NULL,
    itemname text NOT NULL,
    itemdescription text NOT NULL,
    itemviews integer DEFAULT 0 NOT NULL,
    itemprice integer NOT NULL,
    sellerid text NOT NULL,
    itemsize text NOT NULL,
    picturename text NOT NULL,
    qty integer DEFAULT 1 NOT NULL
);

ALTER TABLE public.items OWNER TO postgres;

CREATE SEQUENCE public.items_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;

ALTER TABLE public.items_id_seq OWNER TO postgres;

ALTER SEQUENCE public.items_id_seq OWNED BY public.items.id;

CREATE TABLE public.sellers (
    id text NOT NULL,
    username text NOT NULL,
    userpassword text NOT NULL,
    admin bool NOT NULL
);

ALTER TABLE public.sellers OWNER TO postgres;

CREATE SEQUENCE public.sellers_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sellers_id_seq OWNER TO postgres;

ALTER SEQUENCE public.sellers_id_seq OWNED BY public.sellers.id;

ALTER TABLE ONLY public.items ALTER COLUMN id SET DEFAULT nextval('public.items_id_seq'::regclass);

ALTER TABLE ONLY public.sellers ALTER COLUMN id SET DEFAULT nextval('public.sellers_id_seq'::regclass);

INSERT INTO public.sellers VALUES ('1', 'Elvis', '81dc9bdb52d04dc20036dbd8313ed055', true);
INSERT INTO public.sellers VALUES ('2', 'Lara', '81dc9bdb52d04dc20036dbd8313ed055', true);
INSERT INTO public.sellers VALUES ('3', 'Mika', '81dc9bdb52d04dc20036dbd8313ed055', true);
INSERT INTO public.sellers VALUES ('4', 'Silas', '81dc9bdb52d04dc20036dbd8313ed055', true);

SELECT pg_catalog.setval('public.items_id_seq', 6, true);

SELECT pg_catalog.setval('public.sellers_id_seq', 4, true);


CREATE TABLE public.orders (
                                id text NOT NULL,
                                firstname text NOT NULL,
                                lastname text NOT NULL,
                                email text NOT NULL,
                                address text NOT NULL,
                                plz text NOT NULL,
                                itemid text NOT NULL,
                                price integer NOT NULL
);


ALTER TABLE ONLY public.items
    ADD CONSTRAINT items_pkey PRIMARY KEY (id);

ALTER TABLE ONLY public.sellers
    ADD CONSTRAINT sellers_pkey PRIMARY KEY (id);