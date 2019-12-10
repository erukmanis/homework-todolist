<?php
require_once 'templates/header.php';
require_once '../source/login.php';
require_once 'signin.php';
echo "<hr>";


echo "hello world";
echo "<hr>";
if (2 * 2 == 4);
echo "It Works!";

echo "<hr>";
$a = "7";
var_dump($a);
echo "<hr>";

//require_once '../source/classes/variables.php';
//echo $todoListLink;

require_once '../config/config.php';

try {
    $conn = new PDO("mysql:host=$SERVER;dbname=$DB;charset=utf8", USER, PW);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


$stmt = $conn->prepare("SELECT * FROM schedule");
$stmt->execute();

$isFetchModeSet = $stmt->setFetchMode(PDO::FETCH_ASSOC);
var_dump($isFetchModeSet);


$allRows = $stmt->fetchAll();

// foreach ($allRows as $key => $row) {
//     echo "<hr>";
//     echo "KEY: ";
//     var_dump($key);
//     echo "<br>";
//     var_dump($row);
// }

foreach ($allRows as $row) {
    echo "<div>";
    echo "<span>Task: "  . $row["taskname"] . "</span>";
    echo "</div>";
}
echo "<hr>";

require_once '../source/echotodolist.php';

echo "<hr>";

require_once 'templates/footer.php';
