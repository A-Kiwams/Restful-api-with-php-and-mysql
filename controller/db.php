<?php

class DB {

    private static $writeDBConnection;
    private static $readDBConnection;

    public static function connectWriteDB(){
        if(self::$writeDBConnection == null){
            self::$writeDBConnection = new PDO('mysql:host=localhost;dbname=tasksdb;charset=utf8', 'root', 'root');
            self::$writeDBConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$writeDBConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }
    }

}