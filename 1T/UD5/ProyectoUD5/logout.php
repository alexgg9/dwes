<?php
session_start();
require('config.php');
session_destroy();
if (isset($_COOKIE['lang'])) {
    setcookie('lang', 'es', time() - 3600, "/");
}
header("Location: login.php");
?>
