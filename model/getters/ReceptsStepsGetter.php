<?php

class ReceptsStepsGetter extends Getter
{

    protected function getAll($connection)
    {
        $this->getOnTemplateAll($connection, "receptssteps");
    }

    protected function getObject($connection, $id)
    {
        $this->getOnTemplateId($connection, "receptssteps", $id);
    }
}