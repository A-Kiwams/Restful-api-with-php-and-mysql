<?php

require_once('Task.php');

try{
    $task = new Task(1, "Title here", "Description here", "01/01/2019 12:00", "N");
    header('Content-type: application/json;charset=UTF-8');
    echo json_encode($task->returnTaskAsArray());

} catch (TaskException $ex) {
    echo "Error: ".$ex->getMessage();
}

// File not needed. Only testing task.php model  