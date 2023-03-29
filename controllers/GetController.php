<?php
require 'model/getters/Getter.php';
require 'model/getters/UnitGetter.php';
require 'model/getters/UserGetter.php';
require 'model/getters/ActivityGetter.php';
require 'model/getters/CategoryGetter.php';
require 'model/getters/ReceptsGetter.php';
require 'model/getters/ReceptsIngredientGetter.php';
require 'model/getters/ReceptsStepsGetter.php';
require 'model/getters/WeightUserGetter.php';

class GetController extends TemplateController
{
     var $listGetters = [];

    protected function init(){
        $this->listGetters[USERS] = new UserGetter();
        $this->listGetters[UNITS] = new UnitGetter();
        $this->listGetters[RECEPTS] = new ReceptsGetter();
        $this->listGetters[CATEGORIES] = new CategoryGetter();
        $this->listGetters[ACTIVITIES] = new ActivityGetter();
        $this->listGetters[RECEPTS_STEPS] = new ReceptsStepsGetter();
        $this->listGetters[RECEPTS_INGREDIENTS] = new ReceptsIngredientGetter();
        $this->listGetters[WEIGHT_USERS] = new WeightUserGetter();
    }
    protected function run($type, $connection, $data){
        if(($getter = $this->listGetters[$type])){
            $getter->get($connection, $data);
        }
        else{
            echoNotFound(404, 'Table $type is not found');
        }
    }

}
