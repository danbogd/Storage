<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=$title?></title>
	<link rel="canonical" href="<?=$canonical?>">
	<link rel="stylesheet" href="<?=BASE_URL?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=BASE_URL?>assets/css/main.css">
</head>
<body>

	<header class="site-header">
		<div class="container">

			<div class="logo">
				<div><img src="<?=BASE_URL?>assets/images/osinfo.jpg"></div>
				<div class="logo__title h3">Блокчейн: защита геоинформационных данных.</div>
				
			</div>
		</div>
	</header>
	<nav class="site-nav">
		<div class="container">
			<ul class="nav">
				<!-- <li class="nav-item">
					<a class="nav-link" href="<?=BASE_URL?>">Home</a>
				</li> -->
				<li class="nav-item">
					<a class="nav-link" href="https://localhost/phpmyadmin/" target="_blank">Admin</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=BASE_URL?>contacts">Users guide</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=BASE_URL?>auth/login">Login</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="site-content">
		<div class="container">
			<?=$content?> 
		</div>
	</div>
	<footer class="site-footer">
		<div class="container">
			&copy; АО "ГОСИНФОТЕХ"
		</div>
	</footer>
</body>
</html>