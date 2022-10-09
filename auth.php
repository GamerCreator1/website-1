<?php

require('config.php');

if (get('action') == 'logout') {
    // This must to logout you, but it didn't worked(

    $params = array(
        'access_token' => $logout_token
    );

    // Redirect the user to Discord's revoke page
    header('Location: https://discord.com/api/oauth2/token/revoke' . '?' . http_build_query($params));
    die();
}

if (get('action') == 'login') {

    $params = array(
        'client_id' => OAUTH2_CLIENT_ID,
        'redirect_uri' => 'http://localhost/auth.php',
        'response_type' => 'code',
        'scope' => 'identify guilds'
    );

    // Redirect the user to Discord's authorization page
    header('Location: https://discord.com/api/oauth2/authorize' . '?' . http_build_query($params));
    die();
}


// When Discord redirects the user back here, there will be a "code" and "state" parameter in the query string
if (get('code')) {

    // Exchange the auth code for a token
    $token = apiRequest($tokenURL, array(
        "grant_type" => "authorization_code",
        'client_id' => OAUTH2_CLIENT_ID,
        'client_secret' => OAUTH2_CLIENT_SECRET,
        'redirect_uri' => 'http://localhost/auth.php',
        'code' => get('code')
    ));
    $logout_token = $token->access_token;
    $_SESSION['access_token'] = $token->access_token;


    header('Location: ' . $_SERVER['PHP_SELF']);
}

if (session('access_token')) {
    header("location: admin/index.php");
    exit;
} else {
    echo '<h3>Something went wrong</h3>';
    echo '<p><a href="?action=login">Log In</a></p>';
    header("location: ?action=login");
}
