PGDMP     
    7                z           GinderDB    14.2    14.2     �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    16412    GinderDB    DATABASE     g   CREATE DATABASE "GinderDB" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'English_Canada.1252';
    DROP DATABASE "GinderDB";
                postgres    false            �            1259    16418 
   gamerposts    TABLE     �   CREATE TABLE public.gamerposts (
    gamertag character varying(30),
    game character varying(30),
    console character varying(30),
    skill integer,
    description character varying(500)
);
    DROP TABLE public.gamerposts;
       public         heap    postgres    false            �            1259    16413    profile    TABLE     �   CREATE TABLE public.profile (
    firstname character varying,
    lastname character varying,
    email character varying,
    gender character varying,
    gamertag character varying,
    console character varying,
    skill integer
);
    DROP TABLE public.profile;
       public         heap    postgres    false            �          0    16418 
   gamerposts 
   TABLE DATA           Q   COPY public.gamerposts (gamertag, game, console, skill, description) FROM stdin;
    public          postgres    false    210   �       �          0    16413    profile 
   TABLE DATA           _   COPY public.profile (firstname, lastname, email, gender, gamertag, console, skill) FROM stdin;
    public          postgres    false    209   �	       �   �  x�u��n�0�ϫ�X=@
GN΅����r�
k{#��H����Oߵ���(����oF�̝=p�a�
C�#���V"��$���c�˜���(���Ɲ��+��18��;Ջ���v0�-Ś,4�N<{;em�����`另�QM��z5�9@��=������I��y����%���ff���B��0�tq�%�Y�_�h˛�bj)��|1Q�Yb�K��m�e<�����	=I�{������\x�mJxpQQ�OVW*�ޜ�peF�
ss7�����b�������Sz���+��3xߺwY�J1��'bޤiRpd_�?�����^�Ɯ,f]��.��w�zm=~8o��SLD��(o�#����%�d���R�H�Xn�8�����*��p9�̾��oI�����      �     x���MO�0��Ώ��8Wb�4���.�vڎ6���j��+�,���C���[�gqy�iJ�&�ź�T�!v+8��#��E��7U�t<͌����l(�=�n���A�{�dk���K���1vV�
��?��Hu�޶�ڔ˙tE���n�����w��I�y]���`ӎB�{��)���y�,cZ�����,��:}�:t��D�0,��VH&��ɡ��\���O
�N����t�A��� �9/���,Mg4�pw����k)S�D)� '��     