<?php 
$id = (int)URL_PARAMS['id'];

$result = getDeleteFileById($id);
$file = fileGetById($id);
var_dump($result);

$hash3 = $result[0]["hash2"];
$file_name = $file[0]["file_name"];

$pageTitle = 'Ethereum';
$pageContent = template('product/v_check', ['id' => $id,  'hash3' => $hash3, 'file_name' => $file_name]);
