'use sctrict';

$(document).ready( function() {
    var  $op1 = $('#op1'),
        $op2 = $('#op2'),
       $result = $('#result');

    function onClick() {
        var op1 = parseFloat($op1.val()),
            op2 = parseFloat($op2.val());

        switch ($(this).html()) {
            case '+': $result.html(op1 + op2); break;
            case '-': $result.html(op1 - op2); break;
            case '*': $result.html(op1 * op2); break;
            case '/': $result.html(op1 / op2); break;
        }
    }

    $('button').click(onClick);

    $('#slide').click(function () {
        $('#panel').slideToggle();
        $(this).toggleClass('active');
    });

    $('#hide').click(function () {
        var $panel = $('#panel');

        if ($panel.is(':visible')) {
            $('#panel').animate({opacity: "hide"}, "fast");
        } else {
            $('#panel').animate({opacity: "show"}, "slow");
        }

        $(this).toggleClass('actve');
    });

        $('#load').click(function (event) {
            event.preventDefault();

            var target = $(this).attr('target'),
                href = $(this).attr('href');

         //   $(target).load(href);

            $.get(href, function (content) {
                $(target).html(content);
            })
        });
    });



