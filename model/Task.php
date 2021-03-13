<?php

class TaskException extends Exception {}

class Task{ 

    private $_id;
    private $_title;
    private $_description;
    private $_deadline;
    private $_completed;

    //Getters
    public function getID(){
        return $this->_id;
    }

    public function getTitile(){
        return $this->_title;
    }

    public function getDescription(){
        return $this->_description;
    }

    public function getDeadline(){
        return $this->_deadline;
    }

    public function getCompleted(){
        return $this->_completed;
    }

    //Setters
    public function setID($id){
        if(($id !== null) && (!is_numeric($id) || $id <= 0 || $id > 9223372036875775807 || $this->_id !== null)){
            throw new TaskException("Task ID error");
        }

        $this->_id = $id;    //els $this->_id = $id;
    }

    public function setTitle($title){
        if(strlen($title) < 0 || strlen($title) > 255){
            throw new TaskException("Task title error");
        } 

        $this->_title = $title; //otherwise if it is valid data
    }

    public function setDescription($description){
        if(($description !== null) && (strlen($description) > 16777215)){
            throw new TaskException("Task Discription Error");
        }
    }


}