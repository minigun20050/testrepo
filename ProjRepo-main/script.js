window.addEventListener("DOMContentLoaded", () => {
    let btn = document.querySelectorAll("button[id='settings']");
    btn.forEach((el) => {
        el.addEventListener('click', () => {
            document.getElementsByClassName("set").style.display='block';
        })
    });
});
