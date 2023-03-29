<?php

class ReceptsIngredientsDeleter extends Deleter
{
    public function deleteRecord($connection, $id)
    {
        $this->delete($connection, $id, RECEPTS_INGREDIENTS);
    }
}