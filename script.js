'use strict';

var arr = [],
    x = '',
    i;

for (i = 0; i <10; i++) {
    x += 'x';
    arr.push(x);
}

console.log(arr); // Задача 1

function arrayFill(s, count) {
    var i,
        res = '';

    for (i = 0; i < count; i++){
        res += s;
    }

    return res;
}

console.log(arrayFill('123-', 10)); //Задача 3

function arrayFill(s, count) {
    var i,
        res = '';

    for (i = 0; i < count; i++) {
        res += s;
    }
    return(res);
}
var i,
    arr = [];

for (i=1; i <= 9; i++){
    arr.push(arrayFill(i, i));
}
    console.log(arr); //Задача 2

var arr = [3, 1, 2, 6, 9, 3, 4, 5],
sum = 0;
for ( i = 0; i < arr.length; i++) {
    sum += arr[i];
    if (sum > 10){
        break;
    }
    }
console.log(arr);//Задача 4

var arr = ['1', '2', '3', '4', '5'];
var result = [];

for (var i = arr.length - 1; i >= 0; i--) {
    result.push(arr[i]);
}

console.log(result);//Задача 5

var arr = [[1, 2, 3], [4, 5], [6]],
    sum = 0;
for (var i = 0; i < arr.length; i++) {
    for (var j = 0; j < arr[i].length; j++){
    result.push(arr[i][j]);
    }
}
console.log(result);//Задача 6

var arr = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
var sum = 0;
for (var i = 0; i < arr.length; i++) {
    for (var j = 0; j < arr[i].length; j++) {
        for (var k = 0; k < arr[i][j].length; k++) {
            result.push(arr[i][j][k]);
        }
    }
}
alert(sum);//Задача 7


