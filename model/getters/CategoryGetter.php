<?php

class CategoryGetter extends Getter
{
    protected function getAll($connection)
    {
        $this->getOnTemplateAll($connection, "category");
    }

    protected function getObject($connection, $id)
    {
        $this->getOnTemplateId($connection, "category", $id);
    }
}