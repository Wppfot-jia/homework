<?php
header("content-type:text/html;charset=utf-8");

$conn = @mysql_connect('localhost','root','');

mysql_select_db('zhihu');

mysql_query("set names utf8");

$sql = "select * from text order by id desc";

$res = mysql_query($sql);
$row = mysql_fetch_assoc($res);
while($row = mysql_fetch_assoc($res)){
    $rows[] = $row;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link href="../css/admin-text.css" rel="stylesheet" type="text/css">
        
    </head>
    <body>
        <div class="contain">
            <div class="nav">
                <span onclick="index()">后台管理</span>
                <span onclick="personal()" class="first">账号管理</span>
                <span onclick="text()" class="secend">文本管理</span>
               
            </div>
            <div>
            <div class="left">
                <ul>
                    <li>管理列表</li>
                    <li>文本管理</li>
                    
                    <?php foreach($rows as $k=>$v):?>
                    <li><?php echo $v['id']?>.<?php echo $v['title']?></li>
                    <?php endforeach;?>
                   
                    
                    
                </ul>
            </div>
            <div class="right">
                <div class="top">账号管理</div>
                
                <table>
                    <tr>
                        <th style="width:7%">序号</th>
                        <th>标题</th>
                        <th style="width:30%">来自话题</th>
                        <th style="width:18%">操作</th>
                    </tr>
                    
                    <?php foreach($rows as $k=>$v):?>
                    <tr>
                        <td><?php echo $v['id']?></td>
                        <td><?php echo $v['title']?></td>
                        <td><?php echo $v['topic']?></td>
                        <td><span onclick="change()" class="change">修改</span>&nbsp;&nbsp;<span onclick="index()" class="delate">删除</span></td>
                    </tr>
                    <?php endforeach;?>
                   
                     
                </table>

                <div class="bottom">
                    <span class="souye">首页</span>
                    <span class="shangye">上一页</span>
                    <span class="xiaye">下一页</span>
                    <span class="moye">末页</span>
                </div>
                
            </div>
         
        




        </div>
    <script type="text/javascript">
        function index(){
            window.location.href = "index.php";
        }
        function personal(){
            window.location.href = "personal.php";
        }
        function text(){
            window.location.href = "text.php";
        }
        function change(){
            window.location.href = "update-text.php";
        }
    </script>
    </body>
</html>