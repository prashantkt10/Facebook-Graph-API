<?php
session_start();
unset($_SESSION['data']);
session_destroy();

header("Location: fb-login.php");
?>
