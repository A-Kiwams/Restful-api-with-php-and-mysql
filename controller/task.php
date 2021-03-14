<?php

require_once('db.php');
require_once('../model/Task.php');
require_once('../model/Response.php');

try{
    $writeDB = DB::connectWriteDB();
    $readDB = DB::connectReadDB();

} catch(PDOException $ex){
    kk
}