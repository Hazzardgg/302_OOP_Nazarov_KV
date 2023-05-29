function createFraction(numerator, denominator) {
    function findGCD(a, b) {
        while (b !== 0) {
            let temp = b;
            b = a % b;
            a = temp;
        }
        return a;
    }
    return {
        // numerator: numerator/findGCD(numerator, denominator),
        // denumerator: denominator/findGCD(numerator, denominator),
        getNumer: () => numerator/findGCD(numerator, denominator),
        getDenom: () => denominator/findGCD(numerator, denominator),
        add(frac) {
            const newNumer = this.getNumer() * frac.getDenom() + this.getDenom() * frac.getNumer();
            const newDenom = this.getDenom() * frac.getDenom();
            return createFraction(newNumer, newDenom);
        },
        sub(frac) {
            const newNumer = this.getNumer() * frac.getDenom() - this.getDenom() * frac.getNumer();
            const newDenom = this.getDenom() * frac.getDenom();
            return createFraction(newNumer, newDenom);
        },
        toString() {
            if (this.getDenom() === 1) {
              return this.getNumer().toString();
            } else if (this.getNumer() < 0) {
              return `-${Math.abs(this.getNumer())}/${this.getDenom()}`;
            } else {
              return `${this.getNumer()}/${this.getDenom()}`;
            }
        }
    }
}