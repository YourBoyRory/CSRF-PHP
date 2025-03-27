<?php
    session_start();
    $_SESSION['token'] = md5(uniqid(microtime(), true));  
?>

<!DOCTYPE html>
<html>
    <body>
        What is your favorite color, <?php echo $_SESSION['username']; ?>
        <form action="results.php" method="POST">
            <label>
                <input type="radio" name="color" value="Red" required> Red
            </label><br>
            <label>
                <input type="radio" name="color" value="Blue"> Blue
            </label><br>
            <label>
                <input type="radio" name="color" value="Green"> Green
            </label><br>
            <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
            <button type="submit">Submit</button>
        </form>
    </body>
</html>
