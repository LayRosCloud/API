<?php

class ReceptDeleter extends Deleter
{

    public function deleteRecord($connection, $id)
    {
        $this->delete($connection, $id, RECEPTS);
    }
}