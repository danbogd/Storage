
<?php
	

$user = $_SESSION['login'];
$ip = $_SERVER['REMOTE_ADDR'];
$id = (int)$_SESSION['id_user'];


$files = usersFiles($id);
$pageTitle = 'System';
$pageContent = template('product/v_product', ['user' => $user, 'ip' => $ip, 'files' => $files]);





