<?php

require 'model/DatabaseModel.php';
require 'model/Recept.php';
require 'model/ReceptsIngredients.php';
require 'model/ReceptSteps.php';
require 'model/User.php';
require 'model/WeightUser.php';

require 'model/puts/Putter.php';
require 'model/puts/ReceptPut.php';
require 'model/puts/ReceptIngredientPut.php';
require 'model/puts/ReceptsStepsPut.php';
require 'model/puts/UserPut.php';
require 'model/puts/WeightUserPut.php';

class PutController
{
    private $list = [];
    public function start($type, $connection, $id, $data){
        $this->init();
        $this->run($type, $connection, $id, $data);
    }
    protected function init()
    {
        $this->list[USERS] = new UserPut();
        $this->list[RECEPTS_INGREDIENTS] = new ReceptIngredientPut();
        $this->list[RECEPTS_STEPS] = new ReceptsStepsPut();
        $this->list[RECEPTS] = new ReceptPut();
        $this->list[WEIGHT_USERS] = new WeightUserPut();
    }

    protected function run($type, $connection, $id, $data)
    {
        if($this->list[$type]){
            $this->list[$type]->put($connection, $data, $id);
        }
        else{
            echoCodeMessage(505,'This table is not supported PUT method');
        }
    }
}