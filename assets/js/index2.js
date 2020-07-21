// для обновления этого файла запусти в терминале browserify index2.js > bundle2.js


// data для функции getHah

// библиотека ethereumjs-abi
var abi = require('ethereumjs-abi');

var sig2 = '0xa5db5463';
            
const idValue2 = document.querySelector('#id2').value;
console.log(document.querySelector('#id2'));
var parameterTypes2 = ["uint256"];
var parameterValues2 = [idValue2];
var encoded = abi.rawEncode(parameterTypes2, parameterValues2);
// поле data для транзакции
var data2 = sig2 + encoded.toString('hex');
console.log(data2);
document.getElementById('data2').textContent = data2;