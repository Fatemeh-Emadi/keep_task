<?php 
include "database.php";
$title1= $_POST["title"];
$note1= $_POST["note"];
$date1 = $_POST["date"];
$time1 = $_POST["time"];
$color1 = $_POST["color"];
$db->query("INSERT INTO task(title,note,color,date,time) VALUES('$title1','$note1','$color1','$date1','$time1')");
header("location:index.php");

?>