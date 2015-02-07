<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>欢迎访问我的微博</title>
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default" role="navigation" style="background-color: #2E4C8C;">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">管理员中心</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" style="margin-left: 100px;">
                    <li><a href="#">首页 <span class="sr-only"></span></a></li>
                    <li><a href="#">系统 <span class="sr-only"></span></a></li>
                    <li><a href="#">用户 <span class="sr-only"></span></a></li>
                    <li><a href="#">内容 <span class="sr-only"></span></a></li>
                    <li><a href="#">任务 <span class="sr-only"></span></a></li>
                    <li><a href="#">应用 <span class="sr-only"></span></a></li>
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
    
    <div class="row">
        <div class="col-md-2">
            <div class="btn-group">
                <button type="button" class="btn btn-primary" data-toggle="dropdown"
                        aria-expanded="false" style="width: 200px;text-align: left">
                    <span class="caret"></span>&nbsp;&nbsp;首页<span class="badge" style="float: right">8</span>
                </button>
                <ul class="dropdown-menu" role="menu" style="width: 200px;">
                    <li><a href="#" class="btn btn-success dropdown-toggle">基本信息</a></li>
                    <li class="divider"></li>
                    <li><a href="#" class="btn btn-info dropdown-toggle">访问统计</a></li>
                    <li class="divider"></li>
                    <li><a href="#" class="btn btn-success dropdown-toggle">管理日志</a></li>
                    <li class="divider"></li>
                    <li><a href="#" class="btn btn-info dropdown-toggle">群发消息</a></li>
                    <li class="divider"></li>
                    <li><a href="#" class="btn btn-success dropdown-toggle">计划任务</a></li>
                    <li class="divider"></li>
                    <li><a href="#" class="btn btn-info dropdown-toggle">缓存清理</a></li>
                    <li class="divider"></li>
                    <li><a href="#" class="btn btn-success dropdown-toggle">缓存配置</a></li>
                    <li class="divider"></li>
                    <li><a href="#" class="btn btn-info dropdown-toggle">数据备份</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9" style="margin-left: 30px;width: 945px">
            <div class="well">
                <p style="color: #08c;font-weight: bold;">欢迎使用微博沟通、协作、管理平台</p>
                <hr/>
                <p style="color: #1e325c;">提示：点击标题可以折叠栏目</p>
                <table class="table table-striped">
                    <caption>用户信息</caption>
                    <tbody>
                    <tr>
                        <td>总注册用户</td>
                        <td>总活跃用户</td>
                        <td>昨日最大在线量</td>
                        <td>当前在线用户数</td>
                        <td>一周最大在线用户数</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2</td>
                        <td>0</td>
                        <td>0</td>
                        <td>3</td>
                    </tr>
                    </tbody>
                </table>
                <table class="table table-striped">
                    <caption>访问信息</caption>
                    <tbody>
                    <tr>
                        <td>时间</td>
                        <td>浏览量</td>
                        <td>独立访客量</td>
                        <td>人均浏览次数</td>
                    </tr>
                    <tr>
                        <td>今日</td>
                        <td>37</td>
                        <td>2</td>
                        <td>18.5</td>
                    </tr>
                    <tr>
                        <td>昨日</td>
                        <td>37</td>
                        <td>2</td>
                        <td>18.5</td>
                    </tr>
                    <tr>
                        <td>一周平均</td>
                        <td>37</td>
                        <td>2</td>
                        <td>18.5</td>
                    </tr>
                    </tbody>
                </table>
                <table class="table table-striped">
                    <caption>服务器信息</caption>
                    <tbody>
                    <tr>
                        <td>核心版本</td>
                        <td>服务器系统及PHP版本</td>
                        <td>服务器软件</td>
                        <td>最大上传许可</td>
                        <td>MySQL版本</td>
                        <td>数据库大小</td>
                    </tr>
                    <tr>
                        <td>TS V3.1.28021</td>
                        <td>WINNT / PHP v5.5.12</td>
                        <td>Apache/2.4.9 (Win32) PHP/5.5.12</td>
                        <td>64M</td>
                        <td>5.6.17</td>
                        <td>966k</td>
                    </tr>
                    </tbody>
                </table>
                <table class="table table-striped">
                    <caption>开发团队</caption>
                    <tbody>
                    <tr>
                        <td>版权所有:</td>
                        <td>智士软件（北京）有限公司</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>