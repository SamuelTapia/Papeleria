PGDMP     .    7                 y         	   papeleria    10.15    10.15 =    B           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            C           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            D           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                       false            E           1262    16393 	   papeleria    DATABASE     �   CREATE DATABASE papeleria WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Spanish_Spain.1252' LC_CTYPE = 'Spanish_Spain.1252';
    DROP DATABASE papeleria;
             postgres    false                        2615    2200    public    SCHEMA        CREATE SCHEMA public;
    DROP SCHEMA public;
             postgres    false            F           0    0    SCHEMA public    COMMENT     6   COMMENT ON SCHEMA public IS 'standard public schema';
                  postgres    false    3                        3079    12924    plpgsql 	   EXTENSION     ?   CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;
    DROP EXTENSION plpgsql;
                  false            G           0    0    EXTENSION plpgsql    COMMENT     @   COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';
                       false    1            �            1255    24939    actualiza_stock()    FUNCTION     �   CREATE FUNCTION public.actualiza_stock() RETURNS trigger
    LANGUAGE plpgsql
    AS $$
begin


update inventario set stock=stock - producto_vendido.cantidad_art
where producto_vendido.cod_barras_inventario = inventario.cod_barras;

return new;
end;
$$;
 (   DROP FUNCTION public.actualiza_stock();
       public       postgres    false    3    1            �            1259    16509    abastece    TABLE     �   CREATE TABLE public.abastece (
    razon_social_proveedor character varying(60) NOT NULL,
    cod_productos_prod integer NOT NULL
);
    DROP TABLE public.abastece;
       public         postgres    false    3            �            1259    16394    cliente    TABLE     J  CREATE TABLE public.cliente (
    razon_social character varying(60) NOT NULL,
    nombre character varying(40),
    ap_paterno character varying(40),
    ap_materno character varying(40),
    estado character varying(40),
    calle character varying(40),
    cp integer,
    colonia character varying(40),
    numero smallint
);
    DROP TABLE public.cliente;
       public         postgres    false    3            �            1259    16541    email    TABLE     �   CREATE TABLE public.email (
    id_email integer NOT NULL,
    razon_social_cliente character varying(60),
    email character varying(80)
);
    DROP TABLE public.email;
       public         postgres    false    3            �            1259    16539    email_id_email_seq    SEQUENCE     �   CREATE SEQUENCE public.email_id_email_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.email_id_email_seq;
       public       postgres    false    203    3            H           0    0    email_id_email_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.email_id_email_seq OWNED BY public.email.id_email;
            public       postgres    false    202            �            1259    16479    incluye    TABLE     u   CREATE TABLE public.incluye (
    cod_productos_prod integer NOT NULL,
    num_venta_ventas character varying(15)
);
    DROP TABLE public.incluye;
       public         postgres    false    3            �            1259    16419 
   inventario    TABLE     �   CREATE TABLE public.inventario (
    cod_barras bigint NOT NULL,
    precio_compra numeric,
    fecha_compra date,
    stock integer
);
    DROP TABLE public.inventario;
       public         postgres    false    3            �            1259    24885    producto_vendido    TABLE     �   CREATE TABLE public.producto_vendido (
    cod_venta integer NOT NULL,
    cod_barras_inventario bigint,
    precio_art numeric,
    cantidad_art integer,
    num_venta_ventas character varying(15)
);
 $   DROP TABLE public.producto_vendido;
       public         postgres    false    3            �            1259    24883    producto_vendido_cod_venta_seq    SEQUENCE     �   CREATE SEQUENCE public.producto_vendido_cod_venta_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 5   DROP SEQUENCE public.producto_vendido_cod_venta_seq;
       public       postgres    false    3    208            I           0    0    producto_vendido_cod_venta_seq    SEQUENCE OWNED BY     a   ALTER SEQUENCE public.producto_vendido_cod_venta_seq OWNED BY public.producto_vendido.cod_venta;
            public       postgres    false    207            �            1259    16691 	   productos    TABLE     �   CREATE TABLE public.productos (
    cod_productos integer NOT NULL,
    categoria character varying(50),
    marca character varying(40),
    descripcion character varying(80),
    precio numeric,
    cod_barras_inventario bigint
);
    DROP TABLE public.productos;
       public         postgres    false    3            �            1259    16424 	   proveedor    TABLE     L  CREATE TABLE public.proveedor (
    razon_social character varying(60) NOT NULL,
    nombre character varying(40),
    ap_paterno character varying(40),
    ap_materno character varying(40),
    estado character varying(40),
    calle character varying(40),
    cp integer,
    colonia character varying(40),
    numero smallint
);
    DROP TABLE public.proveedor;
       public         postgres    false    3            �            1259    16554    telefono    TABLE     �   CREATE TABLE public.telefono (
    id_telefono integer NOT NULL,
    razon_social_proveedor character varying(60),
    telefono character varying(80)
);
    DROP TABLE public.telefono;
       public         postgres    false    3            �            1259    16552    telefono_id_telefono_seq    SEQUENCE     �   CREATE SEQUENCE public.telefono_id_telefono_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.telefono_id_telefono_seq;
       public       postgres    false    205    3            J           0    0    telefono_id_telefono_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.telefono_id_telefono_seq OWNED BY public.telefono.id_telefono;
            public       postgres    false    204            �            1259    16409    ventas    TABLE     �   CREATE TABLE public.ventas (
    num_venta character varying(15) NOT NULL,
    fecha date,
    precio_total smallint,
    razon_social_cliente character varying(60)
);
    DROP TABLE public.ventas;
       public         postgres    false    3            �
           2604    16544    email id_email    DEFAULT     p   ALTER TABLE ONLY public.email ALTER COLUMN id_email SET DEFAULT nextval('public.email_id_email_seq'::regclass);
 =   ALTER TABLE public.email ALTER COLUMN id_email DROP DEFAULT;
       public       postgres    false    203    202    203            �
           2604    24888    producto_vendido cod_venta    DEFAULT     �   ALTER TABLE ONLY public.producto_vendido ALTER COLUMN cod_venta SET DEFAULT nextval('public.producto_vendido_cod_venta_seq'::regclass);
 I   ALTER TABLE public.producto_vendido ALTER COLUMN cod_venta DROP DEFAULT;
       public       postgres    false    207    208    208            �
           2604    16557    telefono id_telefono    DEFAULT     |   ALTER TABLE ONLY public.telefono ALTER COLUMN id_telefono SET DEFAULT nextval('public.telefono_id_telefono_seq'::regclass);
 C   ALTER TABLE public.telefono ALTER COLUMN id_telefono DROP DEFAULT;
       public       postgres    false    204    205    205            8          0    16509    abastece 
   TABLE DATA               N   COPY public.abastece (razon_social_proveedor, cod_productos_prod) FROM stdin;
    public       postgres    false    201   H       3          0    16394    cliente 
   TABLE DATA               s   COPY public.cliente (razon_social, nombre, ap_paterno, ap_materno, estado, calle, cp, colonia, numero) FROM stdin;
    public       postgres    false    196   H       :          0    16541    email 
   TABLE DATA               F   COPY public.email (id_email, razon_social_cliente, email) FROM stdin;
    public       postgres    false    203   SI       7          0    16479    incluye 
   TABLE DATA               G   COPY public.incluye (cod_productos_prod, num_venta_ventas) FROM stdin;
    public       postgres    false    200   �I       5          0    16419 
   inventario 
   TABLE DATA               T   COPY public.inventario (cod_barras, precio_compra, fecha_compra, stock) FROM stdin;
    public       postgres    false    198   �I       ?          0    24885    producto_vendido 
   TABLE DATA               x   COPY public.producto_vendido (cod_venta, cod_barras_inventario, precio_art, cantidad_art, num_venta_ventas) FROM stdin;
    public       postgres    false    208   wJ       =          0    16691 	   productos 
   TABLE DATA               p   COPY public.productos (cod_productos, categoria, marca, descripcion, precio, cod_barras_inventario) FROM stdin;
    public       postgres    false    206   �J       6          0    16424 	   proveedor 
   TABLE DATA               u   COPY public.proveedor (razon_social, nombre, ap_paterno, ap_materno, estado, calle, cp, colonia, numero) FROM stdin;
    public       postgres    false    199   �L       <          0    16554    telefono 
   TABLE DATA               Q   COPY public.telefono (id_telefono, razon_social_proveedor, telefono) FROM stdin;
    public       postgres    false    205    M       4          0    16409    ventas 
   TABLE DATA               V   COPY public.ventas (num_venta, fecha, precio_total, razon_social_cliente) FROM stdin;
    public       postgres    false    197   =M       K           0    0    email_id_email_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.email_id_email_seq', 2, true);
            public       postgres    false    202            L           0    0    producto_vendido_cod_venta_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.producto_vendido_cod_venta_seq', 1, true);
            public       postgres    false    207            M           0    0    telefono_id_telefono_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.telefono_id_telefono_seq', 2, true);
            public       postgres    false    204            �
           2606    16513    abastece abastece_pkey 
   CONSTRAINT     |   ALTER TABLE ONLY public.abastece
    ADD CONSTRAINT abastece_pkey PRIMARY KEY (razon_social_proveedor, cod_productos_prod);
 @   ALTER TABLE ONLY public.abastece DROP CONSTRAINT abastece_pkey;
       public         postgres    false    201    201            �
           2606    16398    cliente cliente_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.cliente
    ADD CONSTRAINT cliente_pkey PRIMARY KEY (razon_social);
 >   ALTER TABLE ONLY public.cliente DROP CONSTRAINT cliente_pkey;
       public         postgres    false    196            �
           2606    16546    email email_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.email
    ADD CONSTRAINT email_pkey PRIMARY KEY (id_email);
 :   ALTER TABLE ONLY public.email DROP CONSTRAINT email_pkey;
       public         postgres    false    203            �
           2606    16576    inventario inventario_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.inventario
    ADD CONSTRAINT inventario_pkey PRIMARY KEY (cod_barras);
 D   ALTER TABLE ONLY public.inventario DROP CONSTRAINT inventario_pkey;
       public         postgres    false    198            �
           2606    24893 &   producto_vendido producto_vendido_pkey 
   CONSTRAINT     k   ALTER TABLE ONLY public.producto_vendido
    ADD CONSTRAINT producto_vendido_pkey PRIMARY KEY (cod_venta);
 P   ALTER TABLE ONLY public.producto_vendido DROP CONSTRAINT producto_vendido_pkey;
       public         postgres    false    208            �
           2606    16695    productos productos_pkey 
   CONSTRAINT     a   ALTER TABLE ONLY public.productos
    ADD CONSTRAINT productos_pkey PRIMARY KEY (cod_productos);
 B   ALTER TABLE ONLY public.productos DROP CONSTRAINT productos_pkey;
       public         postgres    false    206            �
           2606    16428    proveedor proveedor_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.proveedor
    ADD CONSTRAINT proveedor_pkey PRIMARY KEY (razon_social);
 B   ALTER TABLE ONLY public.proveedor DROP CONSTRAINT proveedor_pkey;
       public         postgres    false    199            �
           2606    16559    telefono telefono_pkey 
   CONSTRAINT     ]   ALTER TABLE ONLY public.telefono
    ADD CONSTRAINT telefono_pkey PRIMARY KEY (id_telefono);
 @   ALTER TABLE ONLY public.telefono DROP CONSTRAINT telefono_pkey;
       public         postgres    false    205            �
           2606    24923    ventas ventas_pkey 
   CONSTRAINT     W   ALTER TABLE ONLY public.ventas
    ADD CONSTRAINT ventas_pkey PRIMARY KEY (num_venta);
 <   ALTER TABLE ONLY public.ventas DROP CONSTRAINT ventas_pkey;
       public         postgres    false    197            �
           1259    24913    indice_prod    INDEX     J   CREATE INDEX indice_prod ON public.productos USING btree (cod_productos);
    DROP INDEX public.indice_prod;
       public         postgres    false    206            �
           1259    24912    indice_producto    INDEX     J   CREATE INDEX indice_producto ON public.productos USING btree (categoria);
 #   DROP INDEX public.indice_producto;
       public         postgres    false    206            �
           2620    24940    producto_vendido tr_insert    TRIGGER     {   CREATE TRIGGER tr_insert BEFORE INSERT ON public.producto_vendido FOR EACH ROW EXECUTE PROCEDURE public.actualiza_stock();
 3   DROP TRIGGER tr_insert ON public.producto_vendido;
       public       postgres    false    209    208            �
           2606    16514 #   abastece abastece_razon_social_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.abastece
    ADD CONSTRAINT abastece_razon_social_fkey FOREIGN KEY (razon_social_proveedor) REFERENCES public.proveedor(razon_social);
 M   ALTER TABLE ONLY public.abastece DROP CONSTRAINT abastece_razon_social_fkey;
       public       postgres    false    201    199    2724            �
           2606    16547    email email_razon_social_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.email
    ADD CONSTRAINT email_razon_social_fkey FOREIGN KEY (razon_social_cliente) REFERENCES public.cliente(razon_social);
 G   ALTER TABLE ONLY public.email DROP CONSTRAINT email_razon_social_fkey;
       public       postgres    false    2718    196    203            �
           2606    24928 %   incluye incluye_num_venta_ventas_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.incluye
    ADD CONSTRAINT incluye_num_venta_ventas_fkey FOREIGN KEY (num_venta_ventas) REFERENCES public.ventas(num_venta);
 O   ALTER TABLE ONLY public.incluye DROP CONSTRAINT incluye_num_venta_ventas_fkey;
       public       postgres    false    197    2720    200            �
           2606    24899 <   producto_vendido producto_vendido_cod_barras_inventario_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.producto_vendido
    ADD CONSTRAINT producto_vendido_cod_barras_inventario_fkey FOREIGN KEY (cod_barras_inventario) REFERENCES public.inventario(cod_barras);
 f   ALTER TABLE ONLY public.producto_vendido DROP CONSTRAINT producto_vendido_cod_barras_inventario_fkey;
       public       postgres    false    208    2722    198            �
           2606    24933 7   producto_vendido producto_vendido_num_venta_ventas_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.producto_vendido
    ADD CONSTRAINT producto_vendido_num_venta_ventas_fkey FOREIGN KEY (num_venta_ventas) REFERENCES public.ventas(num_venta);
 a   ALTER TABLE ONLY public.producto_vendido DROP CONSTRAINT producto_vendido_num_venta_ventas_fkey;
       public       postgres    false    208    197    2720            �
           2606    16702 #   productos productos_cod_barras_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.productos
    ADD CONSTRAINT productos_cod_barras_fkey FOREIGN KEY (cod_barras_inventario) REFERENCES public.inventario(cod_barras);
 M   ALTER TABLE ONLY public.productos DROP CONSTRAINT productos_cod_barras_fkey;
       public       postgres    false    198    206    2722            �
           2606    16560 #   telefono telefono_razon_social_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.telefono
    ADD CONSTRAINT telefono_razon_social_fkey FOREIGN KEY (razon_social_proveedor) REFERENCES public.proveedor(razon_social);
 M   ALTER TABLE ONLY public.telefono DROP CONSTRAINT telefono_razon_social_fkey;
       public       postgres    false    205    2724    199            �
           2606    16414    ventas ventas_razon_social_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.ventas
    ADD CONSTRAINT ventas_razon_social_fkey FOREIGN KEY (razon_social_cliente) REFERENCES public.cliente(razon_social);
 I   ALTER TABLE ONLY public.ventas DROP CONSTRAINT ventas_razon_social_fkey;
       public       postgres    false    2718    196    197            8      x������ � �      3   $  x�M�AN�0E��S�($i�!��*"P�6�Ĵ#9p	z�.Yr�\�������?��=�FC&4��f��ƙT��	ʎ�Fr�!$yqC��-���:2V ���8��X5���Y�;z�q�E�)���������*m���fkv��ld:�� ��>ߩeX�`�/�؛ ˯�b��^XY`����'Jýp.�jl�c{@�q��ё���I�+��h�V�,`���R��p�<x2�h�d)�"��1/,1 ].TM{�5k�ſJ�����;��ًT����uh�Y����RߘZ��      :   3   x�3��M,���
����E�Y�鹉�9z���\F�� �xS3$�=... C�      7      x������ � �      5   �   x�����0D�a�T������(4��Fi#Y��8��SG7�RѶI>%�60̫�HK����)5��v��
��e�pV0v/h��[�w��G�!;�a��w�*+�:�]��k�]4�r�g9]�_�#�!��0�և�p�_��T5RFL� �b��Q�g��谞7�W�v7� y���|0���d�      ?   t   x�e�;�@�z|"��9 -����)�����0BK�<d�D0���yc40�5Rw	�9`�T�n)�[����(�k���b�S�i5�?�|�N5��T6�z�˵��{#���--      =   �  x���͎�0����a�#ul�?G�U�"�]��^�ԥn���o�g�������-���l�8a`�P��/��b��o|���m�FX�ٟ.���?b%�3��(+�Е2V0i|�ut7�{�C�X�c�9��V&��
/~�� K����ﯯ�xƸ	JuJe��N�(��D����MMظO�O�|R�3If���������B��B).�Rib��j����=�Z���#7�>AZ5^�L<0K���f�(��#C%/34_XO��� �.r�f��=�V�d1��e�'��I9��a��6>�n%��S��Zǰ��5l��\(}Z"�栥FUZ8k�3b��h��Ba��AK(����UF���{�7��A��*u���r��Ot������T��ŝd�f��w��x      6   N   x��*���w��ќΩEe�y%�Ŝ��9ɩ)@�N�Ē�����bNsKN��b���̜�bNcK�=... �2�      <   -   x�3��*���w�45537��420�2B�Z��q��qqq �
�      4   c   x�s��500�4202�5 "SN3Nǜ̼� �0��H� $m�F�5F�520�tI��L��
�)0��U��[��W`����
3dfH�1z\\\ &�,�     