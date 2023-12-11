// const obiekt = {
//     pole: wartosc,
//     metoda: function() {
//     }
// };

// const motocykl = {
//     kolor: "czarny",
//     pojemnosc: "1290cc",
//     marka: "KTM",
//     model: "Super Duke",
//     jedz: function(kierunek) {
//         return "Motocykl jedzie w " + this.kierunek;
//     },
//     uruchomSilnik: function() {
//         return "Silnik" + this.marka + " " + this.model + " uruchomiony."
//     }
// };

// class Motocykl {
//     constructor(kolor, pojemnosc, marka, model) {
//         this.kolor = kolor;
//         this.pojemnosc = pojemnosc;
//         this.marka = marka;
//         this.model = model;
//     }
//     jedz(kierunek) {
//         return "Motocykl jedzie w " + this.kierunek;
//     }
//     uruchomSilnik() {
//         return "Silnik" + this.marka + " " + this.model + " uruchomiony."
//     }
// }
// const ktmSuperDuke = new Motocykl("czarny", "1290cc", "KTM", "Super Duke");
// const hondaAfricaTwin = new Motocykl("czarny", "998cc", "Honda", "Africa Twin");

// ktmSuperDuke.uruchomSilnik();

class matma {
    constructor(x, y) {
        this.x = x;
        this.y = y;
    }
    minus() {
        return this.x - this.y;
    }
    plus() {
        return this.x + this.y;
    }
    dz() {
        return this.x / this.y;
    }
    mn() {
        return this.x * this.y;
    }
}
const pier = new matma(1, 3);
const drug = new matma(5, 6);
const tr = new matma(4, 4);
const czw = new matma(4, 4);