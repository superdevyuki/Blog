<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap ログインフォーム (グーグル風)</title>
    <link href="/css/app.css" rel="stylesheet" type="text/css">
    <style>
        body, html {
            height: 100%;
            background-repeat: #eee;
        }
        .card {
            max-width: 350px;
            padding: 40px 40px;
            background-color: #F7F7F7;
            margin: 0 auto 25px;
            margin-top: 50px;
            -moz-border-radius: 2px;
            -webkit-border-radius: 2px;
            border-radius: 2px;
            -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        }
        .profile-img{
            width:40%;
            height:auto;
            margin:0 auto;
            display:block;
        }
        .mb10{margin:0 0 10px 0;}
    </style>
    <!--
		[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]
		-->
</head>
<body>
<div class="page-header text-center">
    <h1>ログイン</h1>
</div>
<div class="adsence text-center">
    <A HREF="https://px.a8.net/svt/ejp?a8mat=2NT04D+C2MGDU+348+6J4IA" target="_blank" rel="nofollow">ライトプラン　詳細はこちら</A>
    <img border="0" width="1" height="1" src="https://www13.a8.net/0.gif?a8mat=2NT04D+C2MGDU+348+6J4IA" alt="">
    <br><br>
</div>
<div class="container">
    <div class="card card-container">
        <img id="profile-img" class="profile-img img-circle" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
        <p id="profile-name" class="profile-name-card"></p>
        <form class="form-signin mb10">
            <input type="email" class="form-control mb10" placeholder="Email address" required autofocus>
            <input type="password" class="form-control" placeholder="Password" required>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form><!-- /form -->
        <a href="#" class="forgot-password">
            Forgot the password?
        </a>
    </div><!-- /card-container -->
</div><!-- /container -->
<div class="text-center">
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-8521988-2', 'auto');
        ga('send', 'pageview');
    </script>
</div>
<footer>
    <div class="container-fluid text-center">
        <hr>
        <p class="help-block">Copyright &#169; kishiken.com All rights reserved.</p>
    </div>
</footer>
<script src="../common/js/jquery-1.11.3.min.js"></script>
<script src="../common/js/bootstrap.js"></script>
</body>
</html>