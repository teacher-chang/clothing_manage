<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"E:\xampp\htdocs\clothing_manage\public/../application/admin\view\index\login.html";i:1585148141;}*/ ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>系统登录 - 服装连锁店管理系统</title>
    <link rel="stylesheet" href="__PUBLIC__/css/style.css"/>
</head>
<body class="login_bg">
    <section class="loginBox">
        <header class="loginHeader">
            <h1>服装连锁店管理系统</h1>
        </header>
        <section class="loginCont">
            <form class="loginForm" action="<?php echo url('index/login'); ?>" method="post">
                <span id="flag" style="display: none">用户名或密码不正确</span>

                <div class="inputbox">
                    <label for="user">用户名：</label>
                    <input id="user" type="text" name="admin_name" placeholder="请输入用户名" required/>
                </div>
                <div class="inputbox">
                    <label for="mima">密码：</label>
                    <input id="mima" type="password" name="admin_pwd" placeholder="请输入密码" required/>
                </div>
                <div class="subBtn">
                    <input type="submit" value="登录" />
                    <input type="reset" value="重置"/>
                </div>

            </form>
        </section>
    </section>

</body>
<script>
    var flag = <?php echo $flag; ?>;
    if(flag==1){
        var note = document.getElementById('flag');
        note.style.display="block";

    }
</script>
</html>