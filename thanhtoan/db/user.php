<?php

function findUserByEmail(string $email)
{
  $item = db_fetch_row("SELECT * FROM `tb_khachhang` WHERE `gmail_kh` = '{$email}'");
  return $item;
}
