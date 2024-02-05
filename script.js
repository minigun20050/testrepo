class Animal {
    constructor(eat, sound) {
        this.eat = eat;
        this.sound = sound;
    }
    makeSound() {
        return this.sound;
    }
    takeEat() {
        return this.eat;
    }
}

class Dog extends Animal {
    constructor(eat, sound, color) {
        super(eat, sound);
        this.color = color;
    }
    makeSound(times = 1) {
        let i = 1;
        let sound = '';
        do {
            sound += this.sound;
            i++;
        } while(i < times);
        return sound;
    }
}

const d1 = new Dog('🥩', 'Woof!', 'czarny');
d1.makeSound(2);

class Fish extends Animal {
    constructor(eat, sound, color, swim) {
        super(eat, sound);
        this.color = color;
        this.swim = swim;
    }
    makeSound(times = 1) {
        let i = 1;
        let sound = '';
        do {
            sound += this.sound;
            i++;
        } while(i < times);
        return sound;
    }
    doSwim(times = 1) {
        let i = 1;
        let swim = '';
        do {
            swim += this.swim;
            i++;
        } while(i < times);
        return swim;
    }
}

const d2 = new Fish('🥖', 'Bul ', 'biała', 'swimming ');
d2.makeSound(2);

class Worker {
    constructor(name, surname, total) {
        this.name = name;
        this.surname = surname;
        this.total = total;
    }
    totalYear() {
        let total = 0;
        let i = 0;
        total += this.total;
        i = 12*total;
        return i;
    }
}

const d3 = new Worker('Steve', 'Klubnika', 20000);

class Manager extends Worker {
    constructor(name, surname, total, tips) {
        super(name, surname, total);
        this.tips = tips;
    }
    totalYear() {
        let total = 0;
        let i = 0;
        let tips = 0;
        total += this.total;
        tips += this.tips;
        i = total*tips*12*12;
        return i;
    }
    totalMonth() {
        let total = 0;
        let i = 0;
        let tips = 0;
        total += this.total;
        tips += this.tips;
        i = total*tips+total;
        return i;
    }
}

const d4 = new Manager('Mike', 'Vazovski', 20000, 0.1);