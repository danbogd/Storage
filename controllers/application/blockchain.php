<?php


$id = (int)URL_PARAMS['id'];


$file = fileGetById($id);
$file_name = $file[0]["file_name"];
$file_hash = $file[0]["hash"];
var_dump($file_hash);

$pageTitle = 'Ethereum';
$pageContent = template('product/v_blockchain', ['file_name' => $file_name, 'id' => $id, 'hash' => $file_hash]);

