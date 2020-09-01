<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
</head>
<body>
<h1>用户登录</h1>
<form action="/chapter-11/index.php/Home/User/do_login" method="post">
    <table>
        <tr>
            <td><label for="username">用户名</label></td>
            <td><input type="text" name="username" id="username" required></td>
        </tr>
        <tr>
            <td><label for="password">密码</label></td>
            <td><input type="password" name="password" id="password" required></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <button>登录</button>
                <button type="reset">重置</button>
            </td>
        </tr>
    </table>
</form>
<p>
    <a href="/chapter-11/index.php/Home/User/register">没有账号？点击注册</a>
</p>
</body>
</html>