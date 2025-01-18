<?php
session_start();
require('config.php');
session_destroy();
if (isset($_COOKIE['username'])) {
    setcookie('username', '', time() - 3600, '/'); 
}
header("Location: login.php");
?>
