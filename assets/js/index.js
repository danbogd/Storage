// install npm ethereumjs-abi, broserify, beefy
// для обновления этого файла запусти в терминале browserify index.js > bundle.js

//data для функции WriteToBase
const idValue = document.querySelector('#id').value;
const hashValue = document.querySelector('#hash').value;
// библиотека ethereumjs-abi
var abi = require('ethereumjs-abi')
// сигнатура функции
var sig = '0x85add564';

// тип входных данных
var parameterTypes = ["uint", "string"];
var parameterValues = [idValue, hashValue];

var encoded = abi.rawEncode(parameterTypes, parameterValues);

// поле data для транзакции
var data = sig + encoded.toString('hex');

document.getElementById('data').textContent = data;




  

