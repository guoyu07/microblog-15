<?php
namespace Home\Controller;
use Common\Controller\CommonController;

class IndexController extends CommonController {
    var $article;
    public function __construct(){

        parent::__construct();
        $this->article = M("article");
    }
    //默认执行首页的方法
    public function index(){
        $article = $this->article->select();
        $this->assign("article", $article);
        $this->display();
    }
    //执行添加文章的方法
    public function add_article(){
        if(IS_POST){
            $this->article->create();
            $time = time();
            $this->article->time = $time;
            $id = $this->article->add();

            //新增数据
            $data["status"] =1;
            $data['id']  = $id;
            $data['time'] = date("Y-m-d H:i:s", $time);
            $this->ajaxReturn($data);

            //echo json_encode($data);
            //$this->success("恭喜您,添加成功!");
        }
    }
    //点赞
    public function good(){
        if(IS_POST){
            //$User->where('id=5')->setInc('score'); // 用户的积分加1
            $id = I("post.id");
            $this->article->where("id=$id")->setInc('good');
            $this->success("1");
        }
    }

}