<?php

session_start();
unset($_SESSION['pa_app_customer']);
$_SESSION['loginMsg'] = "you have been successfully logged out";
header("Location: login.php");
