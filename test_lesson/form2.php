<?php
if (!isset($_POST['submit'])) {
    echo '<form action="form2.php" method="POST">';
    echo '<p>Enter your name:<input type="text" name="username"></p>';
    echo '<p>Enter your password:
<input type="password" name="userpass"></p>';
    echo '<p><input type="submit" name="submit" value="Login"></p>';
    echo '</form>';
} else {
    echo 'Your are  wellcome,' . $_POST["username"] . '! Your password is' . $_POST["userpass"] . '<br/>';
}