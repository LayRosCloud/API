<?php

class ReceptStepsPost extends Poster
{

    public function post($connection, $data)
    {
        $receptSteps = new ReceptStepsDeleter($data);
        $receptSteps->insert($connection);
    }
}