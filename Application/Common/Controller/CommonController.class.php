<?php
/**
 * Created by PhpStorm.
 * User: hdj
 * Date: 2015/1/31
 * Time: 10:09
 */
namespace Common\Controller;
use Think\Controller;
class CommonController extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->assign("c", CONTROLLER_NAME);
        $this->assign("a", ACTION_NAME);


        //判断是否是前台
        if(MODULE_NAME == "Home"){
            $this->check_user_login();//如果是前台就调用下面的方法
        }

        //判断是否是后台
        if(MODULE_NAME == "Admin"){
            $this->check_user_login();
        }
    }

    function check_user_login(){
        //判断是否登录
        if(isset($_SESSION["is_user_login"]) and $_SESSION["is_user_login"] == 1){
            //如果登录了就把信息发送到模板
            $this->assign("user",$_SESSION["user"]);
            return true;
        }
        //CONTROLLER_NAME 控制器名 ACTION_NAME 方法名
        if(CONTROLLER_NAME == "Login" and (ACTION_NAME == "index" or ACTION_NAME == "do_login")){
            return true;
        }

        $this->error("您还没有登录,请登录后再访问", U("Home/login/index"));
    }
}