<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登台登录</title>
    <link rel="stylesheet" href="http://www.123.com/tp/public//asset/common/css/bootstrap.min.css?v=3.4.0" rel="stylesheet">
    <link rel="stylesheet" href="http://www.123.com/tp/public//asset/common/css/font-awesome.css?v=4.3.0" rel="stylesheet">
    <link rel="stylesheet" href="http://www.123.com/tp/public//asset/common/css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="http://www.123.com/tp/public//asset/common/css/style.css?v=3.0.0" rel="stylesheet">

    <!--[if lt IE 8]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <!--IE强跳了-->
    <script>if(window.top !== window.self){ window.top.location = window.location;}</script>
</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen  animated fadeInDown">
    <div>
        <div>
            <h2 class="logo-name">Hi&nbsp;</h2>
        </div>
        <!--<h3>逗逼,欢迎光临仙界之门，我带你飞！</h3>-->
        <br>
        <br>
        <div id="login_form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="用户名" required="" name="user" id="username" >
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="密码" name="pass" id="password" required="">
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b sign">登 录</button>
            <p class="msg_tit" style="color: red"></p>
        </div>



    </div>
</div>

<!-- Mainly scripts -->
<script src="http://www.123.com/tp/public//asset/common/js/jquery-2.1.1.min.js?v=2.1.4"></script>
<script src="http://www.123.com/tp/public//asset/common/js/bootstrap.min.js?v=3.3.5"></script>
<script src="http://static.weiwubao.com/asset/lib/js/ibox.js"></script>

<!----登陆JS----->
<script>
    $(".sign").click(function () {
        var username = $("#username").val();
        var password = $("#password").val();
        if(username==""){
            $('.msg_tit').text('');
            $('<div id="msg" />').html("用户名不能为空！").appendTo('.msg_tit').fadeOut(4000);
            $("#username").focus();
            return false;
        }
        if(password==""){
            $('.msg_tit').text('');
            $('<div id="msg" />').html("用户名不能为空！").appendTo('.msg_tit').fadeOut(4000);
            $("#password").focus();
            return false;
        }
        if(password.length < 3){
            $('.msg_tit').text('');
            $('<div id="msg" />').html("密码长度不能小于6位！").appendTo('.msg_tit').fadeOut(4000);
            $("#password").focus();
            return false;
        }
        $.ajax({
            url:"<?php echo U('login');?>",
            dataType:"json",
            type: "post",
            data:{
                username:username,
                password:password,
            },
            success: function (data) {
                if(data == "登录成功"){
                    window.location.href="<?php echo U('index');?>"
                    $.iBox.alert(data);
                }
                $.iBox.alert(data);
            },
        })
    })
</script>
</body>

</html>