class Figure {
    Perimeter() { }
    Field() { }
}
class Triangle extends Figure {
    #a;
    #b;
    #c;
    constructor(a, b, c) {
        super();
        this.#a = a;
        this.#b = b;
        this.#c = c;
    }
    Perimeter() {
        return this.#a + this.#b + this.#c;
    }
    Field() {
        let p = (this.#a + this.#b + this.#c) / 2;
        return Math.sqrt(p * (p - this.#a) * (p - this.#b) * (p - this.#c));
    }
}
const triangle = new Triangle(2, 4, 5); 