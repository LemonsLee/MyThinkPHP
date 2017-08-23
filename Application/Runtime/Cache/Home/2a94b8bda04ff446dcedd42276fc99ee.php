<?php if (!defined('THINK_PATH')) exit();?><html>
    <head>
	<title>IndexController index</title>
    </head>
    <body>
        <h1>Hello <?php echo ((isset($user['username']) && ($user['username'] !== ""))?($user['username']):"Jerry"); ?></h1>
	<?php if(($status) == "1"): ?>normal<?php endif; ?>
	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["username"]); ?>:<?php echo ($vo["email"]); ?>
	    <br/><?php endforeach; endif; else: echo "" ;endif; ?>
    </body>
</html>