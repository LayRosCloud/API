<?php

require 'model/posts/Poster.php';

require 'model/posts/UserPost.php';
require 'model/posts/ReceptPost.php';
require 'model/posts/WeightUserPost.php';
require 'model/posts/ReceptsIngredientsPoster.php';
require 'model/posts/ReceptStepsPost.php';

class PostController extends TemplateController
{
    private $listPosts = [];
    protected function init()
    {
        $this->listPosts[USERS] = new UserPost();
        $this->listPosts[RECEPTS] = new ReceptPost();
        $this->listPosts[WEIGHT_USERS] = new WeightUserPost();
        $this->listPosts[RECEPTS_INGREDIENTS] = new ReceptsIngredientsPoster();
        $this->listPosts[RECEPTS_STEPS] = new ReceptStepsPost();
    }

    protected function run($type, $connection, $data)
    {
        if($post = $this->listPosts[$type]){
            $post->post($connection, $data);
        }
        else{
            echoCodeMessage(505,'This table is not supported POST method');
        }
    }
}