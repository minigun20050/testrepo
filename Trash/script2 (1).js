// class Car

// class Sedan {
//     constructor(marka, model, kolor, uruchom) {
//         this.marka = marka;
//         this.model = model;
//         this.kolor = kolor;
//         this.uruchom = uruchom;
//     }
// }
// const Nissan = new Sedan("Nissan", "360", "Black", "trtrtrtr");
// const BMW = new Sedan("BMW", "M5", "White", "dkdkdkdk");
// const Dodge = new Sedan("Dodge", "Challanger", "Purple", "brbrbr");

class Car {
    Uruchom() { }
    test() { }
}
class Sedan extends Car {
    #a;
    #b;
    #c;
    constructor(a, b, c) {
        super();
        this.#a = a;
        this.#b = b;
        this.#c = c;
    }
}
const sedan = ("Nissan", "BMW", "Dodge")
class Nissan extends Sedan {
    #a;
    #b;
    #c;
    constructor(a, b, c) {
        super();
        this.#a = a;
        this.#b = b;
        this.#c = c;
    }
}
// class BMW extends Car extends Sedan {
//     #a;
//     #b;
//     #c;
//     constructor(a, b, c) {
//         super();
//         this.#a = a;
//         this.#b = b;
//         this.#c = c;
//     }
// }
// class Dodge extends Sedan {
//     #a;
//     #b;
//     #c;
//     constructor(a, b, c) {
//         super();
//         this.#a = a;
//         this.#b = b;
//         this.#c = c;
//     }
// }