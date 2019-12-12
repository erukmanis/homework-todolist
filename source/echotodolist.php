<?php

require_once 'db.php';


if (!isset($_SESSION['username'])) {
    echo "You need to register for To do List";
    return;
}

$stmt = $conn->prepare("SELECT * FROM schedule");
$stmt->execute();
$isFetchModeSet = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$allRows = $stmt->fetchAll();

$columnsPrinted = false;

foreach ($allRows as $row) {
    if (!$columnsPrinted) {
        foreach ($row as $key => $value) {
            echo "<div><span> KEY:  $key </span></div>";
        }
        $columnsPrinted = true;
    }

    echo "<hr>";

    // foreach ($row as $key => $value) {
    //     echo "<span>$value</span>";
    // }


    echo "<form action='updatetodo.php' method='post'>";

    foreach ($row as $key => $value) {

        switch ($key) {
            case 'favorite':
                $checked = $value ? "checked" : "";
                echo "<input type='checkbox' name='$key' value='$key' $checked></input>";
                break;
            case 'duedate':
            case 'taskname':
            case 'details':
                echo "<input name='$key' value='$value'></input>";
                break;
            default:
                echo "<span>$value </span>";
                break;
        }
    }

    echo "<button name='updatebutton' value='" . $row['idschedule'] . "'>Update</button>";

    echo "</form>";


    echo "<form action='deletetodo.php' method='post'>";
    echo "<button name='delete' value='" . $row['idschedule'] . "'>Delete</button>";
    echo "</form>";
}




// foreach ($row as $key => $value) {
//     switch ($key) {
//         case 'duedate':
//         case 'taskname':
//         case 'details':
//             echo "<input name='$key' value='$value'>$value</input>";
//             break;
//         default:
//             echo "$value";
//             break;
//     }
