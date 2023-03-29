<?php

class WeightUserPut extends Putter
{
    function put($connection, $data, $id)
    {
        $weight = new WeightUser($data);
        $weight->put($connection, $id);
    }
}