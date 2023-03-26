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
        $this->listGetters['users'] = new UserGetter();
        $this->listGetters['units'] = new UnitGetter();
        $this->listGetters['recepts'] = new ReceptsGetter();
        $this->listGetters['categories'] = new CategoryGetter();
        $this->listGetters['activities'] = new ActivityGetter();
        $this->listGetters['receptssteps'] = new ReceptsStepsGetter();
        $this->listGetters['receptsingredients'] = new ReceptsIngredientGetter();
        $this->listGetters['weightusers'] = new WeightUserGetter();
    }
    protected function run($type, $connection, $data){
        if(($getter = $this->listGetters[$type]) instanceof Getter){
            $getter->get($connection, $data);
        }

    }

}
