<?php

session_start();
if (isset($_SESSION['username'])) {

    echo "you are logged in " . $_SESSION['username'];
} else {
    echo "you need to register";
    echo "<a href='register.php'>Register</a>";
    echo "<form class='login-f' action='processLogin.php' method='post'>";
    echo "<input name='username' type='password' placeholder='enter username' required>";
    echo "<input name='password' type='password' placeholder='enter password' required>";
    echo "<button>Login</Login>";
    echo "</form>";
}
echo "<hr>";
