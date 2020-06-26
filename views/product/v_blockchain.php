




<style>
  body { background: url(<?=BASE_URL?>assets/images/3.png); }
</style>



<h1>Ethereum</h1>

<hr>

<button id = "button2">Записать в блокчейн</button>
	
<hr>






<script type="text/javascript" src="<?=BASE_URL?>assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="<?=BASE_URL?>assets/js/web3.js"></script>
<script type="text/javascript" src="<?=BASE_URL?>assets/js/account.js"></script>
<script type="text/javascript" src="<?=BASE_URL?>assets/js/Send.js"></script>
<script type="text/javascript" src="<?=BASE_URL?>assets/js/ethereumjs-tx-1.3.3.min.js"></script> 

<p><i><b>Дополнительная информация:</b></i></p>


        <p><i><?=$file_name?> TxID: <span id="tid"></span></i></p> 
        <p><i>Баланс кошелька <span id="balance"></span> ETH</i></p> 
        <p><i>Адрес кошелька <span id="account"></span></i></p>
        <p><i>Адрес контракта в сети Ethereum <span id="contractAddress"></span></i></p>

<input id = "hash" type="hidden" name="hash" value="<?=$hash?>">	
<input id = "id" type="hidden" name="id" value="<?=$id?>">
 




<a href="https://rinkeby.etherscan.io/tx/" id="tid1" target="_blank">Посмотреть транзакцию в Etherscan</a> 







 
<br>
<br>
<br>


 <button onclick="document.location='<?=BASE_URL?>/application/user'">Назад</button>
 
