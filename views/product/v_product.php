
<h5>Пользователь: <?=$user?></h5>
<h5>IP: <?=$ip?></h5>


<hr>  
<main>
	
	<caption>Список файлов</caption>
	<table class="table table-bordered">
		 
		<tbody>

			<tr><th>ID</th><th>Дата загрузки</th><th>Файл</th><th>Хэш (md5)</th></tr>
		<? foreach($files as $key => $value): ?>

			
			<tr><td> <?=$value["file_id"]?> </td><td><?=$value["time"]?></td> <td> <a href="<?=BASE_URL?>application/download/<?=$value["file_id"]?>"><?=$value["file_name"]?></a></td><td><?=$value["hash"]?></td></tr>
			
		<? endforeach; ?> 
		</tbody>
	</table>  
</main> 



 


<hr>

<form enctype="multipart/form-data" action="upload.php" method="POST">
    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
    <!-- Название элемента input определяет имя в массиве $_FILES -->
    Загрузить файлы на сервер: <input name="userfile" type="file" />
    <input type="submit" value="Загрузить" />
</form>

<hr>






<main>


<script type="text/javascript" src="<?=BASE_URL?>assets/js/web3.js"></script>
<script type="text/javascript" src="<?=BASE_URL?>assets/js/account.js"></script>
  
        

		
        

        <p><i><b>Дополнительная информация:</b></i></p>

        
        <p><i>TxID: <span id="tid"></span></i></p>
        <p><i>Баланс кошелька <span id="balance"></span> ETH</i></p>
        <p><i>Адрес кошелька <span id="account"></span></i></p>
        <p><i>Адрес контракта в сети Ethereum <span id="contractAddress"></span></i></p>

</main>    
        
        


