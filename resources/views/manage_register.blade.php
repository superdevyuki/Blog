<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Sample</title>
    <!-- BootstrapのCSS読み込み -->
    <link href="/css/app.css" rel="stylesheet" type="text/css">
</head>
<body>
<header style="background-color:gray">Header</header>
    <div class="container-fluid">
        <h1>登録画面</h1>
        名前：
        <input type="text" class="form-control" placeholder="名前を入力してください">
        カテゴリー：
        <input type="text" class="form-control" placeholder="名前を入力してください">
        サブスクリプション
        <input type="text" class="form-control" placeholder="名前を入力してください">
        趣味：
        <textarea class="form-control" rows="10">趣味を入力してください</textarea>
        画像アップロード：
        <input type="file">
    </div><!-- /container -->
<footer style="background-color:gray">Footer</footer>
</body>
</html>