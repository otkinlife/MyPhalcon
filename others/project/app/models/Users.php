<?php
include "Base\BaseModel.php";

class Users extends BaseModel{

    public function test(){
        $res = $this->db->from('shangfox_user')
            ->fetchAll();
        print_r($res);
    }

    /**
     * �����û�
     * @param $user_name �û���
     * @param $user_pwd  �û�����
     * @param $user_headimg �û�ͷ��
     * @param $user_email �û�����
     * @param $user_sex �û��Ա�
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
     * У���û���¼
     * @param $user_email �û�����
     * @param $user_pwd �û�����
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
