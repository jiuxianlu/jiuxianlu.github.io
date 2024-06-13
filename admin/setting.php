<?php 
  include('config.php');$tips='';include('admincore.php');?>
<?='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
'; include('inc.php');?>
<?='<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/jquery.dragsort-0.4.min.js"></script>


</head>

<body>
'; $nav='setting';include('head.php');?>
<?='
<div id="hd_main">
  <div align="center">'; echo $tips?><?='</div>
 <form name="configform" id="configform" action="./setting.php?act=setting&t='; echo time()?><?='" method="post" onsubmit="return subck()">

<table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" class="tablecss">
<tr class="thead">
<td colspan="10" align="center">基础设置</td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">首页标题：</td>
    <td ><input type="text" name="cdkj[title]" value="'; echo $cdkj['title']?><?='" size="50"></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">首页关键字：</td>
    <td ><textarea name="cdkj[keywords]" cols="80" rows="2">'; echo $cdkj['keywords']?><?='</textarea></td>
      
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">首页描述：</td>
    <td ><textarea name="cdkj[description]" cols="80" rows="3">'; echo $cdkj['description']?><?='</textarea></td>
</tr>

<tr class="thead">
<td colspan="10" align="center">账号设置</td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">登录账号：</td>
    <td ><input type="text" name="cdkj[admin_name]" value="'; echo $cdkj['admin_name']?><?='" ></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">登录密码：</td>
    <td ><input type="text" name="cdkj[admin_pass]" value="" size="30"></td>
</tr>
<tr class="thead">
<td colspan="10" align="center">LOGO设置</td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">导航栏LOGO：</td>
    <td ><textarea name="cdkj[logo_dh]" cols="80" rows="1">'; echo $cdkj['logo_dh']?><?='</textarea></td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">安卓下载地址：</td>
    <td ><textarea name="cdkj[appandroid]" cols="80" rows="1">'; echo $cdkj['appandroid']?><?='</textarea></td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">苹果下载地址：</td>
    <td ><textarea name="cdkj[appios]" cols="80" rows="1">'; echo $cdkj['appios']?><?='</textarea></td>
</tr>
<tr class="thead">
<td colspan="10" align="center">app参数配置</td>
</tr>
<tr>
	<td width="125" align="right" valign="middle" class="s_title">app名字</td>
    <td ><textarea name="cdkj[appname]" cols="80" rows="1">'; echo $cdkj['appname']?><?='</textarea></td>
</tr>
<tr>
	<td width="125" align="right" valign="middle" class="s_title">数+</td>
    <td ><textarea name="cdkj[appages]" cols="80" rows="1">'; echo $cdkj['appages']?><?='</textarea></td>
</tr>
<tr>
	<td width="125" align="right" valign="middle" class="s_title">短介</td>
    <td ><textarea name="cdkj[appdj]" cols="80" rows="1">'; echo $cdkj['appdj']?><?='</textarea></td>
</tr>
<tr>
	<td width="125" align="right" valign="middle" class="s_title">按钮提示</td>
    <td ><textarea name="cdkj[appants]" cols="80" rows="1">'; echo $cdkj['appants']?><?='</textarea></td>
</tr>
<tr>
	<td width="125" align="right" valign="middle" class="s_title">评分</td>
    <td ><textarea name="cdkj[apppf]" cols="80" rows="1">'; echo $cdkj['apppf']?><?='</textarea></td>
</tr>
<tr>
	<td width="125" align="right" valign="middle" class="s_title">评分提示</td>
    <td ><textarea name="cdkj[apppfts]" cols="80" rows="1">'; echo $cdkj['apppfts']?><?='</textarea></td>
</tr>
<tr>
	<td width="125" align="right" valign="middle" class="s_title">年龄</td>
    <td ><textarea name="cdkj[appxage]" cols="80" rows="1">'; echo $cdkj['appxage']?><?='</textarea></td>
</tr>
<tr>
	<td width="125" align="right" valign="middle" class="s_title">描述</td>
    <td ><textarea name="cdkj[appdes]" cols="80" rows="1">'; echo $cdkj['appdes']?><?='</textarea></td>
</tr>
<tr>
	<td width="125" align="right" valign="middle" class="s_title">得分</td>
    <td ><textarea name="cdkj[appdefen]" cols="80" rows="1">'; echo $cdkj['appdefen']?><?='</textarea></td>
</tr>
<tr>
	<td width="125" align="right" valign="middle" class="s_title">满分</td>
    <td ><textarea name="cdkj[appmanfen]" cols="80" rows="1">'; echo $cdkj['appmanfen']?><?='</textarea></td>
</tr>
<tr>
	<td width="125" align="right" valign="middle" class="s_title">新功能</td>
    <td ><textarea name="cdkj[appxinfun]" cols="80" rows="1">'; echo $cdkj['appxinfun']?><?='</textarea></td>
</tr>
<tr>
	<td width="125" align="right" valign="middle" class="s_title">新功能简介</td>
    <td ><textarea name="cdkj[appxinfundes]" cols="80" rows="1">'; echo $cdkj['appxinfundes']?><?='</textarea></td>
</tr>

<tr>
	<td width="125" align="right" valign="middle" class="s_title">大小</td>
    <td ><textarea name="cdkj[appsize]" cols="80" rows="1">'; echo $cdkj['appsize']?><?='</textarea></td>
</tr>
<tr>
	<td width="125" align="right" valign="middle" class="s_title">兼容性</td>
    <td ><textarea name="cdkj[appjrx]" cols="80" rows="1">'; echo $cdkj['appjrx']?><?='</textarea></td>
</tr>
<tr>
	<td width="125" align="right" valign="middle" class="s_title">语言</td>
    <td ><textarea name="cdkj[appyuyan]" cols="80" rows="1">'; echo $cdkj['appyuyan']?><?='</textarea></td>
</tr>
<tr>
	<td width="125" align="right" valign="middle" class="s_title">年龄分级</td>
    <td ><textarea name="cdkj[appagefj]" cols="80" rows="1">'; echo $cdkj['appagefj']?><?='</textarea></td>
</tr>
<tr>
	<td width="125" align="right" valign="middle" class="s_title">Copyright</td>
    <td ><textarea name="cdkj[appcopyr]" cols="80" rows="1">'; echo $cdkj['appcopyr']?><?='</textarea></td>
</tr>
<tr>
	<td width="125" align="right" valign="middle" class="s_title">价格</td>
    <td ><textarea name="cdkj[appprice]" cols="80" rows="1">'; echo $cdkj['appprice']?><?='</textarea></td>
</tr>
<tr>
	<td width="125" align="right" valign="middle" class="s_title">隐私政策</td>
    <td ><textarea name="cdkj[appyszc]" cols="80" rows="1">'; echo $cdkj['appyszc']?><?='</textarea></td>
</tr>
<tr>
	<td width="125" align="right" valign="middle" class="s_title">tip标题</td>
    <td ><textarea name="cdkj[apptipname]" cols="80" rows="1">'; echo $cdkj['apptipname']?><?='</textarea></td>
</tr>
<tr>
	<td width="125" align="right" valign="middle" class="s_title">tip描述</td>
    <td ><textarea name="cdkj[apptipdes]" cols="80" rows="1">'; echo $cdkj['apptipdes']?><?='</textarea></td>
</tr>



<tr><!--此处为更新及重要补充，请保留-->
<td colspan="10" align="center"><input name="edit" type="hidden" value="1" /><input id="configSave" type="submit" onclick="return getsort()" value="保 存"></td>
</tr>
</table>
</form>
<script type="text/javascript">
	$(".sxlist:first").dragsort();
</script>
</div>
'; include('foot.php');?>
</body>
</html>
