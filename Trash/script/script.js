// window.addEventListener("DOMContentLoaded", () => {
//     let chBackground = document.querySelector('#chBackground');
//     let chBackground2 = document.querySelector('#chBackground2');
//     let chBackground3 = document.querySelector('#chBackground3');
//     let chBackground4 = document.querySelector('#chBackground4');
//     let chBackground5 = document.querySelector('#chBackground5');
//     let body = document.querySelector('body');
//     chBackground.addEventListener("click", () => {
//         body.style.backgroundImage = "url(./1.jpg)";
//         body.style.backgroundRepeat = "no-repeat";
//         body.style.backgroundPosition = "top center";
//     });
//     chBackground2.addEventListener("click", () => {
//         body.style.backgroundImage = "url(./2.jpg)";
//         body.style.backgroundRepeat = "no-repeat";
//         body.style.backgroundPosition = "top center";
//     });
//     chBackground3.addEventListener("click", () => {
//         body.style.backgroundImage = "url(./1.jpg)";
//         body.style.backgroundRepeat = "no-repeat";
//         body.style.backgroundPosition = "top center";
//     });
//     chBackground4.addEventListener("click", () => {
//         body.style.backgroundImage = "url(./2.jpg)";
//         body.style.backgroundRepeat = "no-repeat";
//         body.style.backgroundPosition = "top center";
//     });
//     chBackground5.addEventListener("click", () => {
//         body.style.backgroundImage = "url(./1.jpg)";
//         body.style.backgroundRepeat = "no-repeat";
//         body.style.backgroundPosition = "top center";
//     });
// });
window.addEventListener("DOMContentLoaded", () => {
    let calc = document.querySelector("#calculationField");
    let btn = document.querySelectorAll("input[type='button']");
    calc.value = "";
    btn.forEach((el) => {
        el.addEventListener('click', () => {
            calc.value += el.value;
        })
    });
});