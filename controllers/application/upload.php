<<?php



$uploaddir = '/storage/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
$nameFile = basename($_FILES['userfile']['name']);
$file_time =  time();






if($_FILES['userfile']['size'] > 1048576){ 
    echo ('Размер файла превышает 1 Мб!');
    $pageTitle = 'Ошибка 404';
    $pageContent = template('errors/v_404');

}

else{

    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        echo($_FILES['userfile']['name']);
        echo  " файл корректен и был успешно загружен.\n";
        echo ($_FILES['userfile']['size']);
        // хэш загружаемого файла
        $hash = md5_file($uploadfile);


        // запись в СУБД
        $fields = ['file_name' => $nameFile, 'user_id' => $_SESSION['id_user'], 'hash' => $hash, 'file_time' => $file_time ];
        filesAdd($fields);
        $name = lastId();
        $id = $name[0]["file_id"]; 

        $pageTitle = 'Ethereum';
        $pageContent = template('product/v_blockchain', ['id' => $id, 'hash' => $hash, 'nameFile' => $nameFile]);       

    }  

    else{

        echo ('Файл не выбран!');
        $pageTitle = 'Ошибка 404';
        $pageContent = template('errors/v_404');
    } 
  
}


 


  





    
    


