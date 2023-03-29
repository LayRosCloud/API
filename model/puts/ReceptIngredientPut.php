<?php

class ReceptIngredientPut extends Putter
{

    function put($connection, $data, $id)
    {
        $receptIng = new ReceptsIngredientsDeleter($data);

        $receptIng->put($connection, $id);
    }
}