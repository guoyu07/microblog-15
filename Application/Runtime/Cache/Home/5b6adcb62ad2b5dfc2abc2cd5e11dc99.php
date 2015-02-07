<?php if (!defined('THINK_PATH')) exit();?><html>
<title>微博系统前台登录页面</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="/Public/css/home.css">
<style>

</style>
<body>
<div class="container login">
    <h3 class="title1">微博系统前台登录|注册页面</h3>
    <div class="row">
        <div class="col-md-6">
            <h4>登录</h4>
            <form class="form-horizontal" role="form" action="<?php echo U('Home/Login/do_login');?>" method="post">
                <div class="form-group">
                    <label for="inputuser" class="col-xs-2 control-label"><span
                            class="glyphicon glyphicon-user"></span></label>

                    <div class="col-xs-4">
                        <input type="username" class="form-control" id="username" placeholder="请输入用户名" name="username">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-xs-2 control-label"><span
                            class="glyphicon glyphicon-lock"></span></label>

                    <div class="col-xs-4">
                        <input type="password" class="form-control" id="password" placeholder="请输入密码" name='password'>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10 sub">
                        <button type="submit" class="btn btn-info">登录</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <h4 class="title2">注册</h4>
            <form class="form-horizontal" role="form" action="<?php echo U('Home/Login/do_register');?>" method="post">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">用户名:</label>
                    <div class="col-sm-4">
                        <input type="username" class="form-control" id="inputEmail3" name="username">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">密码:</label>
                    <div class="col-sm-4">
                        <input type="password" class="form-control" id="inputPassword3" name='password'>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">确认密码:</label>
                    <div class="col-sm-4">
                        <input type="password" class="form-control" id="inputPassword2" name='password2'>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10 sub">
                        <button type="submit" class="btn btn-info">注册</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="http://cdn.bootcss.com/js/jquery-2.1.3.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/js/bootstrap.min.js"></script>



</body>
</html>