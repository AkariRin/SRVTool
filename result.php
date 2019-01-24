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
      <td>@</td>
      <td><?php
if($_POST["iptype"]=="ipv4")
{echo "A";}
else{echo "AAAA";}
?></td>
      <td><?php echo $_POST["ip"]; ?></td>
    </tr>
<?php
if($_POST["srv"]=="on")
{echo "<tr>
      <td>许闲心</td>
      <td>SRV</td>
      <td>于千万人之中遇见你所遇见的人，于千万年之中，时间的无涯的荒野里…</td>
    </tr>";}
else{echo "";}
?>
  </tbody>
</table>
<script src="static/layui.all.js" charset="utf-8"></script>
</body>
</html>