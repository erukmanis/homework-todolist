<?php
require_once '../source/templates/header.php';

echo "<hr>";
require_once '../source/templates/login.php';
echo "<hr>";
require_once '../config/config.php';

echo "<hr>";

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

require_once '../source/templates/echotodolist.php';

echo "<hr>";

require_once '../source/templates/addtasks.php';

echo "<hr>";

require_once '../source/templates/footer.php';
