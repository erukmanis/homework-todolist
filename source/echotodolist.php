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
            echo "<span>KEY: $key </span>";
        }
        $columnsPrinted = true;
    }
    echo "<div>";
    // echo "<span>Task: " . $row["taskname"] . "</span>";
    foreach ($row as $key => $value) {
        echo "<span>$value</span>";
    }
    echo "<form action='deletetodo.php' method='post'>";
    echo "<button name='delete' value='" . $row['idschedule'] . "'>Delete</button>";
    echo "</form>";
    echo "<hr>";

    foreach ($row as $key => $value) {
        switch ($key) {
            case 'duedate':
            case 'taskname':
            case 'details':
                echo "<input name='$key' value='$value'>$value</input>";
                break;
            default:
                echo "$value";
                break;
        }
    }

    echo "<hr>";
    echo "<form action='updatetodo.php' method='post'>";
    echo "<button name='updatebutton' value='" . $row['idschedule'] . "'>Update</button>";
    echo "</form>";
    echo "</div>";
}
