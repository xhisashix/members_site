<?php
include "../model/FormCheck.class.php";
if (isset($_POST['name'])) {
  $_POST["furigana"];
  $_POST["sex"];
  $_POST["work"];
  $_POST['password'];
  $_POST['verification_for_password'];
  $_POST['work'];
  $_POST['sex'];
}

$formCheck = new FormCheck();

$formCheck->nameCheck($_POST['name']);
$formCheck->friganaCheck($_POST['furigana']);
$formCheck->mailCheck($_POST['mail']);
$formCheck->passwordCheck($_POST['password'], $_POST['verification_for_password']);

$getErrorMsg = $formCheck->getError;

include "../view/confirmationHtml.php";
