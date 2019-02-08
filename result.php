<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>解析结果</title>
<link rel="stylesheet" href="static/css/layui.css">
</head>
<body>
<table class="layui-table" lay-size="lg">
  <colgroup>
    <col width="150">
    <col width="200">
    <col>
  </colgroup>
  <thead>
    <tr>
      <th>主机记录</th>
      <th>记录类型</th>
      <th>记录值</th>
    </tr> 
  </thead>
  <tbody>
    <tr>
      <td><?php
$arr=explode('.',$_POST["domain"],-2);
echo implode(".",$arr);
      ?></td>
      <td><?php
if($_POST["iptype"]=="ipv4")
{echo "A";}
else{echo "AAAA";}
?></td>
      <td><?php echo $_POST["ip"]; ?></td>
    </tr>
<?php
if($_POST["srv"]=="on")
{
echo "<tr>
      <td>_minecraft._tcp</td>
      <td>SRV</td>
      <td>5 0 {$_POST['port']} {$_POST['domain']}
      </td>
    </tr>";}
else{echo "";}
?>
  </tbody>
</table>
<div class="layui-row">
<div class="layui-col-md3 layui-col-md-offset8">
<button class="layui-btn layui-btn-normal"><a href="index.php"><i class="layui-icon">&#xe65a;</i>返回</a></button>
<button class="layui-btn layui-btn-warm"><a href="api.php?"><i class="layui-icon">&#xe64e;</i>API</a></button>
<button class="layui-btn layui-btn-warm"><a href="https://dev.tencent.com/s/9366ba73-cbc4-475a-bf47-3269d02f0c5e"><i class="layui-icon">&#xe64c;</i>API文档</a></button>
</div></div>
<script src="static/layui.all.js" charset="utf-8"></script>
</body>
</html>