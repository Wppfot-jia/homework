<?php
header("content-type:text/html;charset=utf-8");

$conn = @mysql_connect('localhost','root','');

mysql_select_db('zhihu');

mysql_query("set names utf8");

$sql = "select * from denglu order by id desc";

$res = mysql_query($sql);

while($row = mysql_fetch_assoc($res)){
    $rows[] = $row;
}
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link href="../css/admin-per.css" rel="stylesheet" type="text/css">
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
                    <li>账号管理</li>
                    <?php foreach($rows as $k=>$v):?>
                    <li><?php echo $v['id']?>.<?php echo $v['name']?></li>
                    <?php endforeach;?>
                    
                    
                </ul>
            </div>
            <div class="right">
                <div class="top">账号管理</div>
                
                <table>
                    <tr>
                        <th style="width:7%">序号</th>
                        <th style="width:15%">名字</th>
                        <th style="width:18%">手机号</th>
                        <th>密码</th>
                        <th style="width:22%">注册时间</th>
                        <th style="width:18%">操作</th>
                    </tr>
                    
                    <?php foreach($rows as $k=>$v):?>
                    <tr>
                        <td><?php echo $v['id']?></td>
                        <td><?php echo $v['name']?></td>
                        <td><?php echo $v['phone']?></td>
                        <td><?php echo $v['password']?></td>
                        <td><?php echo $v['addtime']?></td>
                        <td><span onclick="change()" class="change"><a style="color:rgb(66,140,200);text-decoration:none;" href="update-denglu.php?id=<?php echo $v['id'];?>">修改</a></span>&nbsp;&nbsp;<span class="delate"><a style="color:rgb(66,140,200);text-decoration:none;" href="update-denglu.php?id=<?php echo $v['id'];?>">删除</a></span></td>
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
            window.location.href = "update-denglu.php";
        }
    </script>
    </body>
</html>