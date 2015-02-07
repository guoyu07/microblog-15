<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>欢迎访问我的微博后台管理系统</title>
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/css/admin.css"/>
</head>
<body>
<div class="container-fluid">
    <!--公共顶部导航开始-->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color: #337ab7;">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">管理员中心</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li <?php if(($c) == "Index"): ?>class="active"<?php endif; ?>>
                        <a href="<?php echo U('Admin/Index/index');?>">首页 <span class="sr-only"></span></a>
                    </li>
                    <li <?php if(($c) == "System"): ?>class="active"<?php endif; ?>>
                        <a href="<?php echo U('Admin/System/index');?>">系统 <span class="sr-only"></span></a>
                    </li>
                    <li <?php if(($c) == "User"): ?>class="active"<?php endif; ?>>
                        <a href="<?php echo U('Admin/User/index');?>">用户 <span class="sr-only"></span></a>
                    </li>
                    <li <?php if(($c) == "Content"): ?>class="active"<?php endif; ?>>
                        <a href="<?php echo U('Admin/Content/index');?>">内容 <span class="sr-only"></span></a>
                    </li>
                    <li <?php if(($c) == "Task"): ?>class="active"<?php endif; ?>>
                        <a href="<?php echo U('Admin/Task/index');?>">任务 <span class="sr-only"></span></a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">你好,管理员
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">密码修改</a></li>
                            <li><a href="#">返回前台</a></li>
                            <li><a href="#">安全退出</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--公共顶部导航结束-->

    <div class="row">
        <div class="col-md-2 left_menu col-sm-12 col-xs-12">
            <!--首页导航左边栏目公共部分开始-->
            <?php if(($c) == "Index"): ?><div class="list-group">
                    <a href="#" class="list-group-item active first">首页</a>
                    <div class="left_menu_child">
                        <a href="<?php echo U('Admin/Index/index');?>" class="list-group-item <?php if(($a) == "index"): ?>active<?php endif; ?>">基本信息</a>
                        <a href="<?php echo U('Admin/Index/daily');?>" class="list-group-item <?php if(($a) == "daily"): ?>active<?php endif; ?>">管理日志</a>
                        <a href="<?php echo U('Admin/Index/message');?>" class="list-group-item <?php if(($a) == "message"): ?>active<?php endif; ?>">群发消息</a>
                        <a href="<?php echo U('Admin/Index/clear');?>" class="list-group-item <?php if(($a) == "clear"): ?>active<?php endif; ?>">缓存清理</a>
                        <a href="<?php echo U('Admin/Index/config');?>" class="list-group-item <?php if(($a) == "config"): ?>active<?php endif; ?>">缓存配置</a>
                        <a href="<?php echo U('Admin/Index/backup');?>" class="list-group-item <?php if(($a) == "backup"): ?>active<?php endif; ?>">数据备份</a>
                        <a href="<?php echo U('Admin/Index/task');?>" class="list-group-item <?php if(($a) == "task"): ?>active<?php endif; ?>">计划任务</a>
                    </div>
                </div><?php endif; ?>
            <!--首页导航左边栏目公共部分结束-->
            <!--系统导航左边栏目公共部分开始-->
            <?php if(($c) == "System"): ?><div class="list-group">
                    <a href="#" class="list-group-item active first">系统配置</a>
                    <div class="left_menu_child">
                        <a href="<?php echo U('Admin/System/index');?>" class="list-group-item <?php if(($a) == "index"): ?>active<?php endif; ?>">站点配置</a>
                        <a href="<?php echo U('Admin/System/nav');?>" class="list-group-item <?php if(($a) == "nav"): ?>active<?php endif; ?>">导航配置</a>
                        <a href="<?php echo U('Admin/System/register');?>" class="list-group-item <?php if(($a) == "register"): ?>active<?php endif; ?>">注册配置</a>
                        <a href="<?php echo U('Admin/System/invite');?>" class="list-group-item <?php if(($a) == "invite"): ?>active<?php endif; ?>">邀请配置</a>
                        <a href="<?php echo U('Admin/System/tourist');?>" class="list-group-item <?php if(($a) == "tourist"): ?>active<?php endif; ?>">游客配置</a>
                        <a href="<?php echo U('Admin/System/config');?>" class="list-group-item <?php if(($a) == "config"): ?>active<?php endif; ?>">微博配置</a>
                    </div>
                </div><?php endif; ?>
            <!--系统导航左边栏目公共部分结束-->
            <!--用户导航左边栏目公共部分开始-->
            <?php if(($c) == "User"): ?><div class="list-group">
                    <a href="#" class="list-group-item active first">用户</a>
                    <div class="left_menu_child">
                        <a href="<?php echo U('Admin/User/index');?>" class="list-group-item <?php if(($a) == "index"): ?>active<?php endif; ?>">用户管理</a>
                        <a href="<?php echo U('Admin/User/group');?>" class="list-group-item <?php if(($a) == "group"): ?>active<?php endif; ?>">用户组管理</a>
                        <a href="<?php echo U('Admin/User/find');?>" class="list-group-item <?php if(($a) == "find"): ?>active<?php endif; ?>">找人配置</a>
                    </div>
                </div><?php endif; ?>
            <!--用户导航左边栏目公共部分结束-->
            <!--内容导航左边栏目公共部分开始-->
            <?php if(($c) == "Content"): ?><div class="list-group">
                    <a href="#" class="list-group-item active first">内容管理</a>
                    <div class="left_menu_child">
                        <a href="<?php echo U('Admin/Content/index');?>" class="list-group-item <?php if(($a) == "index"): ?>active<?php endif; ?>">公告配置</a>
                        <a href="<?php echo U('Admin/Content/blog');?>" class="list-group-item <?php if(($a) == "blog"): ?>active<?php endif; ?>">微博管理</a>
                        <a href="<?php echo U('Admin/Content/comm');?>" class="list-group-item <?php if(($a) == "comm"): ?>active<?php endif; ?>">评论管理</a>
                        <a href="<?php echo U('Admin/Content/letter');?>" class="list-group-item <?php if(($a) == "letter"): ?>active<?php endif; ?>">私信管理</a>
                    </div>
                </div><?php endif; ?>
            <!--内容导航左边栏目公共部分结束-->
            <!--任务导航左边栏目公共部分开始-->
            <?php if(($c) == "Task"): ?><div class="list-group">
                    <a href="#" class="list-group-item active first">任务管理</a>
                    <div class="left_menu_child">
                        <a href="<?php echo U('Admin/Task/index');?>" class="list-group-item <?php if(($a) == "index"): ?>active<?php endif; ?>">任务列表</a>
                    </div>
                </div><?php endif; ?>
            <!--任务导航左边栏目公共部分结束-->
        </div>
        <div class="col-md-10 col-md-offset-2 main">
            <div class="well">
                
    <p>系统消息</p>
    <form action="">
        <dl class="col-md-12">
            <dt class="col-md-3"><strong>用户组:</dt>
            <dd class="col-md-9">
                <select name="user_group_id" id="form_user_group_id">
                    <option value="0" selected="selected">全部用户</option>
                    <option value="1">管理员</option>
                    <option value="3">正常用户</option>
                    <option value="4">禁言用户</option>
                    <option value="7">达人用户</option>
                </select>
            </dd>
        </dl>
        <dl class="col-md-12">
            <dt class="col-md-3"><strong>发送内容:</dt>
            <dd class="col-md-9">
                <textarea name="editor1" class="content"></textarea>
                <script src="/Public/ckeditor/ckeditor.js"></script>
                <script type="text/javascript" src="/Public/ckfinder/ckfinder.js"></script>

                <script>
                    CKEDITOR.replace('editor1',
                            {
                                filebrowserBrowseUrl: '/static/ckfinder/ckfinder.html',
                                filebrowserImageBrowseUrl: '/static/ckfinder/ckfinder.html?type=Images',
                                filebrowserFlashBrowseUrl: '/static/ckfinder/ckfinder.html?type=Flash',
                                filebrowserUploadUrl: '/static/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                filebrowserImageUploadUrl: '/static/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                filebrowserFlashUploadUrl: '/static/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                            });
                </script>
                <h6>内容将在前台系统消息中展示</h6>
            </dd>
        </dl>
    </form>
    <div class="bottom_btn">
        <button type="button" class="btn btn-primary col-md-offset-10">保存
            <tton>
    </div>


            </div>
        </div>
    </div>
</div>
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="/Public/js/admin.js"></script>

</body>
</html>