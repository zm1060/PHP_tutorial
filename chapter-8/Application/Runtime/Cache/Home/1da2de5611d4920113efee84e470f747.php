<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload</title>
</head>
<body>
<form action="/chapter-8/index.php/Home/Index/upload_do" enctype="multipart/form-data" method="post">
    <input type="file" name="file">
    <button>Upload</button>
</form>
</body>
</html>