<?php

session_start();

unset($_SESSION ['is_logged_in'] );
unset($_SESSION ['user_uname'] );

header("location: ../index.php");

?>
