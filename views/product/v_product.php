
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



 
<script type="text/javascript" src="<?=BASE_URL?>assets/js/jquery-3.5.1.min.js"></script>
<script>
	ethereum.autoRefreshOnNetworkChange = false;
</script>


<hr>

<p>Внимание! Размер файла не должен превышать 1 Мегабайт.</p>

<form   enctype="multipart/form-data"  action="upload.php" method="post" >
    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    <!-- <input type="hidden" name="MAX_FILE_SIZE" value="1048576" /> -->
    <!-- Название элемента input определяет имя в массиве $_FILES -->
    Загрузить файлы на сервер: <input name="userfile" type="file" />
   <input  type="submit" value="Загрузить" /> 
</form>







	        

		
        

        

        
        
        


