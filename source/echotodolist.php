<?php

require_once 'db.php';

$stmt = $conn->prepare("SELECT * FROM schedule");
$stmt->execute();

$isFetchModeSet = $stmt->setFetchMode(PDO::FETCH_ASSOC);

$allRows = $stmt->fetchAll();

$columnsPrinted = false;
foreach ($allRows as $row) {
    if (!$columnsPrinted) {
        foreach ($row as $key => $value) {
            echo "KEY: $key <br>";
        }
        $columnsPrinted = true;
    }
    echo "<div>";
    echo "<span>Task: " . $row["taskname"] . "</span>";
    echo "</div>";
}
