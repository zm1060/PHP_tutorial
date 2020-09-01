<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vertify</title>
</head>
<body>
<form action="/chapter-8/index.php/Home/Index/login_do" method="post">
    <input type="text" placeholder="请输入验证码" name="code" required>
    <img src="<?php echo U('vertify');?>" alt="" onclick="this.src='<?php echo U(vertify);?>?'+Math.random()" title="看不清，换一张">
    <button>Login</button>
</form>
</body>
</html>