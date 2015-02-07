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
                <p style="color: #08c;font-weight: bold;">注册配置</p>
                <hr/>
                <div class="form-group">
                    <label>注册方式:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span><input type="radio" name="type" value="1" checked></span> 开房注册 &nbsp;&nbsp;
                    <span><input type="radio" name="type" value="2"></span> 仅邀请注册
                    <span><input type="radio" name="type" value="2"></span> 仅管理员邀请注册
                    <hr/>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">邮箱后缀:</label>

                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="inputEmail1">
                        </div>
                    </div>
                    <hr/>
                    <br/>
                    <label>需要审核:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span><input type="radio" name="type" value="1" checked></span> 开启 &nbsp;&nbsp;
                    <span><input type="radio" name="type" value="2"></span> 关闭
                    <hr/>
                    <label>需要激活:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span><input type="radio" name="type" value="1" checked></span> 开启 &nbsp;&nbsp;
                    <span><input type="radio" name="type" value="2"></span> 关闭
                    <hr/>
                    <label>上传头像步骤:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span><input type="radio" name="type" value="1" checked></span> 开启 &nbsp;&nbsp;
                    <span><input type="radio" name="type" value="2"></span> 关闭
                    <hr/>
                    <label>设置个人标签步骤:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span><input type="radio" name="type" value="1" checked></span> 开启 &nbsp;&nbsp;
                    <span><input type="radio" name="type" value="2"></span> 关闭
                    <hr/>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">允许设置标签数量:</label>

                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="inputEmail2">
                        </div>
                    </div>
                    <hr/>
                    <br/>
                    <label>关注感兴趣人的步骤:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span><input type="radio" name="type" value="1" checked></span> 开启 &nbsp;&nbsp;
                    <span><input type="radio" name="type" value="2"></span> 关闭
                    <hr/>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">推荐关注用户:</label>

                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <hr/>
                    <div class="form-group" style="margin-left: 330px;">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-info">保存</button>
                        </div>
                    </div>
                    <hr/>
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