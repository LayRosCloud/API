<?php

class CommandController
{
    var $listCommand = [];

    public function construct($method, $type, $connection, $id, $data){
        $this->init();
        $this->push($method, $type, $connection, $id, $data);
    }

    protected function init(){
        $this->listCommand['GET'] = new GetController();
        $this->listCommand['PUT'] = new PutController();
        $this->listCommand['POST'] = new PostController();
        $this->listCommand['DELETE'] = new DeleteController();
    }

    protected function push($method, $type, $connection, $id, $data){
        if($method == 'POST'){
            $this->listCommand[$method]->start($type, $connection, $data);
        }
        elseif($method == 'PUT'){
            $this->listCommand[$method]->start($type, $connection, $id, $data);
        }
        elseif($this->listCommand[$method]){
            $this->listCommand[$method]->start($type, $connection, $id);
        }
        else{
            echoCodeMessage(505, 'Server is not supported this method');
        }
    }
}