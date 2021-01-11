<?php


session_start();


$mysqli = new mysqli("localhost", "root", "", "logindetails"); //CONNECT TO DATABASE

$name = $_POST['user']; //TAKE INPUT FROM THE INPUT FIELDS
$pass = $_POST['password']; //TAKE INPUT FROM THE INPUT FIELDS

if ($result = $mysqli->query("select * from namepassword where name='" . $name . "'")) {      //CHECKS IF THIS PERSON'S NAME IS ALREADY TAKEN
    if ($result->num_rows == 0) {     // IF THERE ARE NO ROWS THEN THE NAME IS FREE FOR TAKING
        if ($result = $mysqli->query("INSERT INTO namepassword (name, password) VALUES ('$name','$pass ')")) {  //INSERTING THE NAME AND PASSWORD IN THE DATABASE
            header('Location: Grades.php');
        }
    }
     else {
    echo " This name is already in use";
    }
}

$mysqli -> close();


