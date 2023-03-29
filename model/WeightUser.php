<?php

class WeightUser extends DatabaseModel
{
    var $number;
    var $date;
    var $userID;
    public function __construct($data)
    {
        $this->number = $data['number'];
        $this->date = $data['date'];
        $this->userID = $data['user_id'];
    }

    protected function isNotNullFields():bool
    {
        return isset($number) && isset($date) && isset($userID);
    }

    protected function getInsertQuery():string{
        return "INSERT INTO `weightuser`(`Number`, `Date`, `UserID`)
VALUES ('$this->number','$this->date','$this->userID')";
    }

    protected function geUpdateQuery($id):string
    {
        return "UPDATE `weightuser` SET `Number`='$this->number',`Date`='$this->date',`UserID`='$this->userID' WHERE _id = $id";
    }

    public function insert($connection)
    {
        $this->post($connection, 'weight_user');
    }
}