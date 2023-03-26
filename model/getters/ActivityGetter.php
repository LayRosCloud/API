<?php

class ActivityGetter extends Getter
{
    protected function getAll($connection)
    {
        $this->getOnTemplateAll($connection, "activity");
    }

    protected function getObject($connection, $id)
    {
        $this->getOnTemplateId($connection, "activity", $id);
    }
}