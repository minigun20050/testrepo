window.addEventListener('DOMContentLoaded', () => {
    if(typeof(Storage) !== undefined) {
        let form = document.forms[0];
        form.addEventListener("submit", (a) => {
            a.preventDefault();
            let color = document.querySelector('#getColor').value;
            document.querySelector('body').style.backgroundColor = color;
            localStorage.setItem('bodyBgColor', {'color': color});
        });
        document.querySelector('body').style.backgroundColor = (localStorage.getItem('bodyBgColor')) ? (localStorage.getItem('bodyBgColor')) : ('#cccccc');
        document.querySelector('#clearStorage').addEventListener('click', () => {
            localStorage.removeItem('bodyBgColor');
            document.querySelector('body').style.backgroundColor = '#cccccc';
        });
    } else {
        alert('Twoja przeglądarka nie obsługuje Web Storage!');
    }
});