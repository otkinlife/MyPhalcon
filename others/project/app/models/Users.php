<?php
include "Base\BaseModel.php";

class Users extends BaseModel{

    public function test(){
        $res = $this->db->from('shangfox_user')
            ->fetchAll();
        print_r($res);
    }

    /**
     * 增加用户
     * @param $user_name 用户名
     * @param $user_pwd  用户密码
     * @param $user_headimg 用户头像
     * @param $user_email 用户邮箱
     * @param $user_sex 用户性别
     * @return int|ID
     */
    public function register($user_name,$user_pwd,$user_headimg,$user_email,$user_sex){
        $InsertArray = array(
            'user_name' => $user_name,
            'user_pwd' => $user_pwd,
            'user_headimg' => $user_headimg,
            'user_email' => $user_email,
            'user_sex' => $user_sex
        );
        $result = $this->db->insertInto('xy_user',$InsertArray)
                        ->execute();
        if($result){
            return $result;
        }else{
            return false;
        }
    }

    /**
     * 校验用户登录
     * @param $user_email 用户邮箱
     * @param $user_pwd 用户密码
     * @return bool
     */
    public function checkUserByPwd($user_email,$user_pwd){
        $count = $this->db->from('xy_user')
            ->where('user_email',$user_email)
            ->where('user_pwd',$user_pwd)
            ->count();
        if($count > 0){
            return true;
        }else{
            return false;
        }
    }

}
