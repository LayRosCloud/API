<?php

class CommandController
{
    var $listCommand = [];

    public function construct($method, $type, $connection, $id){
        $this->init();
        $this->push($method, $type, $connection, $id);
    }

    protected function init(){
        $this->listCommand['GET'] = new GetController();
        $this->listCommand['PUT'] = new PutController();
        $this->listCommand['POST'] = new PostController();
        $this->listCommand['DELETE'] = new DeleteController();
    }

    protected function push($method, $type, $connection, $id){
        if($this->listCommand[$method]){
            $this->listCommand[$method]->start($type, $connection, $id);
        }
        else{
            echoCodeMessage(505, 'Server is not supported this method');
        }
    }
}