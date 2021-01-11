<?php

session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "searchdetails";

$connection = new mysqli("localhost", "root", "", "searchdetails");
$first = $_POST['first'];
$second = $_POST['second'];

$query = $connection->query("select coolpoints from searchtable where name ='" . $first . "'AND lastname='" . $second . "'");

$mysqli = new mysqli("localhost", "root", "", "searchdetails");


    $array = Array();
    while($result = $query->fetch_assoc()){
        $array[] = $result['coolpoints'];
    }
  print "<p>$array[0]</p>";
$mysqli -> close();
