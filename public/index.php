<?php
require_once 'templates/header.php';
echo "<hr>";
require_once '../source/login.php';
echo "<hr>";
// require_once 'signin.php';
// echo "<hr>";
require_once '../config/config.php';

echo "<hr>";



// echo "hello world";
// echo "<hr>";
// if (2 * 2 == 4);
// echo "It Works!";

// echo "<hr>";
// $a = "7";
// var_dump($a);


//require_once '../source/classes/variables.php';
//echo $todoListLink;


try {
    $conn = new PDO("mysql:host=$SERVER;dbname=$DB;charset=utf8", USER, PW);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
echo "<hr>";

$stmt = $conn->prepare("SELECT * FROM schedule");
$stmt->execute();

$isFetchModeSet = $stmt->setFetchMode(PDO::FETCH_ASSOC);
var_dump($isFetchModeSet);

echo "<hr>";

$allRows = $stmt->fetchAll();
foreach ($allRows as $row) {
    echo "<div>";
    echo "<span>Task: "  . $row["taskname"] . "</span>";
    echo "</div>";
}
echo "<hr>";

require_once '../source/echotodolist.php';

echo "<hr>";

require_once '../source/addtasks.php';

echo "<hr>";

require_once 'templates/footer.php';

// foreach ($allRows as $key => $row) {
//     echo "<hr>";
//     echo "KEY: ";
//     var_dump($key);
//     echo "<br>";
//     var_dump($row);
// }
