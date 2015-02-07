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
            <span class="caret"></span>&nbsp;&nbsp; 系统配置<span class="badge" style="float: right">9</span>
        </button>
        <ul class="dropdown-menu" role="menu" style="width: 200px;">
            <li><a href="#" class="btn btn-success dropdown-toggle">站点配置</a></li>
            <li class="divider"></li>
            <li><a href="#" class="btn btn-info dropdown-toggle">导航配置</a></li>
            <li class="divider"></li>
            <li><a href="#" class="btn btn-success dropdown-toggle">注册配置</a></li>
            <li class="divider"></li>
            <li><a href="#" class="btn btn-info dropdown-toggle">邀请配置</a></li>
            <li class="divider"></li>
            <li><a href="#" class="btn btn-success dropdown-toggle">游客配置</a></li>
            <li class="divider"></li>
            <li><a href="#" class="btn btn-info dropdown-toggle">微博配置</a></li>
            <li class="divider"></li>
            <li><a href="#" class="btn btn-success dropdown-toggle">邮件配置</a></li>
            <li class="divider"></li>
            <li><a href="#" class="btn btn-info dropdown-toggle">消息配置</a></li>
            <li class="divider"></li>
            <li><a href="#" class="btn btn-info dropdown-toggle">权限节点配置</a></li>
        </ul>
    </div>
</div>
<div class="col-md-9" style="margin-left: 30px;width: 945px">
    <div class="well">
        <p style="color: #08c;font-weight: bold;">导航配置</p>
        <hr/>
        <div class="form-group">
            <ul class="nav nav-tabs">
                <li role="presentation" class="active"><a href="#">头部导航</a></li>
                <li role="presentation"><a href="#">底部导航</a></li>
                <li role="presentation"><a href="#">游客导航</a></li>
                <li role="presentation"><a href="#">增加导航</a></li>
            </ul>
            <!--头部导航-->
            <div aria-label="Basic example" style="margin-top: 10px;background-color: #d2dbea">
                <button type="button" class="btn btn-default">添加</button>
            </div>
            <table class="table table-bordered" style="margin-top: 10px">
                <thead>
                <tr>
                    <th>导航ID</th>
                    <th>导航名称</th>
                    <th>英文名称</th>
                    <th>链接地址</th>
                    <th>打开方式</th>
                    <th>状态</th>
                    <th>导航位置</th>
                    <th>应用排序</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>
                        <a href="#">添加子导航</a>&nbsp;<a href="#">编辑</a>&nbsp;<a href="#">删除</a>
                    </td>
                </tr>
                </tbody>
            </table>
            <!--底部导航-->
            <div aria-label="Basic example" style="margin-top: 10px;background-color: #d2dbea;display: none">
                <button type="button" class="btn btn-default">添加</button>
            </div>
            <table class="table table-bordered" style="margin-top: 10px;display:none">
                <thead>
                <tr>
                    <th>导航ID</th>
                    <th>导航名称</th>
                    <th>英文名称</th>
                    <th>链接地址</th>
                    <th>打开方式</th>
                    <th>状态</th>
                    <th>导航位置</th>
                    <th>应用排序</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>
                        <a href="#">添加子导航</a>&nbsp;<a href="#">编辑</a>&nbsp;<a href="#">删除</a>
                    </td>
                </tr>
                </tbody>
            </table>
            <!--游客导航-->
            <div aria-label="Basic example" style="margin-top: 10px;background-color: #d2dbea;display: none">
                <button type="button" class="btn btn-default">添加</button>
            </div>
            <table class="table table-bordered" style="margin-top: 10px;display:none">
                <thead>
                <tr>
                    <th>导航ID</th>
                    <th>导航名称</th>
                    <th>英文名称</th>
                    <th>链接地址</th>
                    <th>打开方式</th>
                    <th>状态</th>
                    <th>导航位置</th>
                    <th>应用排序</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>
                        <a href="#">添加子导航</a>&nbsp;<a href="#">编辑</a>&nbsp;<a href="#">删除</a>
                    </td>
                </tr>
                </tbody>
            </table>
            <!--增加导航-->
            <form class="form-horizontal" role="form" style="display: none">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Email:</label>

                    <div class="col-sm-5">
                        <input type="email" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <hr/>
                <div class="form-group">
                    <label class="col-sm-2 control-label">导航名称:</label>

                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="inputEmail4">
                    </div>
                </div>
                <hr/>
                <div class="form-group">
                    <label class="col-sm-2 control-label">英文名称:</label>

                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="inputPassword5">
                    </div>
                </div>
                <hr/>
                <div class="form-group">
                    <label class="col-sm-2 control-label">链接地址:</label>

                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="inputPassword6">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">打开方式:</label>

                    <div class="col-sm-5">
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                新窗口
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">新窗口</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">当前窗口</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">父窗口</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="form-group">
                    <label>站点状态:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span><input type="radio" name="type" value="1" checked></span> 开启 &nbsp;&nbsp;
                    <span><input type="radio" name="type" value="2"></span> 关闭
                </div>
                <hr/>
                <div class="form-group">
                    <label class="col-sm-2 control-label">导航位置:</label>

                    <div class="col-sm-5">
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                头部导航
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">头部导航</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">底部导航</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">游客导航</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="form-group">
                    <label class="col-sm-2 control-label">应用排序:</label>

                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="inputPassword7">
                    </div>
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

</div>
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>