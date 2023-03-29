<?php

abstract class Putter
{
    abstract function put($connection, $data, $id);
}