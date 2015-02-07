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
                <p style="color: #08c;font-weight: bold;">计划任务</p>
                <hr/>
                <div class="form-group">
                    <ul class="nav nav-tabs">
                        <li role="presentation" class="active"><a href="#">计划任务列表</a></li>
                        <li role="presentation"><a href="#">新建计划任务</a></li>
                    </ul>
                    <!--计划任务列表-->
                    <div aria-label="Basic example" style="margin-top: 10px;background-color: #d2dbea">
                        <button type="button" class="btn btn-default">删除计划任务</button>
                    </div>
                    <table class="table table-bordered" style="margin-top: 10px;">
                        <thead>
                        <tr>
                            <th>
                                <div class="checkbox">
                                    <label> <input type="checkbox" value=""> </label>
                                </div>
                            </th>
                            <th>ID</th>
                            <th>执行函数</th>
                            <th>开始时间</th>
                            <th>失效时间</th>
                            <th>上次执行</th>
                            <th>简介</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>
                                <div class="checkbox">
                                    <label> <input type="checkbox" value=""> </label>
                                </div>
                            </th>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                        </tr>
                        </tbody>
                    </table>
                    <!--新建计划任务-->
                    <div aria-label="Basic example" style="margin-top: 10px;background-color: #d2dbea;display: none">
                        <p style="color: #08c;font-weight: bold;">新建计划任务</p>
                        <hr/>
                        <div class="form-group">
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">执行函数:</label>

                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="inputEmail3">
                                    </div>
                                    <p>计划任务执行的函数，格式为：app/Model/method</p>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">开始时间:</label>

                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="inputPassword4">
                                    </div>
                                    <p>任务启动时间，使用“Y-m-d H:i:s”格式</p>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">结束时间:</label>

                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="inputPassword5">
                                    </div>
                                    <p>失效时间，使用“Y-m-d H:i:s”格式</p>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">简介:</label>

                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="inputPassword6">
                                    </div>
                                    <p>对计划任务的简要描述</p>
                                </div>
                                <div class="form-group" style="margin-left: 330px">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-info">保存</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>