<?php
namespace Base;
use FluentPDO;


class BaseModel {
    
    public $db = "213";
    function __construct(){
        $pdo = new \PDO("mysql:dbname=user", "root", "root");
        $fpdo = new FluentPDO($pdo);
    }
   
}