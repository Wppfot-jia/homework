<?php
header("content-type:text/html;charset=utf-8");
$phone2 = $_POST['phone2'];
$psw = $_POST['psw'];

$conn = @mysql_connect('localhost','root','');

// if(!$conn){
// 	echo "<script>alert('连接失败！');</script>";
// }else{
// 	echo "<script>alert('连接成功！');
// 	window.localtion.href='../denglu.html';</script>";
// }
mysql_query("use zhihu");

mysql_query("set names utf8");

$sql = "select * from denglu where phone='{$phone2}' and password='{$psw}'";

$res = mysql_query($sql);

$row = mysql_fetch_assoc($res);

if(!$row){
	echo "<script>alert('用户名或密码错误');
	window.location.href='../denglu.html';</script>";
	exit;
}else{
	echo "<script>alert('登录成功');
	window.location.href='../webpage/index.php';
	</script>";
}



var_dump($row);
