<?php

class Recept extends DatabaseModel
{
    var $title;
    var $description;
    var $imageIcon;
    var $calories;
    var $fats;
    var $protein;
    var $carbohydrates;
    var $categoryId;
    var $userId;
    public function __construct($data)
    {
        $this->title = $data['title'];
        $this->description = $data['description'];
        $this->imageIcon = $data['image_icon'];
        $this->calories = $data['calories'];
        $this->fats = $data['fats'];
        $this->protein = $data['protein'];
        $this->carbohydrates = $data['carbohydrates'];
        $this->categoryId = $data['categoryid'];
        $this->userId = $data['userid'];
    }
    protected function isNotNullFields(): bool{
        return isset($this->title)
            && isset($this->description)
            && isset($this->imageIcon)
            && isset($this->calories)
            && isset($this->fats)
            && isset($this->protein)
            && isset($this->carbohydrates)
            && isset($this->categoryId)
            && isset($this->userId);
    }
    protected function getInsertQuery():string{
        return "INSERT INTO `recepts`(`Title`, `Description_Rec`, `ImageIcon`, `Calories`, `Fats`, `Carbohydrates`, `Protein`, `CategoryID`, `UserID`) 
                    VALUES ('$this->title','$this->description','$this->imageIcon','$this->calories','$this->fats','$this->carbohydrates','$this->protein','$this->categoryId','$this->userId')";
    }

    protected function geUpdateQuery($id): string
    {
        return "UPDATE `recepts` SET `Title`='$this->title',`Description_Rec`='$this->description',`ImageIcon`='$this->imageIcon',`Calories`='$this->calories',`Fats`='$this->fats',`Carbohydrates`='$this->carbohydrates',`Protein`='$this->protein',`CategoryID`='$this->categoryId',`UserID`='$this->userId' WHERE _id = $id";
    }

    public function insert($connection)
    {
        $this->post($connection, 'recept');
    }
}