




<style>
  body { background: url(<?=BASE_URL?>assets/images/3.png); }
</style>



<h1>Ethereum</h1>

<hr>

<button class = "send">Записать в блокчейн</button>
	
<hr>






<script type="text/javascript" src="<?=BASE_URL?>assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="<?=BASE_URL?>assets/js/web3.js"></script>
<script type="text/javascript" src="<?=BASE_URL?>assets/js/account.js?v=2.0"></script>

<script type="text/javascript" src="<?=BASE_URL?>assets/js/ethereumjs-tx-1.3.3.min.js"></script> 


<p><i><b>Дополнительная информация:</b></i></p>


        <p><i><?=$nameFile?> TxID: <span id="tid"></span></i></p> 
        <p><i>Баланс кошелька <span id="balance"></span> ETH</i></p>
        <p><i>Адрес кошелька <span id="account"></span></i></p>
        <p><i>Адрес контракта в сети Ethereum <span id="contractAddress"></span></i></p>


<input id = "hash" type="hidden" name="hash" value="<?=$hash?>">	
<input id = "id" type="hidden" name="id" value="<?=$id?>">
<input id = "data" type="hidden" name="">


<script src="<?=BASE_URL?>assets/js/bundle.js"></script> 


<script type="text/javascript" src="<?=BASE_URL?>assets/js/Send.js?v=4.0"></script>

<a href="https://rinkeby.etherscan.io/tx/" id="tid1" target="_blank">Посмотреть транзакцию в Etherscan</a> 







 
<br>
<br>
<br>


 <button onclick="document.location='<?=BASE_URL?>/application/user'">Назад</button>
 
