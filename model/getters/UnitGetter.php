<?php

class UnitGetter extends Getter
{
    protected function getAll($connection)
    {
        $this->getOnTemplateAll($connection, "unit");
    }

    protected function getObject($connection, $id)
    {
        $this->getOnTemplateId($connection, "unit", $id);
    }
}