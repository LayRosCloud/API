<?php

class UserPost extends Poster
{
    public function post($connection, $data)
    {
        $user = new User($data);

        $user->insert($connection);
    }
}