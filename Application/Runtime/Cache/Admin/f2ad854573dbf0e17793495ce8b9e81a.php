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
            <span class="caret"></span>&nbsp;&nbsp; 用户<span class="badge" style="float: right">3</span>
        </button>
        <ul class="dropdown-menu" role="menu" style="width: 200px;">
            <li><a href="#" class="btn btn-success dropdown-toggle">用户管理</a></li>
            <li class="divider"></li>
            <li><a href="#" class="btn btn-info dropdown-toggle">用户组管理</a></li>
            <li class="divider"></li>
            <li><a href="#" class="btn btn-info dropdown-toggle">找人配置</a></li>
        </ul>
    </div>
</div>
<div class="col-md-9" style="margin-left: 30px;width: 945px">
<div class="well">
<p style="color: #08c;font-weight: bold;">用户管理</p>
<hr/>
<div class="form-group">
<ul class="nav nav-tabs">
    <li role="presentation" class="active"><a href="#">用户列表</a></li>
    <li role="presentation"><a href="#">待审列表</a></li>
    <li role="presentation"><a href="#">禁用列表</a></li>
    <li role="presentation"><a href="#">添加用户</a></li>
</ul>
<!--用户列表-->
<div aria-label="Basic example" style="margin-top: 10px;background-color: #d2dbea">
    <button type="button" class="btn btn-default">搜索用户</button>
    &nbsp;
    <button type="button" class="btn btn-default">转移用户组</button>
</div>
<table class="table table-bordered" style="margin-top: 10px">
    <thead>
    <tr>
        <th>
            <div class="checkbox">
                <label> <input type="checkbox" value=""> </label>
            </div>
        </th>
        <th>UID</th>
        <th>用户名</th>
        <th>用户组</th>
        <th>地区</th>
        <th>是否审核</th>
        <th>是否激活</th>
        <th>是否初始化</th>
        <th>注册时间</th>
        <th>注册IP</th>
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
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>
            <a href="#">编辑</a>&nbsp;<a href="#">禁用</a>&nbsp;<a href="#">删除</a>
        </td>
    </tr>
    <tr>
        <th>
            <div class="checkbox">
                <label> <input type="checkbox" value=""> </label>
            </div>
        </th>
        <td>2</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td><a href="#">编辑</a>&nbsp;<a href="#">禁用</a>&nbsp;<a href="#">删除</a></td>
    </tr>
    </tbody>
</table>
<!--待审列表-->
<div aria-label="Basic example" style="margin-top: 10px;background-color: #d2dbea;display: none">
    <button type="button" class="btn btn-default">搜索用户</button>
    &nbsp;
    <button type="button" class="btn btn-default">通过审核</button>
</div>
<table class="table table-bordered" style="margin-top: 10px;display:none">
    <thead>
    <tr>
        <th>
            <div class="checkbox">
                <label> <input type="checkbox" value=""> </label>
            </div>
        </th>
        <th>UID</th>
        <th>用户名</th>
        <th>地区</th>
        <th>注册时间</th>
        <th>注册IP</th>
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
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>
            <a href="#">编辑</a>&nbsp;<a href="#">禁用</a>&nbsp;<a href="#">删除</a>
        </td>
    </tr>
    </tbody>
</table>
<!--禁用列表-->
<div aria-label="Basic example" style="margin-top: 10px;background-color: #d2dbea;display: none">
    <button type="button" class="btn btn-default">搜索用户</button>
    &nbsp;
    <button type="button" class="btn btn-default">恢复账号</button>
</div>
<table class="table table-bordered" style="margin-top: 10px;display:none">
    <thead>
    <tr>
        <th>
            <div class="checkbox">
                <label> <input type="checkbox" value=""> </label>
            </div>
        </th>
        <th>UID</th>
        <th>用户名</th>
        <th>用户组</th>
        <th>地区</th>
        <th>审核</th>
        <th>激活</th>
        <th>初始化</th>
        <th>注册时间</th>
        <th>注册IP</th>
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
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>
            <a href="#">编辑</a>&nbsp;<a href="#">禁用</a>&nbsp;<a href="#">删除</a>
        </td>
    </tr>
    </tbody>
</table>
<!--添加用户-->
<form class="form-horizontal" role="form" style="display: none">
    <div class="form-group">
        <label class="col-sm-2 control-label">Email:</label>

        <div class="col-sm-5">
            <input type="email" class="form-control" id="inputEmail3">
        </div>
    </div>
    <hr/>
    <div class="form-group">
        <label class="col-sm-2 control-label">用户名:</label>

        <div class="col-sm-5">
            <input type="text" class="form-control" id="inputEmail4">
        </div>
    </div>
    <hr/>
    <div class="form-group">
        <label class="col-sm-2 control-label">密码:</label>

        <div class="col-sm-5">
            <input type="password" class="form-control" id="inputPassword5">
        </div>
    </div>
    <hr/>
    <div class="radio">
        <label class="col-sm-2 control-label">性别:</label>

        <div class="col-sm-5">
            <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>男
            </label>
            <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">女
            </label>
        </div>
    </div>
    <hr/>
    <div class="form-group">
        <label class="col-sm-2 control-label">用户组:</label>
        <label class="checkbox-inline col-sm-2 control-label">
            <input type="checkbox" id="inlineCheckbox1" value="option1"> 管理员
        </label>
        <label class="checkbox-inline col-sm-2 control-label">
            <input type="checkbox" id="inlineCheckbox2" value="option2"> 正常用户
        </label>
        <label class="checkbox-inline col-sm-2 control-label">
            <input type="checkbox" id="inlineCheckbox3" value="option3"> 禁言用户
        </label>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10" style="margin-left: 600px">
            <button type="submit" class="btn btn-info">保存</button>
        </div>
    </div>
</form>
</div>
</div>
</div>
</div>


</div>
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>