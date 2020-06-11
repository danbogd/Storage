<?php



$id = (int)URL_PARAMS['id'];



$fileInfo = fileGetById($id);
$file = $fileInfo[0]["file_name"];
//удаление из СУБД
fileDel($id);
//file_download($file_name);

if (ob_get_level()) {
      ob_end_clean();
    }
$dh = opendir('/storage/');

header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . basename($file));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));

    // удаляем файл из файловой системы
    unlink($file);
    // читаем файл и отправляем его пользователю
    readfile($file);
    
closedir($dh);
