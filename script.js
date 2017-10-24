'use script';

var op1 = document.getElementById('op1'),
    op2 = document.getElementById('op2'),
    result = document.getElementById('result'),
    buttons = document.getElementsByTagName('button'),
    i;

function onClick(event) {
    switch (event.target.innerHTML) {
        case '+' : result.innerHTML = parseFloat(op1.value) + parseFloat(op2.value); break;
        case '-' : result.innerHTML = parseFloat(op1.value) - parseFloat(op2.value); break;
        case '*' : result.innerHTML = parseFloat(op1.value) * parseFloat(op2.value); break;
        case '/' : result.innerHTML = parseFloat(op1.value) / parseFloat(op2.value); break;
    }
}

for (i = 0; i < buttons.length; i++) {
    buttons[i].onclick = onClick;
}
//fef