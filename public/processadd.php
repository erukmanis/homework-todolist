<?php
require_once '../source/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "We got a POST request!";
    foreach ($_POST as $key => $value) {
        echo "<div>We received name $key with value $value </div><hr>";
    }
    if (isset($_POST['nameInput'])) {
        echo "Hello there " . $_POST['nameInput'] . "! <hr>";
    }
    var_dump($_POST);

    $duedate = $_POST['duedateinput'];
    $taskname = $_POST['taskinput'];
    $details = $_POST['taskdetailsinput'];
    $user = $_POST = 1;

    $stmt = $conn->prepare('INSERT INTO schedule 
    (duedate, taskname, details, user) 
    VALUES (:duedateinput, :taskinput, :taskdetailsinput, :user)');
    $stmt->bindParam(':duedateinput', $duedate);
    $stmt->bindParam(':taskinput', $taskname);
    $stmt->bindParam(':taskdetailsinput', $details);
    $stmt->bindParam(':user', $user);

    $stmt->execute();

    header('Location: /');
} else {
    echo "that was not a POST, maybe GET";
}


// die("For Now!");
