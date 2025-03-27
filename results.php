<?php
    session_start();
    foreach (file("votes.txt", FILE_IGNORE_NEW_LINES) as $vote) {
        list($username, $color) = explode(',', $vote);
        if ($username == $_SESSION['username']) {
            echo "{$_SESSION['username']} already voted.<br><br>";
            readfile("votes.txt", false, null);
            exit;
        }
    }
    if (isset($_POST['color']) && $_POST['token'] == $_SESSION['token']) {
        $vote = $_SESSION['username'] . ', ' . $_POST['color'] . "<br>\n";
        file_put_contents("votes.txt", $vote, FILE_APPEND);
        readfile("votes.txt", false, null);
    }
?>
