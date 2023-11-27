let arr = [];
// let arr2 = new Array();
/*
for(let i = 0; i < 12; i++) {
    arr[i] = i + ((i > 0) ? (arr[i - 1]) : i);
}
for(let i = 0; i < arr.length - 1; i++) {
    document.writeln(arr[i]);
}
*/
for(let i = 0; i < 10; i++) {
    arr[i] = Math.round(Math.random() * 100);
}
arr.sort((a, b) => b - a);
for(let i = 0; i < arr.length - 1; i++) {
    document.writeln(arr[i]);
}