class Prime {
    constructor(limit) {
        this.numbers = this.fillArray(limit);
        this.primes = this.getPrimes();
    }
    fillArray(limit) {
        let arr = [];
        for(let i = 2; i <= limit; i++)
            arr.push(i);
        return arr;
    }
    getPrimes() {
        let arr = [];
        let lastPrime = this.numbers[0];
        arr.push(lastPrime);
        return arr;
    }
}

const prime = new Prime(100);
prime.numbers;
prime.primes;