--
-- PostgreSQL database dump
--

-- Dumped from database version 11.1
-- Dumped by pg_dump version 11.1

-- Started on 2019-05-30 23:14:01

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 3 (class 2615 OID 2200)
-- Name: public; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA public;


ALTER SCHEMA public OWNER TO postgres;

--
-- TOC entry 2882 (class 0 OID 0)
-- Dependencies: 3
-- Name: SCHEMA public; Type: COMMENT; Schema: -; Owner: postgres
--

COMMENT ON SCHEMA public IS 'standard public schema';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 199 (class 1259 OID 24889)
-- Name: accueil; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.accueil (
    id integer NOT NULL,
    prenom_acc character(50) NOT NULL,
    formation character varying(255) NOT NULL
);


ALTER TABLE public.accueil OWNER TO postgres;

--
-- TOC entry 198 (class 1259 OID 24887)
-- Name: accueil_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.accueil_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.accueil_id_seq OWNER TO postgres;

--
-- TOC entry 2883 (class 0 OID 0)
-- Dependencies: 198
-- Name: accueil_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.accueil_id_seq OWNED BY public.accueil.id;


--
-- TOC entry 201 (class 1259 OID 24900)
-- Name: competances; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.competances (
    id integer NOT NULL,
    nom_comp character varying(50) NOT NULL,
    type_comp character(20) NOT NULL
);


ALTER TABLE public.competances OWNER TO postgres;

--
-- TOC entry 200 (class 1259 OID 24898)
-- Name: competances_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.competances_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.competances_id_seq OWNER TO postgres;

--
-- TOC entry 2884 (class 0 OID 0)
-- Dependencies: 200
-- Name: competances_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.competances_id_seq OWNED BY public.competances.id;


--
-- TOC entry 197 (class 1259 OID 24878)
-- Name: contact; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.contact (
    id integer NOT NULL,
    nom_contact character(50) NOT NULL,
    prenom_contact character(50) NOT NULL,
    email character varying(255) NOT NULL,
    message character varying(255) NOT NULL
);


ALTER TABLE public.contact OWNER TO postgres;

--
-- TOC entry 196 (class 1259 OID 24876)
-- Name: contact_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.contact_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.contact_id_seq OWNER TO postgres;

--
-- TOC entry 2885 (class 0 OID 0)
-- Dependencies: 196
-- Name: contact_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.contact_id_seq OWNED BY public.contact.id;


--
-- TOC entry 205 (class 1259 OID 24919)
-- Name: diplomes; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.diplomes (
    id integer NOT NULL,
    icone character varying(255),
    diplome character varying(255),
    detail character varying(255)
);


ALTER TABLE public.diplomes OWNER TO postgres;

--
-- TOC entry 204 (class 1259 OID 24917)
-- Name: diplomes_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.diplomes_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.diplomes_id_seq OWNER TO postgres;

--
-- TOC entry 2886 (class 0 OID 0)
-- Dependencies: 204
-- Name: diplomes_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.diplomes_id_seq OWNED BY public.diplomes.id;


--
-- TOC entry 203 (class 1259 OID 24908)
-- Name: experiences; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.experiences (
    id integer NOT NULL,
    nom_emploie character varying(255) NOT NULL,
    entreprise_emploie character varying(255) NOT NULL,
    date_debut_emploie date NOT NULL,
    photo_emploie character varying(255),
    date_fin_emploie date
);


ALTER TABLE public.experiences OWNER TO postgres;

--
-- TOC entry 202 (class 1259 OID 24906)
-- Name: experiences_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.experiences_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.experiences_id_seq OWNER TO postgres;

--
-- TOC entry 2887 (class 0 OID 0)
-- Dependencies: 202
-- Name: experiences_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.experiences_id_seq OWNED BY public.experiences.id;


--
-- TOC entry 207 (class 1259 OID 24930)
-- Name: page_formulaire; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.page_formulaire (
    id_form integer NOT NULL,
    photo_form character varying(255) NOT NULL,
    ecole character varying(255),
    telephone character varying(255),
    mail character varying(255),
    cv character varying(255)
);


ALTER TABLE public.page_formulaire OWNER TO postgres;

--
-- TOC entry 206 (class 1259 OID 24928)
-- Name: page_formulaire_id_form_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.page_formulaire_id_form_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.page_formulaire_id_form_seq OWNER TO postgres;

--
-- TOC entry 2888 (class 0 OID 0)
-- Dependencies: 206
-- Name: page_formulaire_id_form_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.page_formulaire_id_form_seq OWNED BY public.page_formulaire.id_form;


--
-- TOC entry 208 (class 1259 OID 24968)
-- Name: projet; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.projet (
    image character varying(255),
    liensite character varying(255),
    description character varying(255),
    technique character varying(255)
);


ALTER TABLE public.projet OWNER TO postgres;

--
-- TOC entry 2726 (class 2604 OID 24892)
-- Name: accueil id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.accueil ALTER COLUMN id SET DEFAULT nextval('public.accueil_id_seq'::regclass);


--
-- TOC entry 2727 (class 2604 OID 24903)
-- Name: competances id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.competances ALTER COLUMN id SET DEFAULT nextval('public.competances_id_seq'::regclass);


--
-- TOC entry 2725 (class 2604 OID 24881)
-- Name: contact id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.contact ALTER COLUMN id SET DEFAULT nextval('public.contact_id_seq'::regclass);


--
-- TOC entry 2729 (class 2604 OID 24922)
-- Name: diplomes id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.diplomes ALTER COLUMN id SET DEFAULT nextval('public.diplomes_id_seq'::regclass);


--
-- TOC entry 2728 (class 2604 OID 24911)
-- Name: experiences id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.experiences ALTER COLUMN id SET DEFAULT nextval('public.experiences_id_seq'::regclass);


--
-- TOC entry 2730 (class 2604 OID 24933)
-- Name: page_formulaire id_form; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.page_formulaire ALTER COLUMN id_form SET DEFAULT nextval('public.page_formulaire_id_form_seq'::regclass);


--
-- TOC entry 2867 (class 0 OID 24889)
-- Dependencies: 199
-- Data for Name: accueil; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.accueil (id, prenom_acc, formation) FROM stdin;
1	Léone Lalloué                                     	Informatique Ynov Nantes\r\n
\.


--
-- TOC entry 2869 (class 0 OID 24900)
-- Dependencies: 201
-- Data for Name: competances; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.competances (id, nom_comp, type_comp) FROM stdin;
10	Anglais	Langue              
11	HTML CSS	Hardskill           
12	Patiente	Softskill           
13	PHP	Hardskill           
14	SQL	Hardskill           
15	Espagnol	Langue              
16	Français	Langue              
17	Organisée	Softskill           
18	Méticuleuse 	Softskill           
\.


--
-- TOC entry 2865 (class 0 OID 24878)
-- Dependencies: 197
-- Data for Name: contact; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.contact (id, nom_contact, prenom_contact, email, message) FROM stdin;
12	Lalloué                                           	Léone                                             	leone@lalloue.fr	Test1
13	Lalloué                                           	Solange                                           	croque@carottes	bla bla bla
14	Plottu                                            	Seb                                               	chapeau@cowboy	Pom
15	Lalloué                                           	Maud                                              	maud@lalloue	Coucou !\r\n
\.


--
-- TOC entry 2873 (class 0 OID 24919)
-- Dependencies: 205
-- Data for Name: diplomes; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.diplomes (id, icone, diplome, detail) FROM stdin;
2	photos/permis.png	Permis B	Conduite accompagnée
3	photos/bac.jpg	Bac Economique et Social	Spécialité Maths Mention très bien
4	photos/psc1.jpg	PSC1	Diplome de prévention et secours civique
\.


--
-- TOC entry 2871 (class 0 OID 24908)
-- Dependencies: 203
-- Data for Name: experiences; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.experiences (id, nom_emploie, entreprise_emploie, date_debut_emploie, photo_emploie, date_fin_emploie) FROM stdin;
4	Serveuse	Café chez Gaëlle	2015-09-15	photos/bar.png	2020-12-31
5	Saisie Comptable	Café chez Gaëlle	2017-07-02	photos/compta.png	2020-12-31
6	Opératrice de saisie	Cer France - Chateaubriant	2018-07-11	photos/secr.png	2018-09-14
\.


--
-- TOC entry 2875 (class 0 OID 24930)
-- Dependencies: 207
-- Data for Name: page_formulaire; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.page_formulaire (id_form, photo_form, ecole, telephone, mail, cv) FROM stdin;
1	photos/photo.PNG	Nantes Ynov Campus	07-71-62-33-87	leone.lalloue@ynov.com	moncv.pdf
\.


--
-- TOC entry 2876 (class 0 OID 24968)
-- Dependencies: 208
-- Data for Name: projet; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.projet (image, liensite, description, technique) FROM stdin;
photos/premier.PNG	https://tender-babbage-d44c6f.netlify.com/	Premier Portfolio en	HTML CSS
photos/zelda.PNG	rendre/index.html	Premier site réalisé avec du 	Javascript
\.


--
-- TOC entry 2889 (class 0 OID 0)
-- Dependencies: 198
-- Name: accueil_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.accueil_id_seq', 1, false);


--
-- TOC entry 2890 (class 0 OID 0)
-- Dependencies: 200
-- Name: competances_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.competances_id_seq', 18, true);


--
-- TOC entry 2891 (class 0 OID 0)
-- Dependencies: 196
-- Name: contact_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.contact_id_seq', 15, true);


--
-- TOC entry 2892 (class 0 OID 0)
-- Dependencies: 204
-- Name: diplomes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.diplomes_id_seq', 4, true);


--
-- TOC entry 2893 (class 0 OID 0)
-- Dependencies: 202
-- Name: experiences_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.experiences_id_seq', 6, true);


--
-- TOC entry 2894 (class 0 OID 0)
-- Dependencies: 206
-- Name: page_formulaire_id_form_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.page_formulaire_id_form_seq', 1, true);


--
-- TOC entry 2734 (class 2606 OID 24897)
-- Name: accueil accueil_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.accueil
    ADD CONSTRAINT accueil_pkey PRIMARY KEY (id);


--
-- TOC entry 2736 (class 2606 OID 24905)
-- Name: competances competances_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.competances
    ADD CONSTRAINT competances_pkey PRIMARY KEY (id);


--
-- TOC entry 2732 (class 2606 OID 24886)
-- Name: contact contact_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.contact
    ADD CONSTRAINT contact_pkey PRIMARY KEY (id);


--
-- TOC entry 2740 (class 2606 OID 24927)
-- Name: diplomes diplomes_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.diplomes
    ADD CONSTRAINT diplomes_pkey PRIMARY KEY (id);


--
-- TOC entry 2738 (class 2606 OID 24916)
-- Name: experiences experiences_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.experiences
    ADD CONSTRAINT experiences_pkey PRIMARY KEY (id);


--
-- TOC entry 2742 (class 2606 OID 24938)
-- Name: page_formulaire page_formulaire_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.page_formulaire
    ADD CONSTRAINT page_formulaire_pkey PRIMARY KEY (id_form);


-- Completed on 2019-05-30 23:14:01

--
-- PostgreSQL database dump complete
--

