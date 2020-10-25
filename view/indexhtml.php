<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>会員登録サイト</title>
</head>

<body>
  <main>
    <div class="title">
      <h1>会員登録</h1>
    </div>
    <form action="confirmation.php" method="post">
      <input type="text" name="name" placeholder="名前">
      <input type="text" name="furigana" placeholder="ふりがな">
      <input type="text" name="mail" placeholder="メール">
      <input type="password" class="field" id="password" name="password" placeholder="パスワード">
      <div class="pass" style="display: flex;">
        <input type="checkbox" id="password-check">
        <p>パスワードを表示する</p>
      </div>
      <input type="password" name="verification_for_password" placeholder="確認用パスワード">
      <select name="sex">
        <option value="men">男性</option>
        <option value="girl">女性</option>
      </select>
      <select name="work">
        <option value="worker">社会人</option>
        <option value="student">学生</option>
        <option value="another">その他</option>
      </select>
      <button type="submit">確認</button>
    </form>
  </main>

  <script src="js/main.js"></script>
</body>

</html>