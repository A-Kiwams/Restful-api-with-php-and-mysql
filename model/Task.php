<?php

class TaskException extends Exception {}

class Task{ 

    private $_id;
    private $_title;
    private $_description;
    private $_deadline;
    private $_completed;

    //getters and setters

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


}