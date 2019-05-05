<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Contact WAVE</title>
    <meta name="viewport"content="width=device-width">
    <link href="https://fonts.googleapis.com/css?family=Raleway"rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class = "post">

<header>WAVE</header>

<nav>
    <ul>
        <li><a href="index.html">トップ</a></li>
        <li><a href="about.html">サイトについて</a></li>
        <li><a href="contact.html">お問い合わせ</a></li>
    </ul>
</nav>

<article>

    <h1>Contact</h1>

    <p>ご意見、ご感想がありましたら、以下の欄にご記入の上、送信して下さい。記事に関するご質問などもお気軽にお寄せ下さい。</p>

    <form netlify>
        <p>
            <label>
                name:
                <input type="text" name="name">
            </label>
        </p>

        <p>
            <label>
                mail-address:
                <input type="email" name="mail">
            </label>
        </p>

        <p>
            <label>
                comment:
                <textarea name="comment"></textarea>
            </label>
        </p>

        <p>
            <input type = "submit" value="send">
        </p>
    </form>

</article>

<footer>©　WAVE</footer>

</body>
</html>
