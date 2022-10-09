<?php

$config = array(
    'db-host' => 'localhost', // your database host IP or domain
    'db-user' => 'root', // database username
    'db-password' => '', // database password
    'db-name' => 'fox'
);

define('OAUTH2_CLIENT_ID', '970994142714929192');
define('OAUTH2_CLIENT_SECRET', '');

$authorizeURL = 'https://discord.com/api/oauth2/authorize';
$tokenURL = 'https://discord.com/api/oauth2/token';
$apiURLBase = 'https://discord.com/api/users/@me';

session_start();

$admin_discordids = array('98093345506615296', '221112738032779264'); //discord ids of accounts that are already made and you want them to access the admin panel

try {
    $pdo = new PDO("mysql:host=" . $config['db-host'] . ";dbname=" . $config['db-name'], $config['db-user'], $config['db-password']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}

$sql = "CREATE TABLE IF NOT EXISTS `reviews` (
	id bigint unsigned not null auto_increment primary key,
    `name` text NOT NULL,
    `stars` text NOT NULL,
    `text` text NOT NULL
);";

$pdo->exec($sql);

$sql = "CREATE TABLE IF NOT EXISTS `features` (
	id bigint unsigned not null auto_increment primary key,
    `img` text NOT NULL,
    `title` text NOT NULL,
    `text` text NOT NULL,
    `btn-text` text NOT NULL
);";

$pdo->exec($sql);

function apiRequest($url, $post = FALSE, $headers = array())
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

    $response = curl_exec($ch);


    if ($post)
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));

    $headers[] = 'Accept: application/json';

    if (session('access_token'))
        $headers[] = 'Authorization: Bearer ' . session('access_token');

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec($ch);
    return json_decode($response);
}

function get($key, $default = NULL)
{
    return array_key_exists($key, $_GET) ? $_GET[$key] : $default;
}

function session($key, $default = NULL)
{
    return array_key_exists($key, $_SESSION) ? $_SESSION[$key] : $default;
}