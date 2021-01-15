<?php


session_start();

$host = "eu-cdbr-west-03.cleardb.net";
$user = "bfbcb16773a6f5";
$password = "8e2b1fc0";
$db = "logindetails";

$mysqli = new mysqli("eu-cdbr-west-03.cleardb.net", "bfbcb16773a6f5", "8e2b1fc0", "logindetails");

$name = $_POST['user'];
$pass = $_POST['password'];


if ($result = $mysqli->query("select * from namepassword where name='" . $name . "'AND password='" . $pass . "'")) {
    if ($result->num_rows == 0) {
        echo " You Have Entered Incorrect Password";
        exit();
    } else {
        header('Location: Grades.php');
    }
}

$mysqli -> close();
