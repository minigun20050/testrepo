let a
a = prompt ('a = ')
function factorial(number) {
    number = parseInt(number);
    if(!isNaN(number)) {
        if(number === 0) {
            return 1;
        }
        else {
            return number * factorial(number - 1);
        }
    }
}

factorial(a);