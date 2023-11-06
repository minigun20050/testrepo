// // function addition(a, b) {
// //     console.log(1 + 2);
// // }

// // // функция которая выводит 1 + 2

// // function addition(a, b = 8) {
// //     return a + b;
// // }
// // addition(1, 4); //параметры

// // // 


// function check(a, b, c) {
//     if(a > 0 && b > 0 && c > 0) {
//         if(((a + b) > c) && ((b + c) > a) && ((a + c) > b)) {
//             return true;
//         }
//         return false;
//     }
//     return false;
// }

// function heron(a ,b ,c) {
//     if(check(a, b, c)) {
//         let p = (a + b + c) / 2;
//         let S = Math.sqrt(p * (p - a) * (p - b) * (p - c))
//         return S;
//     }
//     return false;
// }

// let a = parseInt(prompt("Wpisz wartość boku a"))
// let b = parseInt(prompt("Wpisz wartość boku b"))
// let c = parseInt(prompt("Wpisz wartość boku c"))

// alert(heron(a, b, c));

function kwadrat(a) {
    for(let i = 0; i < a; i++) {
        for(let j = 0; j < a; j++) {
            document.write("*")
        }
        document.write("<br>")
    }
}
kwadrat(5);

function trojkat(a) {
    for(let i = 0; i < a; i++) {
        for(let j = 0; j < i; j++) {
            document.write("*")
        }
        document.write("<br>")
    }
}
trojkat(5);

function kwadrato(a) {
    for(let i = 0; i < a; i++) {
        for(let j = 0; j < a; j++) {
            document.write(" * ")
        }
        document.write("<br>")
    }
}
kwadrato(5);