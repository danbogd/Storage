//$(document).ready(function(){





$("#button2").click(function() {



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
  if (window.ethereum) {    
    window.web3 = new Web3(window.ethereum);    
    //window.ethereum.enable(); 

    window.addEventListener('load', async () => {
    // Modern dapp browsers...
    
             try {
            // Request account access if needed
            //await ethereum.enable();
            const accounts = await ethereum.send('eth_requestAccounts');
            // Acccounts now exposed
            web3.eth.sendTransaction({/* ... */});
        } catch (error) {
            // User denied account access...
        }
    
});
    return true;  
  }  
    return false;
  }

if (!ethEnabled()) {  
  alert("Please install an Ethereum-compatible browser or extension like MetaMask to use this dApp!");
}



//MetaMask: MetaMask will soon stop reloading pages on network change.
//For more information, see: https://docs.metamask.io/guide/ethereum-provider.html
//ethereum.autoRefreshOnNetworkChange = false;

const abi = [
  {
    "anonymous": false,
    "inputs": [
      {
        "indexed": true,
        "internalType": "address",
        "name": "previousOwner",
        "type": "address"
      },
      {
        "indexed": true,
        "internalType": "address",
        "name": "newOwner",
        "type": "address"
      }
    ],
    "name": "OwnershipTransferred",
    "type": "event"
  },
  {
    "anonymous": false,
    "inputs": [
      {
        "indexed": false,
        "internalType": "uint256",
        "name": "date",
        "type": "uint256"
      },
      {
        "indexed": false,
        "internalType": "string",
        "name": "hash",
        "type": "string"
      }
    ],
    "name": "Write",
    "type": "event"
  },
  {
    "constant": false,
    "inputs": [],
    "name": "halt",
    "outputs": [],
    "payable": false,
    "stateMutability": "nonpayable",
    "type": "function"
  },
  {
    "constant": false,
    "inputs": [
      {
        "internalType": "address",
        "name": "newOwner",
        "type": "address"
      }
    ],
    "name": "transferOwnership",
    "outputs": [],
    "payable": false,
    "stateMutability": "nonpayable",
    "type": "function"
  },
  {
    "constant": false,
    "inputs": [],
    "name": "unHalt",
    "outputs": [],
    "payable": false,
    "stateMutability": "nonpayable",
    "type": "function"
  },
  {
    "constant": false,
    "inputs": [
      {
        "internalType": "uint256",
        "name": "_date",
        "type": "uint256"
      },
      {
        "internalType": "string",
        "name": "_hash",
        "type": "string"
      }
    ],
    "name": "WriteToBase",
    "outputs": [],
    "payable": false,
    "stateMutability": "nonpayable",
    "type": "function"
  },
  {
    "constant": true,
    "inputs": [],
    "name": "counter",
    "outputs": [
      {
        "internalType": "uint256",
        "name": "",
        "type": "uint256"
      }
    ],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
  },
  {
    "constant": true,
    "inputs": [],
    "name": "GetCounter",
    "outputs": [
      {
        "internalType": "uint256",
        "name": "",
        "type": "uint256"
      }
    ],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
  },
  {
    "constant": true,
    "inputs": [
      {
        "internalType": "uint256",
        "name": "_date",
        "type": "uint256"
      }
    ],
    "name": "GetHash",
    "outputs": [
      {
        "internalType": "string",
        "name": "",
        "type": "string"
      }
    ],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
  },
  {
    "constant": true,
    "inputs": [],
    "name": "halted",
    "outputs": [
      {
        "internalType": "bool",
        "name": "",
        "type": "bool"
      }
    ],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
  },
  {
    "constant": true,
    "inputs": [
      {
        "internalType": "uint256",
        "name": "",
        "type": "uint256"
      }
    ],
    "name": "hashBase",
    "outputs": [
      {
        "internalType": "string",
        "name": "",
        "type": "string"
      }
    ],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
  },
  {
    "constant": true,
    "inputs": [],
    "name": "owner",
    "outputs": [
      {
        "internalType": "address",
        "name": "",
        "type": "address"
      }
    ],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
  }
];
    
    

const contractAddress = '0x60C2218817DEEd3F6888879A68e53B3815275EA8'

web3.eth.getAccounts((err, res) => {               
// текущий адрес из Metamask            
const account1 = res[0];

const contract = new web3.eth.Contract(abi, contractAddress);
            
let functionData = contract.methods.WriteToBase($("#id").val(), $("#hash").val()).encodeABI();

// отправка транзакции
  web3.eth.sendTransaction({
          to:contractAddress,
          from:account1,
          data: functionData,
      },
      function(error, response){
          console.log(response);
      });
});                                                

  
// web3.eth.getTransactionCount(account1, (err, txCount) => {

//   let txParams = {
//     nonce: web3.utils.toHex(txCount),
//     //nonce: accountNonce,
//     gasPrice: web3.utils.toHex(web3.utils.toWei('20', 'gwei')), 
//     gasLimit: web3.utils.toHex(800000),
//     to:       contractAddress, 
//     //value:    '0x00', 
//     data:     contract.methods.WriteToBase($("#id").val(), $("#hash").val()).encodeABI()  
//   }
  
//   let tx = new ethereumjs.Tx(txParams)
//   tx.sign(privateKey)
  
//   let serializedTx = tx.serialize();
//   const raw = '0x' + serializedTx.toString('hex');


  
//   web3.eth.sendSignedTransaction(raw, (err, txHash) => {
//     console.log('err:', err, 'txHash:', txHash);
    
    
//     document.getElementById('tid').textContent = txHash;
//   // Use this txHash to find the contract on Etherscan!
//     let txHash2 = 'https://rinkeby.etherscan.io/tx/' + txHash;
//     document.getElementById('tid1').href = txHash2;
//   })
//   })

// });



});














