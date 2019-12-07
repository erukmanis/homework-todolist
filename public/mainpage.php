<?php
session_start();
require_once 'templates/header.php';

echo "<hr>";

echo "this is " . $_SESSION['nameInput'] . " to do list page";

echo "<hr>";

echo "HERE ADD FIELDS FOR TO DOS";

?>
<form action="mainpage.php" method="get">
    <input type="text" name="task" placeholder="Enter task" required>
    <input type="text" name="details" placeholder="Enter task details" required>
    <input type="date" name="duedate" placeholder="Enter task deadline" required>
    <input type="time" name="time" placeholder="Enter task time" required>

    <button type="submit" name="submitButton">Save task</button>
</form>

<?php


echo "<hr>";

echo "HERE ADD TO DOS LIST WITH DATES DELETE AND MODIFY, SOONEST FIRST";

echo "<hr>";

echo "processing form";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo "We got a GET request!";
    foreach ($_GET as $key => $value) {
        echo " We received name $key with value $value <br>";
    }
    if (isset($_GET['nameInput'])) {
        echo "Hello there " . $_GET['nameInput'] . "!";
        $_SESSION['nameInput'] = $_GET['nameInput'];
    }
}
echo "<hr>";
?>
<a href="signin.php">Return to signin page</a>;


<a href="tempdata.php">Temporary data</a>;


<?php
echo "<hr>";
require_once 'templates/footer.php';
