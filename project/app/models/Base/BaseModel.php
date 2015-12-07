<?php
namespace Base;
use Phalcon\Mvc\Model;
define('PDO_PATH',ROOT_PATH.'app/models/FluentPDO/');
include PDO_PATH."FluentPDO.php";

class BaseModel extends Model{
    
    public $db;
    
    function __construct(){
        $pdo = new \PDO("mysql:dbname=user", "root", "root");
        $this->db = new FluentPDO($pdo);
    }
}