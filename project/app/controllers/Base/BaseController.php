<?php
namespace Base;
use Phalcon\Mvc\Controller;
define('SMARTY_PATH',ROOT_PATH.'app/views/templates/');
include_once(SMARTY_PATH."../libs/Smarty.class.php");
class BaseController extends Controller{
    
}