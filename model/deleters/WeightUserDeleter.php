<?php

class WeightUserDeleter extends Deleter
{
    public function deleteRecord($connection, $id)
    {
        $this->delete($connection, $id, WEIGHT_USERS);
    }
}