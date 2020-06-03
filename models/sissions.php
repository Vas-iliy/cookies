<?php

function sessionAdd ($params) {
    $sql = "INSERT INTO sessions (id_login, token) VALUES (:id, :token)";
    dbQuery($sql, $params);
    return true;
}

function sessionOne ($token) {
    $sql = "SELECT * FROM sessions WHERE token = :token";
    $data = dbQuery($sql, ['token' => $token]);
    $data = $data->fetch();
    return $data;
}