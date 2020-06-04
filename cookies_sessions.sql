create table sessions
(
    id_session int auto_increment
        primary key,
    id_login   int                                 not null,
    token      varchar(128)                        not null,
    dt_add     timestamp default CURRENT_TIMESTAMP not null
);

INSERT INTO cookies.sessions (id_session, id_login, token, dt_add) VALUES (33, 4, '2c435ef1c69528be74990ef37fb8dd25cdb4dc328579b128ab1e1a776d8fbe9b1efab9f363c2ef3e13870d9dc2a93cb1debcc17810bb8675facbccee4d1f332d', '2020-06-04 18:39:33');
INSERT INTO cookies.sessions (id_session, id_login, token, dt_add) VALUES (34, 6, '1c68908be17cdca2d2bc5b330a8f68bfcbce9c60331a7559f2a4ba68c3abf9d06750ef8814d22e8afe1b2178f83f6c90dce49ac419956d393e22218957a8a66c', '2020-06-04 18:59:29');