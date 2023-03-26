<?php

require 'allLibrary.php';

//data of JSON
header('Content-type: json/application');

//connectString
$connect = new mysqli("127.0.0.1", "root", "root", "dietolog", 3307);

//URL parsing
$q = $_GET['q'];
$params = explode('/', $q);

$type = $params[0];
$id = $params[1];

//method request send client app
$method = $_SERVER['REQUEST_METHOD'];

$commandController = new CommandController();

if($method == 'POST'){
    $commandController->construct($method, $type, $connect, $_POST);
}
else{
    $commandController->construct($method, $type, $connect, $id);
}

/*switch ($method){
    case "POST":
        if($type === "users")
        {
            createUser($connect, $_POST);
        }
        elseif($type === "activity")
        {
            createActivity($connect, $_POST);
        }
        break;
    case "GET":
        $getController = new GetController();
        $getController->start($type, $connect, $id);
        break;
    default:
        echoNotFound("This command is not supported of server");
        break;
}*/
