<?php

function findShippingById(int $id)
{
  $item = db_fetch_row("SELECT * FROM `tbl_shippings` WHERE `id_shipping` = {$id}");
  return $item;
}

function update_payment_type(int $id, string $payment_type = 'ONLINE')
{
  $data = array(
    'payment_type' => $payment_type
  );

  db_update('tbl_shippings', $data, "`id_shipping` = {$id}");

  return true;
}
