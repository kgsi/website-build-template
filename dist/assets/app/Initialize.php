<?php
/*
 *
 * Initialize
 *
 */

ini_set('display_errors', 1);
error_reporting(E_ERROR | E_WARNING | E_PARSE);

mb_language('ja');
mb_internal_encoding('utf-8');


if($_SERVER['SERVER_NAME'] == 'spotdesign.jp' || $_SERVER['SERVER_NAME'] == 'localhost'){
    define('SITE_URL','https://spotdesign.jp/');
}else if($_SERVER['SERVER_NAME'] == 'dev.spotdesign.jp'){
    define('SITE_URL','http://spotdesign:qazxc@dev.spotdesign.jp/');
}

$url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
define('URL', $url);

session_start();

// CSRF TOKEN
if(!isset($_SESSION['csrfToken']) && $_SESSION['csrfToken'] == null) {
    $TOKEN_LENGTH = 16;
    $tokenByte = openssl_random_pseudo_bytes($TOKEN_LENGTH);
    $csrfToken = bin2hex($tokenByte);
    $_SESSION['csrfToken'] = $csrfToken;
}

