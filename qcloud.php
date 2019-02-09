<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>服务器解析生成工具</title>
<link rel="stylesheet" href="static/css/layui.css">
</head>
<body>
<div class="layui-row">
<div class="layui-col-md6 layui-col-md-offset3">
<div class="layui-card">
  <div class="layui-card-body layui-bg-gray">
<form class="layui-form" action="qcloud.php" method="post">
<div class="layui-form-item">
  <label class="layui-form-label">腾讯云SecretID</label>
  <div class="layui-input-block">
   <input type="text" name="secretid" required lay-verify="required" placeholder="请输入腾讯云SecretID" autocomplete="off" class="layui-input">
  </div>
</div>
<div class="layui-form-item">
  <label class="layui-form-label">腾讯云SecretKRY</label>
  <div class="layui-input-block">
   <input type="text" name="secretkey" required lay-verify="required" placeholder="请输入腾讯云SecretKEY" autocomplete="off" class="layui-input">
  </div>
</div>
<div class="layui-form-item">
  <label class="layui-form-label">IP</label>
  <div class="layui-input-block">
    <input type="text" name="ip" required lay-verify="required" placeholder="请输入服务器外网IP" autocomplete="off" class="layui-input"></input>
  </div>
</div>
<div class="layui-form-item">
  <label class="layui-form-label">IP类型</label>
  <div class="layui-input-block">
    <input type="radio" name="iptype" value="ipv4" title="IPv4" checked>
<input type="radio" name="iptype" value="ipv6" title="IPv6">
<input type="radio" name="iptype" value="?" title="IPv8（雾" disabled>
  </div>
</div>
<div class="layui-form-item">
  <label class="layui-form-label">域名</label>
  <div class="layui-input-block">
    <input type="text" name="domain" required lay-verify="required" placeholder="请输入你的域名，如(ssl.xxx.com)" autocomplete="off" class="layui-input">    
  </div>
</div>
<div class="layui-form-item">
  <label class="layui-form-label">端口号</label>
  <div class="layui-input-block">
    <input type="text" name="port" required lay-verify="required" placeholder="请输入端口号" autocomplete="off" class="layui-input">    
  </div>
</div>
<div class="layui-form-item">
  <label class="layui-form-label">使用SRV</label>
  <div class="layui-input-block">
    <input type="checkbox" name="srv" lay-skin="switch" lay-text="开启|关闭">
  </div>
</div>
<div class="layui-form-item">
    <div class="layui-input-block">
      <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
      <button type="reset" class="layui-btn layui-btn-primary">重置</button>
    </div>
  </div>
</form></div></div><div class="layui-col-md3 layui-col-md-offset8">
<button class="layui-btn layui-btn-normal"><a href="index.php"><i class="layui-icon">&#xe65a;</i>返回</a></button></div></div>
<div class="layui-row">
<div class="layui-col-md8 layui-col-md-offset2"><br>
<div class="layui-card">
<div class="layui-card-header layui-bg-green">输出日志</div>
<div class="layui-card-body"><pre class="layui-bg-black">
<p>页面初始化成功</p>
<?php
if($_POST['secretkey']!=NULL){
echo "<p>开始运行请求······</p>";
echo "<p>请求地址:cns.api.qcloud.com</p>";
$conn = curl_init("cns.api.qcloud.com");
curl_setopt($conn, CURLOPT_HEADER, 0);
$data=array(
    "Action"=>"RecordCreate",
    "domain"=>""
);
curl_setopt($conn, CURLOPT_POST, 1);
curl_setopt($conn, CURLOPT_CONNECTTIMEOUT, 60); 
curl_setopt($conn, CURLOPT_POSTFIELDS , http_build_query($data));
curl_setopt($conn, CURLOPT_RETURNTRANSFER, 1); 
$return = curl_exec($conn);
curl_close($conn);
}
?></pre><br><br></div></div></div></div>
<script src="static/layui.all.js" charset="utf-8"></script>
</body>
</html>