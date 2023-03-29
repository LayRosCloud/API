<?php

class ReceptsIngredientsPoster extends Poster
{
    public function post($connection, $data)
    {
        $receptIngredients = new ReceptsIngredientsDeleter($data);
        $receptIngredients->insert($connection);
    }
}