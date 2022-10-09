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
    $id = $_GET['id'];

    try {
        $stmt = $pdo->prepare("DELETE FROM reviews WHERE id=?");
        $stmt->execute([$id]);

        $_GET = "";
        header("location: ../sites.php#reviews");
    } catch (PDOException $e) {
        echo $e->getMessage();
        $_GET = "";
    }
}
