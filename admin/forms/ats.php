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
    $img = $_POST['img'];
    $title = $_POST['title'];
    $text = $_POST['text'];
    $gtext = $_POST['btn-text'];

    try {
        $stmt = $pdo->prepare("INSERT INTO features (`title`, `img`, `text`, `btn-text`) VALUES(?, ?, ?, ?)");
        $stmt->execute([$title, $img, $text, $gtext]);

        $_POST = "";
        header("location: ../index.php");
    } catch (PDOException $e) {
        echo $e->getMessage();
        $_POST = "";
    }
}
