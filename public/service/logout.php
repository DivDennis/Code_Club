<?php

session_start();

unset($_SESSION ['is_logged_in'] );
unset($_SESSION ['user_uname'] );
unset($_SESSION['admin_level']);

header("location: ../index.php");

?>
