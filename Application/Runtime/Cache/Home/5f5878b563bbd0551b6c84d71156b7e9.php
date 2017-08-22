<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>ThinkPHP Template</title>

<link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.css" />
</head>
<body>
<div class="container">
<div class="col-md-2"></div>

<a href="/" >首页</a>
<a href="/info/" >资讯</a>
<a href="/bbs/" >论坛</a>

<div class="row">
  <div class="col-md-2">左边分栏</div>
  <div class="col-md-8">主内容</div>
  <div class="col-md-2">
 用户列表：
<?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new): $mod = ($i % 2 );++$i;?><br/><a href="/user/<?php echo ($new["id"]); ?>"><?php echo ($new["username"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
</div>

<div class="col-md-2"></div>

 @ThinkPHP2012 版权所有

</div>
</body>
</html>