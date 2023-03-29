<?php
abstract class Deleter
{
    protected function delete($connection, $id, $tableName){
        mysqli_query($connection, "DELETE FROM $tableName WHERE _id = ");
        echoResultCode(200, $id, $tableName . '_id');
    }
    public abstract function deleteRecord($connection, $id);
}