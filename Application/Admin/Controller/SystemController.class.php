<?php
/**
 * Created by PhpStorm.
 * User: hdj
 * Date: 2015/1/30
 * Time: 16:19
 */
namespace Admin\Controller;
use Common\Controller\CommonController;
class SystemController extends CommonController
{
    //加载站点配置,系统导航的首页
    public function index(){
        $this->display();
    }
    //加载导航配置
    public function nav(){
        $this->display();
    }
    //加载注册配置
    public function register(){
        $this->display();
    }
    //加载邀请配置
    public function invite(){
        $this->display();
    }
    //加载游客配置
    public function tourist(){
        $this->display();
    }
    //加载微博配置
    public function config(){
        $this->display();
    }
}