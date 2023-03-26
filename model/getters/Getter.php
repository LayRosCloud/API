<?php

abstract class Getter
{
    function get($connection, $id){
        if(isset($id)){
            $this->getObject($connection, $id);
        }
        else{
            $this->getAll($connection);
        }
    }

    protected function getOnTemplateAll($connection, $tableName){
        $objects = mysqli_query($connection, "SELECT * FROM $tableName ORDER BY _id");

        $objectsList = [];

        if(!mysqli_num_rows($objects)){
            echoNotFound("$tableName is blank list");
            return;
        }

        while($object = mysqli_fetch_assoc($objects)){
            $objectsList[] = $object;
        }

        echo json_encode($objectsList);
    }
    protected function getOnTemplateId($connection, $tableName, $id){
        $objects = mysqli_query($connection, "SELECT * FROM $tableName WHERE _id = $id");
        if(!mysqli_num_rows($objects)){
            echoNotFound("$tableName object not found");
            return;
        }

        $object = mysqli_fetch_assoc($objects);

        echo json_encode($object);
    }
    protected abstract function getAll($connection);
    protected abstract function getObject($connection, $id);
}