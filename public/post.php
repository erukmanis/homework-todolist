<?php
require_once '../public/templates/header.php';
?>

<form action="post.php" method="post">
    <input type="text" name="nameInput" placeholder="Enter Name" required>
    <input type="text" name="emailInput" placeholder="Enter e-mail" required>
    <button type="submit" name="submitButton">Signin</button>
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "We got a POST request!";
    foreach ($_POST as $key => $value) {
        echo "<div class='info-text'>We received name $key with value $value </div><hr>";
    }
    if (isset($_POST['nameInput'])) {
        echo "Hello there " . $_POST['nameInput'] . "! <hr>";
    } else {
        echo "that was not a POST, maybe GET";
    }
    var_dump($_POST);
}

require_once '../public/templates/footer.php';
