<?php

class UserPut extends Putter
{
    function put($connection, $data, $id)
    {
        $user = new User($data);

        $user->put($connection, $id);
    }
}