<?php
    session_start();
    foreach (file("votes.txt", FILE_IGNORE_NEW_LINES) as $vote) {
        list($username, $color) = explode(',', $vote);
        if ($username == $_SESSION['username']) {
            echo "{$_SESSION['username']} already voted. <a href=\"results.php\">See results</a>";
            exit;
        }
    }
    if (isset($_POST['color'])) {
        $vote = $_SESSION['username'] . ', ' . $_POST['color'] . "<br>\n";
        file_put_contents("votes.txt", $vote, FILE_APPEND);
        header("Location: results.php");
    }
?>

<!DOCTYPE html>
<html>
    <body>
        What is your favorite color, <?php echo $_SESSION['username']; ?>
        <form action="poll.php" method="POST">
            <label>
                <input type="radio" name="color" value="Red" required> Red
            </label><br>
            <label>
                <input type="radio" name="color" value="Blue"> Blue
            </label><br>
            <label>
                <input type="radio" name="color" value="Green"> Green
            </label><br>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>
