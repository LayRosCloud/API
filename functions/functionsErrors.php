<?php

function echoNotFound($message)
{
    http_response_code(404);
    $res = [
        "status" => false,
        "message" => $message
    ];
    echo json_encode($res);
}

function echoCodeMessage($code, $message)
{
    http_response_code($code);
    $res = [
        "status" => false,
        "message" => $message
    ];
    echo json_encode($res);
}

function echoResultCode($code,$id, $nameId)
{
    http_response_code($code);
    $res = [
        "status" => true,
        $nameId => $id
    ];
    echo json_encode($res);
}