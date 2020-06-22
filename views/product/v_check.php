
<style>
  body { background: url(<?=BASE_URL?>assets/images/bc.jpg); }
</style>


<input id = "id" type="hidden" name="id" value="<?=$id?>">
<!-- <input id = "hash2" type="hidden" name="hash2">  -->



<p><i><b>Дополнительная информация:</b></i></p>

<p><i><?=$id?> ID файла <?=$file_name?></span></i></p>
<p><i>Хэш файла записанный в блокчейн <span id = "hash2"></span></i></p>
<p><i>Хэш заггруженного файла <?=$hash3?></i></p>


<button onclick="document.location='<?=BASE_URL?>/application/user'">Назад</button>






<script type="text/javascript" src="<?=BASE_URL?>assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="<?=BASE_URL?>assets/js/web3.js"></script>
<script type="text/javascript" src="<?=BASE_URL?>assets/js/Recieve.js"></script>