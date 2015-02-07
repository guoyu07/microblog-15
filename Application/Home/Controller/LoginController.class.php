<?php
/**
 * Created by PhpStorm.
 * User: hdj
 * Date: 2015/2/5
 * Time: 10:57
 */
namespace Home\Controller;
use Common\Controller\CommonController;
class LoginController extends CommonController
{
    var $user;
    function __construct(){
        parent::__construct();
        $this->user = M("user");
    }
    /***
     * 用户登录
     */
    function index(){
        $this->display();
    }

    function do_login(){
        if($_POST){
            $username = I("post.username");
            $password = I("post.password");

            //select * from user where username = $username and password = $password

            $user = $this->user->where("username = '$username' and password ='$password'")->find();
            if($user){
                //给别的页面判断是否登录
                $_SESSION["is_user_login"] = 1;

                //保存用户信息, 可以发送到模板, 在模板中直接显示用户信息
                $_SESSION["user"] = $user;
                $this->success("恭喜您,登录成功!", U('Home/Index/index'));
                //跳转到首页
            } else {
                $this->error("登录失败");
            }
        }
    }

    /***
     * 用户注册
     */
    function do_register(){
        //dump($_POST);
        $this->user->create();
        $this->user->add();
        $this->success("恭喜你,注册成功!");
    }

}
