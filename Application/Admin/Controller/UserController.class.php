<?php
/**
 * Created by PhpStorm.
 * User: hdj
 * Date: 2015/1/30
 * Time: 16:36
 */
namespace Admin\Controller;
use Common\Controller\CommonController;
class UserController extends CommonController
{
    //加载用户导航首页,用户管理
    public function index(){
        $this->display();
    }
    //加载用户组
    public function group(){
        $this->display();
    }
    //加载找人配置
    public function find(){
        $this->display();
    }
}