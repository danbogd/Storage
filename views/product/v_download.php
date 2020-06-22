
<p>Здесь Вы можете проверить неизменность выгружаемых данных</p>
<p>Хэш выгружаемого файла должен совпадать с хэшом хранящимся на блокчейне</p>
<hr>


<p>Перед проверкой не забудьте скачать файл</p>
<button onclick="location.href='<?=BASE_URL?>/application/check/<?=$id?>'">Проверить</button>
<hr>


<i>Внизу ссылка на скачивание файла <?=$file_name?></i>

<br>
<a href="<?=BASE_URL?>application/scrypt/<?=$id?>"><?=$file_name?></a>

<br>
<br>
<hr>

<button onclick="document.location='<?=BASE_URL?>/application/user'">Назад</button>

