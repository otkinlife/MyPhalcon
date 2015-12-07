<?php
use Phalcon\Mvc\Controller;
use Base\BaseController;
use Users as UserModel;

class IndexController extends BaseController{
    
	public function indexAction(){
	   $usermodel = new UserModel();
	   $res = $usermodel->test();
	   $smarty = new Smarty();
	   $smarty->assign('data',$res);
	   $smarty->display(SMARTY_PATH.'index.tpl');
	}

}
