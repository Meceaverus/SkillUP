'use strict';

$(document).ready(function () {
    $('h2').css({color: 'red', 'font-size': '30px'})
    $('h2 i').css({color: 'green'});
    $('h2 > i').css({color: 'green'});
    $('h3').css({color: 'green'});
    $('.test').css('color', 'green');
    $('p + p').css('color', 'green');
    $('li + li.www').css('color', 'green');
});