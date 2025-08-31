<?php 
session_start();

const DB_HOST = "127.0.0.1";
const DB_USER = "root";
const DB_PWD = "";
const DB_NAME = "auth_test";

$dbConn = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME);

$randomNum = rand(0, 999999);
$now = date("d-m-Y h:i:s");
$errors = [];
