<?php
include ROOT_PATH."../FluentPdo/FluentPDO.php";
class BaseModel {
    public $db = "213";
    function __construct(){
        $pdo = new PDO("mysql:dbname=db_xy;host=localhost:33060;charset=utf8", "root", "root");
        $this->db = new FluentPDO($pdo);
    }
   
}