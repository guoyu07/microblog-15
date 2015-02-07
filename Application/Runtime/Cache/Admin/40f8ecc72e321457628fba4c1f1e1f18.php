<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>欢迎访问我的微博</title>
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
                    <li<?php if(($c) == "Apply"): ?>class="active"<?php endif; ?>>
                        <a href="<?php echo U('Admin/Apply/index');?>">应用 <span class="sr-only"></span></a>
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
                        <a href="#" class="list-group-item ">基本信息</a>
                        <a href="#" class="list-group-item">管理日志</a>
                        <a href="#" class="list-group-item">群发消息</a>
                        <a href="#" class="list-group-item">缓存清理</a>
                        <a href="#" class="list-group-item">缓存配置</a>
                        <a href="#" class="list-group-item">数据备份</a>
                        <a href="#" class="list-group-item">计划任务</a>
                    </div>
                </div><?php endif; ?>
            <!--首页导航左边栏目公共部分结束-->
            <!--系统导航左边栏目公共部分开始-->
            <?php if(($c) == "System"): ?><div class="list-group">
                    <a href="#" class="list-group-item active first">系统配置</a>
                    <div class="left_menu_child">
                        <a href="#" class="list-group-item ">站点配置</a>
                        <a href="#" class="list-group-item">导航配置</a>
                        <a href="#" class="list-group-item">注册配置</a>
                        <a href="#" class="list-group-item">邀请配置</a>
                        <a href="#" class="list-group-item">游客配置</a>
                        <a href="#" class="list-group-item">微博配置</a>
                    </div>
                </div><?php endif; ?>
            <!--系统导航左边栏目公共部分结束-->
            <!--用户导航左边栏目公共部分开始-->
            <?php if(($c) == "User"): ?><div class="list-group">
                    <a href="#" class="list-group-item active first">用户</a>
                    <div class="left_menu_child">
                        <a href="#" class="list-group-item ">用户管理</a>
                        <a href="#" class="list-group-item">用户组管理</a>
                        <a href="#" class="list-group-item">找人配置</a>
                    </div>
                </div><?php endif; ?>
            <!--用户导航左边栏目公共部分结束-->
            <!--内容导航左边栏目公共部分开始-->
            <?php if(($c) == "Content"): ?><div class="list-group">
                    <a href="#" class="list-group-item active first">内容管理</a>
                    <div class="left_menu_child">
                        <a href="#" class="list-group-item ">公告配置</a>
                        <a href="#" class="list-group-item">微博管理</a>
                        <a href="#" class="list-group-item">评论管理</a>
                        <a href="#" class="list-group-item">私信管理</a>
                    </div>
                </div><?php endif; ?>
            <!--内容导航左边栏目公共部分结束-->
            <!--任务导航左边栏目公共部分开始-->
            <?php if(($c) == "Task"): ?><div class="list-group">
                    <a href="#" class="list-group-item active first">任务管理</a>
                    <div class="left_menu_child">
                        <a href="#" class="list-group-item ">任务列表</a>
                    </div>
                </div><?php endif; ?>
            <!--任务导航左边栏目公共部分结束-->
            <!--应用导航左边栏目公共部分开始-->
            <?php if(($c) == "Apply"): ?><div class="list-group">
                    <a href="#" class="list-group-item active first">应用管理</a>
                    <div class="left_menu_child">
                        <a href="#" class="list-group-item ">已安装应用</a>
                        <a href="#" class="list-group-item ">频道</a>
                        <a href="#" class="list-group-item ">微吧</a>
                    </div>
                </div><?php endif; ?>
            <!--应用导航左边栏目公共部分结束-->
        </div>
        <div class="col-md-10 col-md-offset-2 main">
            <div class="well">
                
    <p>已安装应用列表</p>
    <div class="form-group">
        <div aria-label="Basic example">
            <button type="button" class="btn btn-default">开启</button>
            &nbsp;
            <button type="button" class="btn btn-default">关闭</button>
        </div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>
                    <div class="checkbox">
                        <label> <input type="checkbox" value=""> </label>
                    </div>
                </th>
                <th>图标</th>
                <th>应用名</th>
                <th>别名</th>
                <th>状态</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>
                    <div class="checkbox">
                        <label> <input type="checkbox" value=""> </label>
                    </div>
                </th>
                <td>1</td>
                <td>channel</td>
                <td>频道</td>
                <td>开启</td>
                <td>
                    <a href="#">编辑</a>&nbsp;<a href="#">关闭</a>&nbsp;<a href="#">卸载</a>
                </td>
            </tr>
            <tr>
                <th>
                    <div class="checkbox">
                        <label> <input type="checkbox" value=""> </label>
                    </div>
                </th>
                <td>1</td>
                <td>weiba</td>
                <td>微吧</td>
                <td>开启</td>
                <td>
                    <a href="#">编辑</a>&nbsp;<a href="#">关闭</a>&nbsp;<a href="#">卸载</a>
                </td>
            </tr>
            <tr>
                <th>
                    <div class="checkbox">
                        <label> <input type="checkbox" value=""> </label>
                    </div>
                </th>
                <td>1</td>
                <td>people</td>
                <td>找人</td>
                <td>开启</td>
                <td>
                    <a href="#">编辑</a>&nbsp;<a href="#">关闭</a>&nbsp;<a href="#">卸载</a>
                </td>
            </tr>
            </tbody>
        </table>
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