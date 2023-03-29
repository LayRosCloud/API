<?php

abstract class DatabaseModel
{
    protected function post($connection, $tableName){
        if($this->isNotNullFields()){
            mysqli_query($connection, $this->getInsertQuery());

            echoResultCode(201, mysqli_insert_id($connection), "'$tableName'_id");
        }
        else{
            echoCodeMessage(400, "Server is bad data");
        }
    }
    protected abstract function isNotNullFields():bool;
    protected abstract function getInsertQuery():string;
    protected abstract function geUpdateQuery($id):string;
    public abstract function insert($connection);
    public function put($connection, $id){
        if($this->isNotNullFields()){
            mysqli_query($connection, $this->geUpdateQuery($id));
        }
        else{
            echoCodeMessage(400, "Server is bad data");
        }
    }
}