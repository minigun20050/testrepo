/* let liczba = 15;
let tekst = "15";

if (liczba == tekst)
    console.log("wartości są równe");

if(liczba === parseInt(tekst)) 
    console.log("Wartości są równe i typy są zgodne");
else 
    console.log("Wartości nie są równe i typy nie są zgodne");*/

let x = prompt("Wpisz perwszą liczbę");
let y = prompt("Wpisz drugą liczbę");

x = parseInt(x);
y = parseInt(y);

let sum = x + y;

if(sum % 3 == 0) {
    console.log(x * y);
} else if(sum % 3 == 1) {
    console.log(y / x);
} else {
    console.log(x ** (x -y));
}