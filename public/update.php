 
 <?php

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
