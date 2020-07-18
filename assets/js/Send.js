
//$(document).ready(function(){


const options = {
  // Enable auto reconnection
  reconnect: {
      auto: true,
      delay: 5000, // ms
      maxAttempts: 5,
      onTimeout: false
  }
};


if (typeof window.ethereum == 'undefined') {
    alert('Установите MetaMask!');
  }

 getAccount();

  async function getAccount() {
    const accounts = await ethereum.request({ method: 'eth_requestAccounts' });
    const account = accounts[0];
  }



  
    

const contractAddress = '0x60C2218817DEEd3F6888879A68e53B3815275EA8';

encodeData = document.querySelector('#data').textContent;
console.log(encodeData);

// Ethereum RPC API

// Отправка транзакции при нажатии на кнопку class = send

const sendTranButton = document.querySelector('.send');

sendTranButton.addEventListener('click', () => {

  ethereum
    .request({
      method: 'eth_sendTransaction',
      params: [
        {
          from: ethereum.selectedAddress,
          to: '0x60C2218817DEEd3F6888879A68e53B3815275EA8',
          //value: '0x29a2241af62c0000',
          //gasPrice: '0x09184e72a000',
          //gas: '0x2710',
          data: encodeData,
          
        },
      ],
    })
    
    .then((txHash) => getTxHashLink(txHash))
        
    .catch((error) => console.error);
    
});

// функция для вывода хэша транзакции на страницу и ссылки на Etherscan
function getTxHashLink(txHash){
  document.getElementById('tid').textContent = txHash
  let txHash2 = 'https://rinkeby.etherscan.io/tx/' + txHash; 
  document.getElementById('tid1').href = txHash2;
}



//});














