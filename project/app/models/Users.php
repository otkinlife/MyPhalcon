<?php
include "Base\BaseModel.php";

class Users extends BaseModel{

    public function test(){
        $res = $this->db->from('shangfox_user')
            ->fetchAll();
        print_r($res);
    }	

}
