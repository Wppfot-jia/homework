<?php
header("content-type:text/html;charset=utf-8");
$id = $_POST['id'];
$title = $_POST['title'];
$topic = $_POST['topic'];
$image = $_POST['image'];
$text = $_POST['text'];

$conn = @mysql_connect('localhost','root','');

mysql_query("use zhihu");

mysql_query("set names utf8");

$sql = "update denglu set title='{$title}',topic='{$topic}',image='{$image}',text='{$text}' where id='{$id}'";



$res = mysql_query($sql);

if(!$res){
	echo "<script>alert('修改失败！');
	window.location.href='update-text.php';</script>";
	
}else{
	echo "<script>alert('恭喜你,修改成功！');
	window.location.href='text.php';</script>";
}
?>