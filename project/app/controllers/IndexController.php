<?php
use Phalcon\Mvc\Controller;
use Base\BaseController;

class IndexController extends BaseController{
    
	public function indexAction(){
	   $smarty = new Smarty();
	   $smarty->assign('data','sdfsad');
	   $smarty->display(SMARTY_PATH.'index.tpl');
	}

}
