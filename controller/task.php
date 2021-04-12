<?php

require_once('db.php');
require_once('../model/Task.php');
require_once('../model/Response.php');

try{
    $writeDB = DB::connectWriteDB();
    $readDB = DB::connectReadDB();

} catch(PDOException $ex){

    error_log("Connection error".$ex, 0);
    $response = new Response();
    $response->setHttpStatusCode(500);
    $response->setSuccess(false);
    $response->addMessage("Database connection error");
    $response->send();
    exit();
}

// Logic of the api: getting a single task

if(array_key_exists("taskid", $_GET)){
    
    $taskid = $_GET['taskid'];

    if($taskid == '' || !is_numeric($taskid)){
        $response = new Response();
        $response->setHttpStatusCode(400);
        $response->setSuccess(false);
        $response->addMessage("Task ID can not be blank or numeric");
        $response->send();
        exit();
    }

    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        HHHH

    } elseif($_SERVER['REQUEST_METHOD'] === 'DELETE'){
        //logic for functionality

    } elseif($_SERVER['REQUEST_METHOD'] === 'PATCH'){
        //logic

    } else {
        //logic
    }
}