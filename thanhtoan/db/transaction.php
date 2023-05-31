<?php

function add_transaction(int $shipping_id, string $order_id, int $amount, string $status = 'PENDING')
{
  $data = array(
    'shipping_id' => $shipping_id,
    'order_id' => $order_id,
    'amount' => $amount,
    'status' => $status
  );

  $id_insert = db_insert("tbl_transactions", $data);

  return $id_insert;
}

function update_transaction(string $transaction_id, string $bank_code, string $pay_date, string $response_code, string $oder_id, string $status = 'SUCCESS')
{
  $data = array(
    'transaction_id' => $transaction_id,
    'bank_code' => $bank_code,
    'pay_date' => $pay_date,
    'response_code' => $response_code,
    'status' => $status,
  );

  db_update('tbl_transactions', $data, "`order_id` = {$oder_id}");

  return true;
}
