<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $_SESSION['username'] = $_POST['username'];
        header("Location: poll.php");
    }
?>

<!DOCTYPE html>
<html>
    <body>
        <form action="login.php" method="POST">
            <label for="username">Username: </label>
            <input type="text" id="username" name="username" required>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>
