<?php

include "database.php";

$title = $_POST["title"];
$note = $_POST["note"];
$color = $_POST["color"];
$date = $_POST["date"];
$time = $_POST["time"];
$id = $_POST["id"];


       
        $db->query("UPDATE task SET title = '$title', note = '$note',color='$color',date='$date',time='$time' WHERE id = $id" );
        
        header("Location: edit_notes.php");
    


?>