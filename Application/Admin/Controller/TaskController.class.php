<?php
/**
 * Created by PhpStorm.
 * User: hdj
 * Date: 2015/1/30
 * Time: 16:39
 */
namespace Admin\Controller;
use Common\Controller\CommonController;
class TaskController extends CommonController
{
    public function index(){
        $this->display();
    }
}