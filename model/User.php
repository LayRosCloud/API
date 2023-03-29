<?php

class User extends DatabaseModel
{
    var $activityID;
    var $age;
    var $weight;
    var $height;
    var $email;
    var $login;
    var $spentCalories;
    var $sex;
    public function __construct($data){
        $this->activityID = $data['activityID'];
        $this->age = $data['age'];
        $this->weight = $data['weight'];
        $this->height = $data['height'];
        $this->email = $data['email'];
        $this->login = $data['login'];
        $this->spentCalories = $data['spent_calories'];
        $this->sex = $data['sex'];
    }
    
    protected function isNotNullFields():bool
    {
        return isset($this->login) && isset($this->age) && isset($this->weight) && isset($this->height)&&
            isset($this->email) && isset($this->activityID) && isset($this->spentCalories) && isset($this->sex);
    }
    protected function getInsertQuery():string{
        return "INSERT INTO `user`(`Login`, `Age`, `Weight`, `Height`, `SpentCalories`, `Sex`, `Activity`, `E_mail`)" .
            " VALUES '$this->login','$this->age','$this->weight','$this->height','$this->spentCalories','$this->sex','$this->activityID','$this->email')";
    }

    protected function geUpdateQuery($id): string
    {
        return "UPDATE `user` SET `Login`='$this->login',`Age`='$this->age',`Weight`='$this->weight',`Height`='$this->height',`SpentCalories`='$this->spentCalories',`Sex`='$this->sex',`Activity`='$this->activityID',`E_mail`='$this->email' WHERE _id = $id";
    }
    public function insert($connection){
        $this->post($connection, 'user');
    }
}