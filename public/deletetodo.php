<?php
require_once '../source/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // echo "We got a POST request!";
    // foreach ($_POST as $key => $value) {
    //     echo "<div>We received name $key with value $value </div><hr>";
    // }
    // if (isset($_POST['nameInput'])) {
    //     echo "Hello there " . $_POST['nameInput'] . "! <hr>";
    // }
    // var_dump($_POST);

    $taskid = $_POST['delete'];

    // prepare and bind
    $stmt = $conn->prepare("DELETE FROM `schedule` WHERE `schedule`.`idschedule` = (:tasknum)");
    $stmt->bindParam(':tasknum', $taskid);

    $stmt->execute();
    //we go to our index.php or rather our root
    header('Location: /');
} else {
    echo "That was not a POST, most likely GET";
}



// die("For Now!");
