<?php

function sessionAdd ($params) {
    $sql = "INSERT INTO sessions (id_login, token) VALUES (:id, :token)";
    dbQuery($sql, $params);
    return true;
}