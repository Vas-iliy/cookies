<?php

function usersOne ($login) {
    $sql = "SELECT id_login, password FROM login WHERE login = :login";
    $data = dbQuery($sql, ['login' => $login]);
    $data = $data->fetch();
    return $data;

}

function usersById ($id) {
    $sql = "SELECT id_login, email FROM login WHERE id_login = :id";
    $data = dbQuery($sql, ['id' => $id]);
    $data = $data->fetch();
    return $data;

}