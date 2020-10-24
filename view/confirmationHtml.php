<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>確認画面</title>
</head>

<body>
  <main>
    <div>
      <h1>
        確認画面
      </h1>
      <?php if (!empty($getErrorMsg)) : ?>
        <div class="error">
          <h3>※下記内容を修正してください</h3>
          <?php foreach ($getErrorMsg as $value) : ?>
            <p><?php echo $value; ?></p>
          <?php endforeach; ?>
        </div>
      <?php endif ?>
      <?php if (empty($getErrorMsg)) : ?>
        <div class="confirmation">
          <p>名前：<?php echo $_POST["name"] ?></p>
          <p>フリガナ：<?php echo $_POST["furigana"] ?></p>
          <p>メールアドレス：<?php echo $_POST["mail"]; ?></p>
          <p>パスワード：<?php echo $_POST["password"]; ?></p>
          <p>性別：<?php echo $_POST["sex"]; ?></p>
          <p>職業：<?php echo $_POST["work"]; ?></p>
        </div>
      <?php endif ?>
    </div>

    <?php if (!empty($getErrorMsg)) : ?>
      <form action="confirmation.php" method="post">
        <input type="name" name="name" placeholder="名前" value="<?php echo $_POST['name']; ?>">
        <input type="text" name="furigana" placeholder="ふりがな" value="<?php echo $_POST['furigana']; ?>">
        <input type="text" name="mail" placeholder="メール" value="<?php echo $_POST['mail']; ?>">
        <input type="password" id="password" name="password" placeholder="パスワード">
        <div class="pass" style="display: flex;">
          <input type="checkbox" id="password-check">
          <p>パスワードを表示する</p>
        </div>
        <input type="password" name="verification_for_password" placeholder="確認用パスワード">
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
    <?php endif ?>
  </main>

  <script src="js/main.js"></script>
</body>

</html>