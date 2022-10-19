<?php
if ($_POST["name"] == "Martin" and $_POST["password"] == "Webbutveckling123") {
    session_start();
    $_SESSION["user"] = $_POST["name"];
    header('Location: index.html');
}
else {
    echo "inloggningen misslyckades :(";
}
?>