<?php
/*
软件著作权：=====================================================
软件名称：兴奥国际物流转运网站管理系统(简称：兴奥转运系统)V7.0
著作权人：广西兴奥网络科技有限责任公司
软件登记号：2016SR041223
网址：www.xingaowl.com
本系统已在中华人民共和国国家版权局注册，著作权受法律及国际公约保护！
版权所有，未购买严禁使用，未经书面许可严禁开发衍生品，违反将追究法律责任！
*/
require_once($_SERVER['DOCUMENT_ROOT'].'/public/config_top.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/public/html.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/public/function.php');

require_once($_SERVER['DOCUMENT_ROOT'].'/xamember/incluce/session.php');

//获取,处理
$ydid=par($_GET['ydid']);
if(!$ydid)
{
	exit ("<script>alert('ydid{$LG['pptError']}');goBack();</script>");
}

$rs=FeData('yundan','*',"ydid='{$ydid}' {$Mmy}");

if(!$rs['ydid']){exit(XAts('checked'));}


$headtitle=cadd($rs['ydh']);
$alonepage=1;//单页形式
require_once($_SERVER['DOCUMENT_ROOT'].'/xamember/incluce/head.php');
$callFrom='member';//manage member
require($_SERVER['DOCUMENT_ROOT'].'/xingao/yundan/call/show.php');

require_once($_SERVER['DOCUMENT_ROOT'].'/xamember/incluce/foot.php');
?>
