<?php


session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "logindetails";

$mysqli = new mysqli("localhost", "root", "", "logindetails");

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
