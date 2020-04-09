<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <base href="<?php echo site_url();?>">
    <style>
        .container{
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            background-color: #515a6e;
        }
        .container .show-info{
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translateX(-50%);
        }
        .container .login-form{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 400px;
            padding: 20px 40px 10px 40px;
            border: 1px solid #dcdee2;
        }

        .container .login-form p{
            display: flex;
        }
        .container .login-form .part-one{
            flex: 1;
        }
        .container .login-form .part-two{
            flex: 3;
            border: 1px solid #ddd;
        }
        .container .login-form .submit-btn{
            margin: 20px 100px 0 100px;
            flex: 1;
            height: 30px;
            background-color: #19be6b;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="show-info">
            <span style="color:red">
                <?php echo isset($error_name)?$error_name:"";?>
            </span>
            <span style="color:red">
                <?php echo isset($error_pwd)?$error_pwd:"";?>
            </span>
            <span style="color:red">
                <?php echo isset($error_err)?$error_err:"";?>
            </span>
        </div>
        <form class="login-form" action="welcome/check_login" method="post">
            <p>
                <span class="part-one"> 用户名：</span>
                <input class="part-two" type="text" name="username">
            </p>
          <p>
              <span  class="part-one"> 密码：</span>
              <input class="part-two" type="password" name="password">
          </p>
          <p>
              <input class="submit-btn" type="submit" value="登录">
          </p>

        </form>
    </div>



</body>
</html>