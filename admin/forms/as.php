<?php

require('../../config.php');

if (session('access_token')) {
    $user = apiRequest($apiURLBase);
} else {
    header("location: ../../auth.php");
    exit;
}

if (!in_array($user->id, $admin_discordids)) {
    header("location: ../../index.php");
    exit;
} else {
    $name = $_POST['name'];
    $text = $_POST['text'];
    $stars = $_POST['stars'];

    try {
        $stmt = $pdo->prepare("INSERT INTO reviews (`name`, `text`, `stars`) VALUES(?, ?, ?)");
        $stmt->execute([$name, $text, $stars]);

        $_POST = "";
        header("location: ../reviews.php");
    } catch (PDOException $e) {
        echo $e->getMessage();
        $_POST = "";
    }
}
