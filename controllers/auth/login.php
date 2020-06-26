<?php

// генерация пароля пользователя
//echo password_hash('12345', PASSWORD_BCRYPT);

//получим ip клиента
$ip = $_SERVER['REMOTE_ADDR']; 
// подключим файл SxGeo.php
//require_once 'SxGeo/SxGeo.php';
// создадим объект SxGeo (1 аргумент – имя файла базы данных, 2 аргумент – режим работы: SXGEO_FILE (по умолчанию), SXGEO_BATCH  (пакетная обработка, увеличивает скорость при обработке множества IP за раз), SXGEO_MEMORY (кэширование БД в памяти, еще увеличивает скорость пакетной обработки, но требует больше памяти, для загрузки всей базы в память).
$SxGeo = new SxGeo('SxGeo.dat', SXGEO_FILE | SXGEO_MEMORY);
// получаем двухзначный ISO-код страны (RU, UA и др.)
//$country_code = $SxGeo->getCountry($ip);
$country_сode = 'RU';
var_dump($country_сode);



if ($country_сode === 'RU') {
	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		$login = trim($_POST['login']);
		$password = trim($_POST['password']);
		$remember = isset($_POST['remember']);
		$authErr = true;

		if($login != '' && $password != ''){
			$user = usersOne($login);

			if($user !== null && password_verify($password, $user['password'])){
				$token = substr(bin2hex(random_bytes(128)), 0, 128);
				sessionsAdd($user['id_user'], $token);
				$_SESSION['token'] = $token;
				$_SESSION["login"] = $login;
				$_SESSION['id_user'] = $user['id_user'];

				if($remember){
					setcookie('token', $token, time() + 3600 * 24 * 30, BASE_URL);
				}

				
				header('Location: ' . BASE_URL . 'application/user');
				exit();

			}
		}
	}
	else{
		$authErr = false;
	}



		

	$pageTitle = 'Login';
	$pageContent = template('auth/v_login', ['authErr' => $authErr]);

}

else {
$ipErr = true;
$pageTitle = 'Enter';
$pageContent = template("index/v_index", ['ipErr' => $ipErr, 'ip' => $ip]);

}


