<?php

// генерация пароля пользователя
//echo password_hash('12345', PASSWORD_BCRYPT);

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