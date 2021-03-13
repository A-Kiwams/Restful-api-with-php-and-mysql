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

        $this->_description = $description;
    }

    public function setDeadline($deadline){
        if(($deadline !== null) && date_format(date_create_from_format('d/m/Y H:i', $deadline),'d/m/Y H:i') != $deadline){
            throw new TaskException("Task deadline date time error");
        }

        $this->_deadline = $deadline;
    }

    public function setCompleted($completed){
        if(strtoupper($completed) !== 'Y' && strtoupper($completed) !== 'N'){
            throw new TaskException("Task Completed Must Be Y or N");
        }

        $this->_completed = $completed;
    }


}