create table login
(
    id_login   int auto_increment
        primary key,
    login      varchar(30)                          not null,
    password   varchar(256)                         not null,
    email      varchar(30)                          not null,
    country    varchar(30)                          not null,
    auth_key   varchar(30)                          not null,
    validation tinyint(1) default 0                 not null,
    add_time   timestamp  default CURRENT_TIMESTAMP not null,
    new_time   timestamp  default CURRENT_TIMESTAMP not null,
    constraint login_login_uindex
        unique (login)
);

INSERT INTO cookies.login (id_login, login, password, email, country, auth_key, validation, add_time, new_time) VALUES (4, 'Vasiliy', '$2y$10$EyuoZmYwFw0b0sFyS7ln0u0hDB2GbyP6tCCtJvbo8yo3fxKzP1h.m', 'vkolyasev1999@mail.ru', 'Россия', 'c2cc8d888d8c4c1c56d7', 1, '2020-06-04 18:38:44', '2020-06-04 18:39:02');
INSERT INTO cookies.login (id_login, login, password, email, country, auth_key, validation, add_time, new_time) VALUES (6, '4525', '$2y$10$/peGKdaEzT8qmz6ZV2tI4uXM8tqwoCJ473bzvLmVkvUOe/F2.bDz2', 'namevkol1488@mail.ru', 'j', '6d923394dd63dc3d397d', 0, '2020-06-04 18:58:26', '2020-06-04 18:58:26');