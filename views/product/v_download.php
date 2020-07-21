
<h4>Здесь Вы можете проверить неизменность выгружаемых данных</h4>
<h4>Хэш выгружаемого файла должен совпадать с хэшом хранящимся на блокчейне</h4>
<hr>


<p>Кнопка проверки появиться после скачивания файла.
</p>
<button class = "first" id = "check" onclick="location.href='<?=BASE_URL?>/application/check/<?=$id?>'">Проверить</button>
<hr>


<i>Внизу ссылка на скачивание файла <?=$file_name?></i>

<br>
<a class ="dload" href="<?=BASE_URL?>application/scrypt/<?=$id?>"><?=$file_name?></a>

<br>
<br>
<hr>

<script type="text/javascript" src="<?=BASE_URL?>assets/js/jquery-3.5.1.min.js"></script>


<script type="text/javascript">
    
	$(document).ready(function(){
		$("#check").hide();
	   
	});

	$(".dload").click(function() {
		$("#check").show();
	
	});

</script>

<script>
	ethereum.autoRefreshOnNetworkChange = false;
</script>
 

<button onclick="document.location='<?=BASE_URL?>/application/user'">Назад</button>

