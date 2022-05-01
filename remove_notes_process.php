<?php

include "database.php";
$task_id = $_GET["task_id"];

$db->query( "DELETE FROM task WHERE id = $task_id" );

header("Location: remove_notes.php");
?>