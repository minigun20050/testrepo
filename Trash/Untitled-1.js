
// // 1 zrob
// function concat(text) {
//     return text[0] + text[text.length-1];
// }
// concat("okulary")

// // 2
// function spacja(text) {
//     return text[0] + " " + text[1] + " " + text[2] + " " + text[3] + " " + text[4] + " " + text[5];
// }
// spacja("blabla")

// // 3
// function odw(text) {
//     return text + text.reverse
// }
// odw("1234")

// // 4
// function pla(text) {
//     return
// }
// pla("")

// // 5
// function czas(text) {
//     return
// }
// czas("")

// // 6
// function alf(text) {
//     return
// }
// alf("")

// // 7
// function spell(text) {
//     return
// }
// spell("")

// // 8
// function palin(text) {
//     return
// }
// palin("")

// // 9
// function count(text) {
//     return
// }
// count("")

// // 10
// function vovcount(text) {
//     return
// }
// vovcount("")

// // 11
// function x(text) {
//     return text[0];
// }
// x("text")

// //12
// function y(text) {
//     return text[0] + text[text.length-1];
// }
// y("texty")

// //13
// function count(text) {
//     return Array.from(text.matchAll('Krowa')).length;
// }
// count('Krowa 1 23')



function fun(x) {
    return x*(Math.random());
}
fun(5)
// without round
function nofun(x) {
    return Math.round(x*(Math.random()));
}
nofun(10)
// with round
function realfun(x, y) {
    return Math.ceil(Math.random() * (y - 1+x));
}
realfun(1, 5)
// from x to y with ceil