<?php

class ReceptsStepsPut extends Putter
{

    function put($connection, $data, $id)
    {
        $step = new ReceptStepsDeleter($data);
        $step->put($connection, $id);
    }
}