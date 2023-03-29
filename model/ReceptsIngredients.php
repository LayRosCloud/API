<?php

class ReceptsIngredients extends DatabaseModel
{
    var $receptId;
    var $name;
    var $number;
    var $unitId;
    public function __construct($data)
    {
        $this->receptId = $data['recept_id'];
        $this->name = $data['name'];
        $this->number = $data['number'];
        $this->unitId = $data['unit_id'];
    }

    protected function isNotNullFields(): bool
    {
        return isset($this->receptId) && isset($this->name) && isset($this->number) && isset($this->unitId);
    }

    protected function getInsertQuery(): string
    {
        return "INSERT INTO `receptsingredient`(`ReceptsID`, `Name_RecIng`, `Number`, `UnitID`) 
VALUES (
 '$this->receptId',
 '$this->name',
 '$this->number',
 '$this->unitId')";
    }

    protected function geUpdateQuery($id): string
    {
        return "UPDATE `receptsingredient` SET `ReceptsID`='$this->receptId',`Name_RecIng`='$this->name',`Number`='$this->number',`UnitID`='$this->unitId' WHERE _id = $id";
    }

    public function insert($connection)
    {
        $this->post($connection, 'recept_ingredient');
    }
}