-- Table: public.pegawai

-- DROP TABLE public.pegawai;

CREATE TABLE IF NOT EXISTS public.pegawai
(
    pegawai_id integer NOT NULL DEFAULT nextval('pegawai_pegawai_id_seq'::regclass),
    pegawai_nama character varying(50) COLLATE pg_catalog."default",
    pegawai_umur integer,
    pegawai_alamat text COLLATE pg_catalog."default",
    foto character varying(255) COLLATE pg_catalog."default",
    CONSTRAINT pegawai_pkey PRIMARY KEY (pegawai_id)
)

TABLESPACE pg_default;

ALTER TABLE public.pegawai
    OWNER to postgres;