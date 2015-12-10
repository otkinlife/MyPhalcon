<?php
use Phalcon\Mvc\Controller;
use Users as UserModel;
use Base\BaseController;
/**
 * Created by PhpStorm.
 * User: KaiChao
 * Date: 2015/12/9
 * Time: 19:02
 */
class UserController extends BaseController
{
    /**
     * ×¢²áº¯Êı
     */
    public function registerAction(){
        $param = $this->request->Post();
        $user_name = $param['user_name'];
        $user_pwd = $param['user_pwd'];
        $user_headimg = $param['user_headimg'];
        $user_email = $param['user_email'];
        $user_sex = $param['user_sex'];
    }
}