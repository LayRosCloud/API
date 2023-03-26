<?php

class UserGetter extends Getter
{
    protected function getObject($connection, $id)
    {
        $this->getOnTemplateId($connection, "user", $id);
    }

    protected function getAll($connection)
    {
        $this->getOnTemplateAll($connection, "user");
    }
}