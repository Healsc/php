<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册</title>
<!--    <base href="--><?php //echo site_url();?><!--">-->
</head>
<body>
    <form action="save" method="post">
        <p>
            用户名：<input type="text" name="username">
            <span style="color: red">
                <?php echo isset($err_name)?$err_name:""; ?>
            </span>
        </>
        <p>
            密&nbsp&nbsp&nbsp码：<input type="password" name="userpassword">
            <span style="color: red">
                <?php echo isset($err_passwd)?$err_passwd:""; ?>
                <?php echo isset($err_pwd)?$err_pwd:""; ?>
            </span>
        </p>
        <p>
            确认密码：<input type="password" name="userrepassword">
            <span style="color: red">
                <?php echo isset($err_pwd)?$err_pwd:""; ?>
                <?php echo isset($err_repasswd)?$err_repasswd:"";?>
            </span>
        </p>
        <p>
            <input type="submit" value="注册">
        </p>
    </form>
</body>
</html>