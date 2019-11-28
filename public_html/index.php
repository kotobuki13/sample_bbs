<?php

// トップ画面
require_once(__DIR__ . '/../config/config.php');

$app = new MyApp\Controller\Index();

$app->run();

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>JUST BBS FOR FUN</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>

  <h1>JUST BBS FOR FUN</h1>

  <form method="POST" id="postMessage">
    <span class="inputLabel">名前</span>
    <input type="text" name="u_name" placeholder="１０字以内" size="20">
    <span class="inputLabel">投稿内容</span>
    <textarea name="content" placeholder="１５０字以内" cols="40" rows="6"></textarea>
    <div class="btn" onclick="document.getElementById('postMessage').submit();">投稿する</div>
  </form>

</body>

</html>