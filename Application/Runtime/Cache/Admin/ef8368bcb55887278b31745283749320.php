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
                
    <p>任务列表</p>
    <div class="form-group">
        <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a href="#">每日任务</a></li>
            <li role="presentation"><a href="#">主线任务</a></li>
        </ul>
        <!--每日任务-->
        <table class="table table-bordered" style="margin-top: 10px;">
            <thead>
            <tr>
                <th>类型</th>
                <th>任务名称</th>
                <th>任务说明</th>
                <th>完成人数</th>
                <th>积分奖励</th>
                <th>勋章奖励</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>每日</th>
                <td>发布1条原创微博</td>
                <td>在我的首页发布1条原创微博</td>
                <td>0</td>
                <td>经验+5 财富+5</td>
                <td></td>
                <td><a href="#">编辑</a></td>
            </tr>
            <tr>
                <th>每日</th>
                <td>转发1条微博</td>
                <td>在我的首页转发1条他人的微博</td>
                <td>0</td>
                <td>经验+5 财富+5</td>
                <td></td>
                <td><a href="#">编辑</a></td>
            </tr>
            <tr>
                <th>每日</th>
                <td>评论1条微博</td>
                <td>在我的首页评论1条他人的微博</td>
                <td>0</td>
                <td>经验+5 财富+5</td>
                <td></td>
                <td><a href="#">编辑</a></td>
            </tr>
            <tr>
                <th>每日</th>
                <td>签到1次</td>
                <td>在我的首页中签到1次</td>
                <td>0</td>
                <td>经验+5 财富+5</td>
                <td></td>
                <td><a href="#">编辑</a></td>
            </tr>
            </tbody>
        </table>
        <!--主线任务-->
        <table class="table table-bordered" style="display: none">
            <thead>
            <tr>
                <th>类型</th>
                <th>任务名称</th>
                <th>任务描述</th>
                <th>完成人数</th>
                <th>积分奖励</th>
                <th>勋章奖励</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>新手</th>
                <td>上传头像</td>
                <td>在帐号-设置-头像设置里上传头像</td>
                <td>0</td>
                <td>经验+2 财富+2</td>
                <td>Table cell</td>
                <td><a href="#">编辑</a></td>
            </tr>
            <tr>
                <th>新手</th>
                <td>转发1条微博</td>
                <td>在微博列表中转发1条微博</td>
                <td>0</td>
                <td>经验+2 财富+2</td>
                <td>Table cell</td>
                <td><a href="#">编辑</a></td>
            </tr>
            <tr>
                <th>新手</th>
                <td>完善个人资料</td>
                <td>在帐号-设置-基本信息里完善你的个人资料</td>
                <td>0</td>
                <td>经验+5 财富+5</td>
                <td>Table cell</td>
                <td><a href="#">编辑</a></td>
            </tr>
            <tr>
                <th>新手</th>
                <td>关注1个感兴趣的人</td>
                <td>在可能感兴趣的人或者找人里关注1个感兴趣的人</td>
                <td>0</td>
                <td>经验+2 财富+2</td>
                <td>Table cell</td>
                <td><a href="#">编辑</a></td>
            </tr>
            <tr>
                <th>进阶</th>
                <td>拥有30个以上的粉丝</td>
                <td>将自己的粉丝数扩充到30个以上</td>
                <td>0</td>
                <td>经验+5 财富+5</td>
                <td>Table cell</td>
                <td><a href="#">编辑</a></td>
            </tr>
            <tr>
                <th>进阶</th>
                <td>连续签到3次</td>
                <td>连续签到3次以上</td>
                <td>0</td>
                <td>经验+5 财富+5</td>
                <td>Table cell</td>
                <td><a href="#">编辑</a></td>
            </tr>
            <tr>
                <th>达人</th>
                <td>发布100条以上的原创微博</td>
                <td>发布100条以上的原创微博</td>
                <td>0</td>
                <td>经验+10 财富+10</td>
                <td>Table cell</td>
                <td><a href="#">编辑</a></td>
            </tr>
            <tr>
                <th>达人</th>
                <td>拥有100个以上的粉丝</td>
                <td>拥有100个以上的粉丝</td>
                <td>0</td>
                <td>经验+6 财富+6</td>
                <td>Table cell</td>
                <td><a href="#">编辑</a></td>
            </tr>
            <tr>
                <th>达人</th>
                <td>连续签到20次</td>
                <td>连续签到20次以上，连续签到非累计签到次数</td>
                <td>0</td>
                <td>经验+6 财富+6</td>
                <td>Table cell</td>
                <td><a href="#">编辑</a></td>
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