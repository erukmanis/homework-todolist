<?php
require_once '../public/templates/header.php';
?>

<form action="get.php" method="get">
    <input type="text" name="nameInput" placeholder="Enter Name" required>
    <input type="text" name="emailInput" placeholder="Enter e-mail" required>
    <button type="submit" name="submitButton">Signin</button>
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo "We got a GET request!";
    foreach ($_GET as $key => $value) {
        echo "<div class='info-text'>We received name $key with value $value </div><hr>";
    }
    if (isset($_GET['nameInput'])) {
        echo "Hello there " . $_GET['nameInput'] . "! <hr>";
    }
    var_dump($_GET);
}

require_once '../public/templates/footer.php';
