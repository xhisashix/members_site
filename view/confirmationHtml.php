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
          <?php foreach ($getErrorMsg as $value) : ?>
            <p><?php echo $value; ?></p>
          <?php endforeach; ?>
        </div>
      <?php endif ?>
      <?php if (empty($getErrorMsg)) : ?>
        <div class="confirmation">
          <p><?php echo $_POST["name"] ?></p>
          <p><?php echo $_POST["furigana"] ?></p>
          <p><?php echo $_POST["mail"]; ?></p>
          <p><?php echo $_POST["password"]; ?></p>
        </div>
      <?php endif ?>
    </div>

    <?php if (!empty($getErrorMsg)) : ?>
      <form action="confirmation.php" method="post">
        <input type="name" name="name" placeholder="名前" value="<?php echo $_POST['name']; ?>">
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
    <?php endif ?>
  </main>


</body>

</html>