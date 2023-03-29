<?php

class UserDeleter extends Deleter
{
    public function deleteRecord($connection, $id)
    {
        $this->delete($connection, $id, USERS);
    }
}