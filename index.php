<?php
include_once ('init.php');
session_start();
define('URL_PARAMS', parsUrl($_GET['querysystemurl'] ?? ''));
$cname = URL_PARAMS[0] ?? 'index';
$patch = "controllers/$cname.php";
$pageTitle = 'Ошибка 404';
$pageContent = '';




if (checkControllerName($cname) && file_exists($patch)) {
    include_once ($patch);
} else {
    $pageContent = template('errors/v_404');
}

$html = template('defolt/main', [
    'title' => $pageTitle,
    'content' => $pageContent
]);

echo $html;