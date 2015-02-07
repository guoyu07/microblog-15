<?php
namespace Admin\Controller;
use Common\Controller\CommonController;
class IndexController extends CommonController
{
    //加载首页基本信息方法
    public function index(){
        $this->display();
    }
    //管理日志方法
    public function daily(){
        $this->display();
    }
    //群发消息
    public function message(){
        $this->display();
    }
    //缓存清理
    public function clear(){
        $this->display();
    }
    //缓存配置
    public function config(){
        $this->display();
    }
    //数据备份
    public function backup(){
        $this->display();

    }
    //计划任务
    public function task(){
        $this->display();
    }
}