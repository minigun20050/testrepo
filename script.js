// function factorial(number) {
//     number = parseInt(number);
//     if(!isNaN(number) && number >= 0) {
//         if(number === 0) {
//             return 1;
//         }
//         else {
//             return number * factorial(number - 1);
//         }
//     }
// }

// factorial(prompt("Wprowadz wartosc liczbowa"));

// function fibonacci(n) {
//     n = parseInt(n);
//     if(!isNaN(n)) {
//         if(n < 2)
//         return n;
//     else
//         return fibonacci(n - 2) + fibonacci(n - 1);
//     }
// }

let n = parseInt(prompt("Wprowadz dodatnia wartosc liczbowa"));
if(n <= 0)
    console.log("Miala byc dodatnia... bandyto!");
else {
    for (let i = 0; i < n; i++) {
        console.log(fibonacci(i));
    }
}

fibonacci(5);