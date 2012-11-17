<?php
class IndexController extends Zend_Controller_Action{
    public function init(){
    	$this->view->active = 1;
    }

    public function indexAction(){}
}
?>