<?php

require 'allLibrary.php';

//data of JSON
header('Content-type: json/application');

//connectString
$connect = new mysqli("127.0.0.1", "root", "кщще", "dietolog", 3306);

//URL parsing
$q = $_GET['q'];
$params = explode('/', $q);

$type = $params[0];
$id = $params[1];

//method request send client app
$method = $_SERVER['REQUEST_METHOD'];

$commandController = new CommandController();


$commandController->construct($method, $type, $connect, $id, $_POST);


