<?php

function usersOne ($login) {
    $sql = "SELECT * FROM login WHERE login = :login";
    $data = dbQuery($sql, ['login' => $login]);
    $data = $data->fetch();
    return $data;

}