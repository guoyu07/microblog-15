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
                    <span class="caret"></span>&nbsp;&nbsp; 系统配置<span class="badge" style="float: right">6</span>
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
                </ul>
            </div>
        </div>
        <div class="col-md-9" style="margin-left: 30px;width: 945px">
            <div class="well">
                <p style="color: #08c;font-weight: bold;">游客配置</p>
                <hr/>
                <div class="form-group">
                    <label>微吧首页:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span><input type="radio" name="type" value="1" checked></span> 是 &nbsp;&nbsp;
                    <span><input type="radio" name="type" value="2"></span> 否
                    <hr style="BORDER-BOTTOM-STYLE: dotted;"/>
                    <label>微吧详情:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span><input type="radio" name="type" value="1" checked></span> 是 &nbsp;&nbsp;
                    <span><input type="radio" name="type" value="2"></span> 否
                    <hr style="BORDER-BOTTOM-STYLE: dotted;"/>
                    <label>微吧帖子详情:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span><input type="radio" name="type" value="1" checked></span> 是 &nbsp;&nbsp;
                    <span><input type="radio" name="type" value="2"></span> 否
                    <hr style="BORDER-BOTTOM-STYLE: dotted;"/>
                    <label>微吧帖子列表:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span><input type="radio" name="type" value="1" checked></span> 是 &nbsp;&nbsp;
                    <span><input type="radio" name="type" value="2"></span> 否
                    <hr style="BORDER-BOTTOM-STYLE: dotted;"/>
                    <label>微吧列表:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span><input type="radio" name="type" value="1" checked></span> 是 &nbsp;&nbsp;
                    <span><input type="radio" name="type" value="2"></span> 否
                    <hr style="BORDER-BOTTOM-STYLE: dotted;"/>
                    <label>找人:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span><input type="radio" name="type" value="1" checked></span> 是 &nbsp;&nbsp;
                    <span><input type="radio" name="type" value="2"></span> 否
                    <hr style="BORDER-BOTTOM-STYLE: dotted;"/>
                    <label>频道:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span><input type="radio" name="type" value="1" checked></span> 是 &nbsp;&nbsp;
                    <span><input type="radio" name="type" value="2"></span> 否

                    <div class="form-group" style="margin-left: 330px">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-info">保存</button>
                        </div>
                    </div>
                    <hr/>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>