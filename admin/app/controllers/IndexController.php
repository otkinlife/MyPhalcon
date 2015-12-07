<?php

use Phalcon\Mvc\Controller;

class IndexController extends Controller
{

	public function indexAction()
	{
        echo "你好";
	}
	
	public function testAction($postId){
	    $this->view->postId = $postId;
	}

}
