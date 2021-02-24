<?php

require_once('Response.php');

$response = new Response();
$response->setSuccess(true);
$response->setHttpStatusCode(404);
$response->addMessage("Testing response model");
$response->send();

// This file is for testing purpose only: To make sure response model is working correctly