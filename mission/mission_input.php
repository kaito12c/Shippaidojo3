<?php
session_start();
include("../functions.php");
check_session_id();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" type="text/css" media="screen">
  <title>失敗道場（ミッション提供の部屋）</title>
</head>

<body>
  <form action="../mission/mission_create.php" method="post">
    <fieldset>
      <legend><?= $_SESSION['username'] ?>さんが課すミッション教えて下さい。</legend>
      <a href="../mission/mission_read.php">一覧画面</a>
      <div>
        ミッション提供者：<input type="text" name="name">
      </div>
      <div>
        <h4>ミッションゴール：</h4><p>締切まで頑張った成果を教えて下さい。</p>
        <input type="text" name="mission_goal">
      </div>
      <div>
        <h4>ミッション：</h4><p>ミッションプランを教えて下さい。</p>
        <textarea name="mission" cols="50" rows="5">
1日目〜
8日目〜
15日目〜
22日目〜
        </textarea>
      </div>
      <div>
        締切：<input type="date" name="deadline">
      </div>
      <div>
        <button>挑戦求ム</button>
      </div>
    </fieldset>
  </form>

</body>

</html>