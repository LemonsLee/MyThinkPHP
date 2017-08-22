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
    <form method="post" action="/index.php/Home/User/uploadFile" enctype="multipart/form-data">

        <div class="form-group">
            <label for="exampleInputFile">Choose File</label>
            <input type="file" id="exampleInputFile" name="file">
            <p class="help-block">Choose your file to upload</p>
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
  <div class="col-md-2"></div>
</div>

<div class="col-md-2"></div>

</div>
</body>
</html>