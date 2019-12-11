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

    $taskid = $_POST['updatebutton'];
    $duedate = $_POST['duedate'];
    $taskname = $_POST['taskname'];
    $details = $_POST['details'];





    // prepare and bind
    // UPDATE `schedule` SET `idschedule` = NULL, `duedate` = '2019-12-18', `taskname` = 'yyhka', `details` = 'serhserhs', `created` = current_timestamp(), `user` = '' WHERE `schedule`.`idschedule` = 2


    $stmt = $conn->prepare("UPDATE `schedule` 
    SET `duedate` = (:duedate),
    `taskname` = (:taskname),
    `details` = (:details)
    WHERE `schedule`.`idschedule` = (:tasknum)");
    $stmt->bindParam(':tasknum', $taskid);
    $stmt->bindParam(':duedate', $duedate);
    $stmt->bindParam(':taskname', $taskname);
    $stmt->bindParam(':details', $details);

    $stmt->execute();
    //we go to our index.php or rather our root
    header('Location: /');
} else {
    echo "That was not a POST, most likely GET";
}



// die("For Now!");
