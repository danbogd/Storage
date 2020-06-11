<?php

	
function fileGetById($id) : array{
	$sql = "SELECT * FROM  files WHERE file_id = $id"; 
	$query = dbQuery($sql);
	return $query->fetchAll();
	}
	

function filesAdd(array $fields) : bool{
	$sql = "INSERT files (file_name, user_id, hash, file_time) VALUES (:file_name, :user_id, :hash, :file_time)";
	dbQuery($sql, $fields);
	return true;
	}
function usersFiles(int $id_user){
		$sql = "SELECT * FROM files WHERE user_id = $id_user";
		$query = dbQuery($sql, ['id' => $id_user]);
		return $query->fetchAll();
	}


function fileDel($id) : bool{
		$sql = "DELETE FROM files WHERE file_id = $id";
		dbQuery($sql);
		return true;
	}

function file_download($file) {
  if (file_exists($file)) {

  	// сбрасываем буфер вывода PHP, чтобы избежать переполнения памяти выделенной под скрипт
    // если этого не сделать файл будет читаться в память полностью!
    if (ob_get_level()) {
      ob_end_clean();
    }
    // заставляем браузер показать окно сохранения файла
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . basename($file));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    // читаем файл и отправляем его пользователю
    readfile($file);
    // удаляем файл из файловой системы
    //unlink($file);
    return [
		'status' => 'success',
		'message' => 'Файл успешно отдан'
	];
  }else {
	return [
		'status' => 'error',
		'message' => 'Файл не найден'
	];
  }
}

