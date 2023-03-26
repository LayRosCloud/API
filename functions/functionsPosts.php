<?php
function createActivity($connect, $data){
    $name = $data['name'];
    if(!$name){
        echoCodeMessage(400, "Activity parameter is bad");
        return;
    }

    mysqli_query($connect,"INSERT INTO `activity`(`Name_Act`) VALUES ('$name')");

    if(mysqli_insert_id($connect) === 0){
        echoCodeMessage(500, "Ошибка сервера!");
    }
    else{
        echoResultCode(201, mysqli_insert_id($connect), "activity_id");
    }
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