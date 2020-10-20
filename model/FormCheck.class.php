<?php

class FormCheck
{
  public $getError = [];

  /**
   * return var
   * 名前の入力チェック
   */
  public function nameCheck($value)
  {
    if (empty($value)) {
      $this->getError[] = "名前を入力してください";
    }
    return;
    if (mb_strlen($value) > 8) {
      $this->getError[] = "名前は8文字以内で入力してください";
    }
  }

  /**
   * フリガナの入力チェック
   */
  public function friganaCheck($value)
  {
    if (empty($value)) {
      $this->getError[] = "フリガナを入力してください";
    }
    return;
    if (!preg_match("/^([ァ-ン]|ー)+$/", $value)) {
      return $this->getError[] = "フリガナは全角カタカナで入力ください";
    }
  }

  /**
   * メールのバリデーションチェック
   */
  public function mailCheck($value)
  {
    if (empty($value)) {
      $this->getError[] = "メールアドレスを入力してください";
    }
    return;
    if (!preg_match(" /^\S+@\S+\.\S+$/", $value)) {
      return $this->getError[] = "メールアドレスを正しく入力してください";
    }
  }

  /**
   * パスワードチェック
   */
  public function passwordCheck($value)
  {
    if (empty($value)) {
      $this->getError[] = "パスワードを入力してください";
    }
    return;
    if (!preg_match('/^[A-Z]+$/', $value) && !preg_match("/^[a-z]+$/", $value)) {
      return $this->getError[] = "パスワードは半角、大文字、小文字を含めてください";
    }

    if (strlen($value < 8)) {
      return $this->getError[] = "パスワードは８文字以上で設定してください";
    }
  }
}
