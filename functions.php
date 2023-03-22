<?php
require 'constants/query.php';
function getAllUsers($connect){
    $users = mysqli_query($connect, SelectAllUsers);

    $userList = [];


    while($user = mysqli_fetch_assoc($users)){
        $userList[] = $user;
    }

    echo json_encode($userList);
}
function getUser($connect, $id){
    $querys = "SELECT * FROM `user` WHERE id = '$id'";

    $users = mysqli_query($connect, $querys);

    if(mysqli_num_rows($users) > 0){
        $user = mysqli_fetch_assoc($users);

        echo json_encode($user);
    }
    else{
        echoNotFound("User not found");
    }
}

function echoNotFound($message){
    http_response_code(404);
    $res = [
        "status" => false,
        "message" => $message
    ];
    echo json_encode($res);
}
function echoCodeMessage($code, $message){
    http_response_code($code);
    $res = [
        "status" => false,
        "message" => $message
    ];
    echo json_encode($res);
}
function echoResultCode($code,$id, $nameId){
    http_response_code($code);
    $res = [
        "status" => true,
        $nameId => $id
    ];
    echo json_encode($res);
}
function createUser($connect, $data){
    $login = $data['login'];
    $age = $data['age'];
    $weight = $data['weight'];
    $height = $data['height'];
    $spentCalories = $data['spent_calories'];
    $sex = $data['sex'];
    $activity = $data['activity'];
    $email = $data['email'];


    $query = "INSERT INTO `user`(`Login`, `Age`, `Weight`, `Height`, `SpentCalories`, `Sex`, `Activity`, `E_mail`) VALUES ('$login','$age','$weight','$','$height',$spentCalories,'$sex','$activity','$email')";

    mysqli_query($connect, $query);

    http_response_code(201);
    $res = [
      "status" => true,
      "user_id" => mysqli_insert_id($connect)
    ];
    echo json_encode($res);
}

function createActivity($connect, $data){
    $name = $data['name'];

    mysqli_query($connect,"INSERT INTO `activity`(`Name_Act`) VALUES ('$name')");

    if(mysqli_insert_id($connect) === 0){
        echoCodeMessage(500, "Ошибка сервера!");
    }
    else{
        echoResultCode(201, mysqli_insert_id($connect), "activity_id");
    }

}