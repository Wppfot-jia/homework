<?php
header("content-type:text/html;charset=utf-8");
$name = $_POST['name'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$addtime = date("Y-m-d H:i:s");


$conn = @mysql_connect('localhost','root','');

// if(!$conn){
// 	echo "<script>alert('连接失败！');
// 	</script>";
// }else{
// 	echo "<script>alert('连接成功！');
// 	window.localtion.href='../denglu.html';</script>";
// }

mysql_select_db('zhihu');

mysql_query("set names utf8");

$sql = "insert into denglu values('','{$name}','{$phone}','{$password}','{$addtime}')";

$res = mysql_query($sql);

if(!$res){
	echo "<script>alert('注册失败！');
	window.location.href='../denglu.html';</script>";
	
}else{
	echo "<script>alert('恭喜你,注册成功！');
	window.location.href='../denglu.html';</script>";
}
?>



