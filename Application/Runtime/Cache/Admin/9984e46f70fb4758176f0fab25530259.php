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
                <p style="color: #08c;font-weight: bold;">微吧列表</p>
                <hr/>
                <div class="form-group">
                    <ul class="nav nav-tabs">
                        <li role="presentation" class="active"><a href="#">微吧列表</a></li>
                        <li role="presentation"><a href="#">添加微吧</a></li>
                    </ul>
                    <!--微吧列表-->
                    <div aria-label="Basic example" style="margin-top: 10px;background-color: #d2dbea;display: none">
                        <button type="button" class="btn btn-default">搜索微吧</button>
                        &nbsp;
                        <button type="button" class="btn btn-default">解散微吧</button>
                    </div>
                    <table class="table table-bordered" style="margin-top: 10px;">
                        <thead>
                        <tr>
                            <th>
                                <div class="checkbox">
                                    <label> <input type="checkbox" value=""> </label>
                                </div>
                            </th>
                            <th>微吧ID</th>
                            <th>微吧名称</th>
                            <th>微吧分类</th>
                            <th>创建者</th>
                            <th>创建时间</th>
                            <th>是否激活</th>
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
                            <td>
                                <a href="#">删除</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                    <!--添加微吧-->
                <div class="form-group" style="margin-top: 10px;display: none">
                    <label class="col-sm-2 control-label">微吧名称:</label>

                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="inputEmail1">
                    </div>

                    <br/>
                    <hr/>
                    <label class="col-sm-2 control-label">微吧简介:</label>
                    <div class="col-sm-5">
                        <textarea name="remark" rows="3" cols="52"></textarea>
                    </div>
                    <hr/>
                    <div class="form-group" style="margin-left: 330px;">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-info">保存</button>
                        </div>
                    </div>
                </div>
                <hr/>
            </div>
        </div>
    </div>

</div>
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>