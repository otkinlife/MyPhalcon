<?php
use Base\BaseModel; 

class Users extends BaseModel{

    public function test(){
        $this->db->from('user')->fetchAll();
    }	

}
