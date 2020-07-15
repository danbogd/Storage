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
  if (window.ethereum) {    window.web3 = new Web3(window.ethereum);    
    window.ethereum.enable();    
    return true;  
  }  
    return false;
  }

if (!ethEnabled()) {  
  alert("Please install an Ethereum-compatible browser or extension like MetaMask to use this dApp!");
}



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
const contract = new web3.eth.Contract(abi, contractAddress)

web3.eth.getAccounts((err, res) => {               
            
const account1 = res[0];

// console.log('typeof ethereumjs:',               (typeof ethereumjs))
// console.log('Object.keys(ethereumjs):',         Object.keys(ethereumjs))
// console.log('typeof ethereumjs.Tx:',            (typeof ethereumjs.Tx))
// console.log('typeof ethereumjs.RLP:',           (typeof ethereumjs.RLP))
// console.log('typeof ethereumjs.Util:',          (typeof ethereumjs.Util))
// console.log('typeof ethereumjs.Buffer:',        (typeof ethereumjs.Buffer))
// console.log('typeof ethereumjs.Buffer.Buffer:', (typeof ethereumjs.Buffer.Buffer))


                                                 

  
web3.eth.getTransactionCount(account1, (err, txCount) => {

  let txParams = {
    nonce: web3.utils.toHex(txCount),
    //nonce: accountNonce,
    gasPrice: web3.utils.toHex(web3.utils.toWei('20', 'gwei')), 
    gasLimit: web3.utils.toHex(800000),
    to:       contractAddress, 
    //value:    '0x00', 
    data:     contract.methods.WriteToBase($("#id").val(), $("#hash").val()).encodeABI()  
  }
  
  let tx = new ethereumjs.Tx(txParams)
  tx.sign(privateKey)
  
  let serializedTx = tx.serialize();
  const raw = '0x' + serializedTx.toString('hex');


  
  web3.eth.sendSignedTransaction(raw, (err, txHash) => {
    console.log('err:', err, 'txHash:', txHash);
    
    
    document.getElementById('tid').textContent = txHash;
  // Use this txHash to find the contract on Etherscan!
    let txHash2 = 'https://rinkeby.etherscan.io/tx/' + txHash;
    document.getElementById('tid1').href = txHash2;
  })
  })

});



});














