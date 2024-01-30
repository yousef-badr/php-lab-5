<?php
include 'config.php';
include 'index.html';
session_start();
if (isset($_SESSION["username"])) {
    echo "<h2>Welcome, " . $_SESSION["username"] . " to our website.</h2>";
    echo "<button type="."button"." class="."btn btn-primary"." ><a href='logout.php'>Logout</a></button>";
    exit();
}
?>