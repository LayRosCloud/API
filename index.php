<?php
require 'constants/connecting.php';
require 'functions.php';

$arrayTemp = [
    "temp" => "value1",
    "value" => "21",
];

$method = $_SERVER['REQUEST_METHOD'];

header('Content-type: json/application');

$connect = new mysqli("127.0.0.1", "root", "кщще", "dietolog");

$q = $_GET['q'];
$params = explode('/', $q);

$type = $params[0];
$id = $params[1];

switch ($method){
    case "POST":
        if($type === "users"){
            createUser($connect, $_POST);
        }
        elseif($type === "activity"){
            createActivity($connect, $_POST);
        }
        break;
    case "GET":
        if($type === "users"){
            if(isset($id)){
                getUser($connect, $id);
            }
            else{
                getAllUsers($connect);
            }
        }
        else{
           echoNotFound("Table not found");
        }
        break;
    default:
        echoNotFound("This command is not supported of server");
        break;
}
