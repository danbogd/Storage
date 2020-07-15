$(document).ready(function(){


const options = {
  // Enable auto reconnection
  reconnect: {
      auto: true,
      delay: 5000, // ms
      maxAttempts: 5,
      onTimeout: false
  }
};

const ethEnabled = () => {  
  if (window.ethereum) {    window.web3 = new Web3(window.ethereum);    
    window.ethereum.enable();    
    return true;  
  }  
    return false;
  }

if (!ethEnabled()) {  
  alert("Please install an Ethereum-compatible browser or extension like MetaMask to use this dApp!");
}


// window.addEventListener('load', async () => {
//     // Modern dapp browsers...
//     if (window.ethereum) {
//     	window.web3 = new Web3(ethereum);
//         try {
//             // Request account access if needed
//             //await ethereum.enable();
//             const accounts = await ethereum.send('eth_requestAccounts');
//             // Acccounts now exposed
//             web3.eth.sendTransaction({/* ... */});
//         } catch (error) {
//             // User denied account access...
//         }
//     }
//     // Legacy dapp browsers...
//     else if (window.web3) {
//         window.web3 = new Web3(web3.currentProvider);
//         // Acccounts always exposed
//         web3.eth.sendTransaction({/* ... */});
//     }
//     // Non-dapp browsers...
//     else {
//         console.log('Non-Ethereum browser detected. You should consider trying MetaMask!');
//     }
// });







//MetaMask: MetaMask will soon stop reloading pages on network change.
//For more information, see: https://docs.metamask.io/guide/ethereum-provider.html
ethereum.autoRefreshOnNetworkChange = false;



const contractAddress = '0x60C2218817DEEd3F6888879A68e53B3815275EA8';

web3.eth.getAccounts((err, res) => {               
            
const myaddress = res[0];                   
document.getElementById('account').textContent = myaddress;

	web3.eth.getBalance(myaddress, (err, wei) => { 

	balance = web3.utils.fromWei(wei, 'ether');


	document.getElementById('balance').textContent = balance;
	document.getElementById('contractAddress').textContent = contractAddress; 

	});


});


});
