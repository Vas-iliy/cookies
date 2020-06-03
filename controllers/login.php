<?php
//echo password_hash('123', PASSWORD_BCRYPT);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = extractFields($_POST, ['login', 'password'] );
    $remember = isset($_POST['remember']);
    $user = usersOne($login['login']);

    if ($user !== null && password_verify($login['password'], $user['password'])) {
        $token = substr(bin2hex(random_bytes(128)), 0, 128);
        $params = [
            'id' => $user['id_login'],
            'token' => $token
        ];
        sessionAdd($params);

        $_SESSION['token'] = $token;
        if ($remember) {
            setcookie('token', $token, time() + 3600*24*30);
        }
    }
    $authArr = true;
} else {
    $authArr = false;
}



$pageTitle = 'Login';

$pageContent = template('v_login', ['authArr' => $authArr]);