<?php

require_once '../source/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare('SELECT hash FROM users WHERE  (username = :username)');

    $stmt->bindParam(':username', $username);
    $stmt->execute();

    $isFetchModeSet = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $allRows = $stmt->fetchAll();
    //var_dump($allRows);


    if (count($allRows) > 0) {
        $hash = $allRows[0]['hash'];
        //print_r($hash);

        if (password_verify($password, $hash)) {
            echo "You are logged in!";
        } else {
            echo "Login failed!";
        }
    }
}
