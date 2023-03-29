<?php

class WeightUserPost extends Poster
{

    public function post($connection, $data)
    {
        $weightUser = new WeightUser($data);

        $weightUser->insert($connection);
    }
}