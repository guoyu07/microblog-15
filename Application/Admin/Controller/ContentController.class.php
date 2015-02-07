<?php
/**
 * Created by PhpStorm.
 * User: hdj
 * Date: 2015/1/30
 * Time: 16:32
 */
namespace Admin\Controller;
use Common\Controller\CommonController;
class ContentController extends CommonController
{
    //加载内容导航,公告配置
    public function index(){
        $this->display();
    }
    //加载微博管理
    public function blog(){
        $this->display();
    }
    //加载评论管理
    public function comm(){
        $this->display();
    }
    //加载私信管理
    public function letter(){
        $this->display();
    }
}