<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ThinkPHP Base Template</title>
    <link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.css" />
</head>
<body>
    <div class="container">
	<div class="col-md-2"></div>
	
	<div class="row">
  	    <div class="col-md-2"></div>
  	    <div class="col-md-8">
    <form method="post" action="/index.php/Home/User/registerValidate">
	<div calss="form-group">
	    <label for="exampleInputName">Name</label>
	    <input type="text" name="username" class="form-control" id="exampleInputName" placeholder="Name">
	</div>
	<div calss="form-group">
	    <label for="exampleInputEmail">Email</label>
	    <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="Email">
	</div>

	<div calss="form-group">
	    <img id="verifyImg" src="/index.php/Home/User/verify"/>
	    <label for="exampleInputCode">Code</label>
	    <input type="text" name="captcha" class="form-control" id="exampleInputCode" placeholder="Code">
	</div>
	<div><p style="color:red"><?php echo ($result); ?></p></div>
	<button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
  	    <div class="col-md-2"></div>
	</div>

	<div class="col-md-2"></div>
	
    </div>
</body>
</html>