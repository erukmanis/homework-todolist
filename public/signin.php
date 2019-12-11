<?php


?>

<form action="mainpage.php" method="get">
    <input type="text" name="nameInput" placeholder="Enter Name" required>
    <input type="text" name="emailInput" placeholder="Enter e-mail" required>
    <button type="submit" name="submitButton">Signin</button>
</form>



<a href="signin.php">Clear Form</a>;
<?php
if (isset($_SESSION['nameInput'])) {
    echo "Hello " . $_SESSION['nameInput'];
} else {
    echo "Please provide your name!";
}

?>

<?php



/*
echo  '<hr>';
echo '<input type="text" value="e-mail">';
echo  '<hr>';
echo '<input type="text" value="password">';
echo  '<hr>';
echo '<button id="signinbutton">Sign in</button>';
echo '<hr>';
echo '<input type="text" value="Name">';
echo  '<hr>';
echo '<input type="text" value="Last Name">';
echo  '<hr>';
echo '<input type="text" value="e-mail">';
echo  '<hr>';
echo '<input type="text" value="password">';
echo  '<hr>';
echo '<input type="text" value="repeat password">';
echo  '<hr>';
echo '<button id="createaccountbutton">Create account</button>';
echo '<hr>';
*/
