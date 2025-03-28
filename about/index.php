<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// 目标链接
$targetUrl = "https://home.zyfx6.xyz";

// 进行 301 永久重定向
header("Location: " . $targetUrl, true, 301);
exit();
?>
</body>
</html>