<?php
/**
 * Created by PhpStorm.
 * User: dor
 * Date: 2/21/15
 * Time: 6:04 PM
 */

class Controller {
    private $model;
    private $view;

    public function __construct() {

    }

    public function register($username,$password,$email,$fname,$lname,$bdate){
        $result=$this->model->register($username,$password,$email,$fname,$lname,$bdate);

    }

    public function setControl($model,$view){
        $this->model = $model;
        $this->view = $view;
    }

    public function hashtag($tags,$username){

        $parts = explode(',', $tags);
        foreach ($parts as $tag){
           $this->model->hashtag($tag);
            $this->model->user2Hash($tag,$username);
        }
        return true;
    }
}