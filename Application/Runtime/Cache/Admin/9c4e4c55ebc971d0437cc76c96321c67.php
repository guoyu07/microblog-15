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
                    <span class="caret"></span>&nbsp;&nbsp; 应用管理<span class="badge" style="float: right">3</span>
                </button>
                <ul class="dropdown-menu" role="menu" style="width: 200px;">
                    <li><a href="#" class="btn btn-success dropdown-toggle">已安装应用</a></li>
                    <li class="divider"></li>
                    <li><a href="#" class="btn btn-info dropdown-toggle">频道</a></li>
                    <li class="divider"></li>
                    <li><a href="#" class="btn btn-success dropdown-toggle">微吧</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9" style="margin-left: 30px;width: 945px">
            <div class="well">
                <p style="color: #08c;font-weight: bold;">已安装应用列表</p>
                <hr/>
                <div class="form-group">
                    <div aria-label="Basic example" style="margin-top: 10px;background-color: #d2dbea">
                        <button type="button" class="btn btn-default">开启</button>
                        &nbsp;
                        <button type="button" class="btn btn-default">关闭</button>
                    </div>
                    <table class="table table-bordered" style="margin-top: 5px">
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
</body>
</html>