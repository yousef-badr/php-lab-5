<?php
include 'index.html';
include 'config.php';
mysqli_select_db( $conn,$dbname );
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["username"];
    $password = $_POST["password"];
    $sql = "INSERT INTO users (username, password ) VALUES ('$name', '$password')";
}

header("Location: login.php");
$retval = mysqli_query( $conn,$sql );
mysqli_close($conn);
?>