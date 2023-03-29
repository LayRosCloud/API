<?php

class ReceptPost extends Poster
{

    public function post($connection, $data)
    {
        $recept = new Recept($data);
        $recept->insert($connection);
    }
}