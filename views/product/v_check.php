
<!-- <style>
  body { background: url(<?=BASE_URL?>assets/images/bc.jpg); }
</style> -->


<input id = "id" type="hidden" name="id" value="<?=$id?>">




<p><i><b>Дополнительная информация:</b></i></p>

<p><i>ID файла <span ><?=$id?></span></i></p>
<p><i>Хэш файла записанный в блокчейн <span class="hash" id = "hash2"></span></i></p>
<p><i>Хэш заггруженного файла <span class="hash"><?=$hash3?></span></i></p>
 

<button onclick="document.location='<?=BASE_URL?>/application/user'">Назад</button>

<script> var hash3 = "<?=$hash3?>"; </script>
<script>
	ethereum.autoRefreshOnNetworkChange = false;
</script>

<input id = "data2" type="hidden" name="data2">
<input id = "id2" type="hidden" name="id2" value="<?=$id?>">

<script src="<?=BASE_URL?>assets/js/bundle2.js?v=2.0"></script>

<script type="text/javascript" src="<?=BASE_URL?>assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="<?=BASE_URL?>assets/js/web3.js"></script>
<script type="text/javascript" src="<?=BASE_URL?>assets/js/Recieve.js"></script>