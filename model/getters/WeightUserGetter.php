<?php

class WeightUserGetter extends Getter
{
    protected function getObject($connection, $id)
    {
        $this->getOnTemplateId($connection, "weightuser", $id);
    }

    protected function getAll($connection)
    {
        $this->getOnTemplateAll($connection, "weightuser");
    }
}