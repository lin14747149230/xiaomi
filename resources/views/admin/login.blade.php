
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="/administrator/niceadmin/favicon.png">

    <title>Login Page 2 | Creative - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->    
    <link href="/administrator/niceadmin/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="/administrator/niceadmin/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="/administrator/niceadmin/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="/administrator/niceadmin/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="/administrator/niceadmin/css/style.css" rel="stylesheet">
    <link href="/administrator/niceadmin/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-img3-body">
    <div class="container">
      <form class="login-form" method="post" action="/admin/login">        
        <div class="login-wrap">  
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            @if(session('msg'))
            <div class="alert alert-info">
                {{session('msg')}}
            </div>
        	@endif
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" name="username" placeholder="用户名" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" name="password" placeholder="密码">
            </div>
            {{csrf_field()}}
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> 记住我
                <span class="pull-right"> <a href="#"> 忘记密码?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit">登录</button>
            <button class="btn btn-info btn-lg btn-block" type="submit">注册</button>
        </div>
      </form>

    </div>


  </body>
</html>
