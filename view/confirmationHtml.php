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
      <div class="confirmation">
        <p><?php echo $_POST["name"] ?></p>
        <p><?php echo $_POST["furigana"] ?></p>
        <p><?php echo $_POST["mail"]; ?></p>
        <p><?php echo $_POST["password"]; ?></p>
      </div>
    </div>
  </main>


</body>

</html>