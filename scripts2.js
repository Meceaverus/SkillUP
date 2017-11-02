'use strict';

$(document).ready(function () {
    $('p:first').css('color','green');
    $('p:last').css('color','green');
    $('h2 > i').css({color: 'green'});
    $('li:lt(10)').css('color', 'green');

});