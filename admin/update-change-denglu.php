<?php
header("content-type:text/html;charset=utf-8");
$id = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$addtime = date("Y-m-d H:i:s");

$conn = @mysql_connect('localhost','root','');

mysql_query("use zhihu");

mysql_query("set names utf8");

$sql = "update denglu set name='{$name}',phone='{$phone}',password='{$password}',addtime='{$addtime}' where id='{$id}'";

$res = mysql_query($sql);

if(!$res){
	echo "<script>alert('修改失败！');
	window.location.href='update-denglu.php';</script>";
	
}else{
	echo "<script>alert('恭喜你,修改成功！');
	window.location.href='personal.php';</script>";
}
?>