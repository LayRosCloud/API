<?php

require 'model/deleters/Deleter.php';
require 'model/deleters/ReceptDeleter.php';
require 'model/deleters/ReceptsIngredientsDeleter.php';
require 'model/deleters/ReceptStepsDeleter.php';
require 'model/deleters/UserDeleter.php';
require 'model/deleters/WeightUserDeleter.php';

class DeleteController extends TemplateController
{
    private $list = [];
    protected function init()
    {
        $this->list[USERS] = new UserDeleter();
        $this->list[RECEPTS] = new ReceptDeleter();
        $this->list[RECEPTS_INGREDIENTS] = new ReceptsIngredientsDeleter();
        $this->list[RECEPTS_STEPS] = new ReceptStepsDeleter();
        $this->list[WEIGHT_USERS] = new WeightUserDeleter();
    }

    protected function run($type, $connection, $data)
    {
        if($this->list[$type]){
            $this->list[$type]->deleteRecord($connection, $data);
        }
        else{
            echoCodeMessage(505,'This table is not supported DELETE method');
        }
    }
}