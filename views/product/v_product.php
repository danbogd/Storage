
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



<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  


<hr>

<form   enctype="multipart/form-data"  action="upload.php" method="POST" >
    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
    <!-- Название элемента input определяет имя в массиве $_FILES -->
    Загрузить файлы на сервер: <input name="userfile" type="file" />
   <input  type="submit" value="Загрузить" /> 

</form>


	        

		
        

        

        
        
        


