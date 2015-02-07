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
                    <li class="active"><a href="#">首页 <span class="sr-only"></span></a></li>
                    <li class="active"><a href="#">系统 <span class="sr-only"></span></a></li>
                    <li class="active"><a href="#">用户 <span class="sr-only"></span></a></li>
                    <li class="active"><a href="#">内容 <span class="sr-only"></span></a></li>
                    <li class="active"><a href="#">任务 <span class="sr-only"></span></a></li>
                    <li class="active"><a href="#">应用 <span class="sr-only"></span></a></li>
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
                <p style="color: #08c;font-weight: bold;">访问统计</p>
                <hr/>
                <div class="form-group">
                    <ul class="nav nav-tabs">
                        <li role="presentation" class="active"><a href="#">今日</a></li>
                        <li role="presentation"><a href="#">昨日</a></li>
                        <li role="presentation"><a href="#">最近7天</a></li>
                    </ul>
                    <!--今日-->
                    <table class="table table-bordered" style="margin-top: 10px;">
                        <thead>
                        <tr>
                            <th>统计时间</th>
                            <th>浏览量</th>
                            <th>独立访客量</th>
                            <th>人均浏览次数</th>
                            <th>最大同时在线量</th>
                            <th>最大在线量时间段</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>2015-01-29</th>
                            <td>2</td>
                            <td>3</td>
                            <td>0</td>
                            <td>10</td>
                            <td>20</td>
                        </tr>
                        </tbody>
                    </table>
                    <!--昨日-->
                    <table class="table table-bordered" style="margin-top: 10px;display: none;">
                        <thead>
                        <tr>
                            <th>统计时间</th>
                            <th>浏览量</th>
                            <th>独立访客量</th>
                            <th>人均浏览次数</th>
                            <th>最大同时在线量</th>
                            <th>最大在线量时间段</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>2015-01-29</th>
                            <td>2</td>
                            <td>3</td>
                            <td>0</td>
                            <td>10</td>
                            <td>20</td>
                        </tr>
                        </tbody>
                    </table>
                    <!--最近7天-->
                    <table class="table table-bordered" style="margin-top: 10px;display: none;">
                        <thead>
                        <tr>
                            <th>统计时间</th>
                            <th>浏览量</th>
                            <th>独立访客量</th>
                            <th>人均浏览次数</th>
                            <th>最大同时在线量</th>
                            <th>最大在线量时间段</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>2015-01-29</th>
                            <td>2</td>
                            <td>3</td>
                            <td>0</td>
                            <td>10</td>
                            <td>20</td>
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
</body>
</html>