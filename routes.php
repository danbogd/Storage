<?php

return (function(){
	$intGT0 = '[1-9]+\d*'; // патерн целого числа >= 1
	$normUrl = '[0-9aA-zZ_-]+'; // + хотя бы один из элементов должен присуствовать в url

	return [
		[
			'test' => '/^$/',
			'controller' => 'enter/enter'
		],

		[
			'test' => "/^application\/upload.php\/?$/",
			'controller' => 'application/upload',
			
		],

		[
			'test' => "/^application\/scrypt\/($intGT0)\/?$/",
			'controller' => 'application/scrypt',
			'params' => ['id' => 1]
			
		],

		[
			'test' => "/^application\/download\/($intGT0)\/?$/",
			'controller' => 'application/download',
			'params' => ['id' => 1]
		],
		[
			'test' => '/^contacts\/?$/',
			'controller' => 'application/contacts'
		],

		[
			'test' => '/^usergide\/?$/',
			'controller' => 'application/usergide'
		],
		
		[
			'test' => "/^application\/user\/?$/",
			'controller' => 'application/user',
			
		],

		[
			'test' => "/^application\/blockchain\/($normUrl)\/?$/",
			'controller' => 'application/blockchain',
			'params' => ['id' => 1]
		],

		[
			'test' => "/^application\/check\/($normUrl)\/?$/",
			'controller' => 'application/check',
			'params' => ['id' => 1]
		],

		[
			'test' => "/^auth\/login\/?$/",
			'controller' => 'auth/login'
		]
	];
})();

