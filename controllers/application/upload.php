<<?php

 



$uploaddir = '/storage/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
$nameFile = basename($_FILES['userfile']['name']);
$file_time =  time();


echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo($_FILES['userfile']['name']);
    echo  " файл корректен и был успешно загружен.\n";

    
    // хэш загружаемого файла
    $hash = md5_file($uploadfile);
    

    // запись в СУБД
    $fields = [ 'file_name' => $nameFile, 'user_id' => $_SESSION['id_user'], 'hash' => $hash, 'file_time' => $file_time ];
    filesAdd($fields);

} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}

//echo 'Некоторая отладочная информация:';
//print_r($_FILES);

// print "</pre>";

header('Location: ' . BASE_URL . 'application/user');
exit();
