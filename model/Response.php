<?php

class Response {

    private $_success;
    private $_httpStatusCode;
    private $_messages = array();
    private $_data;
    private $_toCache = false;
    private $_responseData = array();

    public function setSuccess($success){
        $this->_success = $success;            // _success same as $_success
    }

    public function setHttpStatusCode($httpStatusCode){
        $this->_httpStatusCode = $httpStatusCode;
    }

    public function addMessage($message){
        $this->_messages[] = $message;
    }

    public function setData($data){
        $this->_data = $data;
    }

    public function toCache($toCache){
        $this->_toCache = $toCache;
    }

    public function send(){                                                 // response data to be send to client
        header('Content-type: application/json;charset=utf-8');            // tells client what type of data it's

        // wether client can cache response
        if($this->_toCache == true){                                     
            header('Cache-control: max-age=60');
        } else {
            header('Cache-control, no-cache, no-store');
        }

        // check for response sucess
        if(($this->_success !== false && $this->_success !== true)  || !is_numeric($this->_httpStatusCode)) {
            http_response_code(500);

            // building response data array
            $this->_responseData['statusCode'] = 500;
            $this->_responseData['success'] = false;

        }


    }





}