<?php
class ReceptsGetter extends Getter
{
    protected function getAll($connection)
    {
        $this->getOnTemplateAll($connection, "recepts");
    }

    protected function getObject($connection, $id)
    {
        $this->getOnTemplateId($connection, "recepts", $id);
    }
}