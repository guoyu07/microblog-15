<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>欢迎访问我的微博</title>
</head>
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="/Public/css/home.css"/>
<body class="body">
<div class="container-fluid">
    <!--网页头部开始-->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-bell"></span> 通知</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> 私信</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-eye-open"></span> 发现</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="搜索">
                            </div>
                            <button type="submit" class="btn btn-default"><span
                                    class="glyphicon glyphicon-search"></span></button>
                        </form>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" title="个人资料与账户" data-toggle="dropdown" role="button"
                           aria-expanded="false"><img class="avatar size32" src="/Public/images/Koala.jpg"></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">查看个人资料</a></li>
                            <li class="divider"></li>
                            <li><a href="#">设置</a></li>
                            <li class="divider"></li>
                            <li><a href="#">登出</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"
                                    data-whatever="@mdo"><span class="glyphicon glyphicon-send"></span> 发推
                            </button>
                        </a>
                    </li>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="exampleModalLabel">撰写新推文</h4>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                    <button type="button" class="btn btn-primary">发推</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
    <!--网页头部结束-->
    <!--内容部分-->
    <div class="row">
        
<!--网页内容部分开始-->
<div class="col-md-3 left_menu col-sm-12 col-xs-12">
    <div class="row_left">
        <div class="row_left_top">
            <div class="empty"></div>
            <div class="info">
                <ul>
                    <li><a href="#"><span class="title">推文</span><span class="total">2</span></a></li>
                    <li><a href="#"><span class="title">正在关注</span><span class="total">2</span></a></li>
                    <li><a href="#"><span class="title">关注者</span><span class="total">2</span></a></li>
                    <div class="clear"></div>
                </ul>
            </div>
        </div>
        <div class="row_left_middle">
            <a href="#">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal"
                        data-whatever="@mdo">
                    <img class="avatar size70" src="/Public/images/Koala.jpg"></button>
            </a>

            <div class="nikename">
                <div class="nikename_title">
                    <a href="#">hdjzq</a>
                </div>
                        <span class="address">
                            <a href="#">@<span>thehdjzq</span></a>
                        </span>
            </div>
        </div>
        <div class="row_left_bottom">
            <div class="cate">
                <h4>趋势</h4>
                <span>·</span>
                <a href="#">更改</a>
            </div>
            <div class="cate_info">
                <ul>
                    <li><a href="#">shkkakalsjlskkakljaslal</a></li>
                    <li><a href="#">shkkakalsjlaskkansklfnn</a></li>
                    <li><a href="#">shkkakalsjlsajnbkandandnk</a></li>
                    <li><a href="#">shkkakalsjlafafafasfaf</a></li>
                    <li><a href="#">shkkakalsjlasfafa</a></li>
                    <li><a href="#">shkkakalsjlasffsafs</a></li>
                    <li><a href="#">shkkakalsjlasfasfafa</a></li>
                    <li><a href="#">shkkakalsjlafaf</a></li>
                    <li><a href="#">shkkakalsjlasfafasfaff</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 left_menu col-sm-12 col-xs-12 main">
    <div class="main_top well">

        <form class="form-horizontal" role="form">
            <div class="form-group">
                <label class="col-sm-2 control-label"><img class="avatar size32" src="/Public/images/Koala.jpg"></label>

                <div class="col-sm-10" id="blog_area">
                    <input type="text" class="form-control" placeholder="有什么新鲜事?"/>
                </div>

                <div class="col-sm-10" id="blog_textarea" style="display:none">
                    <div class="blog_textarea">
                        <textarea class="form-control container" rows="3" id="content" name="content"></textarea>
                        <button type="button" class="btn btn-info camera" id="camera">
                            <span class="glyphicon glyphicon-camera"></span> 添加照片
                        </button>
                        <a role="menuitem" class="disabled" id="no_position"><span class="glyphicon glyphicon-tint"></span> 禁用位置</a>
                        <b>140</b>
                        <button type="button" class="btn btn-primary send" id="send">发推</button>
                    </div>

                </div>
            </div>
        </form>

    </div>
    <div class="bs-example">
        <p>
            <a data-toggle="collapse" href="<?php echo U('/index.php/home/index/add_article');?>" aria-expanded="false" aria-controls="collapseExample">
                查看8条新推文
            </a>
        </p>

        <div class="collapse in" id="collapseExample" aria-expanded="true">
            <div class="well content_blog">
                <?php if(is_array($article)): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="form-group jiangefu">
                    <div class="col-sm-2 control-label"><img class="avatar size32" src="/Public/images/Koala.jpg"></div>
                    <div class="textbox_author" id="author" name="author">作者:<a href="#"><?php echo ($v["author"]); ?></a></div>
                    <div class="textbox_time" id="time" name="time">时间:[<?php echo (date("Y-m-d H:i:s",$v["time"])); ?>]</div>
                    <div class="textbox_content" id="content" name="content"><?php echo ($v["content"]); ?></div>
                    <div class="textbox_reply" data-id="<?php echo ($v["id"]); ?>">
                        <a href="#"><span class="glyphicon glyphicon-share-alt"></span></a> <!--回复-->&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#" class="good"><span class="glyphicon glyphicon-thumbs-up"></span> <span><?php echo ($v["good"]); ?></span></a> <!--点赞-->&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#"><span class="glyphicon glyphicon-retweet"></span></a> <!--转推-->&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#"><span class="glyphicon glyphicon-star"></span></a> <!--收藏-->
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="col-md-3 right_menu col-sm-12 col-xs-12">
    <div class="row_right_top">
        <div class="cate">
            <h4>推荐关注</h4>
            <span>·</span>
            <a href="#">刷新</a>
            <span>·</span>
            <a href="#">查看全部</a>
        </div>
        <div class="cate_logo">
            <div class="js-account-summary">
                <div class="img">
                    <a href="#"><img class="avatar" src="/Public/images/4LrI9Uyn_normal.jpeg"></a>
                </div>
                <div class="fullname">
                    <a href="#">
                        <span class="username">
                            <span class="js-username">hdj 123 dj</span>
                            <b>@</b>
                            <span class="js-username">hdj 123 dj</span>
                        </span>
                        <span class="glyphicon glyphicon-remove"></span>
                    </a>
                    <p>被<a href="#">Twritter</a>等人关注</p>
                    <div class="user-actions">
                        <button type="button" class="small-follow-btn">
                            <div class="js-action-follow">

                                <span class="Icon Icon--follow glyphicon glyphicon-user"></span>关注
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            <div class="js-account-summary">
                <div class="img">
                    <a href="#"><img class="avatar" src="/Public/images/060bd6527bd63a4e3f241c954edd0e6f_normal.jpeg"></a>
                </div>
                <div class="fullname">
                    <a href="">
                        <span class="username">
                            <span class="js-username">hdj 123 dj</span>
                            <b>@</b>
                            <span class="js-username">hdj 123 dj</span>
                        </span>
                        <span class="glyphicon glyphicon-remove"></span>
                    </a>
                    <p>被<a href="#">Twritter</a>等人关注</p>
                    <div class="user-actions">
                        <button type="button" class="small-follow-btn">
                            <div class="js-action-follow">
                                <span class="Icon Icon--follow glyphicon glyphicon-user"></span>关注
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            <div class="js-account-summary">
                <div class="img">
                    <a href="#"><img class="avatar" src="/Public/images/AeFB_3cu_normal.jpeg"></a>
                </div>
                <div class="fullname">
                    <a href="">
                        <span class="username">
                            <span class="js-username">hdj 123 dj</span>
                            <b>@</b>
                            <span class="js-username">hdj 123 dj</span>
                        </span>
                        <span class="glyphicon glyphicon-remove"></span>
                    </a>
                    <p>被<a href="#">Twritter</a>等人关注</p>
                    <div class="user-actions">
                        <button type="button" class="small-follow-btn">
                            <div class="js-action-follow">
                                <span class="Icon Icon--follow glyphicon glyphicon-user"></span>关注
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row_right_bottom">
            <div class="cate">
                <a href="#">热门账号</a>
                <span>·</span>
                <a href="#">查找好友</a>
            </div>
        </div>
    </div>
    <div class="footer">
        <ul>
            <li class="copyright">@2015Twritter</li>
            <li><a href="#">关于</a></li>
            <li><a href="#">帮助</a></li>
            <li><a href="#">条款</a></li>
            <li><a href="#">隐私</a></li>
            <li><a href="#">Cookies</a></li>
            <li><a href="#">广告信息</a></li>
            <li><a href="#">商标</a></li>
            <li><a href="#">博客</a></li>
            <li><a href="#">状态</a></li>
            <li><a href="#">应用</a></li>
            <li><a href="#">工作机会</a></li>
            <li><a href="#">广告</a></li>
            <li><a href="#">企业</a></li>
            <li><a href="#">媒体</a></li>
            <li><a href="#">开发者</a></li>
        </ul>
    </div>
</div>

<!--网页内容部分结束-->

    </div>
</div>
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="/Public/js/home.js"></script>
</body>
</html>