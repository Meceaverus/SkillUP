'use strict';

var goods = [1, 2, 3, 4],
    lastItem = goods[goods.length - 1];
alert(lastItem);

var goods = ['Монитор', 'клавиатура', 'мышь', 'аудиосистема'];
    goods.push("Системник");
alert(goods);

var styles = ['Джаз', 'Блюз'];
    styles.push('Рок');
    styles[styles.length - 2] = 'Классика';
alert(styles.shift());
    styles.unshift("Рэп", "Регги");
alert(styles);

var arr = ["Яблоко", "Апельсин", "Груша", "Лимон"];
var max = arr.length - 1, min = 0;
var rand = min + Math.floor(Math.random() * (max + 1 - min));
alert(arr[rand]);

var numbers = [];
while (true) {
    var value = prompt("Введите число", 0);
    if (value === "" || value === null || isNaN(value)) break;
    numbers.push(+value);
}
var sum = 0;
for (var i = 0; i < numbers.length; i++) {
    sum += numbers[i];
}
alert( sum );

var arr = [1, 3, 5];
var arr2 = arr;
arr2[0] = 5;
alert( arr[0] );
alert( arr2[0] );
function find(array, value) {
    if (array.indexOf) {
        return array.indexOf(value);
    }
    for (var i = 0; i < array.length; i++) {
        if (array[i] === value) return i;
    }
    return -1;
}
var arr = ["a", -1, 2, "b"];
var index = find(arr, 2);
alert( index );


function filterRange(arr, a, b) {
    var result = [];
    for (var i = 0; i < arr.length; i++) {
        if (arr[i] >= a && arr[i] <= b) {
            result.push(arr[i]);
        }
    }
    return result;
}
var arr = [3, 4, 6, 7, 99];
var filtered = filterRange(arr, 4, 6);
alert( filtered );


var arr = [];
for (var i = 2; i < 100; i++) {
    arr[i] = true
}
var p = 2;
do {
    for (i = 2 * p; i < 100; i += p) {
        arr[i] = false;
    }
    for (i = p + 1; i < 100; i++) {
        if (arr[i]) break;
    }
    p = i;
} while (p * p < 100);

var sum = 0;
for (i = 0; i < arr.length; i++) {
    if (arr[i]) {
        sum += i;
    }
}
alert( sum );

function getMaxSubSum(arr) {
    var maxSum = 0;
    for (var i = 0; i < arr.length; i++) {
        var sumFixedStart = 0;
        for (var j = i; j < arr.length; j++) {
            sumFixedStart += arr[j];
            maxSum = Math.max(maxSum, sumFixedStart);
        }
    }
    return maxSum;
}
alert( getMaxSubSum([-1, 2, 3, -9]) );
alert( getMaxSubSum([-1, 2, 3, -9, 11]) );
alert( getMaxSubSum([-2, -1, 1, 2]) );
alert( getMaxSubSum([1, 2, 3]) );
alert( getMaxSubSum([100, -9, 2, -3, 5]) );