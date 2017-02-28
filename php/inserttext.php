<?php
header("content-type:text/html;charset=utf-8");

$image = $_POST['image'];
$title = $_POST['title'];
$text = $_POST['text'];
$topic = $_POST['topic'];

$conn = @mysql_connect('localhost','root','');
// if(!$conn){
// 	echo "<script>alert('连接失败!');
// 	window.location.href='../webpage/question.html';
//     </script>";
//     exit;
// }else{
// 	echo "<script>alert('连接成功!');
// 	</script>";
// }
mysql_select_db('zhihu');

mysql_query("set names utf8");

$sql = "insert into text values('','{$image}','{$title}','{$text}','{$topic}')";

$res = mysql_query($sql);

if(!$res){
	echo "<script>alert('提交失败！');
	window.location.href='../webpage/question.html';</script>";
	
}else{
	echo "<script>alert('恭喜你,提交成功！');
	window.location.href='../webpage/index.php';</script>";
}
