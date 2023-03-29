<?php

class ReceptPut extends Putter
{

    function put($connection, $data, $id)
    {
        $recept = new Recept($data);

        $recept->put($connection, $id);
    }
}