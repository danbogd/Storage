



if (typeof window.ethereum == 'undefined') {
    alert('Установите MetaMask!');
  }

 

const contractAddress = '0x60C2218817DEEd3F6888879A68e53B3815275EA8';
   
          

//MetaMask: MetaMask will soon stop reloading pages on network change.
//For more information, see: https://docs.metamask.io/guide/ethereum-provider.html
ethereum.autoRefreshOnNetworkChange = false;

encodeData2 = document.querySelector('#data2').textContent;
console.log(encodeData2);

 
ethereum
  .request({
    method: 'eth_call',
    params: [
  {
    from: ethereum.selectedAddress,
    to: contractAddress,
    //gas: '0x76c0', // 30400
    //gasPrice: '0x9184e72a000', // 10000000000000
    //value: '0x9184e72a', // 2441406250
    data: encodeData2,
  },
],
  })
  .then((result) => checkHashes(hex_to_ascii(result))) 
      
  .catch((error) => console.error);
    
// функция перевода из hex в строку, n=128 - откидываем лишние 0
function hex_to_ascii(str1)
 {
  var hex  = str1.toString();
  var str = '';
  for (var n = 130; n < hex.length; n += 2) {
    str += String.fromCharCode(parseInt(hex.substr(n, 2), 16));
  }
  return str;
 }

// функция сравнения хэша загруженного файла с выгруженным
function checkHashes(result){
console.log(result);
console.log(hash3);
document.getElementById('hash2').textContent = result;

if (hash3 === result){
	alert("Все в порядке! Хэш загруженного ранее файла совпадает с выгруженным файлом");
}

else if (result === "") {
	alert("Хэша файла не был записан в блокчейн");
}
else {
	alert ("Внимание!!! Ваш файл был изменен!");
}

}
 
 




