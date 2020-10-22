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
    if (mb_strlen($value) > 8) {
      $this->getError[] = "名前は8文字以内で入力してください";
    }
    return $this->getError;
  }

  /**
   * フリガナの入力チェック
   */
  public function friganaCheck($value)
  {
    if (empty($value)) {
      $this->getError[] = "フリガナを入力してください";
    }
    if (preg_match("/^([ァ-ン]|ー)+$/", $value)) {
      $this->getError[] = "フリガナは全角カタカナで入力ください";
    }
    return $this->getError;
  }

  /**
   * メールのバリデーションチェック
   */
  public function mailCheck($value)
  {
    if (empty($value)) {
      $this->getError[] = "メールアドレスを入力してください";
    }
    if (!preg_match(" /^\S+@\S+\.\S+$/", $value)) {
      $this->getError[] = "メールアドレスを正しく入力してください";
    }
    return $this->getError;
  }

  /**
   * パスワードチェック
   */
  public function passwordCheck($value, $pass)
  {
    if (empty($value)) {
      $this->getError[] = "パスワードを入力してください";
    }
    if (!preg_match('/^[A-Z]+$/', $value) && !preg_match("/^[a-z]+$/", $value)) {
      $this->getError[] = "パスワードは半角、大文字、小文字を含めてください";
    }

    if (strlen($value < 8)) {
      $this->getError[] = "パスワードは８文字以上で設定してください";
    }

    if ($value !== $pass) {
      $this->getError[] = "パスワードが一致しません";
    }
    return $this->getError;
  }
}
