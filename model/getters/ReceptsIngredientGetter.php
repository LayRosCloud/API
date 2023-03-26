<?php

class ReceptsIngredientGetter extends Getter
{
    protected function getAll($connection)
    {
        $this->getOnTemplateAll($connection, "receptsingredient");
    }

    protected function getObject($connection, $id)
    {
        $this->getOnTemplateId($connection, "receptsingredient", $id);
    }
}