<?php
include 'config.php';
session_start();
$_SESSION = array();
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 20, '/'); 
}
header("Location: login.php");
exit();
?>