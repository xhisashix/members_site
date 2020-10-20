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
    <div>
      <h1>会員登録</h1>
    </div>
    <?php if (!empty($getErrorMsg)) : ?>
      <div class="error">
        <?php foreach ($getErrorMsg as $value) : ?>
          <p><?php echo $value; ?></p>
        <?php endforeach; ?>
      </div>
    <?php endif ?>
    <form action="confirmation.php" method="post">
      <input type="text" name="name" placeholder="名前">
      <input type="text" name="furigana" placeholder="ふりがな">
      <input type="text" name="mail" placeholder="メール">
      <input type="password" name="password" placeholder="パスワード">
      <select name="sex" id="">
        <option value="men">男性</option>
        <option value="girl">女性</option>
      </select>
      <select name="work" id="">
        <option value="worker">社会人</option>
        <option value="student">学生</option>
        <option value="another">その他</option>
      </select>
      <button type="submit">確認</button>
    </form>
  </main>
</body>

</html>