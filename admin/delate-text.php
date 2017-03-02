<?php
header("content-type:text/html;charset=utf-8");
$id = $_GET['id'];

$conn = @mysql_connect('localhost','root','');

mysql_select_db('zhihu');

mysql_query("set names utf8");

$sql = "delete from text where id='{$id}'";

$res = mysql_query($sql);

if(!$res){
	echo "<script>alert('删除失败！');
	window.location.href='text.php';</script>";
	
}else{
	echo "<script>alert('该条记录已成功删除！');
	window.location.href='text.php';</script>";
}
?>