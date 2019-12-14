<?php

require_once '../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $taskid = $_POST['updatebutton'];
    $duedate = $_POST['duedate'];
    $taskname = $_POST['taskname'];
    $details = $_POST['details'];

    $stmt = $conn->prepare("UPDATE `schedule` SET `duedate` = (:duedate),`taskname` = (:taskname),
    `details` = (:details) WHERE `schedule`.`idschedule` = (:tasknum)");

    $stmt->bindParam(':tasknum', $taskid);
    $stmt->bindParam(':duedate', $duedate);
    $stmt->bindParam(':taskname', $taskname);
    $stmt->bindParam(':details', $details);

    $stmt->execute();

    //var_dump($_POST);

    // die("For Now!");

    //we go to our index.php or rather our root
    header('Location: /');
} else {
    echo "That was not a POST, most likely GET";
}



// die("For Now!");
