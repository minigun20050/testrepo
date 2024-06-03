function yes(x) {
    if (x < 10) {
        return '0' + x
    } else {
        return x
    }
}

// function clock() {
//     let date = new Date();
//     let year = date.getFullYear();
//     let month = date.getMonth();
//     let day = date.getDate();
//     let hour = date.getHours();
//     let minutes = date.getMinutes();
//     let seconds = date.getSeconds();
//     console.log(year + '.' + yes(month + 1) + '.' + yes(day) + '.' + yes(hour) + ':' + yes(minutes) + ':' + yes(seconds));
//     setTimeout(clock, 1000);
// }

// clock();

function clock() {
    x = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    let date = new Date(2000, 10, 7);
    let year = date.getFullYear();
    let month = date.getMonth();
    let day = date.getDate();
    // let hour = date.getHours();
    // let minutes = date.getMinutes();
    // let seconds = date.getSeconds();
    console.log(yes(day) + ' ' + x[month + 1] + ' ' + year);
}