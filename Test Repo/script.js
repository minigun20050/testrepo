function yes(x) {
    if (x < 10) {
        return '0' + x
    } else {
        return x
    }
}

function clock() {
    let date = new Date();
    let year = date.getFullYear();
    let month = date.getMonth();
    let day = date.getDate();
    let hour = date.getHours();
    let minutes = date.getMinutes();
    let seconds = date.getSeconds();
    console.log(year + '.' + yes(month + 1) + '.' + yes(day) + '.' + yes(hour) + ':' + yes(minutes) + ':' + yes(seconds));
    setTimeout(clock, 1000);
}

clock();