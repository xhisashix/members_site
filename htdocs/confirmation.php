<?php
include "../model/FormCheck.class.php";
if (isset($_POST['name'])) {
  $_POST["furigana"];
  $_POST["sex"];
  $_POST["work"];
  $_POST['password'];
}

$formCheck = new FormCheck();

$formCheck->nameCheck($_POST['name']);
$formCheck->friganaCheck($_POST['furigana']);
$formCheck->mailCheck($_POST['mail']);
$formCheck->passwordCheck($_POST['password']);

$getErrorMsg = $formCheck->getError;

if (!empty($getErrorMsg)) {
  header('Location: index.php');
  exit;
}
include "../view/confirmationHtml.php";
