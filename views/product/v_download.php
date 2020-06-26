
<h4>Здесь Вы можете проверить неизменность выгружаемых данных</h4>
<h4>Хэш выгружаемого файла должен совпадать с хэшом хранящимся на блокчейне</h4>
<hr>


<p>Перед проверкой не забудьте скачать файл
</p>
<button onclick="location.href='<?=BASE_URL?>/application/check/<?=$id?>'">Проверить</button>
<hr>


<i>Внизу ссылка на скачивание файла <?=$file_name?></i>

<br>
<a href="<?=BASE_URL?>application/scrypt/<?=$id?>"><?=$file_name?></a>

<br>
<br>
<hr>

<button onclick="document.location='<?=BASE_URL?>/application/user'">Назад</button>

