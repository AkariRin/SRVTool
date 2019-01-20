<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>服务器解析生成工具</title>
<link rel="stylesheet" href="static/css/layui.css">
<script src="static/layui.js"></script>
</head>
<body>
<form class="layui-form layui-form-pane" action="backend.php" method="get">
<div class="layui-form-item">
  <label class="layui-form-label">IP</label>
  <div class="layui-input-block">
    <input type="text" name="ip" required lay-verify="required" placeholder="请输入服务器外网IP" autocomplete="off" class="layui-input"></input>
  </div>
</div>
<div class="layui-form-item">
  <label class="layui-form-label">域名前缀</label>
  <div class="layui-input-block">
    <input type="text" name="domainprefix" required lay-verify="required" placeholder="请输入你的域名前缀(prefix.xxx.com)" autocomplete="off" class="layui-input">    
  </div>
</div>
<div class="layui-form-item">
  <label class="layui-form-label">使用SRV</label>
  <div class="layui-input-block">
    原始表单元素区域
  </div>
</div>
</form>
</body>
</html>