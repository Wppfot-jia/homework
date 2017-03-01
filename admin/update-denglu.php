<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <style type="text/css">
        body{
            font-family:"Microsoft Yahei";
            background-color:rgb(245,245,245);
        }
        .contain{

            width:900px;
            margin:100px auto;
        }
        .sign{
            background-color:#f8f7f7;
        }
        .msg2{
            color:#ff3333;
            background-color:#ffcc99;
            height:10px;
            border:solid 1px gray;
            line-height:18px;
            font-size:12px;
            padding:5px 10px;
        }
        .msg{
            height:18px;
            position:relative;
            top:6px;
            background-color:#f8f7f7;
        }
        .list dd{
            margin-left:195px;
            margin-top:-50px;
        }
        .submit{

            margin-top:20px;
            font-size:20px;
        }
        .reset{
            margin-left:100px;
            margin-top:20px;
            font-size:20px;
        }
        .list dt{
            font-size:40px;
        }
        .list input{
            background-color:#f8f7f7;
            font-size:25px;
            outline:medium;
            border:none;
            width:400px;
            height:50px;
            border-bottom:1px solid rgb(200,200,200);
        }
        legend{
            font-size:25px;

        }
        .queren{
            cursor:pointer;
            border:none;
            outline:medium;
            width:200px;
            height:40px;
            margin:0 auto;
            margin-left:40%;
            background-color:blue;
            font-size:25px;
            border-radius:5px;
        }
        </style>
    </head>
    <body>
        <div class="contain">
            <fieldset class="sign">
                <legend>修改账户信息</legend>
                <form action="index.html" method="get" class="form" onsubmit="return checkForm()">
                    <dl class="list">
                        <dt>输入名字:</dt>
                        <dd>
                            <input type="text" value="" id="email" onfocus="onfocusEmail()" onblur="onblurEmail()">
                            <span class="" id="s-email"></span>
                        </dd>
                    </dl>
                    <dl class="list">
                        <dt>手机号码:</dt>
                        <dd>
                            <input type="text" value="" id="name" onfocus="onfocusName()" onblur="onblurName()">
                            <span class="" id="s-name"></span>
                        </dd>
                    </dl>
                    <dl class="list">
                        <dt>输入密码:</dt>
                        <dd>
                            <input type="password" value="" id="pwd" onfocus="onfocusPwd()" onblur="onblurPwd()">
                            <span class="" id="s-pwd"></span>
                        </dd>
                    </dl>
                    <dl class="list">
                        <dt>确认密码:</dt>
                        <dd>
                            <input type="password" value="" id="rpwd" onfocus="onfocusRpwd()" onblur="onblurRpwd()">
                            <span class="" id="s-rpwd"></span>
                        </dd>
                    </dl>
                    <input class="queren" type="submit" value="确认修改">
                </form>
            </fieldset>
        </div>
    <script type="text/javascript">
        
        function $(id){
            return document.getElementById(id);
        }

        function checkForm(){
            if(!onblurEmail()){
                return false;
            }else if(!onblurName()){
                return false;
            }else if(!onblurPwd()){
                return false;
            }else if(!onblurRpwd()){
                return false;
            }else{
                return true;
            }
            
        }

        
        function onfocusEmail(){
            var email = $("email");
            var span = $("s-email");
            span.innerHTML = "请输入你的名字！";
            span.className = "msg2";
        }
        function onblurEmail(){
            var email = $("email");
            var span = $("s-email");
            if(email.value == ""){
                span.innerHTML = "名字不能为空！";
                span.className = "msg2";
                return false;
            }else{
                span.innerHTML = "<img src='../img/true.png'>";
                span.className = "msg";
                return true;
            }
        }
        
        function onfocusName(){
            var email = $("name");
            var span = $("s-name");
            span.innerHTML = "请输入你的手机号！";
            span.className = "msg2";
        }
        function onblurName(){
            var name = $("name");
            var span = $("s-name");
            if(name.value == ""){
                span.innerHTML = "手机号不能为空！";
                span.className = "msg2";
                return false;
            }else if(!(name.value.length == "11")){
                span.innerHTML = "手机号格式不正确！";
                span.className = "msg2";
            }else{
                span.innerHTML = "<img src='../img/true.png'>";
                span.className = "msg";
                return true;
            }
        }

        function onfocusPwd(){
            var pwd = $("pwd");
            var span = $("s-pwd");
            span.innerHTML = "请输入你的密码！";
            span.className = "msg2";
        }
        function onblurPwd(){
            var pwd = $("pwd");
            var span = $("s-pwd");
            if(pwd.value == ""){
                span.innerHTML = "密码不能为空！";
                span.className = "msg2";
                return false;
            }else if(pwd.value.length < 6){
                span.innerHTML = "密码必须大于6位！";
                span.className = "msg2";
                return false;
            }else{
                span.innerHTML = "<img src='../img/true.png'>";
                span.className = "msg";
                return true;
            }
        }

        function onfocusRpwd(){
            var pwd = $("pwd");
            var span = $("s-rpwd");
            span.innerHTML = "请再次输入你的密码！";
            span.className = "msg2";
        }
        function onblurRpwd(){
            var pwd = $("pwd");
            var rpwd = $("rpwd");
            var span = $("s-rpwd");
            if(rpwd.value == ""){
                span.innerHTML = "密码不能为空！";
                span.className = "msg2";
                return false;
            }else if(pwd.value == rpwd.value){
                span.innerHTML = "<img src='../img/true.png'>";
                span.className = "msg";
                return true;
            }else{
                span.innerHTML = "两次输入的密码不相同！";
                span.className = "msg2";
                return false;
            }
        }
        
        

    

     </script>
    </body>
</html>