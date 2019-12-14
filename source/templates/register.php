<?php

require_once './header.php';
?>

<div class="register">

    <form action="processregister.php" method="post">
        <input type="text" placeholder="User Name" name="username" required>
        <input type="password" name="password" id="" required>
        <button type="submit">Register</button>


    </form>

</div>

<?php

require_once './footer.php';
