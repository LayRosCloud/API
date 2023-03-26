<?php

abstract class TemplateController
{
    public function start($type, $connection, $id){
        $this->init();
        $this->run($type, $connection, $id);
    }
    protected abstract function init();
    protected abstract function run($type, $connection, $data);
}