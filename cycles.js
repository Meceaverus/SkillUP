'use script';

var str = '';
for (var i = 1; i < 10; i++) {
    str += i;
}
alert(str); //Задача 2

var str = '';
for (var i = 9; i > 0; i--) {
    str += i;
}
alert(str); //Задача 3

var str = '-';
for (var i = 1; i < 10; i++) {
    str += i + '-';
}
alert(str); //Задача 4

var str = '';
for (var i = 1; i <= 20; i++) {
    str += 'A';
    document.write(str + '<br>');
}
alert(str); //Задача 5

var str = '';
for (var i = 1; i <= 9; i++) {
    for (var j = 1; j <= i; j++) {
        document.write(i);
    }
    document.write('<br>');
}
alert (str); //Задача6

var str = '';
for(var i = 0; i <= 10; i++) {
    str += 'xx';
    document.write(str + '<br>');
}
alert (str); //Задача7

