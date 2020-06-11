<?php

$id = (int)URL_PARAMS['id'];


$file = fileGetById($id);
$file_name = $file[0]["file_name"];

 

$pageTitle = 'Download page';
$pageContent = template('product/v_download', ['file_name' => $file_name, 'id' => $id]);

