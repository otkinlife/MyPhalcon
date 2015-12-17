<?php
use Phalcon\Mvc\Controller;
use Base\BaseController;
include_once ROOT_PATH."app/models/Users.php";
/**
 * Created by PhpStorm.
 * User: KaiChao
 * Date: 2015/12/9
 * Time: 19:02
 */
class UserController extends BaseController
{
    /**
     * 注册用户
     */
    public function registerAction(){
        $param = $this->request->getPost();
        $user_name = empty($param['user_name'])?'':$param['user_name'];
        $user_pwd = empty($param['user_pwd'])?'':$param['user_name'];
        $user_headimg = empty($param['user_headimg'])?'':$param['user_headimg'];;
        $user_email = empty($param['user_email'])?'':$param['user_email'];;
        $user_sex = empty($param['user_sex'])?'':$param['user_sex'];;
        $userModel = new Users();
        $result = $userModel->register($user_name,$user_pwd,$user_headimg,$user_email,$user_sex);
        if($result){
            $ajaxCode = array(
                'code' => '0',
                'message' => 'successful'
            );
        }else{
            $ajaxCode = array(
                'code' => '1',
                'message' => 'fail'
            );
        }
        echo json_encode($ajaxCode);
    }

    /**
     *验证用户登录
     */
    public function checkUserByPwdAction(){
        $param = $this->request->getPost();
        $user_email = empty($param['user_email'])?'':$param['user_email'];
        $user_pwd = empty($param['user_pwd'])?'':$param['user_pwd'];
        $userModel = new Users();
        $result = $userModel->checkUserByPwd($user_email,$user_pwd);
        if($result){
            $ajaxCode = array(
                'code' => '0',
                'message' => 'successful'
            );
        }else{
            $ajaxCode = array(
                'code' => '1',
                'message' => 'fail'
            );
        }
        echo json_encode($ajaxCode);
    }
}