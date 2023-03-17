create table colaboradoes
(
    id     int     not null,
    correo varchar(50) not null,
    contra varchar(200) not null,
    constraint colaboradoes_pk
        primary key (id)
);


create table pedidos
(
    id           int auto_increment not null,
    fecha_pedido datetime null,
    producto     varchar(100) null,
    unidades     int null,
    constraint pedidos_pk
        primary key (id)
);


