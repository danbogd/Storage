<?php 
$id = (int)URL_PARAMS['id'];

$result = getDeleteFileById($id);

$hash3 = $result[0]["hash2"];



// $file = fileGetById($id);
// $file_name = $file[0]["file_name"];

$pageTitle = 'Ethereum';
$pageContent = template('product/v_check', ['id' => $id,  'hash3' => $hash3]);
