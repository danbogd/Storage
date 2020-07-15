$(document).ready(function(){

  // адрес смарт-контракта в сети Rinkeby и его вывод на страницу
  const contractAddress = '0x60C2218817DEEd3F6888879A68e53B3815275EA8';
  document.getElementById('contractAddress').textContent = contractAddress; 


  if (typeof window.ethereum == 'undefined') {
    alert('Установите MetaMask!');
  }

  ethereum.request({ method: 'eth_requestAccounts' });

  //MetaMask: MetaMask will soon stop reloading pages on network change.
  //For more information, see: https://docs.metamask.io/guide/ethereum-provider.html
  ethereum.autoRefreshOnNetworkChange = false;


  // получение текущего адреса пользователя и баланса из Metamask по JSON-RPC
  getAccount();

  async function getAccount() {
    const accounts = await ethereum.request({ method: 'eth_requestAccounts' });
    const account = accounts[0];
    document.getElementById('account').textContent = account;
    
    const balance = await ethereum.request({ method: 'eth_getBalance', "params": [account, "latest"],"id":1});
    // переводим из 16 формата в десятичный 
    balanceInETH = parseInt(balance, 16) / 10 ** 18;
    document.getElementById('balance').textContent = balanceInETH;
  }

  

});