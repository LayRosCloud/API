<?php

class ReceptSteps extends DatabaseModel
{
    var $image;
    var $title;
    var $description;
    var $receptID;
    var $uniqueNumber;

    public function __construct($data)
    {
        $this->image = $data['image_icon'];
        $this->title = $data['title'];
        $this->description = $data['description'];
        $this->receptID = $data['recept_id'];
        $this->uniqueNumber = $data['unique_number'];
    }

    protected function isNotNullFields():bool
    {
        return isset($title) && isset($description) && isset($receptID) && isset($uniqueNumber);
    }

    protected function getInsertQuery(): string
    {
        return "INSERT INTO `receptssteps`( `ImageIcon`, `Title`, `Description`, `ReceptsID`, `UniqueNumder`) 
VALUES ('$this->image','$this->title','$this->description','$this->receptID','$this->uniqueNumber')";
    }

    protected function geUpdateQuery($id): string
    {
        return "UPDATE `receptssteps` SET `ImageIcon`='$this->image',`Title`='$this->title',`Description`='$this->description',`ReceptsID`='$this->description',`UniqueNumder`='$this->uniqueNumber' WHERE _id = $id";
    }

    public function insert($connection)
    {
        $this->post($connection, 'recepts_steps');
    }
}